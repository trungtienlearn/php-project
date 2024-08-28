<div class="container">
    <form method="post" id="login-form">
        <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
        <div class="alert alert-warning"><?=isset($alert) ? $alert : ""?></div>
        <label class="form-label">Tên đăng nhập hoặc Email:</label>
        <input class="form-control" type="text" name="username_or_email" required>
        <label class="form-label">Mật Khẩu:</label>
        <input class="form-control" type="password" name="password" required>
        <div class="my-3">
            <button type="button" class="btn btn-outline-danger" id="btn-cancel">Hủy</button>
            <button type="submit" class="btn btn-success">Đăng nhập</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#btn-cancel").on("click", function(){
            window.location = "/";
        });
    });
</script>
