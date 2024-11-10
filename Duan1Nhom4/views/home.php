<section class="container">
    <div class="block-top-home-flex">
        <div class="label-menu-tree-items">
            <div class="body-menu-tree">
                <nav class="mega-menu">
                    <ul>
                        <?php foreach ($categories as $category): ?>
                        <li>
                            <a
                                href="?act=showSubCategories&Parent_id=<?= $category['id'] ?>"><?= htmlspecialchars($category['Category_name']) ?></a>
                            <?php if ($category['Parent_id']): ?>
                            <ul>
                                <?php foreach ($subCategory_client as $subCategory): ?>
                                <li>
                                    <a
                                        href="?act=showSubCategories&Parent_id=<?= $subCategory['id'] ?>"><?= htmlspecialchars($subCategory['Category_name']) ?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="block-top-home-flex">
            <div class="slide-swiper-pre">
                <div class="slideshow-swiper-container">
                    <div class="slides">
                        <?php foreach ($slides as $slide): ?>
                        <div class="slide">
                            <div class="slide-image">
                                <a href="page-product.html">
                                    <img class="slide-img" src="<?= htmlspecialchars($slide['image']) ?>"
                                        alt="<?= htmlspecialchars($slide['title']) ?>">
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="slide-position"></div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    <div class="dots">
                        <?php for ($i = 1; $i <= count($slides); $i++): ?>
                        <span class="dot" onclick="currentSlide(<?= $i ?>)"></span>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="silde-swiper-pre-content">
                    <?php foreach ($slides as $index => $slide): ?>
                    <div class="slide-content" onclick="currentSlide(<?= $index + 1 ?>)">
                        <?= htmlspecialchars($slide['title']) ?>
                        <br>
                        <?= htmlspecialchars($slide['description']) ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="banner-right-content">
            <div class="banner-content-img">
                <div class="banner">
                    <a href="#">
                        <img src="assets/image/swiper silde top right/samsung-s23-th1-right.webp" alt="">
                    </a>
                </div>
                <div class="banner">
                    <a href="#">
                        <img src="assets/image/swiper silde top right/right sv.webp" alt="">
                    </a>
                </div>
                <div class="banner">
                    <a href="#">
                        <img src="assets/image/swiper silde top right/right banner ipad.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hozironal-banner-holidays">
        <img src="assets/image/special-cho-tet-new-desk.gif" alt="">
    </div>
</section>

