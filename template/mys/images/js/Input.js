$(function () {
    //搜索框
    $(".txtInput,.txtInput1").click(function () {
        $(this).select();
    });
    $(".txtInput,.txtInput1").blur(function () {
        if ($(this).val() == "") {
            $(this).val("关键词搜索...");
        }
    });
});