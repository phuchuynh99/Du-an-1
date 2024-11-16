<?php
extract($billone);
$status_new= ($status == 0) ? 'selected' : '';
$status_processing = ($status == 1) ? 'selected' : '';
$status_completed= ($status == 3) ? 'selected' : '';
$status_canceled= ($status == 4) ? 'selected' : '';
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Đơn hàng</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="index.php?page=updatebill" method="POST">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="status" class="col-form-label">Trạng thái:</label>
                    <select class="form-control" name="status">
                        <option value="1" <?=$status_new?>>Đơn hàng mới</option>
                        <option value="0" <?=$status_processing?>>Đăng xử lí</option>
                        <option value="0" <?=$status_completed?>>Hoàn thành</option>
                        <option value="0" <?=$status_canceled?>>Hủy bỏ</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button type="submit" class="btn btn-primary" name="btnupdate">Cập nhật</button>
                <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->