$( document ).ready(function() 
{

    $(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});
	var entroEng = false;
	var entroEsp = false;

	$(".imgEng").mouseover(function() 
	{
		var src = $('.imgEng').attr('src');
		if(src == "/img/inglesH.png")
		{
  			$(".imgEng").attr("src","/img/ingles.png")
  			entroEng = true;
  		}
	});
	$(".imgEng").mouseleave(function() {
  		var src = $('.imgEng').attr('src');
		if(src == "/img/ingles.png" && entroEng == true)
  			$(".imgEng").attr("src","/img/inglesH.png")
	});

	$(".imgEsp").mouseover(function() 
	{
		var src = $('.imgEsp').attr('src');
		if(src == "/img/españolH.png")
		{
  			$(".imgEsp").attr("src","/img/español.png")
  			entroEsp = true;
  		}
	});
	$(".imgEsp").mouseleave(function() {
  		var src = $('.imgEsp').attr('src');
		if(src == "/img/español.png" && entroEsp == true)
  			$(".imgEsp").attr("src","/img/españolH.png")
	});

    if(getLang("es"))
    {
        $(".imgEsp").attr("src","/img/español.png");
        $(".imgEng").attr("src","/img/inglesH.png");
    }
    else if(getLang("en"))
    {
        $(".imgEsp").attr("src","/img/españolH.png");
        $(".imgEng").attr("src","/img/ingles.png");
    }


});

function getLang(VarSearch)
{
    var SearchString = window.location;

        
    var VariableArray = SearchString.toString().split("/");
    
    for(var c=0; c< VariableArray.length; c++)
    {
        if(VariableArray[c] == VarSearch)
            return true;
    }
    
}

//Dropdown Hover
;(function ($, window, undefined) {
    // outside the scope of the jQuery plugin to
    // keep track of all dropdowns
    var $allDropdowns = $();

    // if instantlyCloseOthers is true, then it will instantly
    // shut other nav items when a new one is hovered over
    $.fn.dropdownHover = function (options) {
        // don't do anything if touch is supported
        // (plugin causes some issues on mobile)
        if('ontouchstart' in document) return this; // don't want to affect chaining

        // the element we really care about
        // is the dropdown-toggle's parent
        $allDropdowns = $allDropdowns.add(this.parent());

        return this.each(function () {
            var $this = $(this),
                $parent = $this.parent(),
                defaults = {
                    delay: 500,
                    hoverDelay: 0,
                    instantlyCloseOthers: true
                },
                data = {
                    delay: $(this).data('delay'),
                    hoverDelay: $(this).data('hover-delay'),
                    instantlyCloseOthers: $(this).data('close-others')
                },
                showEvent   = 'show.bs.dropdown',
                hideEvent   = 'hide.bs.dropdown',
                // shownEvent  = 'shown.bs.dropdown',
                // hiddenEvent = 'hidden.bs.dropdown',
                settings = $.extend(true, {}, defaults, options, data),
                timeout, timeoutHover;

            $parent.hover(function (event) {
                // so a neighbor can't open the dropdown
                if(!$parent.hasClass('open') && !$this.is(event.target)) {
                    // stop this event, stop executing any code
                    // in this callback but continue to propagate
                    return true;
                }

                openDropdown(event);
            }, function () {
                // clear timer for hover event
                window.clearTimeout(timeoutHover)
                timeout = window.setTimeout(function () {
                    $this.attr('aria-expanded', 'false');
                    $parent.removeClass('open');
                    $this.trigger(hideEvent);
                }, settings.delay);
            });

            // this helps with button groups!
            $this.hover(function (event) {
                // this helps prevent a double event from firing.
                // see https://github.com/CWSpear/bootstrap-hover-dropdown/issues/55
                if(!$parent.hasClass('open') && !$parent.is(event.target)) {
                    // stop this event, stop executing any code
                    // in this callback but continue to propagate
                    return true;
                }

                openDropdown(event);
            });

            // handle submenus
            $parent.find('.dropdown-submenu').each(function (){
                var $this = $(this);
                var subTimeout;
                $this.hover(function () {
                    window.clearTimeout(subTimeout);
                    $this.children('.dropdown-menu').show();
                    // always close submenu siblings instantly
                    $this.siblings().children('.dropdown-menu').hide();
                }, function () {
                    var $submenu = $this.children('.dropdown-menu');
                    subTimeout = window.setTimeout(function () {
                        $submenu.hide();
                    }, settings.delay);
                });
            });

            function openDropdown(event) {
                // clear dropdown timeout here so it doesnt close before it should
                window.clearTimeout(timeout);
                // restart hover timer
                window.clearTimeout(timeoutHover);
                
                // delay for hover event.  
                timeoutHover = window.setTimeout(function () {
                    $allDropdowns.find(':focus').blur();

                    if(settings.instantlyCloseOthers === true)
                        $allDropdowns.removeClass('open');
                    
                    // clear timer for hover event
                    window.clearTimeout(timeoutHover);
                    $this.attr('aria-expanded', 'true');
                    $parent.addClass('open');
                    $this.trigger(showEvent);
                }, settings.hoverDelay);
            }
        });
    };

    $(document).ready(function () {
        // apply dropdownHover to all elements with the data-hover="dropdown" attribute
        $('[data-hover="dropdown"]').dropdownHover();
    });
})(jQuery, window);



