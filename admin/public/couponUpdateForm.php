<?php
    // Kiểm tra xem $coupon có phải là mảng hợp lệ không
    if(isset($couponone) && is_array($couponone)) {
        extract($couponone);  // Lấy thông tin mã giảm giá từ mảng $coupon
    } else {
        // Nếu không, có thể báo lỗi hoặc điều hướng lại trang
        echo "Mã giảm giá không tồn tại!";
        exit; // Dừng chương trình
    }

    $couponid = $id;   // ID của mã giảm giá
    $couponcode = $code;  // Mã giảm giá
    $discount = $discount;  // Giá trị giảm giá
    $end_date = $end_date;  // Ngày hết hạn
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Coupon</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Coupon</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="index.php?page=couponUpdate" method="POST">
            <div class="modal-body">
                <!-- Mã giảm giá -->
                <div class="mb-3">
                    <label for="coupon-code" class="col-form-label">Mã giảm giá:</label>
                    <input type="text" class="form-control" name="code" value="<?=$couponcode?>" required>
                </div>
            </div>
            <div class="modal-body">
                <!-- Giá trị giảm giá -->
                <div class="mb-3">
                    <label for="discount" class="col-form-label">Giảm giá (%):</label>
                    <input type="number" class="form-control" name="discount" value="<?=$discount?>" required min="1" max="100">
                </div>
            </div>
            <div class="modal-body">
                <!-- Ngày hết hạn -->
                <div class="mb-3">
                    <label for="expiry-date" class="col-form-label">Ngày hết hạn:</label>
                    <input type="date" class="form-control" name="expiry_date" value="<?=$end_date?>" required>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?=$couponid?>">
                <button type="submit" class="btn btn-primary" name="btnupdate">Cập nhật</button>
                <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
