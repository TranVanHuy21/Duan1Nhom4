<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Kết quả Tìm kiếm Sản phẩm</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .body-menu-tree {
        max-width: 130rem;
        margin: 0 auto;
    }

    .mega-menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    .mega-menu>ul>li {
        position: relative;
        margin-right: 20px;
    }

    .mega-menu a {
        text-decoration: none;
        padding: 10px 20px;
        display: block;
        background-color: #333;
        color: #fff;
    }

    .mega-menu ul ul {
        position: absolute;
        top: 100%;
        left: 0;
        display: none;
        flex-direction: column;
        z-index: 1000;
    }

    .mega-menu ul ul li {
        width: 200px;
    }

    .mega-menu ul ul a {
        background-color: #444;
    }

    .mega-menu ul li:hover>ul {
        display: flex;
    }

    .mega-menu ul ul ul {
        left: 100%;
        top: 0;

    }

    .box_slides_bottom,
    .box-searchProduct {

        max-width: 130rem;
        margin: 0 auto;
        overflow: hidden;
        margin-bottom: 3rem;
    }

    .box-searchProduct {
        margin-top: 3rem;
        min-height: 50rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .search-results {
        width: 100%;
    }

    .products_byParentCategory {
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

    .slides_bottom {
        display: flex;
        gap: 1rem;

    }

    .slide_image {
        flex: 0 0 calc(25% - 1rem);

    }

    .slide_image img {
        width: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 1rem;
        box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .1), 0 2px 6px 2px rgba(60, 64, 67, .15);
    }

    .box_slides_bottom .news_title {
        color: #444;
        font-size: 16px;
        font-weight: 600;
        height: 48px;

    }
    </style>
</head>

<body>
    <div class="body-menu-tree">
        <nav class="mega-menu">
            <ul>
                <?php foreach ($parentCategories as $parentCategory): ?>
                <li><a href="?act=productByParent&id">
                        <?= htmlspecialchars($parentCategory['parent_name']) ?>
                    </a>
                    <ul>
                        <?php foreach ($categories[$parentCategory['id']] as $category): ?>
                        <li><a href="?act=productByCategory&id=<?= $category['id'] ?>">
                                <!-- Added category ID to the link -->
                                <?= htmlspecialchars($category['Category_name']) ?>
                            </a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
    <div class="box-searchProduct">
        <h1>Kết quả Tìm kiếm cho từ khóa "<?= htmlspecialchars($query) ?>":</h1>
        <div class="search-results">
            <div class="products_byParentCategory">
                <?php foreach ($products as $product): ?>
                <div class="product">
                    <div class="product__info"><a href="?act=showProductDetail&id=<?= $product['id'] ?> "
                            class="product__link">
                            <div class="product__price--percent">
                                <p class="product__price--percent-detail">Giảm&nbsp;
                                    <?= htmlspecialchars($product['discount'] ?? '0') ?>%
                                </p>
                            </div>
                            <div class="product__image"><img style="width: 160px; height: 160px;"
                                    src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>"
                                    alt="" loading="lazy"></div>
                            <div class="product__name">
                                <h3>
                                    <?= htmlspecialchars($product['Name_product']) ?>
                                </h3>
                            </div>
                            <div class="block-box-price">
                                <p class="product__price--show">
                                    <?= htmlspecialchars($product['Promotion_price']) ?>
                                </p>
                                <p class="product__price--through">
                                    <?= htmlspecialchars($product['Price']) ?>
                                </p>
                            </div>
                            <div class="product_Detail">
                                <div class="Detail">
                                    <p class="Detail-price">
                                        <?= htmlspecialchars($product['Detail']) ?>
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
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?act=searchProducts&page=<?= $i ?>&query=<?= urlencode($query) ?>"><?= $i ?></a>
            <?php endfor; ?>
        </div>

    </div>

    <section class="box_slides_bottom">
        <h1>ƯU ĐÃI SINH VIÊN</h1>
        <div class="slides_bottom">
            <?php foreach ($slides7 as $slide): ?>
            <div class="slide_image"><a href="#?id=<?= htmlspecialchars($slide['id']) ?>"><img
                        src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                        alt="<?= htmlspecialchars($slide['title']) ?>"></a></div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="box_slides_bottom">
        <h1>ƯU ĐÃI THANH TOÁN</h1>
        <div class="slides_bottom">
            <?php foreach ($slides8 as $slide): ?>
            <div class="slide_image"><a href="#?id=<?= htmlspecialchars($slide['id']) ?>"><img
                        src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                        alt="<?= htmlspecialchars($slide['title']) ?>"></a></div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="box_slides_bottom">
        <h1>CHUYÊN TRANG THƯƠNG HIỆU</h1>
        <div class="slides_bottom">
            <?php foreach ($slides9 as $slide): ?>
            <div class="slide_image"><a href="#?id=<?= htmlspecialchars($slide['id']) ?>"><img
                        src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                        alt="<?= htmlspecialchars($slide['title']) ?>"></a></div>
            <?php endforeach; ?>
        </div>
    </section>
    <section class="box_slides_bottom">
        <h1>TIN TỨC CÔNG NGHỆ</h1>
        <div class="slides_bottom">
            <?php foreach ($slides10 as $slide): ?>
            <div class="slide_image"><a href="#?id=<?= htmlspecialchars($slide['id']) ?>"><img
                        src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                        alt="<?= htmlspecialchars($slide['title']) ?>">
                    <div class="news_title">
                        <p>
                            <?= htmlspecialchars($slide['title']) ?>
                        </p>
                    </div>
                </a></div>
            <?php endforeach; ?>
        </div>
    </section>
</body>

</html>