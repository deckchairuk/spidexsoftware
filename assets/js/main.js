(function($) {
    function slugify(text) {
      return text.toString().toLowerCase()
        .replace(/\s+/g, '-')           // Replace spaces with -
        .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
        .replace(/\-\-+/g, '-')         // Replace multiple - with single -
        .replace(/^-+/, '')             // Trim - from start of text
        .replace(/-+$/, '');            // Trim - from end of text
    }

    function getUrlVars() {
        var vars = [], hash;
        var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
        for(var i = 0; i < hashes.length; i++)
        {
            hash = hashes[i].split('=');
            vars.push(hash[0]);
            vars[hash[0]] = hash[1];
        }
        return vars;
    }

    var resourceFilters = function() {
    	// Initialise select2
    	$('.filters--resource .tag').select2({
            width: 'resolve'
        });

    	// Set value of select to previously selected value (if exists)
    	$tagQS = getUrlVars()["tag"]
    	$(".filters--resource .tag").find('option[value=' + $tagQS + ']').attr('selected', 'selected');
        $(".filters--resource .tag").trigger('change.select2');
    }

    var headerTransform = function() {
        if ($(window).scrollTop() > 1) {
            $('header, body').addClass("shrink");
        } else {
            $('header, body').removeClass("shrink");
        }
    }

    var supportNavigationToggle = function() {
        var isOpen = false,
            originalHeaderHeight = $('header').outerHeight();

        $('.support-toggle').on('click', function(e) {
            if (isOpen) {
                $('body').removeClass('support-nav--open');
                // $('body').css('margin-top', originalHeaderHeight);

                isOpen = false;
            } else {
                $('body').addClass('support-nav--open');
                // $('body').css('margin-top', originalHeaderHeight + 64);

                isOpen = true;
            }
        });
    }

    var mobileNavigationToggle = function() {
        var isOpen = false;

        $('.mobile-nav-toggle').click(function(){
            if (isOpen) {
                $('body').removeClass('mobile-nav-open');

                isOpen = false;
            } else {
                $('body').addClass('mobile-nav-open');

                isOpen = true;
            }
        });
    }

    var formVisualValidation = function() {
        $('.gfield_contains_required input').prop('required', 'true');

        $('input, textarea').not('[type=checkbox], [type=radio], [type=submit], [type=file], [type=hidden]').on('focusout', function(){

            if ($(this).attr('aria-required') || $(this).prop('required')) {
                var hasValue = $(this).val();

                $(this).next('i.icon').remove();

                if(!hasValue) {
                    $(this).after('<i class="icon icon_error-sign"></i>');
                } else if(hasValue) {
                    $(this).after('<i class="icon icon_tick"></i>');

                }
            }
        });
    }

    var resourceAjaxFilters = function() {
        $('form.filters input[type=submit]').click(function(e) {
            e.preventDefault();

            var searchParam = $('form.filters input.search').val(),
                tagParam    = $('form.filters .select2-selection__rendered').attr('title'),
                tagParam    = slugify(tagParam),
                currentUrl  = [location.protocol, '//', location.host, location.pathname].join(''),
                loadUrl     = currentUrl + '?search=' + searchParam;

            // Check if tag has been selected
            if (tagParam != 'any') {
                var loadUrl     = loadUrl + '&tag=' + tagParam;
            }

            $('#resource-list').load( loadUrl + ' #resource-list' );
            $('.reset').show();

        });
    }

    var hoverTouchClassToggle = function() {
        $('.partner').bind({
            mouseenter: function () {
                var detailsPanel = $(this).find('.partner__details');

                $('.partner__details').fadeOut('fast');
                $(this).find('.partner__details').fadeIn('fast');
            },
            mouseleave: function () {
                var detailsPanel = $(this).find('.partner__details');

                $(this).find('.partner__details').fadeOut('fast');
            }
        });

        $('.partner').on('click', function() {
            var detailsPanel = $(this).find('.partner__details');

            if (detailsPanel.is(":visible")) {
                $(this).find('.partner__details').fadeOut('fast');
            } else {
                $('.partner__details').fadeOut('fast');
                $(this).find('.partner__details').fadeIn('fast');
            }
        });

        $(document).on('click', function(e) {
            if ($(e.target).closest('.partner').length === 0) {
                $('.partner__details').hide();
            }
        });

        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) { // ESC
                $('.partner__details').hide();
            }
        });
    }

    $(function() {
        resourceFilters();
        resourceAjaxFilters();

        headerTransform();

        supportNavigationToggle();

        mobileNavigationToggle();

        hoverTouchClassToggle();

        $('.article .article__thumbnail').matchHeight();
        $('.article .article__details').matchHeight();
        $('.match-height').matchHeight();
    });

    $(window).scroll(function() {
        headerTransform();
    });
})(jQuery);