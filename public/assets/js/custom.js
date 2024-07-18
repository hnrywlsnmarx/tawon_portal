(() => {
    function e(t) {
        return (e = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        })(t)
    }
    $((function() {
        "use strict";
        $("#global-loader").fadeOut("slow"), window.matchMedia("(min-width: 992px)").matches && ($(".main-navbar .active").removeClass("show"), $(".main-header-menu .active").removeClass("show")), $(".main-header .dropdown > a").on("click", (function(e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show"), $(this).find(".drop-flag").removeClass("show")
        })), $(document).on("click", ".fullscreen-button", (function() {
            void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen ? document.documentElement.requestFullScreen ? document.documentElement.requestFullScreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullScreen ? document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : document.documentElement.msRequestFullscreen && document.documentElement.msRequestFullscreen() : document.cancelFullScreen ? document.cancelFullScreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen()
        }));

        function t() {
            var e = $('.main-header form[role="search"].active');
            e.find("input").val(""), e.removeClass("active")
        }
        $(".rating-stars").ratingStars({
            selectors: {
                starsSelector: ".rating-stars",
                starSelector: ".rating-star",
                starActiveClass: "is--active",
                starHoverClass: "is--hover",
                starNoHoverClass: "is--no-hover",
                targetFormElementSelector: ".rating-value"
            }
        }), $(".cover-image").each((function() {
            var t = $(this).attr("data-image-src");
            "undefined" !== e(t) && !1 !== t && $(this).css("background", "url(" + t + ") center center")
        })), $(window).on("scroll", (function(e) {
            $(window).scrollTop() >= 66 ? $("main-header").addClass("fixed-header") : $(".main-header").removeClass("fixed-header")
        })), $('body, .main-header form[role="search"] button[type="reset"]').on("click keyup", (function(e) {
            console.log(e.currentTarget), (27 == e.which && $('.main-header form[role="search"]').hasClass("active") || "reset" == $(e.currentTarget).attr("type")) && t()
        })), $(document).on("click", '.main-header form[role="search"]:not(.active) button[type="submit"]', (function(e) {
            e.preventDefault();
            var t = $(this).closest("form"),
                o = t.find("input");
            t.addClass("active"), o.focus()
        })), $(document).on("click", '.main-header form[role="search"].active button[type="submit"]', (function(e) {
            e.preventDefault();
            var o = $(this).closest("form").find("input");
            $("#showSearchTerm").text(o.val()), t()
        })), $(".main-navbar .with-sub").on("click", (function(e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show")
        })), $(".dropdown-menu .main-header-arrow").on("click", (function(e) {
            e.preventDefault(), $(this).closest(".dropdown").removeClass("show")
        })), $("#mainNavShow, #azNavbarShow").on("click", (function(e) {
            e.preventDefault(), $("body").addClass("main-navbar-show")
        })), $("#mainContentLeftShow").on("click touch", (function(e) {
            e.preventDefault(), $("body").addClass("main-content-left-show")
        })), $("#mainContentLeftHide").on("click touch", (function(e) {
            e.preventDefault(), $("body").removeClass("main-content-left-show")
        })), $("#mainContentBodyHide").on("click touch", (function(e) {
            e.preventDefault(), $("body").removeClass("main-content-body-show")
        })), $("body").append('<div class="main-navbar-backdrop"></div>'), $(".main-navbar-backdrop").on("click touchstart", (function() {
            $("body").removeClass("main-navbar-show")
        })), $(document).on("click touchstart", (function(e) {
            (e.stopPropagation(), $(e.target).closest(".main-header .dropdown").length || $(".main-header .dropdown").removeClass("show"), window.matchMedia("(min-width: 992px)").matches) ? ($(e.target).closest(".main-navbar .nav-item").length || $(".main-navbar .show").removeClass("show"), $(e.target).closest(".main-header-menu .nav-item").length || $(".main-header-menu .show").removeClass("show"), $(e.target).hasClass("main-menu-sub-mega") && $(".main-header-menu .show").removeClass("show")) : $(e.target).closest("#mainMenuShow").length || $(e.target).closest(".main-header-menu").length || $("body").removeClass("main-header-menu-show")
        })), $("#mainMenuShow").on("click", (function(e) {
            e.preventDefault(), $("body").toggleClass("main-header-menu-show")
        })), $(".main-header-menu .with-sub").on("click", (function(e) {
            e.preventDefault(), $(this).parent().toggleClass("show"), $(this).parent().siblings().removeClass("show")
        })), $(".main-header-menu-header .close").on("click", (function(e) {
            e.preventDefault(), $("body").removeClass("main-header-menu-show")
        })), $(".card-header-right .card-option .fe fe-chevron-left").on("click", (function() {
            var e = $(this);
            e.hasClass("icofont-simple-right") ? e.parents(".card-option").animate({
                width: "35px"
            }) : e.parents(".card-option").animate({
                width: "180px"
            }), $(this).toggleClass("fe fe-chevron-right").fadeIn("slow")
        })), $('[data-toggle="tooltip"]').tooltip(), $('[data-toggle="tooltip-primary"]').tooltip({
            template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        }), $('[data-toggle="tooltip-secondary"]').tooltip({
            template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        }), $('[data-toggle="popover"]').popover(), $('[data-popover-color="head-primary"]').popover({
            template: '<div class="popover popover-head-primary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }), $('[data-popover-color="head-secondary"]').popover({
            template: '<div class="popover popover-head-secondary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }), $('[data-popover-color="primary"]').popover({
            template: '<div class="popover popover-primary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }), $('[data-popover-color="secondary"]').popover({
            template: '<div class="popover popover-secondary" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        }), $(document).on("click", (function(e) {
            $('[data-toggle="popover"],[data-original-title]').each((function() {
                $(this).is(e.target) || 0 !== $(this).has(e.target).length || 0 !== $(".popover").has(e.target).length || ((($(this).popover("hide").data("bs.popover") || {}).inState || {}).click = !1)
            }))
        })), 
        /*eva.replace(), $(document).ready((function() {
            $(".horizontalMenu-list li a").each((function() {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            }))
        })),*/
         $(document).ready((function() {
            $("a[data-theme]").click((function() {
                $("head link#theme").attr("href", $(this).data("theme")), $(this).toggleClass("active").siblings().removeClass("active")
            })), $("a[data-effect]").click((function() {
                $("head link#effect").attr("href", $(this).data("effect")), $(this).toggleClass("active").siblings().removeClass("active")
            }))
        })), $(document).ready((function() {
            $(".horizontalMenu-list li a").each((function() {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            })), $(".horizontal-megamenu li a").each((function() {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            })), $(".horizontalMenu-list .sub-menu .sub-menu li a").each((function() {
                var e = window.location.href.split(/[?#]/)[0];
                this.href == e && ($(this).addClass("active"), $(this).parent().addClass("active"), $(this).parent().parent().parent().parent().prev().addClass("active"), $(this).parent().parent().prev().click())
            }))
        })), $(window).on("scroll", (function(e) {
            $(this).scrollTop() > 0 ? $("#back-to-top").fadeIn("slow") : $("#back-to-top").fadeOut("slow")
        })), $("#back-to-top").on("click", (function(e) {
            return $("html, body").animate({
                scrollTop: 0
            }, 600), !1
        }))
    }))
})();