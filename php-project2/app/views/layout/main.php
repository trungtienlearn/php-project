<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'My MVC App'; ?></title>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="brand">Trung Tiến Learn</div>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="/">Blog</a></li>
                <li><a href="/">About</a></li>
                <!-- Thêm các liên kết khác ở đây -->
            </ul>
        </nav>
    </header>
    <div class="mainpage">
        <main>
            <?php echo $content; ?>
        </main>
        <aside>
            <div>
                <h3>Rủ mình uống cà phê!</h3>
                <p>Tôi rất trân quý khi được bạn mời uống cà phê. Nhưng tôi đang bận theo học một trương trình đặc biệt vì vậy chưa dành thời gian cùng bạn. Bạn có thể ủng hộ tôi bằng cách chuyển khoản đến STK MBBank 0969143533</p>
            </div>
        </aside>
    </div>
    <footer>
        <p>&copy; 2024 <a class="link-copyright" href="/public">trungtienlearn.com</a></p>
    </footer>
    <!-- Popup -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <div id="popup-body"></div>
        </div>
    </div>
    <script type="text/javascript" src="./script.js"></script>
</body>
</html>
