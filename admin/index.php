<?php
ob_start();
include_once "../model/connect.php";
require_once('../view/global.php');
require_once('../model/connect.php');
require_once('../model/catalog.php');
require_once('../model/product.php');
require_once('../model/coupon.php');
require_once('../model/user.php');
require_once('public/head.php');
require_once('public/nav.php');

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'home':
            require_once('public/home.php');
            break;
        case 'del':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //xáo danh mục
                $id = $_GET['id'];
                $tb = delete_catalog($id);
            }
            //load lại danh mục
            $cataloglist = get_catalog();
            require_once('public/catagories.php');
            break;
        case 'categories':
            $cataloglist = get_catalog();
            require_once('public/catagories.php');
            break;
        case 'add_dm':
            //lấy data từ form
            if (isset($_POST['btnadd'])) {
                $name = $_POST['name'];
                add_catalog($name);
            }
            //load lại
            $cataloglist = get_catalog();
            require_once('public/catagories.php');
            break;
        case 'update':
            if (isset($_POST['btnupdate']) && ($_POST['btnupdate'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                set_catalog($id, $name);
                $cataloglist = get_catalog();
                require_once('public/catagories.php');
            }
            break;
        case 'updateform':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $catalogone = get_catalog_one($id);
                require_once('public/updateform.php');
            } else {
                require_once('public/404.php');
            }
            break;
        case 'delproduct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //xáo danh mục
                $id = $_GET['id'];
                //kiểm tra sp có hình không? có hình thì xóa
                $img = "../" . PATH_IMG . ten_file_hinh($id);
                if (file_exists($img)) {
                    unlink($img);
                }
                //xóa sp trong db
                $tb = delete_product($id);
            }
            //load lại dssp
            $productlist = getproduct();
            header('location: index.php?page=product');
            break;
        case 'productupdateform':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $productone = get_product_detail($id);
                $cataloglist = get_catalog();
                require_once('public/productupdateform.php');
            } else {
                require_once('public/404.php');
            }
            break;
        case 'productupdate':
            // Lấy dữ liệu từ form
            if (isset($_POST['btnupdate'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $discount_price = $_POST['discount_price'];
                $id_category = $_POST['idcatalog'];
                $status = $_POST['status'];  // Lấy giá trị trạng thái từ form
                $img = $_FILES['img']['name'];
        
                // Kiểm tra nếu có hình mới, upload hình mới và xóa hình cũ
                if ($img != "") {
                    $target_file = "../" . PATH_IMG . basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        // Xóa hình cũ nếu tồn tại
                        $hinh_cu = "../" . PATH_IMG . $_POST['hinhcu'];
                        if (file_exists($hinh_cu)) {
                            unlink($hinh_cu);
                        }
                    } else {
                        // Xử lý nếu upload không thành công
                        echo "Lỗi khi tải ảnh lên.";
                    }
                } else {
                    // Nếu không có ảnh mới, giữ ảnh cũ
                    $img = $_POST['hinhcu'];
                }
        
                // Cập nhật sản phẩm vào database, bao gồm trạng thái
                update_product($id, $id_category, $img, $name, $price, $discount_price, $status);
        
                // Chuyển hướng về trang danh sách sản phẩm
                header('Location: index.php?page=product');
                exit(); // Đảm bảo dừng mã sau khi chuyển hướng
            }
            break;                     
        case 'addproduct':
            // Lấy dữ liệu từ form
            if (isset($_POST['btnadd'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $id_category = $_POST['idcatalog']; // Đã sửa key

                // Lấy hình về
                $img = $_FILES['img']['name'];
                if ($img != "") {
                    // Upload lên host
                    $target_file = "../" . PATH_IMG . basename($_FILES['img']['name']);
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                }

                // Thêm vô database
                add_product($id_category, $img, $name, $price);
            }

            $productlist = getproduct();
            header('location: index.php?page=product');
            break;
        case 'product':
            //load sản phẩm
            $cataloglist = get_catalog();
            $productlist = getproduct();
            require_once('public/products.php');
            break;
        case 'users':
            //load user
            $userlist = getAllUser();
            require_once('public/users.php');
            break;
        case 'addusers':
            if (isset($_POST['btnadd'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $role = $_POST['role']; // Có thể là 'admin' hoặc 'user', tùy thuộc vào form

                // Dữ liệu cho thêm user
                $data = [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'role' => $role // Lấy role từ form
                ];

                // Thêm người dùng
                $result = addUser($data);

                if ($result) {
                    // Nếu thêm thành công, quay lại danh sách người dùng
                    $userlist = getAllUser();
                    require_once('public/users.php');
                } else {
                    // Nếu có lỗi
                    echo "Đã xảy ra lỗi khi thêm người dùng.";
                }
            } else {
                require_once('public/404.php');
            }
            break;
        case 'deluser':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                // Lấy ID của người dùng
                $id = $_GET['id'];

                // Xóa người dùng trong cơ sở dữ liệu
                $tb = deleteUser($id); // Hàm xóa người dùng (cần được định nghĩa trong model hoặc controller)
            }

            // Load lại danh sách người dùng sau khi xóa
            $userlist = getAllUser(); // Hàm lấy danh sách người dùng từ DB

            // Điều hướng lại trang người dùng
            header('location: index.php?page=users');
            exit();
            break;
        case 'userUpdateForm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $userone = getOneUserById($id);
                require_once('public/userUpdateForm.php');
            } else {
                require_once('public/404.php');
            }
            break;
        case 'userUpdate':
            if (isset($_POST['btnupdate'])) {
                // Nhận thông tin từ form
                $id = $_POST['id'];         // ID người dùng
                $username = $_POST['username'];  // Tên người dùng
                $email = $_POST['email'];       // Email người dùng
                $phone = $_POST['phone'];       // Số điện thoại
                $role = $_POST['role'];         // Chức vụ (admin, user)
                $status = $_POST['status'];     // Trạng thái (active, inactive)

                // Tạo mảng dữ liệu để truyền vào hàm updateUser
                $data = [
                    'id' => $id,
                    'username' => $username,
                    'email' => $email,
                    'phone' => $phone,
                    'role' => $role,
                    'status' => $status
                ];

                // Cập nhật thông tin người dùng vào cơ sở dữ liệu
                updateUser($data);

                // Sau khi cập nhật, chuyển hướng lại trang người dùng
                header('location: index.php?page=users');
                exit;  // Dừng tiếp tục thực thi
            }
            break;
        case 'coupon':
            $couponlist = get_coupon();
            require_once('public/coupon.php');
            break;
        case 'addCoupon':
            //lấy data từ form
            if (isset($_POST['btnadd'])) {
                $code = $_POST['code'];
                $discount = $_POST['discount'];
                $end_date = $_POST['end_date'];
                add_coupon($code, $discount, $end_date);
            }
            //load lại
            $couponlist = get_coupon();
            require_once('public/coupon.php');
            break;
        case 'delCoupon':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                //xáo danh mục
                $id = $_GET['id'];
                $tb = delete_coupon($id);
            }
            //load lại
            $couponlist = get_coupon();
            require_once('public/coupon.php');
            break;
        case 'couponUpdateForm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $couponone = get_coupon_detail($id);
                $couponlist = get_coupon();
                require_once('public/couponUpdateForm.php');
            } else {
                require_once('public/coupon.php');
            }
            break;
        case 'couponUpdate':
            // Lấy dữ liệu từ form
            if (isset($_POST['btnupdate'])) {
                $id = $_POST['id']; // Lấy ID của coupon cần cập nhật
                $code = $_POST['code']; // Tên coupon
                $discount = $_POST['discount']; // Giá trị giảm giá
                $end_date = $_POST['end_date']; // Ngày hết hạn coupon

                // Cập nhật coupon trong cơ sở dữ liệu
                update_coupon($id, $code, $discount, $end_date);
            }

            // Load lại danh sách coupon
            $couponlist = get_coupon();
            require_once('public/coupon.php');
            break;
        case 'contact':
            function get_contact()
            {
                $db = new ConnectModel();
                $sql = "SELECT * FROM contact";
                return $db->get_all($sql);
            }
            $contactlist = get_contact();
            require_once('public/contact.php');
            break;
        case 'bill':
            function get_bill()
            {
                $db = new ConnectModel();
                $sql = "SELECT * FROM bill";
                return $db->get_all($sql);
            }
            $billlist = get_bill();
            require_once('public/bill.php');
            break;
        case 'logout':
            
        default:
            require_once('public/404.php');
    }
} else {
    require_once('public/home.php');
}

require_once('public/footer.php');
