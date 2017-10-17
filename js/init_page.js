jQuery(document).ready(function ($) {
    var title = document.title;

    $("h1").text(title);
    $("#page_name").text(title);

    $("#send_report").click(function() {
       location.href = "/contacts/";
    });

});