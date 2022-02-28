<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&family=Roboto+Slab:wght@100;200;300&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">
    <title>Green Space</title>
</head>
<body>
    <!--Slideout Menu-->
    <div id="slideout-menu">
        <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
             <a href="about.php">About Us</a>
        </li>
        <li>
             <a href="plants.php">Medicinal Plants</a>
        </li>
        <li>
             <a href="contact.php">Contact</a>
        </li>
        <li>
            
        </li>
    </ul>
    </div>
    <!--Nav Bar-->
<nav>
    <div id="logo-img">
       <a href="index.php" class="navbar-brand ml-3">Green<span style="color: #526525;">Space</span></a>
    </div>
    <div id="menu-icon">
        <i class="fas fa-bars"></i>
    </div>
    <ul>
        <li>
            <a class="active" href="index.php">Home</a>
        </li>
        <li>
             <a href="about.php">About Us</a>
        </li>
        <li>
             <a href="plants.php">Medicinal Plants</a>
        </li>
        <li>
             <a href="contact.php">Contact</a>
        </li>
        <li>
            
        </li>
    </ul>
</nav>



<!--banner-->
<div id="echi-banner">
    
</div>
<main>
    <h2 class="section-heading">Echinacea</h2>
    <div id="container">
        <section id="section">
            <div class="desc">
                <h2 class="desc-header">Description</h2>
                <p class="para">Echinacea, also known as coneflowers, is a perennial plant native to North America that is farmed
                    in both the United States and Europe for use in dietary supplements. 
                    Echinacea is a genus in the aster family containing nine plant species. 
                </p>
                <br>
                <h2 class="desc-header">Gardening</h2>
                <p class="para">Plant coneflowers about 1 to 3 feet apart, depending on the mature size of the variety.
                    If you are moving a potted plant into the ground, dig a hole about twice the pot’s diameter
                    and carefully place the plant in the soil. Bury the plant to the top of the root ball, 
                    but make sure the root ball is level with the soil surface. Water it thoroughly.
                </p>
                <br>
                <h2 class="desc-header">Preparation</h2>
                <p class="para">Echinacea tea can be made with either fresh or dried plant material. 
                    If you’re using fresh echinacea for tea, you’ll need about twice
                    as much for a tea of the same strength.
                    Start with 1/4 cup of loose leaf dried echinacea (or 1/2 cup fresh homegrown echinacea)
                    and pour about 8 ounces of boiling water over the herb.  
                    Allow the mixture to steep for about 15 minutes.  
                </p>  <br>
            </div>
            <!--video div -->
            <div>
                <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/wACIAwIk3RY" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                  </iframe>
            </div>
        </section>
        <br><br>
    </div>
</div>
    <!--footer-->
    <footer>
        <!--quick links footer-->
        <div id="left-footer">
            <h3>Quick Links</h3>
            <p>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                     <li>
                        <a href="about.php">About Us</a>
                    </li>
                     <li>
                        <a href="plants.php">Medicinal Plants</a>
                    </li>
                     <li>
                        <a href="contact.php">Contact</a>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<script src="main.js"></script>

</body>
</html>