<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Đăng ký</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="user_id">Mã số</label>
                <input type="text" id="user_id" name="user_id" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group checkbox-group">
                <input type="checkbox" id="is_admin" name="is_admin">
                <label for="is_admin">Quản trị viên</label>
            </div>
            <button type="submit">Đăng ký</button>
        </form>
    </div>
</body>
</html>
</body>
</html>