<section class="container">
    <div class="box-hotsale">
        <div class="box-hotsale-title">
            <div class="box-tab-menu">
                <a href="#">
                    <p class="button-select-tab">
                        Điện thoại, TV
                    </p>
                </a>
                <a href="#">
                    <p class="button-select-tab">
                        Laptop, IT
                    </p>
                </a>
                <a href="#">
                    <p class="button-select-tab">
                        Phụ kiện
                    </p>
                </a>
            </div>
            <div class="box-image">
                <img src="/Cellpones/image/hs-cuoi-tuan-tet-text.webp" alt="">
            </div>
            <div class="box-cowndown">
                <img src="/Cellpones/image/cowndowwn.png" alt="">
            </div>

        </div>
        <div class="box-hotsale-content">
            <div class="swiper-container-product">
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png"
                                            alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <section class="Body-list-container-product-outstanding">
        <div class="body-list">
            <div lass="List-container-product-outstanding">
                <div class="container-title-outstanding">
                    <div class="outstanding-left">
                        <a href="#">
                            <h2 class="title-left-outstanding">
                                <strong>ĐIỆN THOẠI NỔI BẬT NHẤT</strong>
                            </h2>
                        </a>
                    </div>
                    <div class="outstanding-right">
                        <div class="outstanding-right-list-items">
                            <a href="#" class="related-tag-button__link">Apple</a>
                            <a href="#" class="related-tag-button__link">Sam Sung</a>
                            <a href="#" class="related-tag-button__link">Xiaomi</a>
                            <a href="#" class="related-tag-button__link">Oppo</a>
                            <a href="#" class="related-tag-button__link">ViVo</a>
                            <a href="#" class="related-tag-button__link">Realme</a>
                            <a href="#" class="related-tag-button__link">Asus</a>
                            <a href="#" class="related-tag-button__link">Tecno</a>
                            <a href="#" class="related-tag-button__link">Nokia</a>
                            <a href="#" class="related-tag-button__link">Infinix</a>
                            <a href="#" class="related-tag-button__link">Onplus</a>
                            <a href="#" class="related-tag-button__link">Xem tất cả</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-content-outstanding">
                <div class="container-content-outstanding-product">
                    <div class="box-product-list-items">
                        <!-- /*-------*/ -->
                        <div class="swiper-slide-product">
                            <div class="product__info-container">
                                <div class="product__info">

                                    <a href="#" class="product__link">
                                        <div class="product__price--percent">
                                            <p class="product__price--percent-detail">
                                                Giảm&nbsp;8%
                                            </p>
                                        </div>
                                        <div class="product__image">
                                            <img style=" width: 160px;
                                                height: 160px;"
                                                src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                                alt="" loading="lazy">
                                        </div>
                                        <dv class="product__name">
                                            <h3>
                                                Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                                CellphoneS
                                            </h3>
                                        </dv>
                                        <div class="block-box-price">
                                            <p class="product__price--show">
                                                17.550.000₫
                                            </p>
                                            <p class="product__price--through">
                                                33.990.000₫
                                            </p>


                                            <div class="product__promotions">
                                                <div class="promotion">
                                                    <p class="coupon-price">
                                                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                        Finance+
                                                    </p>
                                                </div>
                                            </div>


                                    </a>

                                </div>
                                <div class="rating-items">
                                    <div class="bottom-div">
                                        <div class="star-icon">
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                        </div>
                                        <div class="heart-content">
                                            <p>Yêu Thích</p>
                                            <a class="heat-icon" href="#">
                                                <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                    src="/Cellpones/image/Hotsale/heart.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide-product">
                            <div class="product__info-container">
                                <div class="product__info">

                                    <a href="#" class="product__link">
                                        <div class="product__price--percent">
                                            <p class="product__price--percent-detail">
                                                Giảm&nbsp;8%
                                            </p>
                                        </div>
                                        <div class="product__image">
                                            <img style=" width: 160px;
                                                height: 160px;"
                                                src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                                alt="" loading="lazy">
                                        </div>
                                        <dv class="product__name">
                                            <h3>
                                                Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                                CellphoneS
                                            </h3>
                                        </dv>
                                        <div class="block-box-price">
                                            <p class="product__price--show">
                                                17.550.000₫
                                            </p>
                                            <p class="product__price--through">
                                                33.990.000₫
                                            </p>


                                            <div class="product__promotions">
                                                <div class="promotion">
                                                    <p class="coupon-price">
                                                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                        Finance+
                                                    </p>
                                                </div>
                                            </div>


                                    </a>

                                </div>
                                <div class="rating-items">
                                    <div class="bottom-div">
                                        <div class="star-icon">
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                        </div>
                                        <div class="heart-content">
                                            <p>Yêu Thích</p>
                                            <a class="heat-icon" href="#">
                                                <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                    src="/Cellpones/image/Hotsale/heart.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide-product">
                            <div class="product__info-container">
                                <div class="product__info">

                                    <a href="#" class="product__link">
                                        <div class="product__price--percent">
                                            <p class="product__price--percent-detail">
                                                Giảm&nbsp;8%
                                            </p>
                                        </div>
                                        <div class="product__image">
                                            <img style=" width: 160px;
                                                height: 160px;"
                                                src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                                alt="" loading="lazy">
                                        </div>
                                        <dv class="product__name">
                                            <h3>
                                                Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                                CellphoneS
                                            </h3>
                                        </dv>
                                        <div class="block-box-price">
                                            <p class="product__price--show">
                                                17.550.000₫
                                            </p>
                                            <p class="product__price--through">
                                                33.990.000₫
                                            </p>


                                            <div class="product__promotions">
                                                <div class="promotion">
                                                    <p class="coupon-price">
                                                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                        Finance+
                                                    </p>
                                                </div>
                                            </div>


                                    </a>

                                </div>
                                <div class="rating-items">
                                    <div class="bottom-div">
                                        <div class="star-icon">
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                        </div>
                                        <div class="heart-content">
                                            <p>Yêu Thích</p>
                                            <a class="heat-icon" href="#">
                                                <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                    src="/Cellpones/image/Hotsale/heart.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide-product">
                            <div class="product__info-container">
                                <div class="product__info">

                                    <a href="#" class="product__link">
                                        <div class="product__price--percent">
                                            <p class="product__price--percent-detail">
                                                Giảm&nbsp;8%
                                            </p>
                                        </div>
                                        <div class="product__image">
                                            <img style=" width: 160px;
                                                height: 160px;"
                                                src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                                alt="" loading="lazy">
                                        </div>
                                        <dv class="product__name">
                                            <h3>
                                                Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                                CellphoneS
                                            </h3>
                                        </dv>
                                        <div class="block-box-price">
                                            <p class="product__price--show">
                                                17.550.000₫
                                            </p>
                                            <p class="product__price--through">
                                                33.990.000₫
                                            </p>


                                            <div class="product__promotions">
                                                <div class="promotion">
                                                    <p class="coupon-price">
                                                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                        Finance+
                                                    </p>
                                                </div>
                                            </div>


                                    </a>

                                </div>
                                <div class="rating-items">
                                    <div class="bottom-div">
                                        <div class="star-icon">
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                        </div>
                                        <div class="heart-content">
                                            <p>Yêu Thích</p>
                                            <a class="heat-icon" href="#">
                                                <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                    src="/Cellpones/image/Hotsale/heart.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-slide-product">
                            <div class="product__info-container">
                                <div class="product__info">

                                    <a href="#" class="product__link">
                                        <div class="product__price--percent">
                                            <p class="product__price--percent-detail">
                                                Giảm&nbsp;8%
                                            </p>
                                        </div>
                                        <div class="product__image">
                                            <img style=" width: 160px;
                                                height: 160px;"
                                                src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                                alt="" loading="lazy">
                                        </div>
                                        <dv class="product__name">
                                            <h3>
                                                Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                                CellphoneS
                                            </h3>
                                        </dv>
                                        <div class="block-box-price">
                                            <p class="product__price--show">
                                                17.550.000₫
                                            </p>
                                            <p class="product__price--through">
                                                33.990.000₫
                                            </p>


                                            <div class="product__promotions">
                                                <div class="promotion">
                                                    <p class="coupon-price">
                                                        Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                        Finance+
                                                    </p>
                                                </div>
                                            </div>


                                    </a>

                                </div>
                                <div class="rating-items">
                                    <div class="bottom-div">
                                        <div class="star-icon">
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                            <div>
                                                <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                            </div>
                                        </div>
                                        <div class="heart-content">
                                            <p>Yêu Thích</p>
                                            <a class="heat-icon" href="#">
                                                <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                    src="/Cellpones/image/Hotsale/heart.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>

    </section>
