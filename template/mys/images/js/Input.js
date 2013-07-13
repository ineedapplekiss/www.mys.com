jq(function () {
    //搜索框
    jq(".txtInput,.txtInput1").click(function () {
        jq(this).select();
    });
    jq(".txtInput,.txtInput1").blur(function () {
        if (jq(this).val() == "") {
            jq(this).val("关键词搜索...");
        }
    });
});