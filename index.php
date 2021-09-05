<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lang.css">
</head>
<body>

    <header> 
    <?php
    include "navbar.php";
    ?>    
    </header>
    <header>
    <div id="google_translate_element" class="lang_trans"></div>

    </header>
    <div class="main">  
        <div class="jumbotron jumbotron-fluid">
          <img src="img/bloodbank.png" alt="" >
        </div>

        <div id="about">
          <p class="about-us">
            Have you at anytime witnessed a relative of yours or a close friend searching frantically for a blood donor, when blood banks say out of stock, the donors in mind are out of reach and the time keeps ticking? Have you witnessed loss of life for the only reason that a donor was not available at the most needed hour? Is it something that we as a society can do nothing to prevent? This thought laid our foundation.

            "Friends2support" is an organization that brings voluntary blood donors and those in need of blood on to a common platform.  Through this website, we seek donors who are willing to donate blood, as well as provide the timeliest support to those in frantic need of it.

            Our mission is to fulfill every blood request in the country with a promising web portal and motivated individuals who are willing to donate blood.

            Our vision is to be “The hope of every Indian in search of a voluntary blood donor”

            Our motto - “Donate blood to save the most precious human life”

          </p>
        </div>

    </div>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- This script tag is to stop form resumission of refresh -->
    <script>
      if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
      }
    </script> 
    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>