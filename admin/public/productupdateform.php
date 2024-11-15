<!-- Content Wrapper. Contains page content -->
<?php
    extract($productone);
    if($img!="") {
        $img="../".PATH_IMG.$img;
        if(file_exists($img)) {
            $hinh="<br><img src='".$img."' width='120'>";
        } else {
            $hinh="";
        }
    }
    $productname=$name;
    $productid=$id;
    $productimg=$img;
    $discount_price=$discount_price;

    // load danh sách ra select
    $select_html="";
    foreach ($cataloglist as $item){
        extract($item);
        if($id == $id_category){
            $slc="selected";
        } else {
            $slc="";
        }
        $select_html.='<option value="'.$id.'"'.$slc.'>'.$name.'</option>';
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
    <!-- <section class="content">
        <div class="container-fluid">
            
            <div class="row">
                <div class="col-12">
                    <div class="card"> -->
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- <div class="card-body">
                        <form action="" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Username:</label>
                        <input type="text" class="form-control" name="username" placeholder="Tên tài khoản">
                    </div>
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Password:</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="level" class="col-form-label">Chức vụ:</label>
                            <select class="form-control select2" name="level">
                                <option selected value="member">Thành viên</option>
                                <option value="admin">Quản trị viên</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </form>
                        </div> -->
                        <!-- /.card-body -->
                    <!-- </div> -->
                    <!-- /.card -->
                <!-- </div> -->
                <!-- /.col -->
            <!-- </div> -->
            <!-- /.row -->
        <!-- </div> -->
        <!-- /.container-fluid -->
    <!-- </section> -->
    <!-- /.content -->
<!-- </div> -->
<!-- /.content-wrapper -->

