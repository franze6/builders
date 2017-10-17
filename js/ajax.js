$(document).ready(function ($) {
    $("#contact_phone").submit(function () {
        $.ajax({
           type: "GET",
           data: "fio="+$("[name=name]").val()+"&number="+$("[name=phone]").val(),
           url: "/mail_send.php",
           complete: function(data) {
               if(data.responseText === "ok") {
                   alert("Ваш запрос отправлен.");
               }
               else {
                   alert("Ошибка отправки запроса.");
               }
           }
        });
        return false;
    });
});