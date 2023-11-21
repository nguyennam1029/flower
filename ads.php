<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .ads {
            position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    animation: c;
    align-items: center;
    justify-content: center;
    background-color: #000000b5;


  z-index: 9999;
  opacity: 0;
  transition: opacity 0.5s ease-in-out;
        }
        /* Animation cho modal */
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
        .ads img {
            width: 40%;
        }
        svg {
            width: 30px;
            height: 30px;
            color: #ff0aea;
            position: absolute;
            right: 28%;
            top: 20%;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="ads" id="adsImage">
        <img src="./images/ads.png" alt="">
        <svg id="close-ads" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>

    </div>

    <script>
document.addEventListener('DOMContentLoaded', function () {
  // Lấy modal và nút đóng
  const adsModal = document.getElementById('adsImage');
  const adsBtn = document.getElementById('close-ads');

  // Hiển thị modal
  adsModal.style.display = 'flex';

  // Chờ 1 giây và thêm class để áp dụng animation
  setTimeout(function () {
    adsModal.style.opacity = '1';
    adsModal.style.animation = 'fadeIn 0.5s ease-in-out';
  }, 1000);

  // Xử lý sự kiện khi click vào nút đóng
  adsBtn.addEventListener('click', function () {
    // Ẩn modal và thiết lập lại các thuộc tính
    adsModal.style.animation = 'none';
    adsModal.style.opacity = '0';
    adsModal.style.display = 'none';
  });
});

        
    </script>
</body>
</html>