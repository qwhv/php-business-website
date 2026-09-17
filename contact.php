<?php
include 'config.php';
$query = new Database();
$moonAddress = 'اليمن، إب، الجبانة السفلى';
$moonPhoneOne = '+967773143853';
$moonPhoneTwo = '+967771949917';
$moonEmail = 'lood71117@gmail.com';
$moonInstagram = 'qwh.v';
$moonMapUrl = 'https://maps.app.goo.gl/1xGgJ1w1rdrQSALm9';
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>تواصل معنا | MOON</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightboFx/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="contact-page">

  <?php include 'includes/header.php' ?>

  <main class="main">

    <!-- Page title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="./">الرئيسية</a></li>
            <li class="current">تواصل معنا</li>
          </ol>
        </nav>
        <h1>تواصل معنا</h1>
      </div>
    </div><!-- End of Page title -->

    <!-- Contact section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
              <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                data-aos-delay="100">
                <i class="bi bi-geo-alt"></i>
                <h3>العنوان</h3>
                <p><a href="<?php echo $moonMapUrl; ?>" target="_blank"><?php echo $moonAddress; ?></a></p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="150">
              <i class="bi bi-whatsapp"></i>
              <h3>واتساب</h3>
              <p><a href="https://wa.me/967773143853" target="_blank"><?php echo $moonPhoneOne; ?></a><br><a href="https://wa.me/967771949917" target="_blank"><?php echo $moonPhoneTwo; ?></a></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-envelope"></i>
              <h3>البريد الإلكتروني</h3>
              <p><a href="mailto:<?php echo $moonEmail; ?>"><?php echo $moonEmail; ?></a></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="250">
              <i class="bi bi-instagram"></i>
              <h3>إنستجرام</h3>
              <p><a href="https://instagram.com/<?php echo $moonInstagram; ?>" target="_blank">@<?php echo $moonInstagram; ?></a></p>
            </div>
          </div>

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <iframe
              src="https://www.google.com/maps?q=%D8%A7%D9%84%D9%8A%D9%85%D9%86%20%D8%A5%D8%A8%20%D8%A7%D9%84%D8%AC%D8%A8%D8%A7%D9%86%D8%A9%20%D8%A7%D9%84%D8%B3%D9%81%D9%84%D9%89&output=embed"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End of Google Map -->

          <div class="col-lg-6">
            <form action="send_message.php" method="post" class="php-email-form" id="contactForm" data-aos="fade-up"
              data-aos-delay="100">
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="الاسم" required=""
                    maxlength="255">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required=""
                    maxlength="255">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="الموضوع" required=""
                    maxlength="255">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="رسالتك" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">

                  <button type="submit">إرسال الرسالة</button>
                  <div class="sent-message" style="display: none;">تم إرسال رسالتك بنجاح!</div>
                  <div class="error-message" style="display: none;"></div>
                </div>
              </div>
            </form>

          </div><!-- End of Contact Form -->

        </div>

      </div>

    </section><!-- End of Contact section -->

  </main>

  <?php include 'includes/footer.php' ?>

  <!-- Scroll to Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.getElementById('contactForm').addEventListener('submit', function (e) {
      e.preventDefault();

      // Ensure the form submission happens only once
      const submitButton = e.target.querySelector('button[type="submit"]');
      submitButton.disabled = true;

      const formData = new FormData(this);
      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'send_message.php', true);
      xhr.onload = function () {
        if (this.status === 200) {
          const response = JSON.parse(this.responseText);
          if (response.status === 'success') {
            document.querySelector('.sent-message').style.display = 'block';
            document.querySelector('.error-message').style.display = 'none';
            setTimeout(() => {
              document.querySelector('.sent-message').style.display = 'none';
            }, 3000);
            document.getElementById('contactForm').reset();
          } else {
            document.querySelector('.error-message').textContent = response.message;
            document.querySelector('.error-message').style.display = 'block';
            document.querySelector('.sent-message').style.display = 'none';
          }
        }
        submitButton.disabled = false;
      };
      xhr.send(formData);
    });
  </script>

</body>

</html>