function additem() {
    // 拿到輸入的值
    var item_type = $('input[name=item_type]:checked').val();
    var item_name = $("#item_name").val();
 
    // 增加
    $.post("ajax/additem.php", {
        item_type: item_type,
        item_name: item_name

    }, function (data, status) {
        // 彈出輸入modal
        $("#add_new_item_modal").modal("hide");
 
        // 新增後再次讀資料
        readlist();
 
        // 清空欄位
        $("#item_type").val("");
        $("#item_name").val("");
      
    });
}
 
// 讀資料
function readlist() {
    $.get("ajax/readlist.php", {}, function (data, status) {
        $(".list_content").html(data);
    });
}


function DeleteItem(id) {
    var conf = confirm("你確定? 真的要刪掉它嗎?");
    if (conf == true) {
        $.post("ajax/deleteitem.php", {
                id: id
            },
            function (data, status) {
                // 刪除後再次讀資料
                readlist();
            }
        );
    }
}




$(document).ready(function () {
    readlist(); 
});