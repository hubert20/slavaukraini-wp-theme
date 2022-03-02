jQuery(function ($) {
    'use strict';
    // Allow smooth scroll
    // $('li.page-scroller-menu a').on('click', function (e) {
    //     e.preventDefault();
    //     var target = this.hash;
    //     var $target = $(target);
    //     $('html, body').animate(
    //         {
    //             scrollTop: $target.offset().top,
    //         },
    //         1000,
    //         'swing'
    //     );
    // });
    //Qookie
    var sName = "cookiesok";
    $("#close-cookie-warn").click(function () {
        var oExpire = new Date();
        oExpire.setTime((new Date()).getTime() + 3600000 * 24 * 365);
        document.cookie = sName + "=1;expires=" + oExpire;
        $("#cookie-warn").hide("slow");
    });
    var sStr = '; ' + document.cookie + ';';
    var nIndex = sStr.indexOf('; ' + escape(sName) + '=');
    if (nIndex === -1) {
        $("#cookie-warn").show();
    }
});