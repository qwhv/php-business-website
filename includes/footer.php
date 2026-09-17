<footer id="footer" class="footer position-relative dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 col-sm-12 footer-about mb-4">
                <a href="./" class="d-flex align-items-center">
                    <span class="sitename">MOON</span>
                </a>
                <div class="footer-contact pt-3">
                    <p><strong>العنوان:</strong> <a href="<?php echo $moonMapUrl; ?>" target="_blank"><?php echo $moonAddress; ?></a></p>
                    <p class="mt-3"><strong>الهاتف:</strong> <span><a href="tel:<?php echo $moonPhoneOne; ?>"><?php echo $moonPhoneOne; ?></a> - <a href="tel:<?php echo $moonPhoneTwo; ?>"><?php echo $moonPhoneTwo; ?></a></span></p>
                    <p><strong>البريد الإلكتروني:</strong> <a href="mailto:<?php echo $moonEmail; ?>"><?php echo $moonEmail; ?></a></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 footer-links mb-4">
                <h4>روابط مهمة</h4>
                <ul>
                    <li><i class="bi bi-chevron-left"></i> <a href="./">الرئيسية</a></li>
                    <li><i class="bi bi-chevron-left"></i> <a href="about.php">من نحن</a></li>
                    <li><i class="bi bi-chevron-left"></i> <a href="products.php">أعمالنا</a></li>
                    <li><i class="bi bi-chevron-left"></i> <a href="services.php">خدماتنا</a></li>
                    <li><i class="bi bi-chevron-left"></i> <a href="contact.php">تواصل معنا</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-follow mb-4">
                <h4>تابعنا</h4>
                <p>نبقيكم على اطلاع بأحدث أعمالنا وخدماتنا. تابعونا عبر وسائل التواصل الاجتماعي.</p>
                <div class="social-links d-flex">
                    <a href="https://wa.me/967773143853" target="_blank" aria-label="واتساب الرقم الأول"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://wa.me/967771949917" target="_blank" aria-label="واتساب الرقم الثاني"><i class="bi bi-whatsapp"></i></a>
                    <a href="https://instagram.com/<?php echo $moonInstagram; ?>" target="_blank" aria-label="إنستجرام"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>حقوق النشر</span> <strong class="px-1 sitename">MOON</strong> <span>جميع الحقوق محفوظة</span></p>
    </div>

    <style>
        footer .sitename {
            color: var(--accent-color);
        }

        .footer-contact p span:hover {
            color: var(--accent-color);
        }
    </style>

</footer>