<?php
//model
require_once('model/connect.php');
require_once('model/catalog.php');
require_once('model/product.php');
require_once('model/coupon.php');
require_once('model/user.php');
require_once('model/bill.php');
require_once('model/jwt.php');

//mailer
require_once('jwt/BeforeValidException.php');
require_once('jwt/ExpiredException.php');
require_once('jwt/JWT.php');
require_once('jwt/JWTExceptionWithPayloadInterface.php');
require_once('jwt/Key.php');
require_once('jwt/SignatureInvalidException.php');

//view
require_once('view/global.php');

?>