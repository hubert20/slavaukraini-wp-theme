jQuery(function ($) {
    'use strict';
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
    // Open form with cat
    $('.btn-cat-form').on('click', function (e) {
        e.preventDefault();
        var cat = $(this).data('categoryType');
        $('#modal-form .modal-form-cnt').hide();
        $('#modal-form .modal-form-cnt[data-category-type="' + cat + '"]').show();
    });
});