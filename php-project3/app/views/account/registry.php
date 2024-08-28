<div class="container mt-3">
    <form id="registrationForm" method="post">
        <h2 id="title-1">Đăng Ký Tài Khoản</h2>
        <p><?=$alert ? $alert : "";?></p>
        <div class="input-group mb-3">
            <label class="input-group-text">Họ và tên:</label>
            <input class="form-control" type="text" name="fullname" placeholder="Điền tên đầy đủ" required>
        </div>
        <div class="input-group mb-3 has-validation">
            <label class="input-group-text" for="user">Tên đăng nhập:</label>
            <input class="form-control" type="text" name="username" id="user" placeholder="Tên đăng nhập lớn hơn 6 ký tự..." required>
            <div class="invalid-feedback">
                Tên đăng nhập đã có hoặc rỗng. Hãy điền tên khác.
            </div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="pass">Mật khẩu:</label>
            <input class="form-control" type="password" name="password" id="pass" placeholder="Mật khẩu gồm ít nhất 7 ký tự, chữ hoa, chữ thường và ký tự đặc biệt" required>
            <div class="invalid-feedback">
                Mật khẩu phải lớn hơn 6 ký tự, bao gồm chữ hoa, chữ thường, và ký tự đặc biệt.
            </div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="repassword">Nhập lại mật khẩu:</label>
            <input class="form-control" type="password" name="repassword" id="repassword" required>
            <div class="invalid-feedback">
                Mật khẩu nhập lại không chính xác.
            </div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="email">Email:</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="vi_du@gmail.com" required>
            <div class="invalid-feedback">
                Email phải đúng định dạng và có ký tự '@'.
            </div>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="tel">Số điện thoại:</label>
            <input class="form-control" type="tel" name="tel" id="tel" placeholder="Điền số điện thoại" required>
        </div>

        <div class="mt-3">
            <button class="btn btn-outline-danger" id="cancelBtn">Hủy</button>
            <button class="btn btn-primary" type="submit">Đăng ký</button>
        </div>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("#user").keyup(function(){
            $.ajax({
                url: "http://php-project3.test/account/checkUserAPI",
                method: "POST",
                data: { username: $("#user").val() },
                success: function(response){
                    const data = JSON.parse(response);
                    if (data.message == true) {
                        $("#user").addClass("is-invalid");
                    } else {
                        $("#user").removeClass("is-invalid").addClass("is-valid");
                    }
                },
                error: function(){
                    alert("Có lỗi xảy ra khi kiểm tra tên đăng nhập.");
                }
            });
        });

        // Kiểm tra mật khẩu
        $("#pass, #repassword").on("keyup", function() {
            const password = $("#pass").val();
            const repassword = $("#repassword").val();
            const passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{7,}$/;

            if (!passwordRegex.test(password)) {
                $("#pass").addClass("is-invalid");
            } else {
                $("#pass").removeClass("is-invalid").addClass("is-valid");
            }

            if (password !== repassword) {
                $("#repassword").addClass("is-invalid");
            } else {
                $("#repassword").removeClass("is-invalid").addClass("is-valid");
            }
        });

        // Kiểm tra email
        $("#email").on("keyup", function() {
            const email = $("#email").val();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                $("#email").addClass("is-invalid");
            } else {
                $("#email").removeClass("is-invalid").addClass("is-valid");
            }
        });

        // Kiểm tra trước khi submit form
        $("#registrationForm").on("submit", function(e) {
            if ($(".is-invalid").length > 0) {
                e.preventDefault();
                alert("Hãy kiểm tra lại thông tin trước khi gửi.");
            }
        });
    });
</script>
