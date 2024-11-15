<?php
    // Kiểm tra xem $userone có phải là mảng hợp lệ không
    if(isset($userone) && is_array($userone)) {
        extract($userone);  // Lấy thông tin người dùng từ mảng $user
    } else {
        // Nếu không, có thể báo lỗi hoặc điều hướng lại trang
        echo "Người dùng không tồn tại!";
        exit; // Dừng chương trình
    }

    $userid = $id;   // ID của người dùng
    $username = $username;  // Tên người dùng
    $email = $email;  // Email người dùng
    $phone = $phone;  // Số điện thoại
    $role = $role;    // Chức vụ của người dùng
    $status = $status;    // trạng thái của người dùng
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cập nhật người dùng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cập nhật người dùng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="index.php?page=userUpdate" method="POST">
            <div class="modal-body">
                <!-- Tên người dùng -->
                <div class="mb-3">
                    <label for="username" class="col-form-label">Tên người dùng:</label>
                    <input type="text" class="form-control" name="username" value="<?=$username?>" required>
                </div>
            </div>
            <div class="modal-body">
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" name="email" value="<?=$email?>" required>
                </div>
            </div>
            <div class="modal-body">
                <!-- Số điện thoại -->
                <div class="mb-3">
                    <label for="phone" class="col-form-label">Số điện thoại:</label>
                    <input type="text" class="form-control" name="phone" value="<?=$phone?>" required>
                </div>
            </div>
            <div class="modal-body">
                <!-- Chức vụ -->
                <div class="mb-3">
                    <label for="role" class="col-form-label">Chức vụ:</label>
                    <select class="form-control select2" name="role">
                        <option value="user" <?=($role == 'user') ? 'selected' : ''?>>User</option>
                        <option value="admin" <?=($role == 'admin') ? 'selected' : ''?>>Admin</option>
                    </select>
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="status" class="col-form-label">Status:</label>
                    <select class="form-control select2" name="status">
                        <option value="active" <?=($status == 'active') ? 'selected' : ''?>>Active</option>
                        <option value="inactive" <?=($status == 'inactive') ? 'selected' : ''?>>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?=$userid?>">
                <button type="submit" class="btn btn-primary" name="btnupdate">Cập nhật</button>
                <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
