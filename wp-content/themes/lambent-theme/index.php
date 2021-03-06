<?php get_header(); ?>




<script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Fade
            { $Duration: 1200, $Opacity: 2 }
            ];

            var options = {
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; width: 1200px;
        height: 500px;">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: relative; left: 0px; top: 0px; width: 1200px; height: 500px;
            overflow: hidden;">
            <div>
                <img u=image src="wp-content/uploads/2015/03/1.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/2.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/3.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/4.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/5.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/6.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/7.gif" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/8.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/9.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/10.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/11.jpg" />
            </div>
            <div>
                <img u=image src="wp-content/uploads/2015/03/12.jpg" />
            </div>

       
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>