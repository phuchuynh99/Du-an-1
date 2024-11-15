<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Thành viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Thành viên</li>
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
                    Thêm thành viên
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
                                        <th scope="col">Customer's Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Dữ liệu mẫu -->
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Văn A</td>
                                        <td>nguyenvana@gmail.com</td>
                                        <td>0901234567</td>
                                        <td>Active</td>
                                        <td>
                                            <button class="btn btn-warning">Sửa</button>
                                            <button class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Trần Thị B</td>
                                        <td>tranthib@gmail.com</td>
                                        <td>0907654321</td>
                                        <td>Inactive</td>
                                        <td>
                                            <button class="btn btn-warning">Sửa</button>
                                            <button class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal for adding new member -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thêm thành viên mới</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="index.php?page=addusers" method="POST">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="username" class="col-form-label">Tên tài khoản:</label>
                        <input type="text" class="form-control" name="username" placeholder="Tên tài khoản" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="col-form-label">Mật khẩu:</label>
                        <input type="password" class="form-control" name="password" placeholder="Mật khẩu" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="role" class="col-form-label">Chức vụ:</label>
                            <select class="form-control select2" name="role">
                                <option selected value="user">Thành viên</option>
                                <option value="admin">Quản trị viên</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <button type="submit" name="btnadd" class="btn btn-primary">Tạo tài khoản</button>
                </div>
            </form>
        </div>
    </div>
</div>
