<div class="container mt-5">
        <h2 class="text-center mb-4">Thông Tin Tài Khoản</h2>
        <div class="card mx-auto" style="max-width: 600px;">
            <div class="card-header text-center">
                <img src="/images/exam-avatar.jpeg" class="rounded-circle" alt="Avatar" width="150" height="150">
            </div>
            <div class="card-body">
                <h5 class="card-title text-center"><?=$user['fullname'];?></h5>
                <p class="text-center text-muted">@<?=$user['username'];?></p>
                <table class="table table-borderless mt-4">
                    <tr>
                        <th scope="row">Email:</th>
                        <td><?=$user['email'];?></td>
                    </tr>
                    <tr>
                        <th scope="row">Số điện thoại:</th>
                        <td><?=$user['tel'];?></td>
                    </tr>
                    <tr>
                        <th scope="row">Ngày đăng ký:</th>
                        <td><?=date('d/m/Y', strtotime($user['created_at']));?></td>
                    </tr>
                </table>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" onclick="window.location.href='/account/edit';">Chỉnh sửa thông tin</button>
                    <button class="btn btn-danger" onclick="window.location.href='/account/logout';">Đăng xuất</button>
                </div>
            </div>
        </div>
    </div>