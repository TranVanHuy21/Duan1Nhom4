<body>
    <div class="box-controll">
        <div class="body-menu-tree">
            <nav class="mega-menu">
                <ul class="box-menu">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <li>
                        <a href="?act=productByParent&id=<?php echo htmlspecialchars($parentCategory['id']) ?>">
                            <?= htmlspecialchars($parentCategory['parent_name']) ?>
                        </a>
                        <ul>
                            <?php foreach ($categories[$parentCategory['id']] as $category): ?>
                            <li><a href=" ?act=productByCategory&id=<?php echo htmlspecialchars($category['id']) ?>">
                                    <?= htmlspecialchars($category['Category_name']) ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
        <div class="slide-swiper-pre">
            <div class="slideshow-swiper-container">
                <div class="slides">
                    <?php foreach (array_slice($slides1, 0, 5) as $slide): ?>
                    <div class="slide">
                        <div class="slide-image"><a href="page-product.html"><img class="slide-img"
                                    src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                                    alt="<?= htmlspecialchars($slide['title']) ?>"></a></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <!-- < !-- <div class="slide-position">
            </div>-->

                <a class="prev" onclick="plusSlides(-1)">❮</a><a class="next" onclick="plusSlides(1)">❯</a>
                <div class="dots">
                    <?php for ($i = 1; $i <= count($slides1); $i++): ?><span class="dot"
                        onclick="currentSlide(<?= $i ?>)"></span>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="title-boxes">
                <?php foreach (array_slice($slides1, 0, 5) as $index => $slide): ?>
                <div class="title-box" onclick="currentSlide(<?= $index + 1 ?>)">
                    <?= htmlspecialchars($slide['title']) ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="slide-right">
            <div class="slide-container">
                <?php foreach ($slides2 as $slide): ?>
                <div class="slide2">
                    <div class="slide-image"><img
                            src="./admin/assets/images/uploads/<?= htmlspecialchars($slide['image']) ?>"
                            alt="<?= htmlspecialchars($slide['title']) ?>"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>








    <div class="banner-sale">
        <?php foreach ($slides3 as $slide3): ?>
        <div class="slide3">
            <div class="slide-image3"><img src="./admin/assets/images/uploads/<?= htmlspecialchars($slide3['image']) ?>"
                    alt="<?= htmlspecialchars($slide3['title']) ?>"></div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="box_products_sale">
        <div class="box_products_sale_controller">
            <div class="sale-banner"><span class="flame-icon">🔥</span><span class="sale-text">HOT SALE</span></div>
            <div class="box_countdown"><span>Kết Thúc Sau: </span>
                <div class="countdown" id="countdown"></div>
            </div>
        </div>
        <div class="box_sale_products_byParentCategory">
            <?php if (isset($productsMaxDiscount) && is_array($productsMaxDiscount)): ?>
            <?php foreach ($productsMaxDiscount as $product): ?>
            <div class="product">
                <div class="product__info"><a href="?act=showProductDetail&id=<?= $product['id'] ?> "
                        class="product__link">
                        <div class="product__price--percent">
                            <p class="product__price--percent-detail">Giảm&nbsp;
                                <?= htmlspecialchars($product['discount']) ?>%
                            </p>
                        </div>
                        <div class="product__image"><img style="width: 160px; height: 160px;"
                                src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>" alt=""
                                loading="lazy"></div>
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
                                    style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
            <p>Không có sản phẩm nào với mức giảm giá lớn nhất.</p>
            <?php endif; ?>
        </div>
    </div>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 3): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-3">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[3]) && is_array($categories[3])): ?>
                    <?php foreach ($categories[3] as $category): ?><a
                        href="?act=productByCategory&id=<?php echo htmlspecialchars($category['id']) ?>">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=3">Xem tất
                        cả</a>
                </div>
            </div>
            <div class="products_byParentCategory">
                <?php foreach ($products1 as $product): ?>
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
                                    <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                        style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 4): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[4]) && is_array($categories[4])): ?>
                    <?php foreach ($categories[4] as $category): ?><a
                        href="?act=productByCategory&id=<?php echo htmlspecialchars($category['id']) ?>">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=4">Xem tất
                        cả</a>
                </div>
            </div>
            <div class="products_byParentCategory">
                <?php foreach ($products2 as $product): ?>
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
                                    <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                        style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 5): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[5]) && is_array($categories[5])): ?>
                    <?php foreach ($categories[5] as $category): ?><a
                        href="?act=productByCategory&id=<?php echo htmlspecialchars(5) ?>">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=5">Xem tất
                        cả</a>
                </div>
            </div>
            <div class="products_byParentCategory">
                <?php foreach ($products3 as $product): ?>
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
                                    <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                        style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 6): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[6]) && is_array($categories[6])): ?>
                    <?php foreach ($categories[6] as $category): ?><a
                        href="?act=productByCategory&id=<?php echo htmlspecialchars($category['id']) ?>">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=6">Xem tất
                        cả</a>
                </div>
            </div>
            <div class="products_byParentCategory">
                <?php foreach ($products4 as $product): ?>
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
                                    <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                        style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                        alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 7): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[7]) && is_array($categories[7])): ?>
                    <?php foreach ($categories[7] as $category): ?><a href="#">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=7">Xem tất
                        cả</a>
                </div>
            </div>
        </div>
        <div class="products_byParentCategory">
            <?php foreach ($products5 as $product): ?>
            <div class="product">
                <div class="product__info"><a href="?act=showProductDetail&id=<?= $product['id'] ?> "
                        class="product__link">
                        <div class="product__price--percent">
                            <p class="product__price--percent-detail">Giảm&nbsp;
                                <?= htmlspecialchars($product['discount'] ?? '0') ?>%
                            </p>
                        </div>
                        <div class="product__image"><img style="width: 160px; height: 160px;"
                                src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>" alt=""
                                loading="lazy"></div>
                        <div class="product__name">
                            <h3>
                                <?= htmlspecialchars($product['Name_product']) ?>
                            </h3>
                        </div>
                        <div class="block-box-price">
                            <p class="product__price--show">
                                <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                    style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">
                    <?php foreach ($parentCategories as $parentCategory): ?>
                    <?php if ($parentCategory['id'] == 8): ?>
                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                <?php echo htmlspecialchars($parentCategory['parent_name']); ?>
                            </h1>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="categories_right">
                    <?php if (isset($categories[8]) && is_array($categories[8])): ?>
                    <?php foreach ($categories[8] as $category): ?><a
                        href="?act=productByCategory&id=<?php echo htmlspecialchars($category['id']) ?>">
                        <?= htmlspecialchars($category['Category_name']) ?>
                    </a>
                    <?php endforeach; ?>
                    <?php endif; ?><a href="?act=productByParent&id=7">Xem tất
                        cả</a>
                </div>
            </div>
        </div>
        <div class="products_byParentCategory">
            <?php foreach ($products6 as $product): ?>
            <div class="product">
                <div class="product__info"><a href="?act=showProductDetail&id=<?= $product['id'] ?> "
                        class="product__link">
                        <div class="product__price--percent">
                            <p class="product__price--percent-detail">Giảm&nbsp;
                                <?= htmlspecialchars($product['discount'] ?? '0') ?>%
                            </p>
                        </div>
                        <div class="product__image"><img style="width: 160px; height: 160px;"
                                src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>" alt=""
                                loading="lazy"></div>
                        <div class="product__name">
                            <h3>
                                <?= htmlspecialchars($product['Name_product']) ?>
                            </h3>
                        </div>
                        <div class="block-box-price">
                            <p class="product__price--show">
                                <?= htmlspecialchars($product['Promotion_price']) ?>đ
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
                                    style="height: 20px; width: 20px;" src="./admin/assets/images/rating/heart.png"
                                    alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <section>
        <div class="category_products">
            <div class="category__products_controller">
                <div class="parent_left">

                    <div class="specific-parent-category">
                        <div class="parent-category" id="parentCategory-4">
                            <h1>
                                TOP SẢN PHẨM YÊU THÍCH
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="categories_right">

                </div>
            </div>
        </div>
        <div class="products_byParentCategory">
            <?php foreach ($topProducts as $product): ?>
            <div class="product">
                <div class="product__info"><a href="?act=showProductDetail&id=<?= $product['id'] ?> "
                        class="product__link">
                        <div class="product__price--percent">
                            <p class="product__price--percent-detail">Giảm&nbsp;
                                <?= htmlspecialchars($product['discount'] ?? '0') ?>%
                            </p>
                        </div>
                        <div class="product__image"><img style="width: 160px; height: 160px;"
                                src="./admin/assets/images/uploads/<?= htmlspecialchars($product['Image']) ?>" alt=""
                                loading="lazy"></div>
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

    </section>
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