(function($) {
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
    	$('.filters--resource .tag').select2();

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

    $(function() {
        resourceFilters();

        headerTransform();

        supportNavigationToggle();

        mobileNavigationToggle();

        $('.article .article__thumbnail').matchHeight();
        $('.article .article__details').matchHeight();
    });

    $(window).scroll(function() {
        headerTransform();
    });
})(jQuery);