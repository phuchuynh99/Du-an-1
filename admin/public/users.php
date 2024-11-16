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
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Phân quyền</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $i = 1;
                  foreach ($userlist as $user){
                    extract($user);
                    $edit = "<a href='index.php?page=userUpdateForm&id=" . $id . "'>Sửa</a>";
                    $del = "<a href='index.php?page=deluser&id=" . $id . "'>Xóa</a>";
                    
                    echo '<tr>
                            <td>' . $i . '</td>
                            <td>' . $name. '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $role . '</td>
                            <td>' . $status . '</td>
                            <td>' . $edit . ' - ' . $del . '</td>
                        </tr>';
                    $i++;
                  }
                  ?>
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
            <label for="email" class="col-form-label">email:</label>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <div class="form-group">
              <label for="role" class="col-form-label">Chức vụ:</label>
              <select class="form-control select2" name="role">
                <option value="user">User</option>
                <option value="admin">Admin</option>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" name="btnadd" class="btn btn-primary">Thêm người dùng</button>
        </div>
      </form>
    </div>
  </div>
</div>