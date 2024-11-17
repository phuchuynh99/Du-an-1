<?php
   session_start();
   ob_start();
   include "view/global.php";
   include_once "model/connect.php";
   include_once "model/catalog.php";
   include_once "model/product.php";
   include_once "model/User.php";
   
   //connectdb();
   // require header
   include_once "view/header.php";

   if(isset($_GET['page'])&&($_GET['page'] != "")){
      switch ($_GET['page']) {
         case 'products':
            if(isset($_GET['id_category'])&&($_GET['id_category']>0)){
               $id_category=$_GET['id_category'];
            }else{
               $id_category=0;
            }
            $productlist=getproduct($id_category);
            $catalog_list=get_catalog();
            include_once "view/products.php";
            break;
         case 'productdetail':
            if(isset($_GET['idproduct'])&&($_GET['idproduct']>0)){
               $idproduct=$_GET['idproduct'];
               $idcatalog=get_idcatalog($idproduct);

               $detail=get_product_detail($idproduct);
               $related=get_related_product($idcatalog,$idproduct);

               include_once "view/productdetail.php";
            }
            
            break;
         case 'blog':
            include_once "view/blog.php";
            break;
         case 'delcart':
            if(isset($_GET['ind'])&&($_GET['ind']>=0)){
               array_splice($_SESSION['giohang'],$_GET['ind'],1);
               header('location: index.php?pg=viewcart');
            }
            break;
         case 'viewcart':
            include_once "view/viewcart.php";
            break;
         case 'addcart':
            if(isset($_POST['btnaddcart'])&&($_POST['btnaddcart'])){
               $id=$_POST['id'];
               $name=$_POST['name'];
               $img=$_POST['img'];
               $soluong=$_POST['soluong'];
               $price=$_POST['price'];
               $sp=["id"=>$id,"img"=>$img,"name"=>$name,"price"=>$price,"soluong"=>$soluong];
               $_SESSION['giohang'][]=$sp;
               header('location: index.php?pg=viewcart');
            }
            break;
            case 'useradd':
               if (isset($_POST['btn_register'])) {
                   $username = $_POST['username'];
                   $password = $_POST['password'];
                   $email = $_POST['email'];
                   $data = [
                       'username' => $username,
                       'password' => $password,
                       'email' => $email,
                   ];
                   $user = new User(); 
                     if ($user->CreateUser($data)) { 
                        echo "<h4 style='color:green;'>User created successfully</h4>";
                     } else {
                        echo "<h4 style='color:red;'>Failed to create user</h4>";
                     }
               }
               $newproduct=getproduct();
               $saleproduct=getsaleproduct();
               $featureproduct=getfeatureproduct();
               $viewproduct=getviewproduct();
               include_once './view/home.php';
               break;
         case 'userlogin':
            if (isset($_POST['btn_login'])) {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $user = new User();
               $userinfo = $user->checkUser($username, $password);
               if (is_array($userinfo)) {
                  $_SESSION['userinfo'] = $userinfo;
                  if (!empty($userinfo['name']) && !empty($userinfo['address']) && !empty($userinfo['phone'])) {
                     include './view/home.php';
                  } else {
                     header("Location: index.php?pg=userUpdateForm");
                  }
               } else {
                  echo "<h4 style='color:red;'>Tài khoản không tồn tại</h4>";
                  include_once './view/login.php';
               }
            } else {
               include_once "view/login.php";
            }
            break;
         case 'logout':
            if (isset($_SESSION['userinfo'])) {
               unset($_SESSION['userinfo']);
            }
            $newproduct=getproduct();
            $saleproduct=getsaleproduct();
            $featureproduct=getfeatureproduct();
            $viewproduct=getviewproduct();
            include_once './view/home.php';
            break;
         case 'userUpdate':
            if (isset($_POST['btn_update'])) {
               $username = $_POST['username'];
               $password = $_POST['password'];
               $email = $_POST['email'];
               $name = $_POST['name'];
               $address = $_POST['address'];
               $phone = $_POST['phone'];
               $id = $_POST['id'];
               $_SESSION['userinfo']['username'] = $username;
               $_SESSION['userinfo']['password'] = $password;
               $_SESSION['userinfo']['email'] = $email;
               $_SESSION['userinfo']['name'] = $name;
               $_SESSION['userinfo']['address'] = $address;
               $_SESSION['userinfo']['phone'] = $phone;

               $data = [
                  'username' => $username,
                  'password' => $password,
                  'email' => $email,
                  'name' => $name,
                  'address' => $address,
                  'phone' => $phone,
                  'id' => $id,
               ];

               $user = new User(); 
               if ($user->UpdateUser($data)) { 
                  echo "<h4 style='color:red;'>Failed to update user</h4>";
               } else {
                  echo "<h4 style='color:green;'>User updated successfully</h4>";
               }
              
            }
            $newproduct=getproduct();
           $saleproduct=getsaleproduct();
           $featureproduct=getfeatureproduct();
           $viewproduct=getviewproduct();
            include_once './view/home.php';
            break;
         case 'userUpdateForm':
            include_once "view/userUpdateForm.php";
            break;
         case 'register':
            include_once "view/register.php";
            break;
         case 'login':
            include_once "view/login.php";
            break;
         case 'contact':
            include_once "view/contact.php";
            break;
         case 'about':
            include_once "view/about.php";
            break;
         
         default:
            // echo "Bạn đang vào trang chủ";
            // require home
            $newproduct=getproduct();
            $saleproduct=getsaleproduct();
            $featureproduct=getfeatureproduct();
            $viewproduct=getviewproduct();
         //   echo var_dump($newproduct);
            include_once "view/home.php";
            break;
      }
      
   }else{
      // echo "Bạn đang vào trang chủ";
      // require home

      $newproduct=getproduct();
      $saleproduct=getsaleproduct();
      $featureproduct=getfeatureproduct();
      $viewproduct=getviewproduct();
     // echo var_dump($newproduct);
      include_once "view/home.php";
   }

   //require footer
   include_once "view/footer.php";

?>