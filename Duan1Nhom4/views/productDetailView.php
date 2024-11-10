<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta nameauto;wport content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['Name_product']) ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/home_fe.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/productDetail.css">
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .breadcrumb {
        list-style: none;
        display: flex;
        padding: 0;
        margin: 20px 0;
        background-color: #f8f9fa;
        max-width: 130rem;
        margin: 0 auto;
        border-radius: 1rem;
        padding: 10px;
    }


    .breadcrumb li {
        margin-right: 10px;
    }

    .breadcrumb li a {
        text-decoration: none;
        color: #007bff;
    }

    .breadcrumb li a:hover {
        text-decoration: underline;
    }

    .breadcrumb li::after {
        content: ">";
        margin-left: 10px;
        color: #6c757d;
    }

    .breadcrumb li:last-child::after {
        content: "";
    }

    .breadcrumb li:last-child a {
        color: #6c757d;
        pointer-events: none;
        cursor: default;
    }

    /* ---------------------------------------- */

    .box-detail-product {
        max-width: 130rem;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 65% 1fr;
        margin-bottom: 2rem;
    }

    .box-detail-product-left {
        flex: 2;
        margin-right: 20px;
    }

    .box-detail-product-right {
        flex: 1;
    }

    .box-detail-product-left-Gallery {
        align-items: center;
        background-image: linear-gradient(90deg, rgb(221, 94, 137), rgb(247, 187, 151));
        border-radius: 1rem;
        color: #4a4a4a;
        display: flex;
        justify-content: center;
        line-height: 24px;
        text-align: center;
        height: 400px;
    }

    .box-detail-product-left-Gallery .box-proview {
        align-items: center;
        color: #fff;
        display: grid;
        grid-template-columns: 40% 1fr;
        font-size: 14px;
        overflow: hidden;
        position: relative;
        margin-bottom: auto 0;
        gap: 2em;

    }

    .box-proview .tilte-desktop {
        bottom: 5px;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 10px;
        position: relative;
        text-transform: uppercase;
        text-align: center;
    }

    .box-detail-product-left-Gallery .box-proview img {
        background: #fff;
        border-radius: 1rem;
        width: 270px;
        padding: 10px;
        margin-left: 10px;
    }

    .box-title p {
        font-weight: bold;
        font-size: 18px;
    }

    .columns-mt1 {
        display: flex;
        margin-top: 0.25rem !important;
        margin-left: 5px;
        border-bottom: 1px solid #3333331b;
        border-radius: 1rem;

    }

    .box-warranty-info {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        display: inline-block;
        padding: 5px;
        width: 95%;
    }

    .box-warranty-info .box-title {
        color: #444;
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .box-warranty-info .box-content {
        font-size: 12px;
    }

    .box-warranty-info .box-content .items-info {
        display: flex;
        font-size: inherit;
        margin-bottom: 10px;
    }

    .box-warranty-info .box-content .items-info .icon img {
        margin-right: 10px;
        width: 20px;
    }



    .box-warranty-info .box-content .items-info .description {
        font-size: 14px;
        margin-top: 2px;
        max-width: calc(100% - 50px);
    }

    .block-box-price {
        text-align: left !important;
    }

    .box-detail-product-right {
        margin-top: 40px;
    }

    .product__price--show {
        font-size: 34px;
        color: #d9534f;

    }

    .product__price--through {
        text-decoration: line-through;
        color: #6c757d;
        font-size: 24px;
        /* Strikethrough color */
    }

    .box-detail-product-right .list-box-variant .list-variant {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        gap: 20px;
    }

    .box-detail-product-right .list-box-variant .list-variant .item-variant {
        align-items: center;
        background: #fff;
        border: 1px solid #d1d5db;
        border-radius: 1rem;
        color: #444;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        font-size: 12px;
        gap: 3px;
        justify-content: center;
        margin: 0 0 10px;
        overflow: hidden;
        padding: 5px 4px;
        position: relative;
        -webkit-text-decoration: none;
        text-decoration: none;
        width: calc(33.33333% - 6.66667px);
    }

    .box-detail-product-right .list-box-variant .list-variant .item-variant .button__change-color {
        display: flex !important;
    }

    .box-detail-product-right .list-box-variant .list-variant .item-variant a img {
        height: 30px;
        position: relative;
        width: 30px;
    }

    .box-detail-product-right .list-box-variant .list-variant .item-variant a .flex {
        display: flex !important;
        flex-direction: column;
        color: #444;
        text-align: left;
    }

    .box-detail-product-right .list-box-variant .list-variant .item-variant strong {
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-align: center;
        width: 100%;
    }

    .banner-block-right-promotion {
        margin-top: 1rem;
    }

    .box-product-promotion {
        display: grid;
        grid-template-columns: 1fr 20%;
        gap: 10px;
        margin: auto 0;
    }

    .box-product-promotion .pay-left {
        background-image:
            linear-gradient(rgb(245, 47, 50), rgb(225, 27, 30));
        border-radius: 1rem;
        font-size: 18px;
        margin-right: 10px;
        margin: auto 0;
        padding: 1px 6px;
    }

    .box-product-promotion .pay-left .p1 {
        color: #fff;
        font-size: 20px;
        text-align: center;
        padding-top: 20px;
    }

    .box-product-promotion .pay-left .p2 {
        color: #fff;
        font-size: 13px;
        text-align: center;

        padding-bottom: 15px;
    }

    .box-product-promotion .add-to-card {
        margin: auto 0;
    }

    .box-product-promotion .add-to-card .box-pay-to-card {
        border: 1px solid #e04040;
        border-radius: 1rem;
        text-align: center;

    }


    .products_byParentCategory,
    .box_sale_products_byParentCategory {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        max-width: 130rem;
        margin: 0 auto;
        margin-bottom: 2rem;
    }

    .product {
        min-height: 250px;
        border: 1px solid #ddd;
        padding: 10px;
        margin: 10px;
        border-radius: 1rem;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: transparent;
        position: relative;
        justify-content: space-between;
    }

    .product__info {
        text-align: center;
    }

    .product__link {
        text-decoration: none;
        color: inherit;
    }

    .product__price--percent {
        background-image: url(./admin/assets/images/rating/detail_discount.png);
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: contain;
        height: 34px;
        left: -8px;
        position: absolute;
        top: -6px;
        width: 80px;
    }

    .product__price--percent-detail {

        color: #fff;
        font-size: 12px;
        font-weight: 700;
        margin: 5px 0 0;
        text-align: center;
        width: 100%;
    }

    .product__image img {
        width: 100%;
        max-width: 15em;
        height: auto;
        object-fit: cover;
        border-radius: 1rem;
        font-family: Roboto, sans-serif;
    }

    .product__name h3 {
        font-size: 1.2em;
        margin: 1rem 0;
        text-align: center;
        height: 4em;
        font-size: 14px;
        font-weight: 600;
    }

    .block-box-price {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }

    .product__price--show {
        font-size: 1.7em;
        color: #e74c3c;
        font-weight: bold;
    }

    .product__price--through {
        font-size: 1.2em;
        color: #999;
        text-decoration: line-through;
        font-weight: bold;
    }

    .product_Detail .Detail-price {
        align-items: flex-start;
        background: #f3f4f6;
        border: 1px solid #e5e7eb;
        border-radius: 5px;
        display: flex;
        font-size: 12px;
        line-height: 1.5;
        margin-left: 0;
        overflow: hidden;
        padding: 5px;
        text-transform: none;
        width: auto;
    }

    .rating-items {
        /* display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 3em; */
    }

    .bottom-div {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 3.5em;
        margin-top: auto;
    }

    .star-icon {
        display: flex;
    }

    .heart-content {
        display: flex;
        align-items: center;


    }









    .technicalInfo {
        max-width: 130rem;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 65% 1fr;
        margin-bottom: 2rem;
        gap: 1rem;
        margin-top: 2rem;
    }

    .box-Des,
    .boxFAQ,
    .technicalInfo_left,
    .technicalInfo_right {
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

    }

    .technical-content-item {
        font-size: 14px;
        width: 100%;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        /* padding: 0.5rem; */
    }

    .technical-content li:nth-child(odd) {
        background-color: #f2f2f2;
    }

    .technical-content .technical-content-item p:first-child {
        width: 40%;
    }

    .technical-content .technical-content-item div {
        width: 50%;
    }

    .accordion {
        border: 1px solid #e5e7eb;
        border-radius: 1rem;
        padding: 1rem;
        background-color: #f9f9f9;
    }

    .b-button {
        padding: 10px;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        margin-bottom: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .b-button:hover {
        background-color: #da8e8e;
    }

    .boxFAQ_title,
    .box-Des h2 {
        color: #d02c35;
        font-size: 24px;
        font-weight: 700;
        margin: 0;
        text-align: center;
        text-transform: uppercase;
    }

    .content-top {
        margin-bottom: 15px;
    }

    .content-top h2 {
        color: #363636;
        ;
        font-size: 1.5rem;
        font-weight: 600;
        margin: 0;
        text-align: center;
        text-transform: uppercase;
    }

    .title-m-b-3 {
        font-size: 24px;
        color: #333;
    }

    .technical-content {
        list-style: none;
        padding: 0;
    }

    .technical-content-item {
        margin-bottom: 10px;
    }

    .technical-content-item p {
        font-weight: bold;
        margin: 0;
    }

    .technical-content-item div {
        margin-top: 5px;
        color: #555;
    }

    .box_comment {
        max-width: 130rem;
        margin: 0 auto;
        padding: 1.5rem;
        border-radius: 1rem;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    .comment h2 {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #333;
    }

    .comment form div {
        margin-bottom: 1rem;
    }

    .comment label {
        display: block;
        font-weight: bold;
        margin-bottom: 0.5rem;
    }

    .comment input[type="text"],
    .comment textarea {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 0.5rem;
        box-sizing: border-box;
    }

    .comment button {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 0.5rem;
        background-color: #007bff;
        color: white;
        font-size: 1rem;
        cursor: pointer;
    }

    .comment button:hover {
        background-color: #0056b3;
    }

    .comment p {
        font-size: 1rem;
        color: #555;
    }

    .comment a {
        color: #007bff;
        text-decoration: none;
    }

    .comment a:hover {
        text-decoration: underline;
    }
    </style>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const breadcrumb = document.querySelector('.breadcrumb');
        const path = window.location.pathname.split('/').filter(segment => segment);
        let breadcrumbHTML = '<li><a href="/">Home</a></li>';

        path.forEach((segment, index) => {
            const url = '/' + path.slice(0, index + 1).join('/');
            if (index === path.length - 1) {
                breadcrumbHTML += `<li>${segment}</li>`;
            } else {
                breadcrumbHTML += `<li><a href="${url}">${segment}</a></li>`;
            }
        });

        breadcrumb.innerHTML = breadcrumbHTML;
    });
    </script>
</head>

<body>
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $urlParts = explode('/', trim($url, '/'));
    ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <?php
            $path = '';
            foreach ($urlParts as $part) {
                $path .= '/' . $part;
                echo '<li class="breadcrumb-item"><a href="' . $path . '">' . ucfirst($part) . '</a></li>';
            }
            ?>
        </ol>
    </nav>

    <section>

        <div class="box-detail-product">
            <div class="box-detail-product-left">
                <div class="title-product">
                    <h1><?= htmlspecialchars($product['Title']) ?></h1>
                </div>
                <div class="box-left">
                    <div class="box-detail-product-left-Gallery">
                        <div class="box-proview">
                            <img src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>">
                            <div>
                                <p class="tilte-desktop">
                                    Tính năng nổi bật
                                </p>
                                <div class="description">
                                    <?= htmlspecialchars($product['Description']) ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns-mt1">
                        <div class="columns-mt1-is-haft">
                            <div class="box-warranty-info">
                                <div class="box-title">
                                    <p>Thông tin sản phẩm</p>
                                </div>
                                <div class="box-content">
                                    <div class="items-info">
                                        <div class="icon">
                                            <img src="./admin/assets/images/gallery/1.png" alt="">
                                        </div>
                                        <div class="description">Máy mới 100% , chính hãng Apple Việt
                                            Nam.<br>CellphoneS hiện là đại lý bán lẻ uỷ quyền iPhone
                                            chính hãng VN/A của Apple Việt Nam</div>
                                    </div>
                                    <div class="items-info">
                                        <div class="icon">
                                            <img src="./admin/assets/images/gallery/2.png" alt="">
                                        </div>
                                        <div class="description">Hộp, Sách hướng dẫn, Cây lấy sim, Cáp
                                            Type C</div>
                                    </div>
                                    <div class="items-info">
                                        <div class="icon">
                                            <img src="./admin/assets/images/gallery/3.png" alt="">
                                        </div>
                                        <div class="description">1 ĐỔI 1 trong 30 ngày nếu có lỗi phần
                                            cứng nhà sản xuất. Bảo hành 12 tháng tại trung tâm bảo hành
                                            chính hãng Apple: CareS.vn<a target="_blank" href="#"
                                                style="color: red;">(xem chi tiết)</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns-mt1-haft">
                            <div class="box-warranty-info">
                                <div class="stock-option">
                                    <div class="stock-option-local">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-detail-product-right">
                <!-- <div class="list-linked">
                    <a href="#" class="item-list-linked">
                        <div>
                            <strong></strong>
                        </div>
                        <span></span>
                    </a>
                    <a href="#" class="item-list-linked">
                        <div>
                            <strong></strong>
                        </div>
                        <span></span>
                    </a>
                    <a href="#" class="item-list-linked">
                        <div>
                            <strong></strong>
                        </div>
                        <span></span>
                    </a>
                </div> -->
                <div class="block-box-price">
                    <p class="product__price--show">
                        <?= htmlspecialchars($product['Promotion_price']) ?>đ
                    </p>
                    <p class="product__price--through">
                        <?= htmlspecialchars($product['Price']) ?>đ
                    </p>
                </div>
                <div class="box-title">
                    <p>Chọn màu để xem giá và chi nhánh có hàng</p>
                </div>
                <div class="list-box-variant">
                    <div class="box-content">
                        <ul class="list-variant">
                            <li class="item-variant">
                                <a href="#" class="button__change-color">
                                    <img src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>">
                                    <div class="flex">
                                        <strong class="name"><?= htmlspecialchars($product['Color']) ?>
                                        </strong>
                                        <p class="product__price--show"
                                            style="color:#444;font-size:12px  ;font-weight:normal  ">
                                            <?= htmlspecialchars($product['Promotion_price']) ?>đ
                                        </p>
                                    </div>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="banner-block-right-promotion">
                    <div class="block-promotion-banner">
                        <a href="#" class="banner">
                            <!-- <img src="/Cellpones/image/product/iphone/iPhone-product-banner-v1.webp" alt=""> -->
                        </a>
                    </div>
                </div>
                <div class="box-product-promotion">
                    <div class="pay-left">
                        <a href="#">
                            <div class="p1">
                                <strong>MUA NGAY</strong>
                            </div>
                            <div class="p2">
                                <p>(Giao hàng nhanh từ 2 giờ hoặc nhận tại cửa hàng)</p>
                            </div>
                        </a>
                    </div>
                    <div class="add-to-card">
                        <a href="#">
                            <div class="box-pay-to-card">
                                <div class="img">
                                    <img src="./admin/assets/images/add-to-cart.png" alt="">
                                </div>
                                <div class="p">
                                    <p>Thêm vào giỏ hàng</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="category_products">
            <div class="category_products">
                <div class="category__products_controller">
                    <div class="parent_left">

                        <div class="specific-parent-category">
                            <div class="parent-category" id="parentCategory-4">
                                <h1>
                                    SẢN PHẨM TƯƠNG TỰ
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="categories_right">

                    </div>
                </div>
            </div>
            <div class="products_byParentCategory">
                <?php foreach ($relatedProducts as $relatedProduct): ?>
                <div class="product">
                    <div class="product__info"><a href="?act=showProductDetail&id=<?= $relatedProduct['id'] ?> "
                            class="product__link">
                            <div class="product__price--percent">
                                <p class="product__price--percent-detail">Giảm&nbsp;
                                    <?= htmlspecialchars($relatedProduct['discount'] ?? '0') ?>%
                                </p>
                            </div>
                            <div class="product__image"><img style="width: 160px; height: 160px;"
                                    src="./admin/assets/images/uploads/<?= htmlspecialchars($relatedProduct['Image']) ?>"
                                    alt="" loading="lazy"></div>
                            <div class="product__name">
                                <h3>
                                    <?= htmlspecialchars($relatedProduct['Name_product']) ?>
                                </h3>
                            </div>
                            <div class="block-box-price">
                                <p class="product__price--show">
                                    <?= htmlspecialchars($relatedProduct['Promotion_price']) ?>
                                </p>
                                <p class="product__price--through">
                                    <?= htmlspecialchars($relatedProduct['Price']) ?>
                                </p>
                            </div>
                            <div class="product_Detail">
                                <div class="Detail">
                                    <p class="Detail-price">
                                        <?= htmlspecialchars($relatedProduct['Detail']) ?>
                                    </p>
                                </div>
                            </div>
                        </a></div>
                    <div class="rating-items">
                        <div class="bottom-div">
                            <div class="star-icon">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                <div><img style="height: 20px; width: 20px;" src="./admin/assets/images/rating/star.png"
                                        alt=""></div>
                                <?php endfor; ?>
                            </div>
                            <div class="heart-content">
                                <p>Yêu Thích</p><a class="heat-icon" href="#"><img class="heat-icon-first"
                                        style="height: 20px; width: 20px;"
                                        src="./admin/assets/images/rating/heart-hover.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </section>
    <section>
        <div class="technicalInfo">
            <div class="technicalInfo_left">
                <div class="box-Des">
                    <h2>ĐẶC ĐIỂM NỔI BẬT</h2>
                </div>
                <div id="boxFAQ">
                    <p class="boxFAQ_title">Câu hỏi thường gặp</p>
                    <div role="tablist" class="accordion">
                        <div class="mb-1">
                            <div class="b-button button__show-faq">
                                <p>Tại sao nên mua
                                    <?php echo htmlspecialchars($product['Name_product']); ?> tại CellphoneS?
                                </p>
                                <div></div>
                            </div>

                            <div class="mb-1">
                                <div class="b-button button__show-faq">
                                    <p>Thiết kế của
                                        <?php echo htmlspecialchars($product['Name_product']); ?> ra sao?
                                    </p>
                                    <div></div>
                                </div>

                            </div>

                            <div class="mb-1">
                                <div class="b-button button__show-faq">
                                    <p>Công nghệ trên
                                        <?php echo htmlspecialchars($product['Name_product']); ?> có gì nổi bật?
                                    </p>
                                    <div></div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="technicalInfo_right">
                <div class="technical-info">
                    <div class="content-top">
                        <h2 class="title-m-b-3">Thông số kỹ thuật</h2>
                    </div>
                    <ul class="technical-content">
                        <li class="technical-content-item">
                            <p>Tốc độ CPU</p>
                            <div><?= htmlspecialchars($product['Cpu_speed']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Bộ nhớ</p>
                            <div><?= htmlspecialchars($product['Memory']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Cân nặng</p>
                            <div><?= htmlspecialchars($product['Weight']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Kích thước</p>
                            <div><?= htmlspecialchars($product['Size']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Hệ điều hành</p>
                            <div><?= htmlspecialchars($product['Os']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Camera chính</p>
                            <div><?= htmlspecialchars($product['Camera_primary']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Camera phụ</p>
                            <div><?= htmlspecialchars($product['Camera_secondary']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>WLAN</p>
                            <div><?= htmlspecialchars($product['Wlan']) ?></div>
                        </li>
                        <li class="technical-content-item">
                            <p>Màn hình</p>
                            <div><?= htmlspecialchars($product['Screen']) ?></div>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
    <section>
        <div class="box_comment">
            <div class="comment">
                <?php
                if (isset($_SESSION['user'])):
                    ?>
                <h2>Để lại bình luận</h2>
                <form action="?act=submit-comment" method="POST">
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">

                    <div>
                        <label for="phone_number">Số điện thoại:</label>
                        <input type="text" name="phone_number" id="phone_number" required>
                    </div>
                    <div>
                        <label for="comment_content">Nội dung bình luận:</label>
                        <textarea name="comment_content" id="comment_content" required></textarea>
                    </div>
                    <button type="submit">Gửi bình luận</button>
                </form>
                <?php else:
                    ?>
                <p>Vui lòng <a href="?act=login-client">đăng nhập</a> để bình luận.</p>
                <?php
                endif;
                ?>
            </div>
            <div></div>
        </div>
    </section>
</body>

</html>