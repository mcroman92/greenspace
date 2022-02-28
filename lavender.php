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
<div id="lav-banner">
    
</div>
<main>
    <h2 class="section-heading">Lavender</h2>
    <div id="container">
        <section id="section">
            <div class="desc">
                <h2 class="desc-header">Description</h2>
                <p class="para">Lavender, an herb with many culinary uses, also makes a stunning addition to
                    borders and perennial gardens, providing sweeping drifts of color from early summer
                    into fall. With its silvery-green foliage, upright flower spikes and compact shrub-like
                    form, lavender is ideal for creating informal hedges. 
                    You can also harvest it for fragrant floral arrangements, sachets, and potpourri. 
                </p>
                <br>
                <h2 class="desc-header">Gardening</h2>
                <p class="para">All lavender varieties require well-drained soil, especially during the winter months. 
                    To ensure good drainage, mix some sand or gravel into the soil before you plant
                    lavender or grow the plants in mounds, raised beds, or on slopes.
                    Instead of applying moisture-holding organic mulches,
                    consider using rock or stone, especially in humid climates.
                </p>
                <br>
                <h2 class="desc-header">Preparation</h2>
                <p class="para">Boil 8 oz. of water.
                   Place 4 tsp. of fresh lavender buds into a tea ball or sachet.
                   Place the tea ball and water into a teacup.
                   Let steep for 10 minutes.
                </p> <br>
            </div>
            <!--video div -->
            <div>
                <iframe width="560" height="315" 
                src="https://www.youtube.com/embed/TY8DZcVNTy4" 
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