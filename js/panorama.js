﻿var clicking = false;
var previousX;
var previousY;

$(document).mouseup(function() {
    clicking = false;
});

var panorama = $(".panorama");

panorama.mousedown(function(e) {
    e.preventDefault();
    previousX = e.clientX;
    previousY = e.clientY;
    clicking = true;
});

panorama.mousemove(function(e) {

    if (clicking) {
        e.preventDefault();
        var directionX = (previousX - e.clientX) > 0 ? 1 : -1;
        var directionY = (previousY - e.clientY) > 0 ? 1 : -1;
        //$("#scroll").scrollLeft($("#scroll").scrollLeft() + 10 * directionX);
        //$("#scroll").scrollTop($("#scroll").scrollTop() + 10 * directionY);
        $("#scroll").scrollLeft($("#scroll").scrollLeft() + (previousX - e.clientX));
        $("#scroll").scrollTop($("#scroll").scrollTop() + (previousY - e.clientY));
        previousX = e.clientX;
        previousY = e.clientY;
    }
});

panorama.mouseleave(function(e) {
    clicking = false;
});