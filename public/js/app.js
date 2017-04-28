$(".roll_right").click(function () {

});
$(".roll_left").click(function () {

});
$(".js-thumb-item").click(function () {
    var index = $(this).attr('data-index');console.log($(this).children());
    $("#main-img-"+index).attr('src',$(this).children('img').attr("data-src"));
});