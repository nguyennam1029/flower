<!--Products section stars-->
<section class="category">
    <div class="sidebar">
        <h3>Object</h3>
        <div class="sidebar-item">
            <i class="fa-solid fa-cubes-stacked"></i>
            <p>Flowers for lover</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-drumstick-bite"></i>
            <p>Flowers for friends</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-cloud-meatball"></i>
            <p>Flowers for wife</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-cake-candles"></i>
            <p>Flowers for husband</p>
        </div>
        <div class="sidebar-item">
            <i class="fa-solid fa-cubes-stacked"></i>
            <p>Flowers for mother</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-drumstick-bite"></i>
            <p>Flowers for children</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-cloud-meatball"></i>
            <p>Flowers for women</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-champagne-glasses"></i>
            <p>Flowers for men</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-cloud-meatball"></i>
            <p>Flowers for boss</p>
        </div>
        <div class="sidebar-item">
        <i class="fa-solid fa-champagne-glasses"></i>
            <p>Flowers for colleagues</p>
        </div>
    </div>
    <div class="products" id="products">
        <h1 class="heading">latest <span>products</span></h1>
        <div class="box-container">
        <?php

    include 'connect.php';
        $sql = " select * from flower_hoaly";
        $result = mysqli_query($connect, $sql);
        ?>
        <?php foreach ($result as $product) : ?>
            <div href="product_detail.php?id=<?php echo $product['id_hoaly'] ?>" class="box">

                <span class="discount">-
                    <?php
                    // Tính phần trăm giảm giá
                    $discount = (($product['giamgia_hoaly'] - $product['gia_hoaly']) / $product['giamgia_hoaly']) * 100;
                    echo number_format($discount)
                    ?>
                    %</span>
                <div class="image">
                    <img src="./images/<?php echo $product['anh_hoaly'] ?>" alt="">
                    <!-- <img src="./images/img-1.jpg" alt=""> -->
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">add to cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
                <a href="product_detail.php?id=<?php echo $product['id_hoaly'] ?>" class="content">
                    <h3><?php echo $product['ten_hoaly'] ?></h3>
                    <div class="price">$<?php echo number_format($product['gia_hoaly']) ?> <span>$<?php echo number_format($product['giamgia_hoaly']) ?></span></div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
    </div>
</section>

<!--Products section ends-->