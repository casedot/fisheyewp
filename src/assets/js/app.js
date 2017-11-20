import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import './lib/demosite';

$(document).foundation();

// $("#site-navi").on("on.zf.toggler off.zf.toggler", function(e) {
//     $(".title-bar-title a svg path[class*='cls-']").toggleClass("fillwhite");
// });

$(".menubtn").click(function() {
    $(this).toggleClass('open');
    $(".menu-overlay").toggleClass("open"),
    $(".menu-overlay").toggleClass("closed"),
    $(".title-bar-bg").toggleClass("transparent"),
    $(".title-bar-title a svg path[class*='cls-']").toggleClass("fillwhite")
});