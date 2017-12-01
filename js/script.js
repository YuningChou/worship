function additem() {
   
    var item_type = $("input[name='item_type']:checked").val();
    var item_name = $("#item_name").val();

    $.post("ajax/additem.php", {
        item_type: item_type,
        item_name: item_name,
    }, function (data, status) {

        $("#add_new_item_modal").modal("hide");

        readlist();

        $("#item_type").val("input[name='item_type']:checked");
        $("#item_name").val("");
    });
}

function readlist() {
    $.get("ajax/readlist.php", {}, function (data, status) {
        $(".list_content").html(data);
    });
}


function DeleteItem(id) {
    var conf = confirm("真的嗎? 確定要刪除嗎?");
    if (conf == true) {
        $.post("ajax/deleteitem.php", {
                id: id
            },
            function (data, status) {
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
      
            var worship = JSON.parse(data);
            $("input[name='update_item_type']:checked").val(worship.item_type);
            $("#update_item_name").val(worship.item_name);
        }
    );
    
    $("#update_item_modal").modal("show");
}

function UpdateItemDetails() {
    
    var item_type = $("input[name='update_item_type']:checked").val();
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


