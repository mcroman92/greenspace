<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css'
        integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>

    <link href='https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&family=Roboto+Slab:wght@100;200;300&family=Roboto:wght@100;400&display=swap' rel='stylesheet'>
    


    <link rel='stylesheet' href='style.css'>
    <title>Green Space</title>
</head>
<body>
    
     <div id='slideout-menu'>
        <ul>
        <li>
            <a href='index.php'>Home</a>
        </li>
        <li>
             <a href='about.php'>About Us</a>
        </li>
        <li>
             <a href='plants.php'>Medicinal Plants</a>
        </li>
        <li>
             <a href='contact.php'>Contact</a>
        </li>
        <li>
            
            
        </li>
    </ul>
    </div>  
      <!--Nav Bar-->
<nav>
    <div id='logo-img'>
       <a href='index.php' class='navbar-brand ml-3'>Green<span style='color: #526525;'>Space</span></a>
    </div>
    <div id='menu-icon'>
        <i class='fas fa-bars'></i>
    </div>
    <ul>
        <li>
            <a class='active' href='index.php'>Home</a>
        </li>
        <li>
             <a href='about.php'>About Us</a>
        </li>
        <li>
             <a href='plants.php'>Medicinal Plants</a>
        </li>
        <li>
             <a href='contact.php'>Contact</a>
        </li>
        <li>
            
        </li>
    </ul>
</nav>



<!--banner-->
<div id='banner'>
    <h1>Green Space</h1>
</div>
<main>
    <a href='plants.php'>
        <h2 class='section-heading'>Medicinal Plants</h2>
    </a>
<!--cards-->
    <section>
        <!--chamomile card-->
        <div class='card'>
          <div class='card-image'>
                <a href='chamomile.php'>
                    <img src='https://i.ibb.co/FK1Fz8F/chamomile.jpg' alt='card-image'>
                </a>
            </div>

            <div class='card-description'>
                <a href='chamomile.php'>
                    <h3>Chamomile</h3>
                </a>
                <p>Uses: fever, inflammation, muscle spasms, menstrual disorders, insomnia,
                     ulcers, wounds, gastrointestinal disorders, rheumatic pain, and hemorrhoids. 
                </p>
                <a href='chamomile.php' class='btn-readmore'>Read More</a>
            </div>
        </div>
    <!--echinacea card-->
    <div class='card'>
            <div class='card-image'>
                <a href='echinacea.php'>
                    <img src='https://i.ibb.co/YkZyysX/echinacea.jpg' alt='card-image'>
                </a>
            </div>

            <div class='card-description'>
                <a href='echinacea.php'>
                    <h3>Echinacea</h3>
                </a>
                <p>Uses: common cold, coughs, bronchitis, 
                    upper respiratory infections, and some inflammatory conditions.
                </p>
                <a href='echinacea.php' class='btn-readmore'>Read More</a>
            </div>
        </div>

    <!--ginger card-->
        <div class='card'>
            <div class='card-image'>
                <a href='ginger.php'>
                    <img src='https://i.ibb.co/khPwfQj/ginger.jpg' alt='card-image'>
                </a>
            </div>

            <div class='card-description'>
                <a href='ginger.php'>
                    <h3>Ginger</h3>
                </a>
                <p>Uses: many types of nausea and vomiting, menstrual cramps,
                     osteoarthritis, diabetes, migraine headaches.
                </p>
                <a href='ginger.php' class='btn-readmore'>Read More</a>
            </div>
        </div>
 <div id='loadMore'>
      <a href='plants.php'>Load More</a>
    </div>
  
    </section>
    <!--footer-->
    <footer>
        <!--quick links footer-->
        <div id='left-footer'>
            <h3>Quick Links</h3>
            <p>
               <ul>
                    <li>
                        <a href='index.php'>Home</a>
                    </li>
                     <li>
                        <a href='about.php'>About Us</a>
                    </li>
                     <li>
                        <a href='plants.php'>Medicinal Plants</a>
                    </li>
                     <li>
                        <a href='contact.php'>Contact</a>
                    </li>
                </ul>
            </p>
        </div>

       <!--social media footer-->
        <div id='right-footer'>
            <h3>Follow us on</h3>
            <div id='social-media-footer'>
                <ul>
                    <li>
                        <a href='http://facebook.com/facebook'target="_blank">
                            <i class='fab fa-facebook'></i>
                        </a>
                    </li>
                    <li>
                        <a href='http://twitter.com/twitter'target="_blank">
                            <i class='fab fa-instagram'></i>
                        </a>
                    </li>
                    <li>
                        <a href='http://instagram.com/instagram'target="_blank">
                            <i class='fab fa-twitter'></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</main>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js'
        integrity='sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx' crossorigin='anonymous'>
</script>

<script src='main.js'></script>
</body>
</html>
<script>
/*load btn*/
consolelog()
    $(document).ready(function () {
  $(".moreBox").slice(0, 3).show();
    if ($(".plants:hidden").length != 0) {
      $("#loadMore").show();
    }   
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
      $(".moreBox:hidden").slice(0, 6).slideDown();
      if ($(".moreBox:hidden").length == 0) {
        $("#loadMore").fadeOut('slow');
      }
    });
});
  

</script>