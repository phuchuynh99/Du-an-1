<!-- File: public/apply_coupon.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Áp Dụng Mã Giảm Giá</title>
</head>
<body>
    <h2>Áp Dụng Mã Giảm Giá</h2>
    <form action="index.php?page=coupon&action=apply_coupon" method="post">
        <label for="code">Nhập mã giảm giá:</label>
        <input type="text" id="code" name="code" required>
        
        <button type="submit" name="btnadd">Áp Dụng</button>
    </form>
</body>
</html>
