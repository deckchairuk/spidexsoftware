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
        $(window).scroll(function() {
            if ($(window).scrollTop() > 0) {
                $('header').addClass("shrink");
            } else {
                $('header').removeClass("shrink");
            }
        });

    }

    $(function() {
    	resourceFilters();

        headerTransform();
    });
})(jQuery);