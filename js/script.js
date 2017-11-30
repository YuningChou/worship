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

function GetItemDetails(id) {
    $("#hidden_item_id").val(id);
    $.post("ajax/readItemDetails.php", {
            id: id
        },
        function (data, status) {
            var user = JSON.parse(data);
            $("#update_item_type").val(worship.item_type);
            $("#update_item_name").val(worship.item_name);
        }
    );
    $("#update_item_modal").modal("show");
}


function UpdateItemDetails() {
    var item_type = $("#update_item_type").val();
    var item_name = $("#update_item_name").val(); 
    var id = $("#hidden_item_id").val();
 
    $.post("ajax/updateItemDetails.php", {
            id: id,
            item_type: item_type,
            item_name: item_name,
        },
        function (data, status) {
            $("#update_item_modal").modal("hide");
            readlist();
        }
    );
}


$(document).ready(function () {
    readlist(); 
});