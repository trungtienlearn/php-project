<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Playwrite+US+Trad:wght@100..400&family=Sedgwick+Ave&display=swap');

.cs-hero {
    background-color: #f8f3e9;
    width: 100%;
    height: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: "Playwrite US Trad", cursive;
    font-optical-sizing: auto;
    font-weight: 100;
    font-style: normal;
    padding: 2rem;
}

.cs-hero p {
    text-align: center;
    font-size: 2rem;
}
</style>
<div class="container-fluid">
    <div class="cs-hero">
        <p><strong>Trung Tiến</strong> hiện diện ở đây vì còn một chút duyên với đời. Là một người đi con đường của Ngài
            <strong>Thích Ca Mâu Ni</strong>. Trong hành trình chuyển hóa này, tôi hiện diện để kết nối với những thiện
            duyên, thuận duyên cũng như vận dụng những nguồn lực để làm phương tiện chuyển hóa cho mình và cho người.
        </p>
    </div>
    <hr />
</div>
<div class="container-fluid">
    <h2>Khóa học lập trình PHP</h2>
    <p>PHP là ngôn ngữ lập trình dễ tiếp cận. PHP tạo ra với ngôn ngữ thân thiện với con người. PHP hoạt động ở phía máy
        chủ và trả về máy khách những dữ liệu hiển thị trên trình duyệt web. Bạn yêu thích máy tính, muốn tìm hiểu công
        nghệ thông tin. Bạn muốn rèn luyện tư duy logic. Bạn muốn xây dựng nền tảng tư duy lập trình để học các ngôn ngữ
        khác. Thì đây là khóa học giúp bạn có những kiến thức lập trình PHP</p>
    <hr />
</div>
<!-- Ý tưởng mạng xã hội -->
<div class="container-fluid">
    <h2>Bài Viết Và Thảo Luận</h2>
    <div class="row row-cols-1 row-cols-lg-3 g-0">
        <?php foreach ($data as $value): ?>
        <div class="col p-1">
            <div class="card">
                <div class="card-header">
                    <div class="placeholder-glow">
                        <img class="rounded-circle" src="<?=$value['img'];?>" alt="avatar" width="40" height="40">
                    </div>
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="<?=$value['img'];?>">
                    <div class="card-title cus-color"><?=$value['title']?></div>
                    <div class="card-text"><?=$value['content']?></div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between">
                        <span>Thích</span>
                        <span>Bình luận</span>
                        <span>Lưu</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
    <hr />
    <!-- Bài viết -->
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Phật Học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Tâm Lý Học</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Triết Học</a>
            </li>
        </ul>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            <button class="nav-link" id="nav-disabled-tab" data-bs-toggle="tab" data-bs-target="#nav-disabled"
                type="button" role="tab" aria-controls="nav-disabled" aria-selected="false" disabled>Disabled</button>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                tabindex="0">1</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                2</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                3</div>
            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                tabindex="0">4</div>
        </div>
        <div id="show_posts_home"></div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $("#category_post");
});
</script>