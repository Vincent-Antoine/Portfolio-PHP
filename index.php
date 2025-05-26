<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Comparato Vincent-Antoine</title>
  <meta name="description" content="Portfolio de Vincent-Antoine Comparato, étudiant en développement web de 22 ans à Bordeaux. Expériences en marketing digital, référencement, et développement full stack. Compétences en HTML/CSS/JavaScript, PHP, Symfony, SQL et WordPress. Contactez-moi pour en savoir plus sur mes réalisations et mon parcours.">

  <!-- Style principal -->
  <link rel="stylesheet" href="style.css">

  <!-- Fonts Google (avec preconnect pour une meilleure performance) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  </noscript>

  <!-- Font Awesome -->
  <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </noscript>

  <!-- Bootstrap CSS (utilisé en mode différé) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" media="print" onload="this.media='all'">
  <noscript>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  </noscript>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/webp" href="images/VAC_noir.webp" />

  <script src="https://www.google.com/recaptcha/api.js?render=6LcCFJUqAAAAALBCFXJXeirQOkPw5oKD9-pqaNgw"></script>
  <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('6LcCFJUqAAAAALBCFXJXeirQOkPw5oKD9-pqaNgw', {
        action: 'submit'
      }).then(function(token) {
        document.getElementById('recaptchaResponse').value = token;
      });
    });
  </script>

  <!-- Google Analytics -->
  <script>
    // Attendre une interaction avant de charger Google Tag Manager
    function loadGTM() {
      const script = document.createElement('script');
      script.src = 'https://www.googletagmanager.com/gtag/js?id=G-HM9NKZZNQ2';
      script.async = true;
      document.head.appendChild(script);

      // Initialiser Google Analytics après le chargement
      script.onload = function() {
        window.dataLayer = window.dataLayer || [];

        function gtag() {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-HM9NKZZNQ2');
      };
    }

    // Charger GTM après une interaction
    window.addEventListener('scroll', loadGTM, {
      once: true
    });
    window.addEventListener('mousemove', loadGTM, {
      once: true
    });
    window.addEventListener('touchstart', loadGTM, {
      once: true
    });
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-HM9NKZZNQ2');
  </script>

  <!-- FontAwesome Kit  -->
  <script defer src="https://kit.fontawesome.com/b29cc327d9.js" crossorigin="anonymous"></script>



</head>

<body>

  <?php
  include 'parts/header.php';
  include 'parts/introduction.php';
  include 'parts/realisations.php';
  include 'parts/contact.php';
  include 'parts/footer.php';
  ?>

  <button class="back-to-top btn btn-warning rounded-circle p-2 position-fixed" style="bottom: 20px; right: 20px; display: none;" aria-label="Back to top">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
      <path d="M12 5.5a.747.747 0 0 1 .53.22l3.75 3.75a.75.75 0 0 1-1.06 1.06L12.75 7.81v8.94a.75.75 0 1 1-1.5 0V7.81l-2.47 2.47a.75.75 0 0 1-1.06-1.06l3.75-3.75A.747.747 0 0 1 12 5.5z" />
    </svg>
  </button>

  <!-- Balise script bootstrap-->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


  <!-- Ton fichier script.js -->
  <script src="script.js"></script>


</body>

</html>