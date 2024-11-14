<!-- File: public/create_coupon.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tạo Mã Giảm Giá</title>
</head>
<body>
    <h2>Tạo Mã Giảm Giá</h2>
    <form action="index.php?page=coupon&action=create_coupon" method="post">
        <label for="code">Mã:</label>
        <input type="text" id="code" name="code" required>
        
        <label for="discount">Phần trăm giảm:</label>
        <input type="number" id="discount" name="discount" required>
        
        <label for="expiry_date">Ngày hết hạn:</label>
        <input type="date" id="expiry_date" name="expiry_date" required>
        
        <button type="submit" name="btnCreateCoupon">Tạo Mã</button>
    </form>
</body>
</html>
