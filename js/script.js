function additem() {
    // get values
    var item_type = $('input[name=item_type]:checked').val();
    var item_name = $("#item_name").val();
 
    // Add record
    $.post("ajax/additem.php", {
        item_type: item_type,
        item_name: item_name

    }, function (data, status) {
        // close the popup
        $("#add_new_item_modal").modal("hide");
 
        // read records again
        readlist();
 
        // clear fields from the popup
        $("#item_type").val("");
        $("#item_name").val("");
      
    });
}
 
// READ records
function readlist() {
    $.get("ajax/readlist.php", {}, function (data, status) {
        $(".list_content").html(data);
    });
}


function DeleteItem(id) {
    var conf = confirm("Are you sure, do you really want to delete User?");
    if (conf == true) {
        $.post("ajax/deleteitem.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readlist();
            }
        );
    }
}

function GetItemDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_item_id").val(id);
    $.post("ajax/readItemDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_item_type").val(worship.item_type);
            $("#update_item_name").val(worship.item_name);
        }
    );
    // Open modal popup
    $("#update_item_modal").modal("show");
}


function UpdateItemDetails() {
    // get values
    var item_type = $("#update_item_type").val();
    var item_name = $("#update_item_name").val();
 
    // get hidden field value
    var id = $("#hidden_item_id").val();
 
    // Update the details by requesting to the server using ajax
    $.post("ajax/updateItemDetails.php", {
            id: id,
            item_type: item_type,
            item_name: item_name,
        },
        function (data, status) {
            // hide modal popup
            $("#update_item_modal").modal("hide");
            // reload Users by using readRecords();
            readlist();
        }
    );
}


$(document).ready(function () {
    // READ recods on page load
    readlist(); // calling function
});