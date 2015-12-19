$(document).ready(function () {
    var SITE_URL = "http://localhost/ShuttleWeb";
    $(document).on('click', '#login', function (e) {
        var username = $("#username").val();
        var sifre = $(".sifre").val();
        $.ajax({
            type: "post",
            url: SITE_URL + "/Ajax/ajaxCall",
            cache: false,
            dataType: "json",
            data: {"username": username, "sifre": sifre, "tip": "userrequest"},
            success: function (cevap) {
                if (cevap.hata) {
                    alert(cevap.hata);
                } else {
                }
            }
        });
    });
});