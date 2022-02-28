<!-- Newsletter code -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400&family=Roboto+Slab:wght@100;200;300&family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="emailstyle.css">
</head>
<body>
    <div class="container">
        <h2>Subscribe</h2>
        <form action="newsletterform.php" method="POST">
            <div class="inputBox">
                <input type="text" name="name" id="name" required="required">
                <span>Full Name</span>
            </div>
            <div class="inputBox">
                <input type="email" name="email" id="email" required="required">
                <span>Email</span>
            </div>
            <div class="inputBox">
                <input type="submit" name="submit" value="Send">
            </div>
        </form>
    </div>
</body>
</html>