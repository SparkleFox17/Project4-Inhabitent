"use strict";
! function(a) {
    a(function() {
        var e, s = a(window),
            r = a(".site-header");
        e = a("body").hasClass("single-adventure") ? a(".wp-post-image").height() : s.height(), s.scroll(function() {
            s.scrollTop() < e ? r.addClass("reverse-header") : r.removeClass("reverse-header")
        })
    })
}(jQuery);



