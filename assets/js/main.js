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
        var resourceFiltersTag = $('.filters--resource .tag');

    	// Initialise select2
    	resourceFiltersTag.select2({
            width: 'resolve'
        });

    	// Set value of select to previously selected value (if exists)
    	$tagQS = getUrlVars()["tag"]
    	resourceFiltersTag.find('option[value=' + $tagQS + ']').attr('selected', 'selected');
        resourceFiltersTag.trigger('change.select2');
    }

    var headerTransform = function() {
        var stickyHeaderModifiers = $('header, body');

        if ($(window).scrollTop() > 1) {
            stickyHeaderModifiers.addClass("shrink");
        } else {
            stickyHeaderModifiers.removeClass("shrink");
        }
    }

    var supportNavigationToggle = function() {
        var isOpen = false,
            body = $('body'),
            originalHeaderHeight = $('header').outerHeight();

        $('.support-toggle').on('click', function(e) {
            if (isOpen) {
                body.removeClass('support-nav--open');
                isOpen = false;
            } else {
                body.addClass('support-nav--open');
                isOpen = true;
            }
        });
    }

    var mobileNavigationToggle = function() {
        var isOpen = false,
            body = $('body');

        $('.mobile-nav-toggle').click(function(){
            if (isOpen) {
                body.removeClass('mobile-nav-open');
                isOpen = false;
            } else {
                body.addClass('mobile-nav-open');
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
        var detailsPanel = $('.partner__details');

        $('.partner').bind({
            mouseenter: function () {
                detailsPanel.stop().hide();
                $(this).find('.partner__details').stop().fadeIn('fast');
            },
            mouseleave: function () {
                $(this).find('.partner__details').stop().hide();
            }
        });

        $('.partner').on('click', function() {
            var currentDetailsPanel = $(this).find('.partner__details');

            if (currentDetailsPanel.is(":visible")) {
                currentDetailsPanel.stop().hide();
            } else {
                detailsPanel.hide();
                currentDetailsPanel.stop().fadeIn('fast');
            }
        });

        $(document).on('click', function(e) {
            if ($(e.target).closest('.partner').length === 0) {
                detailsPanel.hide();
            }
        });

        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) { // ESC
                detailsPanel.hide();
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