</section>

<section>
    <section class="Body-list-container-product-outstanding">
        <div class="container-content-outstanding">
            <div class="container-content-outstanding-product">
                <div class="box-product-list-items">
                    <!-- /*-------*/ -->
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                                height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                                height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                                height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                                height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                                height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                    width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </section>
</section>

<section class="Body-list-container-product-outstanding">
    <div class="body-list">
        <div lass="List-container-product-outstanding">
            <div class="container-title-outstanding">
                <div class="outstanding-left">
                    <a href="#">
                        <h2 class="title-left-outstanding">
                            <strong>LAPTOP</strong>
                        </h2>
                    </a>
                </div>
                <div class="outstanding-right">
                    <div class="outstanding-right-list-items">
                        <a href="#" class="related-tag-button__link">Macbook</a>
                        <a href="#" class="related-tag-button__link">Asus</a>
                        <a href="#" class="related-tag-button__link">MSI</a>
                        <a href="#" class="related-tag-button__link">Lenovo</a>
                        <a href="#" class="related-tag-button__link">HP</a>
                        <a href="#" class="related-tag-button__link">Acer</a>
                        <a href="#" class="related-tag-button__link">Dell</a>
                        <a href="#" class="related-tag-button__link">Huawei</a>
                        <a href="#" class="related-tag-button__link">Gygabyte</a>
                        <a href="#" class="related-tag-button__link">Surface</a>
                        <a href="#" class="related-tag-button__link">Xem tất cả</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-content-outstanding">
            <div class="container-content-outstanding-product">
                <div class="box-product-list-items">
                    <!-- /*-------*/ -->
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>

