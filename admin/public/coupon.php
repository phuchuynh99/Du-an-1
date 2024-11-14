<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách Mã Giảm Giá</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mã Giảm Giá</li>
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
                    Thêm Mã Giảm Giá
                </button>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Mã Giảm Giá</th>
                                        <th scope="col">Phần Trăm</th>
                                        <th scope="col">Ngày Hết Hạn</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Lặp qua danh sách coupon -->
                                    <?php
                                    $i = 1;
                                    foreach ($couponlist as $coupon): 
                                        extract($coupon);
                                        $edit = "<a href='index.php?page=couponUpdateForm&id=".$id."'>Sửa</a>";
                                        $del = "<a href='index.php?page=delCoupon&id=".$id."'>Xóa</a>";
                                    ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $coupon['code']; ?></td>
                                            <td><?php echo $coupon['discount']; ?>%</td>
                                            <td><?php echo date('d/m/Y', strtotime($coupon['end_date'])); ?></td>
                                            <td><?php echo $edit.' - '.$del; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal for adding coupon -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tạo Mã Giảm Giá</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addCoupon" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="code" class="col-form-label">Mã:</label>
                        <input type="text" class="form-control" id="code" name="code" placeholder="Nhập mã giảm giá">
                    </div>
                    <div class="mb-3">
                        <label for="discount" class="col-form-label">Phần trăm giảm giá:</label>
                        <input type="number" id="discount" name="discount" class="form-control" placeholder="Phần trăm" required>
                    </div>
                    <div class="mb-3">
                        <label for="end_date" class="col-form-label">Ngày hết hạn:</label>
                        <input type="date" id="end_date" name="end_date" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" name="btnadd" class="btn btn-primary">Tạo mã</button>
                </div>
            </form>
        </div>
    </div>
</div>
