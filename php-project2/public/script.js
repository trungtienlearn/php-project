// Lấy popup
        var popup = document.getElementById("popup");

        // Lấy nút đóng
        var span = document.getElementsByClassName("close")[0];

        // Khi người dùng nhấp vào nút đóng, đóng popup
        span.onclick = function() {
            popup.style.display = "none";
        }

        // Khi người dùng nhấp ra ngoài popup, đóng popup
        window.onclick = function(event) {
            if (event.target == popup) {
                popup.style.display = "none";
            }
        }

        // Hàm để mở popup và tải nội dung chi tiết bài viết
        function openPopup(postId) {
            var xhr = new XMLHttpRequest();
            xhr.open("GET", "../ajax/test.php", true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("popup-body").innerHTML = xhr.responseText;
                    popup.style.display = "block";
                }
            };
            xhr.send();
        }