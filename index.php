<?php
ob_start();
session_start();
require_once('bright.php');
require_once('model/mailer_helper.php');

// sendMail('huynvps39718@gmail.com', 'testmail', 'Chào huy');
// require header
include_once "view/header.php";

if (isset($_GET['page']) && ($_GET['page'] != "")) {
   switch ($_GET['page']) {
      case 'products':
         if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
            $id_category = $_GET['id_category'];
         } else {
            $id_category = 0;
         }
         $productlist = getproduct($id_category);
         $catalog_list = get_catalog();
         include_once "view/products.php";
         break;
      case 'productDetail':
         include_once "view/productDetail.php";
         break;
         // case 'productdetail':
         //    if (isset($_GET['idproduct']) && ($_GET['idproduct'] > 0)) {
         //       $idproduct = $_GET['idproduct'];
         //       $idcatalog = get_idcatalog($idproduct);

         //       $detail = get_product_detail($idproduct);
         //       $related = get_related_product($idcatalog, $idproduct);

         //       include_once "view/productdetail.php";
         //    }

         //    break;
         // case 'blog':
         //    include_once "view/blog.php";
         //    break;
         // case 'delcart':
         //    if (isset($_GET['ind']) && ($_GET['ind'] >= 0)) {
         //       array_splice($_SESSION['giohang'], $_GET['ind'], 1);
         //       header('location: index.php?pg=viewcart');
         //    }
         //    break;
         // case 'viewcart':
         //    include_once "view/viewcart.php";
         //    break;
         // case 'addcart':
         //    if (isset($_POST['btnaddcart']) && ($_POST['btnaddcart'])) {
         //       $id = $_POST['id'];
         //       $name = $_POST['name'];
         //       $img = $_POST['img'];
         //       $soluong = $_POST['soluong'];
         //       $price = $_POST['price'];
         //       $sp = ["id" => $id, "img" => $img, "name" => $name, "price" => $price, "soluong" => $soluong];
         //       $_SESSION['giohang'][] = $sp;
         //       header('location: index.php?pg=viewcart');
         //    }
         //    break;
         // case 'userlogin':
         //    if (isset($_POST['btn_login'])) {
         //       $username = $_POST['username'];
         //       $password = $_POST['password'];
         //       $user = new User();
         //       $userinfo = $user->checkUser($username, $password);
         //       if (is_array($userinfo)) {
         //          $_SESSION['userinfo'] = $userinfo;
         //          if (!empty($userinfo['name']) && !empty($userinfo['address']) && !empty($userinfo['phone'])) {
         //             include './view/home.php';
         //          } else {
         //             header("Location: index.php?pg=userUpdateForm");
         //          }
         //       } else {
         //          echo "<h4 style='color:red;'>Tài khoản không tồn tại</h4>";
         //          include_once './view/login.php';
         //       }
         //    } else {
         //       include_once "view/login.php";
         //    }
         //    break;
      case 'logout':
         if (isset($_SESSION['userinfo'])) {
            unset($_SESSION['userinfo']);
            header('Location: index.php');
         }
         // $newproduct = getproduct();
         // $saleproduct = getsaleproduct();
         // $featureproduct = getfeatureproduct();
         // $viewproduct = getviewproduct();
         include_once './view/home.php';
         break;
         // case 'userUpdate':
         //    if (isset($_POST['btn_update'])) {
         //       $username = $_POST['username'];
         //       $password = $_POST['password'];
         //       $email = $_POST['email'];
         //       $name = $_POST['name'];
         //       $address = $_POST['address'];
         //       $phone = $_POST['phone'];
         //       $id = $_POST['id'];
         //       $_SESSION['userinfo']['username'] = $username;
         //       $_SESSION['userinfo']['password'] = $password;
         //       $_SESSION['userinfo']['email'] = $email;
         //       $_SESSION['userinfo']['name'] = $name;
         //       $_SESSION['userinfo']['address'] = $address;
         //       $_SESSION['userinfo']['phone'] = $phone;

         //       $data = [
         //          'username' => $username,
         //          'password' => $password,
         //          'email' => $email,
         //          'name' => $name,
         //          'address' => $address,
         //          'phone' => $phone,
         //          'id' => $id,
         //       ];

         //       $user = new User();
         //       if ($user->UpdateUser($data)) {
         //          echo "<h4 style='color:red;'>Failed to update user</h4>";
         //       } else {
         //          echo "<h4 style='color:green;'>User updated successfully</h4>";
         //       }
         //    }
         //    $newproduct = getproduct();
         //    $saleproduct = getsaleproduct();
         //    $featureproduct = getfeatureproduct();
         //    $viewproduct = getviewproduct();
         //    include_once './view/home.php';
         //    break;
      case 'userUpdateForm':
         include_once "view/userUpdateForm.php";
         break;
      case 'register':
         include_once "view/register.php";
         break;
      case 'addusers':
         if (isset($_POST['btnadd'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            // Dữ liệu cho thêm user
            $data = [
               'username' => $username,
               'email' => $email,
               'password' => $password,
               'phone' => $phone
            ];

            // Thêm người dùng
            $result = addUser($data);

            if ($result) {
               // Điều hướng đến trang login nếu đăng ký thành công
               header("Location: index.php?page=login");
               exit();
            } else {
               // Hiển thị lỗi nếu không thêm được người dùng
               echo "Đã xảy ra lỗi khi thêm người dùng. Vui lòng thử lại.";
            }
         } else {
            require_once('public/404.php');
         }
         break;
      case 'login':
         include_once "view/login.php";
         break;
      case 'checkUserRole':
         if (isset($_POST['btnlogin'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Kiểm tra đăng nhập
            $user = checkUser($username, $password);

            if ($user) {
               // Lưu thông tin user vào session
               $_SESSION['userinfo'] = [
                  'username' => $user['username'],
                  'role' => $user['role'],
                  'name' => $user['name'] ?? '',
                  'email' => $user['email'] ?? ''
               ];

               // Kiểm tra vai trò của người dùng
               $role = checkUserRole($username, $password);

               if ($role === 'admin') {
                  // Nếu là admin, chuyển đến trang admin
                  header('Location: admin/index.php');
                  exit();
               } else if ($role === 'user') {
                  // Nếu là user, chuyển đến trang chủ
                  header('Location: index.php');
                  exit();
               }
            } else {
               echo "<h4 style='color:red;'>Sai tên đăng nhập hoặc mật khẩu.</h4>";
               include_once './view/login.php';
            }
         } else {
            include_once "view/login.php";
         }
         break;
      case 'forgot_password_form':
         include_once "view/forgot_password_form.php";
         break;
      case 'forgot_password':
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $message = forgotPassword($email);

            // Hiển thị thông báo cho người dùng
            echo $message;
         } else {
            // Hiển thị form quên mật khẩu
            include 'view/reset_password.php';
         }
         break;
      case 'reset_password':
         include_once '';
         break;
      case 'contact':
         include_once "view/contact.php";
         break;
      case 'contact_form':
         if (isset($_POST['btnadd'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            add_contact($name, $email, $phone, $message);
         } else {
            require_once('public/404.php');
         }
         break;
      case 'about':
         include_once "view/about.php";
         break;
      case 'cart':
         include_once "view/cart.php";
         break;
      case 'blog':
         include_once "view/blog.php";
         break;
      default:
         if (isset($_GET['id_category']) && ($_GET['id_category'] > 0)) {
            $id_category = $_GET['id_category'];
         } else {
            $id_category = 0;
         }
         $productlist = getproduct($id_category);
         $catalog_list = get_catalog();
         // $newproduct = getproduct();
         // $saleproduct = getsaleproduct();
         // $featureproduct = getfeatureproduct();
         // $viewproduct = getviewproduct();
         include_once "view/home.php";
         break;
   }
} else {
   // echo "Bạn đang vào trang chủ";
   // require home

   // $newproduct = getproduct();
   // $saleproduct = getsaleproduct();
   // $featureproduct = getfeatureproduct();
   // $viewproduct = getviewproduct();
   // echo var_dump($newproduct);
   include_once "view/home.php";
}

//require footer
include_once "view/footer.php";
