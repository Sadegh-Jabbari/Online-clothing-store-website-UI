<?php require_once 'inc/config.php' ?>
<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#884343">
    <title>فروشگاه اینترنتی پوشاک بانوان و آقایان | آی‌بولک</title>
    <link rel="icon" type="img/x-icon" href="img/ibolak-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="home">
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
                    <form action="categories.php" method="get">
                        <input type="text" name="search" placeholder="جستجو در آی&zwnj;بولک">
                        <button type="submit" name="search-btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
                <?php
                    if (isset($_GET['search-btn'])) {
                        $search = $_GET['search'];
                        $query = mysqli_query($conn, "SELECT * FROM products WHERE title LIKE '%$search%' OR description LIKE '%$search%' ");
                    }
                ?>
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
            </ul>
        </nav>
    </header>
    <main class="main-content">
        <section class="header">
            <div class="carousel">
                <div class="carousel-control">
                    <div class="arrows">
                        <a href="#">
                            <i class="fa fa-arrow-up"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-arrow-down"></i>
                        </a>
                    </div>
                </div>
                <div class="carousel-inner">
                    <img src="img/slide1.png">
                </div>
            </div>
            <!-- <div class="mobile-banner">
                <img src="img/slide1.png">
            </div> -->
        </section>
        <section class="main">
            <div class="banners">
                <div class="row">
                    <div class="col">
                        <a href="#">
                            <img src="img/women.jpg" alt="banner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="img/men.jpg" alt="banner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="img/scarf2.jpeg" alt="banner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img src="img/sales.jpg" alt="banner">
                        </a>
                    </div>
                </div>
            </div>
            <div class="product" id="newest">
                <div class="p-header">
                    <div class="p-title">
                        <h1>جدید‌ترین محصولات آی‌بولک</h1>
                        <small>اولین کسی باشید که سفارش می‌دهید</small>
                    </div>
                    <div class="p-arrows">
                        <a href="#">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                    </div>
                </div>
                <div class="p-slides">
                    <div class="ps-row">
                        <?php 
                            $query = mysqli_query($conn, "SELECT * FROM products");
                            while ($row = mysqli_fetch_array($query)):
                        ?>
                        <div class="ps-col">
                            <div class="p-card">
                                <a href="products.php?id=<?php echo $row['id']; ?>">
                                    <div class="p-image">
                                        <img src="img/<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>">
                                    </div>
                                    <div class="p-content">
                                        <h3> <?php echo $row['title']; ?> </h3>
                                        <div class="price">
                                            <strong><?php echo $row['cat_name']; ?></strong>
                                            <div>
                                                <s></s>
                                                <strong> <?php echo $row['price']; ?> تومان</strong>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <a class="p-btn">
                    <i class="fa fa-plus"></i>
                    <span>مشاهده محصولات بیشتر</span>
                </a>
            </div>
            <div class="why">
                <span>چرا از آی‌بولک خرید کنیم؟</span>
                <div class="row">
                    <div class="col">
                        <div class="sub-col">
                            <img src="img/moneybag.svg" alt="لباس‌های ارزان قیمت">
                            <div>
                                <h3>ترکیب جذاب از قیمت و تنوع</h3>
                                <p>تنوعی که هرگز در جایی دیگر پیدا نخواهید کرد</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sub-col">
                            <img src="img/hands.svg" alt="پشتیبانی ۲۴ ساعته">
                            <div>
                                <h3>ساعت پاسخگویی پشتیبانی از 9 صبح تا 6 عصر</h3>
                                <p>در هر مرحله‌ای همراه شما هستیم</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product" id="offers">
                <div class="p-header">
                    <div class="p-title">
                        <h1>پیشنهادهای ویژه</h1>
                        <small>قیمت‌هایی که هیچ‌کجا پیدا نخواهید کرد</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p6.jpg" alt="تاپ تور دوزی">
                                </div>
                                <div class="p-content">
                                    <h3>تاپ تور دوزی</h3>
                                    <div class="price">
                                        <strong></strong>
                                        <div>
                                            <s>79,000 تومان</s>
                                            <strong>59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p7.jpg" alt="دامن جیبدار آنغوره 2">
                                </div>
                                <div class="p-content">
                                    <h3>دامن جیبدار آنغوره 2</h3>
                                    <div class="price">
                                        <strong>خرید دامن</strong>
                                        <div>
                                            <s>139,000 تومان</s>
                                            <strong>99,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p8.jpg" alt="شلوار کتان کامایی">
                                </div>
                                <div class="p-content">
                                    <h3>شلوار کتان کامایی</h3>
                                    <div class="price">
                                        <strong>پارچه&zwnj;ای/کتان</strong>
                                        <div>
                                            <s>199,000 تومان</s>
                                            <strong>159,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p9.jpg" alt="تیشرت نخل اسپریت">
                                </div>
                                <div class="p-content">
                                    <h3>تیشرت نخل اسپریت</h3>
                                    <div class="price">
                                        <strong>تیشرت دخترانه شیک</strong>
                                        <div>
                                            <s>95,000 تومان</s>
                                            <strong>89,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p10.jpg" alt="تیشرت ساده منگو">
                                </div>
                                <div class="p-content">
                                    <h3>تیشرت ساده منگو</h3>
                                    <div class="price">
                                        <strong>تیشرت دخترانه شیک</strong>
                                        <div>
                                            <s>79,000 تومان</s>
                                            <strong>59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p11.jpg" alt="شلوار اسلش مخمل">
                                </div>
                                <div class="p-content">
                                    <h3>شلوار اسلش مخمل</h3>
                                    <div class="price">
                                        <strong>اسلش</strong>
                                        <div>
                                            <s>238,000 تومان</s>
                                            <strong>199,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="p-card">
                            <a href="#">
                                <div class="p-image">
                                    <img src="img/p12.jpg" alt="مانتو بلند چیندار">
                                </div>
                                <div class="p-content">
                                    <h3>مانتو بلند چیندار</h3>
                                    <div class="price">
                                        <strong>خرید مانتو/ژاکت</strong>
                                        <div>
                                            <s>149,000 تومان</s>
                                            <strong>99,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog">
                <div class="b-head">
                    <h3>بلاگ آی‌بولک</h3>
                    <a href="#">
                        <i class="fa fa-plus"></i>
                        <span>مشاهده همه</span>
                    </a>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <a href="#">
                                <div class="b-img">
                                    <img src="img/b1.jpg" alt="ست کردن تونیک شلوار برای مجالس خاص">
                                </div>
                                <div class="card-content">
                                    <h2>ست کردن تونیک شلوار برای مجالس خاص</h2>
                                    <small>26 بهمن 1400</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#">
                                <div class="b-img">
                                    <img src="img/b2.jpg" alt="راهنمای خرید لباس زیر(شورت و سوتین) مناسب خانم ها">
                                </div>
                                <div class="card-content">
                                    <h2>راهنمای خرید لباس زیر(شورت و سوتین) مناسب خانم ها</h2>
                                    <small>22 بهمن 1400</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#">
                                <div class="b-img">
                                    <img src="img/b3.jpg" alt="با مانتو های تیره چه شال هایی ست کنیم | با مانتوی مشکی چه رنگ شالی بپوشیم؟">
                                </div>
                                <div class="card-content">
                                    <h2>با مانتو های تیره چه شال هایی ست کنیم | با مانتوی مشکی چه رنگ شالی بپوشیم؟</h2>
                                    <small>20 بهمن 1400</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <a href="#">
                                <div class="b-img">
                                    <img src="img/b4.jpeg" alt="با مانتوی رنگی چه شالی سر کنیم | نحوه ست کردن با مانتو رنگی">
                                </div>
                                <div class="card-content">
                                    <h2>با مانتوی رنگی چه شالی سر کنیم | نحوه ست کردن با مانتو رنگی</h2>
                                    <small>20 بهمن 1400</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
                طراحی و توسعه توسط <a href="https://t.me/sadegh_1996">صادق</a>
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