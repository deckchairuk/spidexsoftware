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
            $('header').addClass("shrink");
        } else {
            $('header').removeClass("shrink");
        }
    }

    var supportNavigationToggle = function() {
        var isOpen = false;

        $('.navigation--support').on('click', function(e) {
            if (isOpen) {
                $(this).removeClass('open');
                isOpen = false;
            } else {
                $(this).addClass('open');
                isOpen = true;
            }

            e.preventDefault();
        });
    }

    $(function() {
        resourceFilters();

        headerTransform();

        supportNavigationToggle();
    });

    $(window).scroll(function() {
        headerTransform();
    });
})(jQuery);