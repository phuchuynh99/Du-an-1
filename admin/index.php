<?php 
ob_start();
    require_once ('../view/global.php');
    require_once('../model/connect.php');
    require_once('../model/catalog.php');
    require_once('../model/product.php');
    require_once('public/head.php');
    require_once('public/nav.php');
    
    if(isset($_GET['page'])){
        switch($_GET['page']){
            case 'home':
                require_once('public/home.php');
                break;
            case 'del':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    //xáo danh mục
                    $id=$_GET['id'];
                    $tb=delete_catalog($id);
                }
                    //load lại danh mục
                    $cataloglist=get_catalog();
                    require_once('public/catagories.php');
                break;
            case 'categories':
                $cataloglist=get_catalog();
                require_once('public/catagories.php');
                break;
            case 'add_dm':
                //lấy data từ form
                if(isset($_POST['btnadd'])){
                    $name=$_POST['name'];
                    add_catalog($name);
                }
                //load lại
                $cataloglist=get_catalog();
                require_once('public/catagories.php');
                break;
            case 'update':
                if(isset($_POST['btnupdate'])&& ($_POST['btnupdate'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        set_catalog($id,$name); 
                        $cataloglist=get_catalog();
                        require_once('public/catagories.php');
                }
                break;
            case 'updateform':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $id=$_GET['id'];
                    $catalogone=get_catalog_one($id);
                    require_once('public/updateform.php');
                } else {
                    require_once('public/404.php');
                }
                break;
            case 'delproduct':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    //xáo danh mục
                    $id=$_GET['id'];
                    //kiểm tra sp có hình không? có hình thì xóa
                    $ten_file_hinh="../".PATH_IMG.ten_file_hinh($id);
                    if(file_exists($ten_file_hinh)){
                         unlink($ten_file_hinh);
                    }
                    //xóa sp trong db
                    $tb=delete_product($id);
                }
                    //load lại dssp
                    $productlist=getproduct();
                    header('location: index.php?page=product');
                break;
            case 'productupdateform':
                if(isset($_GET['id'])&& ($_GET['id']>0)){
                    $id=$_GET['id'];
                    $productone=get_product_detail($id);
                    $cataloglist=get_catalog();
                    require_once('public/productupdateform.php');
                } else {
                    require_once('public/404.php');
                }
                break;
            case 'productupdate':
                //lấy dữ liệu từ form
                if(isset($_POST['btnupdate'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $idcatalog=$_POST['idcatalog'];
                    //lấy hình về 
                    $ten_file_hinh=$_FILES['img']['name'];
                    if($ten_file_hinh!=""){
                        //upload lên host
                        $target_file="../".PATH_IMG.basename($_FILES['img']['name']);
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        //xóa hình cũ
                        $hinh_cu="../".PATH_IMG.$_POST['hinhcu'];
                        if(file_exists($hinh_cu)) unlink($hinh_cu);

                    }
                    //upload vô db
                    update_product($id,$idcatalog,$ten_file_hinh,$name,$price);
                }
                $productlist=getproduct();
                header('location: index.php?page=product');
                // require_once('public/products.php');
                break;
            case 'addproduct':
                //lấy dữ liệu từ form
                if(isset($_POST['btnadd'])){
                    $name=$_POST['name'];
                    $price=$_POST['price'];
                    $idcatalog=$_POST['idcatalog'];
                    //lấy hình về 
                    $ten_file_hinh=$_FILES['img']['name'];
                    if($ten_file_hinh!=""){
                        //upload lên host
                        $target_file="../".PATH_IMG.basename($_FILES['img']['name']);
                        move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                    }
                    //thêm vô db
                    add_product($idcatalog,$ten_file_hinh,$name,$price);
                }
                $productlist=getproduct();
                header('location: index.php?page=product');
                // require_once('public/products.php');
                break;
            case 'product':
                //load sản phẩm
                $cataloglist=get_catalog();
                $productlist=getproduct();
                require_once('public/products.php');
                break;
            case 'users':
                require_once('public/users.php');
                break;
            case 'blockusers':
            default:
                require_once('public/404.php');
        }
    }else{
        require_once('public/home.php');
    }
 
    require_once('public/footer.php');
?>