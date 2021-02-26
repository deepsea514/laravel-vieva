$(document).ready(function () {
    $("#subtoolselect").change(function () {
        $(".sub-tool-form").hide();
        $("#sub_tool_" + this.value).show();
    })
    $("#subtoolselect").change()

    $("#subtoolselecttable").change(function () {
        $(".sub-tool-table").hide();
        $("#sub_tool_table_" + this.value).show();
    })
    $("#subtoolselecttable").change()

    $("#mindfulImg").change(function (e) {
        console.log('aaa')
        var file = e.target.files[0];
        var reader = new FileReader();
        var img_src = "";
        var img_cont = "";
        reader.addEventListener("load", function () {
            img_cont = reader.result;

            img_src = "<img id='main_p' src=" + img_cont +
                " alt='product' width='60%' height='175' class='img-rounded avatarUser'  />";


            $('#mindful').empty();
            $("#mindful").append(img_src);

        }, false);
        if (file) {
            reader.readAsDataURL(file);
        }

    });
})
