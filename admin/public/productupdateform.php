<?php
    extract($productone);
    $hinh = "";
    if ($img != "") {
        $img = "../".PATH_IMG.$img;
        if (file_exists($img)) {
            $hinh = "<br><img src='".$img."' width='120'>";
        }
    }
    $productname = $name;
    $productid = $id;
    $productimg = $img;
    $discount_price = $discount_price;
    $color = $color;
    $status_active = ($status == 1) ? 'selected' : '';
    $status_inactive = ($status == 0) ? 'selected' : '';

    // load danh sách ra select
    $select_html = "";
    foreach ($cataloglist as $item) {
        extract($item);
        $slc = ($id == $id_category) ? "selected" : "";
        $select_html .= '<option value="'.$id.'"'.$slc.'>'.$name.'</option>';
    }
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="index.php?page=productupdate" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Danh mục:</label>
                    <select name="idcatalog">
                        <?=$select_html?>
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
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="name" value="<?=$productname?>">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Giá:</label>
                    <input type="text" class="form-control" name="price" value="<?=$price?>">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Giá khuyến mãi:</label>
                    <input type="text" class="form-control" name="discount_price" value="<?=$discount_price?>">
                </div>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Màu sắc:</label>
                    <input type="text" class="form-control" name="color" value="<?=$color?>">
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
            <div class="modal-body">
                <div class="mb-3">
                    <label for="topic-name" class="col-form-label">Hình:</label>
                    <input type="file" name="img">
                    <?=$hinh?>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <input type="hidden" name="id" value="<?=$productid?>">
                <input type="hidden" name="hinhcu" value="<?=$productimg?>">
                <button type="submit" class="btn btn-primary" name="btnupdate">Cập nhật</button>
                <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>
            </div>
        </form>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
