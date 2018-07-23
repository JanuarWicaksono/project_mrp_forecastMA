$(function() {

});

function animate(element, animation) {
    $(element).addClass('animated ' + animation).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
    var wait = setTimeout(function() {
        $(element).removeClass('animated ' + animation);
    }, 2000);
}

//Copied from https://github.com/daneden/animate.css
$.fn.extend({
    animateCss: function(animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});