<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My PHP Project</title>
    <link rel="stylesheet" type="text/css" href="/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Trung Tiến</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/blog">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/createpost">Create Post</a></li>
                    </ul>
                </div>
                <div class="cs-img-account">
                    <img data-bs-toggle="modal" data-bs-target="#exampleModal" class="img-fluid"
                        src="images/exam-avatar.jpeg" alt="avatar">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Đăng nhập tài khoản</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Xin chào! <?=isset($_SESSION['username']) ? $_SESSION['username'] : "Bạn chưa đăng nhập";?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Hủy</button>
                                        <a href="<?=isset($_SESSION['username']) ? "/account/logout" : "/account/login";?>"><button type="submit" class="btn btn-primary"><?=isset($_SESSION['username']) ? "Đăng xuất" : "Đăng nhập";?></button></a>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>
    <div class="row g-0 row-cols-sm-1">
        <main class="col-lg-10"><?php echo $content; ?></main>
        <aside class="col-lg-2">
            <p style="text-align: justify; padding: 10px;">Bạn có thể mời tôi đi uống cà phê. Nhưng tôi đang theo học
                một chương trình đặc biệt. Vì thế bạn có thể chuyển khoản cho tôi. Số tài khoản của tôi là [0969143533 -
                MBBank Ngân Hàng Quân Đội]</p>
        </aside>
    </div>
    <footer class="bg-light p-1">
        <span class="fst-italic">Copyright &copy; 2024.</span>
        <span class="fst-italic"><a style="text-decoration: none;" href="/">trungtienlearn.com</a></span>
    </footer>
    <script src="./bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>

</html>