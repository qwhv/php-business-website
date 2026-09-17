<?php
$contact_boxData = $query->select('contact_box');
$contactData = $query->select('contact');
$moonAddress = 'اليمن، إب، الجبانة السفلى';
$moonPhoneOne = '+967773143853';
$moonPhoneTwo = '+967771949917';
$moonEmail = 'lood71117@gmail.com';
$moonInstagram = 'qwh.v';
$moonMapUrl = 'https://maps.app.goo.gl/1xGgJ1w1rdrQSALm9';
?>

<header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center">
                    <a href="mailto:<?php echo $moonEmail; ?>">
                        <?php echo $moonEmail; ?>
                    </a>
                </i>
                <i class="bi bi-phone d-flex align-items-center ms-4">
                    <span>
                        <a href="tel:<?php echo $moonPhoneOne; ?>">
                            <?php echo $moonPhoneOne; ?>
                        </a>
                    </span>
                </i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="https://wa.me/967773143853" class="whatsapp" target="_blank" aria-label="واتساب الرقم الأول"><i class="bi bi-whatsapp"></i></a>
                <a href="https://wa.me/967771949917" class="whatsapp" target="_blank" aria-label="واتساب الرقم الثاني"><i class="bi bi-whatsapp"></i></a>
                <a href="https://instagram.com/<?php echo $moonInstagram; ?>" class="instagram" target="_blank" aria-label="إنستجرام"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </div>

    <div class="branding">
        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="./" class="logo d-flex align-items-center">
                <h1 class="sitename">MOON<br><small>للتقنية والدعاية والإعلان</small></h1>
            </a>

            <?php $current_page = basename($_SERVER['PHP_SELF']); ?>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="./" class="<?= ($current_page == 'index.php') ? 'active' : ''; ?>">الرئيسية</a></li>
                    <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : ''; ?>">من نحن</a></li>
                    <li><a href="services.php" class="<?= ($current_page == 'services.php') ? 'active' : ''; ?>">خدماتنا</a></li>
                    <li><a href="products.php" class="<?= ($current_page == 'products.php') ? 'active' : ''; ?>">أعمالنا</a></li>
                    <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : ''; ?>">تواصل معنا</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </div>

</header>
