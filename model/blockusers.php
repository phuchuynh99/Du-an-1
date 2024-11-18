<?php
// include_once "connect.php";

// $mysql = new mysql($username, $password, $name, $phone);

// $id = $_POST['id'];
// $block_status = 0;

// $response = array();
// $result = mysql_query($mysql, "UPDATE users SET status = 1 WHERE id = $id ")
// if($result) {
//     $response['message'] = "user block successfully!";
//     $response['status'] = 200;
// } else {
//     $response['message'] = "Error block user!";
//     $response['status'] = 500;
// }

// echo json_encode($response);

?>
<!-- function blc() {

    swal({
        title: "Block User",
        text: "Are you sure?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, block it!",
        cancelButtonText: "No, keep it"
        buttons: true,
        dangerMode: true,
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm) {
        if (isConfirm) {
            $.ajax = 'POST',
            url = 'block_user.php',
            data = {
                id: id
            },
            dataType = 'json',
            success: function(result) {
                dt.ajax.reload();
                dt.draw();
                if(result.status == 200) {
                    Swal("Blocked!", "your selected User has been Block.", "success");
                    toastr['warning'](result.message);
                } else {
                    Swal("Error!", "The operation which you perform is failed!", "error");
                    toastr['error'](result.message);
                }
            },
            error: function(error) {
                dt.ajax.reload();
                dt.draw();
                swal('failed', "The operation which you perform is failed!", "error")
            }
        });
        } else {
            Swal("Cancelled", "Your selected User is safe :)", "error");
        }
    });
} -->

