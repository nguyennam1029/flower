<?php
include 'connect.php'
?>

<!-- Slider--------- -->
<?php
include 'slider.php' ?>

<!--About section starts-->
<section class="about" id="about">
  <h1 class="heading"><span>about</span> us</h1>
  <div class="row">
    <div class="video-container">
      <video src="./images/about-vid.mp4 " loop autoplay muted></video>
      <h3>best flowers sellers</h3>
    </div>
    <div class="content">
      <h3>why choose us?</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda nam cumque quasi autem blanditiis eaque laboriosam, neque alias sequi! Minus voluptatem expedita incidunt amet vel repellendus rem nisi minima animi?</p>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quo illum perferendis sapiente iusto distinctio! Esse maxime laborum vero, eligendi, sint impedit nulla fugit fugiat qui harum sapiente natus cum.</p>
      <a href="#" class="btn">Learn More</a>

    </div>
  </div>
</section>

<!--About section ends-->

<!--icons section starts-->

<section class="icons-container">
  <div class="icons">
    <img src="./images/icon-1.png" alt="">
    <div class="info">
      <h3>Free delivery</h3>
      <span>on all orders</span>
    </div>
  </div>

  <div class="icons">
    <img src="./images/icon-2.png" alt="">
    <div class="info">
      <h3>10 days returns</h3>
      <span>Moneyback guarantee</span>
    </div>
  </div>

  <div class="icons">
    <img src="./images/icon-3.png" alt="">
    <div class="info">
      <h3>offer & gits</h3>
      <span>on all orders</span>
    </div>
  </div>

  <div class="icons">
    <img src="./images/icon-4.png" alt="">
    <div class="info">
      <h3>secure paymens</h3>
      <span>protected by paypal</span>
    </div>
  </div>
</section>

<!--icons section ends-->
<section style="display: flex; justify-content: center;
    align-items: center;
    gap: 20px;">
  <img style=" 
    width: 388px;" src="./images/card1.png" alt=""> 
   <img  style=" 
    width: 388px;
"src="./images/card2.png" alt="">
  <img style=" 
    width: 388px;" src="./images/card3.png" alt="">

</section>
<!--Products section stars-->

<section class="products" id="products">
  <h1 class="heading">latest <span>products</span></h1>
  <div class="box-container">
    <?php


    $sql = " select * from flower";
    $result = mysqli_query($connect, $sql);
    ?>
    <?php foreach ($result as $product) : ?>
      <div href="product_detail.php?id=<?php echo $product['id_hoahong'] ?>" class="box">

        <span class="discount">-
          <?php
          // Tính phần trăm giảm giá
          $discount = (($product['giamgia_hoahong'] - $product['gia_hoahong']) / $product['giamgia_hoahong']) * 100;
          echo number_format($discount)
          ?>
          %</span>
        <div class="image">
          <img src="./images/<?php echo $product['anh_hoahong'] ?>" alt="">
          <!-- <img src="./images/img-1.jpg" alt=""> -->
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <a href="product_detail.php?id=<?php echo $product['id_hoahong'] ?>" class="content">
          <h3><?php echo $product['ten_hoahong'] ?></h3>
          <div class="price">$<?php echo number_format($product['gia_hoahong']) ?> <span>$<?php echo number_format($product['giamgia_hoahong']) ?></span></div>
        </a>
      </div>
    <?php endforeach ?>
  </div>
</section>
<!--Products section ends-->