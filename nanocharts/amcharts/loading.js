/*!
 jQuery.LoadingBox 0.0
 https://github.com/turcalu1/jquery.LoadingBox
 */

;(function($) {

    $.LoadingBox = function(options) {

        var defaults = {
            mainElementID: 'loading-box', /*if the element doesn't exist, it will create a one new with the predefined html structure and css*/
            fadeInSpeed: 'normal',
            fadeOutSpeed: 'normal',
            opacity: 1.0,
            backgroundColor: "#ffffff",
            loadingImageWitdth: "60px",
            loadingImageHeigth: "60px",
            loadingImageSrc: ""
        };

        var plugin = this;
        plugin.settings = {};

        function getCSS() {
            return {
                outerDiv: {
                    position: "fixed",
                    top: 0,
                    left: 0,
                    width: "100%",
                    height: "100%",
                    "background-color": plugin.settings.backgroundColor,
                    filter: "alpha(opacity=" + plugin.settings.opacity * 100 + ")",
                    "-moz-opacity": plugin.settings.opacity,
                    "-khtml-opacity": plugin.settings.opacity,
                    "opacity": plugin.settings.opacity,
                    "z-index": "10000",
                    "cursor": "pointer",
                    "display": "none",
                    "text-align": "center"
                },
                innerDiv: {
                    margin: "auto",
                    width: plugin.settings.loadingImageWitdth,
                    "height": plugin.settings.loadingImageHeigth,
                    "position": "relative",
                    "top": "50%",
                    "transform": "translateY(-50%)"
                },
                img: {
                    "width": "100%",
                    "height": "100%"
                }
            };
        }

        var init = function() {
            plugin.settings = $.extend({}, defaults, options);
            plugin.css = getCSS();

            var imgSrc = plugin.settings.loadingImageSrc;
            if(imgSrc == ""){
                imgSrc = "loading.gif"
            }

            plugin.selector = "#"+plugin.settings.mainElementID;

            if(!$(plugin.selector).length){
                $('body').append('<div id="' + plugin.settings.mainElementID + '"><div></div></div>');

                var img = $("<img/>")
                    .attr("src", imgSrc)
                    .css(plugin.css.img);

		$(plugin.selector).css(plugin.css.outerDiv)
                    .children().css(plugin.css.innerDiv)
                    .append(img);

		var target = document.getElementById(plugin.settings.mainElementID);
		var spinner = new Spinner().spin(target);
            }

            $(plugin.selector).fadeIn(plugin.settings.fadeInSpeed);
        };

        plugin.close = function() {
          setTimeout (function(){ $(plugin.selector).fadeOut(plugin.settings.fadeOutSpeed);}, 10);
        };

        init();
    }

})(jQuery);