</section>
<section class="Body-list-container-product-outstanding">
    <div class="container-content-outstanding">
        <div class="container-content-outstanding-product">
            <div class="box-product-list-items">
                <!-- /*-------*/ -->
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
</section>
<section class="Body-list-container-product-outstanding">
    <div class="body-list">
        <div lass="List-container-product-outstanding">
            <div class="container-title-outstanding">
                <div class="outstanding-left">
                    <a href="#">
                        <h2 class="title-left-outstanding">
                            <strong>MÁY TÍNH BẢNG</strong>
                        </h2>
                    </a>
                </div>
                <div class="outstanding-right">
                    <div class="outstanding-right-list-items">
                        <a href="#" class="related-tag-button__link">iPad 10.2 2021</a>
                        <a href="#" class="related-tag-button__link">Tab S9</a>
                        <a href="#" class="related-tag-button__link">iPad Air</a>
                        <a href="#" class="related-tag-button__link">iPad Pro</a>
                        <a href="#" class="related-tag-button__link">Samsung</a>
                        <a href="#" class="related-tag-button__link">Lenovo</a>
                        <a href="#" class="related-tag-button__link">Xiaomi</a>
                        <a href="#" class="related-tag-button__link">Huawei</a>
                        <a href="#" class="related-tag-button__link">Xem tất cả</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-content-outstanding">
            <div class="container-content-outstanding-product">
                <div class="box-product-list-items">
                    <!-- /*-------*/ -->
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide-product">
                        <div class="product__info-container">
                            <div class="product__info">

                                <a href="#" class="product__link">
                                    <div class="product__price--percent">
                                        <p class="product__price--percent-detail">
                                            Giảm&nbsp;8%
                                        </p>
                                    </div>
                                    <div class="product__image">
                                        <img style=" width: 160px;
                                            height: 160px;"
                                            src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp"
                                            alt="" loading="lazy">
                                    </div>
                                    <dv class="product__name">
                                        <h3>
                                            Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                            CellphoneS
                                        </h3>
                                    </dv>
                                    <div class="block-box-price">
                                        <p class="product__price--show">
                                            17.550.000₫
                                        </p>
                                        <p class="product__price--through">
                                            33.990.000₫
                                        </p>


                                        <div class="product__promotions">
                                            <div class="promotion">
                                                <p class="coupon-price">
                                                    Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                    Finance+
                                                </p>
                                            </div>
                                        </div>


                                </a>

                            </div>
                            <div class="rating-items">
                                <div class="bottom-div">
                                    <div class="star-icon">
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                        <div>
                                            <img style="height: 20px;
                                                width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                        </div>
                                    </div>
                                    <div class="heart-content">
                                        <p>Yêu Thích</p>
                                        <a class="heat-icon" href="#">
                                            <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                                src="/Cellpones/image/Hotsale/heart.png" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>

    </div>

</section>
<section class="Body-list-container-product-outstanding">
    <div class="container-content-outstanding">
        <div class="container-content-outstanding-product">
            <div class="box-product-list-items">
                <!-- /*-------*/ -->
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-slide-product">
                    <div class="product__info-container">
                        <div class="product__info">

                            <a href="#" class="product__link">
                                <div class="product__price--percent">
                                    <p class="product__price--percent-detail">
                                        Giảm&nbsp;8%
                                    </p>
                                </div>
                                <div class="product__image">
                                    <img style=" width: 160px;
                                        height: 160px;"
                                        src="/Cellpones/image/Hotsale/samsung-galaxy-s22-ultra-12gb-256gb.webp" alt=""
                                        loading="lazy">
                                </div>
                                <dv class="product__name">
                                    <h3>
                                        Samsung Galaxy S22 Ultra (12GB - 256GB) - Chỉ có tại
                                        CellphoneS
                                    </h3>
                                </dv>
                                <div class="block-box-price">
                                    <p class="product__price--show">
                                        17.550.000₫
                                    </p>
                                    <p class="product__price--through">
                                        33.990.000₫
                                    </p>


                                    <div class="product__promotions">
                                        <div class="promotion">
                                            <p class="coupon-price">
                                                Trả góp 0% lãi, 0 trả trước, 0 phụ phí qua Samsung
                                                Finance+
                                            </p>
                                        </div>
                                    </div>


                            </a>

                        </div>
                        <div class="rating-items">
                            <div class="bottom-div">
                                <div class="star-icon">
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                    <div>
                                        <img style="height: 20px;
                                            width: 20px;" st src="/Cellpones/image/Hotsale/star.png" alt="">
                                    </div>
                                </div>
                                <div class="heart-content">
                                    <p>Yêu Thích</p>
                                    <a class="heat-icon" href="#">
                                        <img class="heat-icon-first" style="height: 20px; width: 20px;"
                                            src="/Cellpones/image/Hotsale/heart.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="box-bottum">
    <div class="categoties-title">
        <div class="categoties-title-left">
            <a href="#">
                <p>PHỤ KIỆN</p>
            </a>
        </div>
        <div class="categoties-title-right">
            <a href="#">
                <p>Xem tất cả</p>
            </a>
        </div>
    </div>
