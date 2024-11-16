<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chuyên mục</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Chuyên mục</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
<?php
extract($catalogone);

// Kiểm tra trạng thái hiện tại của danh mục
$status_active = ($status == 1) ? 'selected' : '';  // Nếu trạng thái là 1, chọn "Hoạt động"
$status_inactive = ($status == 0) ? 'selected' : '';  // Nếu trạng thái là 0, chọn "Ẩn"
?>
<section class="content">
    <form action="index.php?page=update" method="POST">
        <div class="modal-body">
            <div class="mb-3">
                <label for="topic-name" class="col-form-label">Tên danh mục:</label>
                <input type="text" class="form-control" name="name" placeholder="Tên danh mục">
            </div>
        </div>
        <div class="modal-body">
        <div class="mb-3">
            <label for="status" class="col-form-label">Trạng thái:</label>
            <select class="form-control" name="status">
                <option value="1" <?=$status_active?>>Hoạt động</option>
                <option value="0" <?=$status_inactive?>>Ẩn</option>
            </select>
        </div>
        </div>
        <div class="modal-footer justify-content-between">
            <input type="hidden" name="id" value="<?=$id?>">
            <input type="submit" class="btn btn-primary" name="btnupdate" value="Cập nhật">
            <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</input>
            
        </div>
    </form>
</section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

