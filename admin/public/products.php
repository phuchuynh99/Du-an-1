<!-- Content Wrapper. Contains page content -->
<?php
// load danh sách ra select
$select_html="";
foreach ($cataloglist as $item){
    extract($item);
    $select_html.='<option value="'.$id.'">'.$name.'</option>';
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-default">
                    Thêm sản phẩm mới
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- <div class="card-header">
                            <h3 class="card-title ">Danh sách chủ đề</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <?php
                            if (isset($tb)) echo "<h3 style='color:red;'>".$tb."</h3>";
                        ?>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Hình ảnh</th>
                                        <th scope="col">Tên sản phẩm</th>
                                        <th scope="col">Mô tả</th>
                                        <th scope="col">Giá</th>
                                        <th scope="col">Giá khuyến mãi</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                        <!-- <th scope="col">Giá</th>
                                        <th scope="col">Thao tác</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i = 1;
                                    foreach ($productlist as $item) {
                                        extract($item);
                                        if ($img != "") $img = '../' . PATH_IMG . $img;
                                        $edit = "<a href='index.php?page=productupdateform&id=" . $id . "'>Sửa</a>";
                                        $del = "<a href='index.php?page=delproduct&id=" . $id . "'>Xóa</a>";

                                        // Định dạng giá tiền
                                        $formatted_price = number_format($price, 0, ',', '.');
                                        $formatted_discount_price = number_format($discount_price, 0, ',', '.');

                                        // Kiểm tra status và chuyển đổi sang tiếng Việt
                                        $status = ($status == 1) ? 'Hoạt động' : 'Ẩn';

                                        echo '<tr>
                                                <td>' . $i . '</td>
                                                <td><img src="' . $img . '" width="80"></td>
                                                <td>' . $name . '</td>
                                                <td>' . $description . '</td>
                                                <td>' . $formatted_price . '</td>
                                                <td>' . $formatted_discount_price . '</td>
                                                <td>' . $status . '</td>
                                                <td>' . $edit . ' - ' . $del . '</td>
                                            </tr>';
                                        $i++;
                                    }
                                ?>

                                <!-- <tr>
                                      <td>Trident</td>
                                      <td>Internet
                                        Explorer 4.0
                                      </td>
                                      <td>Win 95+</td>
                                      <td> 4</td>
                                      <td>X</td>
                                </tr> -->
                                </tbody>
                                <!-- <tfoot>

                                <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên chủ đề</th>
                                        <th scope="col">Chế độ</th>
                                        <th scope="col">Số lượng câu hỏi</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </tfoot> -->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addproduct" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="description">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Mô tả:</label>
                        <input type="text" class="form-control" name="de">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Giá:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="topic-name" class="col-form-label">Hình:</label>
                        <input type="file" name="img">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary" name="btnadd" value="">Thêm mới</button>
                    <input type="button" class="btn btn-secondary" data-dismiss="modal">Nhập lại</button>       
                </div>
            </form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>