</section>
<section class="categoties-title">
    <div class="body-box-phu-kien">
        <div class="box-bottum-phu-kien-1">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Nổi bật</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-2">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Phụ kiện Apple</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-3">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Dán màn hình</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-4">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Ốp lưng-Bao da</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-5">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Camera - hành trình</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-6">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Cáp sạc</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-7">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Pin dự phòng</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-8">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Thiết bị mạng</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-9">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Gaming Gear</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-10">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Gimbal</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-11">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Thẻ nhớ - USB</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-12">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Chuột - Bàn phím</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-13">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Sim - 4G</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-14">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Sim số đẹp</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-15">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Camera </p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-16">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Phụ kiện khác</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-17">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Balo - túi chống sốc</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-18">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Quạt </p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-19">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Ổ cứng </p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-20">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Apple Care</p>
                </a>
            </div>
        </div>

    </div>

</section>
<section class="box-bottum">
    <div class="categoties-title">
        <div class="categoties-title-left">
            <a href="#">
                <p>LINH KIỆN MÁY TÍNH</p>
            </a>
        </div>
        <div class="categoties-title-right">
            <a href="#">
                <p>Xem tất cả</p>
            </a>
        </div>
    </div>
</section>
<section class="categoties-title">
    <div class="body-box-phu-kien">
        <div class="box-bottum-phu-kien-21">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>PC ráp sẵn CellphoneS</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-22">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>CPU</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-23">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Mainboard</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-24">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>RAM</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-25">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Ổ cứng</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-26">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Card màn hình</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-27">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Nguồn máy tính</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-28">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Tản nhiệt</p>
                </a>
            </div>
        </div>
        <div class="box-bottum-phu-kien-29">
            <div class="box-bottum-items-phu-kien">
                <a href="#">
                    <p>Case máy tính</p>
                </a>
            </div>

        </div>

</section>
<section class="box-bottum">
    <div class="categoties-title">
        <div class="categoties-title-left">
            <a href="#">
                <p>ƯU ĐÃI SINH VIÊN</p>
            </a>
        </div>
    </div>
</section>
<section class="box-bottum">
    <section class="brand-banner">
        <div class="brand-banner-flex">
            <div class="swiper-slide-prev-1">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/dongho-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-2">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/laptop-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-3">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/ss-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-4">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/vivo-hssv-sliding-2024.webp" alt=""> -->
                </a>
            </div>
        </div>
    </section>
</section>
<section class="box-bottum">
    <div class="categoties-title">
        <div class="categoties-title-left">
            <a href="#">
                <p>ƯU ĐÃI THANH TOÁN</p>
            </a>
        </div>
    </div>
</section>
<section class="box-bottum">
    <section class="brand-banner">
        <div class="brand-banner-flex">
            <div class="swiper-slide-prev-5">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/dongho-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-6">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/laptop-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-7">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/ss-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-8">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/vivo-hssv-sliding-2024.webp" alt=""> -->
                </a>
            </div>
        </div>
    </section>
</section>
<section class="box-bottum">
    <div class="categoties-title">
        <div class="categoties-title-left">
            <a href="#">
                <p>CHUYÊN TRANG THUONG HIỆU</p>
            </a>
        </div>
    </div>
</section>
<section class="box-bottum">
    <section class="brand-banner">
        <div class="brand-banner-flex">
            <div class="swiper-slide-prev-9">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/dongho-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-10">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/laptop-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-11">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-students/ss-hssv-sliding-2024.webp" alt="" loading="lazy"> -->
                </a>
            </div>
            <div class="swiper-slide-prev-12">
                <a href="#">
                    <!-- <img src="assets/image/brand-banner-studen ts/vivo-hssv-sliding-2024.webp" alt=""> -->
                </a>
            </div>
        </div>
    </section>
</section>
<section class="box-bottum">
    <div class="page-up-top">
        <a href="#" id="btn-totop">

        </a>
    </div>
</section>