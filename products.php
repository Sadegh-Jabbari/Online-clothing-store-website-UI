<?php
    require_once 'inc/config.php';
    $id = $_GET['id'];
    $query = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'");
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#884343">
    <title><?php echo $row['title'] ?> | آی‌بولک</title>
    <link rel="icon" type="img/x-icon" href="img/ibolak-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="products">
    <header class="topbar">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="img/ibolak-logo.png" alt="iBolak">
                </a>
                <span>لذت یک خرید شیک</span>
            </div>
            <div class="mobile-only"></div>
            <div class="top-left">
                <div class="search">
                    <form>
                        <input type="text" name="search" placeholder="جستجو در آی&zwnj;بولک">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <em>0</em>
                </a>
                <a href="#">
                    <i class="fa fa-user-o"></i>
                </a>
            </div>
        </div>
        <nav class="menu">
            <ul>
                <li>
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>حراجی</span>
                    </a>
                </li>
                <li class="has-megamenu">
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>لباس زنانه</span>
                    </a>
                    <i class="fa fa-angle-down"></i>
                    <div class="megamenu">
                        <div class="megamenu-content">
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            بلوز/ شومیز
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            هودی/ سوییشرت/ پلیور
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            خرید دامن
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            روپوش
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                پانچو/ بارانی
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                کاپشن
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                کت/ کت کتان/ کت جین/ کت دیگه حالا هرچی
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                خرید مانتو/ ژاکت
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            خرید شلوار
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                اسلش
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                پارچه&zwnj;ای/ کتان
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                شلوار جین زنانه جذب/ مام فیت/ مام استایل
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                لگ زنانه
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                شلوارک
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                شلوار راحتی
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            لباس اسپرت و راحتی
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                بلوز آستین بلند
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                تاپ نیم تنه مجلسی و اسپرت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                تیشرت دخترانه شیک
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                ست راحتی
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                سرهمی
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                لباس خواب
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                پیراهن
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                ست اسپرت زنانه
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            سایر
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                اکسسوری
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                جوراب/ لباس زیر
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                چشم بند
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                لباس بارداری
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            کفش
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            کیف آرایشی
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-megamenu">
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>شال و روسری</span>
                    </a>
                    <i class="fa fa-angle-down"></i>
                    <div class="megamenu">
                        <div class="megamenu-content">
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            کلاه
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            شال
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            روسری
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-megamenu">
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>لباس مردانه</span>
                    </a>
                    <i class="fa fa-angle-down"></i>
                    <div class="megamenu">
                        <div class="megamenu-content">
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            بالاپوش
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                پیراهن مردانه
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            شلوار
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                شلوارک
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            لباس اسپرت
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                تیشرت
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                ست اسپرت مردانه
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                سوییشرت/ پلیور/ هودی
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            سایر
                                        </h4>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                جوراب
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-megamenu">
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>لباس بچگانه</span>
                    </a>
                    <i class="fa fa-angle-down"></i>
                    <div class="megamenu">
                        <div class="megamenu-content">
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            دخترانه
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            پسرانه
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            نوزاد
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="has-megamenu">
                    <a href="#">
                        <i class="fa fa-dot-circle-o"></i>
                        <span>سایر</span>
                    </a>
                    <i class="fa fa-angle-down"></i>
                    <div class="megamenu">
                        <div class="megamenu-content">
                            <div class="row">
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            تابستانه
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            زمستانه
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            رسمی
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <h4>
                                            تزیینی
                                        </h4>
                                    </a>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <section class="header">
                <div class="page-address">
                    <a href="index.php" title="home">
                        فروشگاه آی‌بولک
                    </a>
                    <a href="#">
                        دسته‌بندی اول
                    </a>
                    <a href="#">
                        دسته‌بندی دوم
                    </a>
                    <a href="#">
                        دسته‌بندی سوم
                    </a>
                    <span>
                        نام محصول
                    </span>
                </div>
                <div class="row">
                    <div class="col-1">
                        <div class="product-images">
                            <div class="mobile-only back-btn" onclick="window.history.go(-1)">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="product-image">
                                <img src="img/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                            </div>
                            <div class="product-thumbnails">
                                <a href="#" class="next">
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="#" class="prev">
                                    <i class="fa fa-arrow-left"></i>
                                </a>
                                <div class="slides">
                                    <div class="product-thumbnail-outer">
                                        <a href="#">
                                            <img src="img/p1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-thumbnail-outer">
                                        <a href="#">
                                            <img src="img/p1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-thumbnail-outer">
                                        <a href="#">
                                            <img src="img/p1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="product-thumbnail-outer">
                                        <a href="#">
                                            <img src="img/p1.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger">
                            با توجه به تفاوت رنگ‌ها در صفحه نمایش دستگاه‌های مختلف، ممکن است رنگ محصولات در تصویر تا 20٪ با واقعیت متفاوت باشد.
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="product-body">
                            <h1>
                                <?php echo $row['title']; ?>
                            </h1>
                            <div class="options">
                                <div class="cat-name">
                                    <a href="#">
                                        <?php echo $row['cat_name']; ?>
                                    </a>
                                </div>
                                <div class="share-fav">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-body-inner">
                                <div class="product-variants">
                                    <div class="row">
                                        <div class="col">
                                            <div class="label">
                                                <label for="">
                                                    رنگ:
                                                </label>
                                            </div>
                                            <div class="select">
                                                <select name="" id="">
                                                    <option value="">انتخاب کنید</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="label">
                                                <label for="">
                                                    سایز (حروفی):
                                                </label>
                                            </div>
                                            <div class="select">
                                                <select name="" id="">
                                                    <option value="">انتخاب کنید</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="size-btn">
                                    <span>جدول سایزبندی</span>
                                </a>
                                <div class="product-price">
                                    <strong>
                                        <?php echo $row['price']; ?> تومان
                                    </strong>
                                </div>
                            </div>
                            <div class="product-count">
                                <span>تعداد:</span>
                                <div class="counter">
                                    <a href="#">+</a>
                                    <span> 1 </span>
                                    <a href="#">-</a>
                                </div>
                            </div>
                            <div class="product-actions">
                                <button class="buy">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>افزودن به سبد خرید</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="footer">
                <div class="product-description">
                    <h3>توضیحات کالا</h3>
                    <div>
                        <?php echo $row['description']; ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-block">
                        <h5>دسترسی سریع</h5>
                        <div class="fb-content">
                            <nav class="footer-menu">
                                <ul>
                                    <li>
                                        <a href="#">
                                            صفحه اصلی
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            بلاگ آی‌بولک
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            پیگیری شکایات
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            شرایط مرجوعی
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            تماس با‌ ما
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            درباره‌ما
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            سوالات متداول
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            قوانین
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            مردانه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            زنانه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            کودکانه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            تابستانه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            تزیینی
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            زمستانه
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            رسمی
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="footer-block">
                        <h5>آدرس فروشگاه</h5>
                        <div class="fb-content">
                            <p>
                                <i class="fa fa-map-pin"></i>
                                <span>
                                    گرگان، بلوار مورد علاقه رئیسی، بالاتر از عدالت ۵۶، نرسیده به میدان گلشهر، فروشگاه آی‌بولک
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="footer-block">
                        <h5>شماره‌های تماس</h5>
                        <p>
                            <i class="fa fa-phone"></i>
                            <span>
                                <a href="tel:09036075199">
                                    09036075199
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="social-media">
                <p></p>
                <div class="row">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://t.me/sadegh_1996">
                        <i class="fa fa-telegram"></i>
                    </a>
                </div>
            </div>
            <p class="designer">
                طراحی و توسعه توسط <a href="https://t.me/sadegh_1996">صادق</a> 😎😂
            </p>
        </div>
    </footer>
    <nav class="mobile-menu">
        <a href="#">
            <i class="fa fa-home"></i>
            <small>خانه</small>
        </a>
        <a href="#">
            <i class="fa fa-bars"></i>
            <small>دسته‌بندی‌ها</small>
        </a>
        <a href="#">
            <i class="fa fa-shopping-cart"></i>
            <small>سبد خرید</small>
            <em>0</em>
        </a>
        <a href="#">
            <i class="fa fa-search"></i>
            <small>جستجو</small>
        </a>
        <a href="#">
            <i class="fa fa-user"></i>
            <small>ورود</small>
        </a>
    </nav>
</body>
</html>