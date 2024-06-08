<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/imges/favicon.png" rel="icon">
    <link href="assets/imges/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Contactez nous</title>
    <link rel="stylesheet" href="assets/css/Contact.css">
</head>
<body>
    <header id="navBar">
        <nav id="nav" class=" align-items-center  ">
            <div class="logo">
                <a class="navbar--logo fw-bolder fs-5 mainColor" href="index.html"><span style="color: darkgreen;">EO</span>Web</a>
            </div>
            <div id="LinksList" class="Links--list ">
                <a class="link" href="index.html">Acceuil</a>
                <a class="link" href="about.html">A propos</a>
                <a class="link" href="services.html">Services</a>
                <a class="link" href="Blog.html">Blog</a>
                <a class="buttom mainBg text-white shadow-none" href="Contact.html">Contactez-nous</a>
            </div>
            <div id="toggleMenu" class="toggle-menu">
                <span class="rounded-5"></span>
                <span class="rounded-5"></span>
                <span class="rounded-5"></span>
            </div>
        </nav>
    </header>

    <section id="main" class="main--section">
        <div class="container py-5">
            <!-- ... other content ... -->
        </div>
    </section>

    <section class="form--section">
        <h3 class="fw-bold text-center py-3 text-dark">Say hello</h3>
        <div class="container">
            <form action="send_email.php" method="post">
                <div class="row">
                    <div class="col-md-6 my-2">
                        <label for="name" class="py-1 fw-bold">First name</label>
                        <input id="name" name="first_name" type="text" class="w-100" aria-label="First name" required>
                    </div>
                    <div class="col-md-6 my-2">
                        <label for="Lastn" class="py-1 fw-bold">Last name</label>
                        <input id="Lastn" name="last_name" type="text" class="w-100" aria-label="Last name" required>
                    </div>
                    <div class="col-md-12 my-2">
                        <label for="Email" class="py-1 fw-bold">Email Address</label>
                        <input id="Email" name="email" type="email" class="w-100" aria-label="email" required>
                    </div>
                    <div class="col-md-12 my-2">
                        <label for="Message" class="py-1 fw-bold">Message</label>
                        <textarea id="Message" name="message" class="w-100" style="height: 100px" required></textarea>
                    </div>
                </div>
                <button type="submit" class="buttom text-white mt-2">Get in touch</button>
            </form>
        </div>
    </section>

    <footer>
        <!-- ... footer content ... -->
    </footer>

    <div id="loading" class="lodingsscren ">
        <div class="boxes">
            <!-- ... loading content ... -->
        </div>
    </div>
    <div id="scrollTopBtn">
        <img src="assets/imges/arrowUp.svg" loading="lazy" alt="arrowUp">
    </div>

    <script src="assets/scripts/jquery.js"></script>
    <script src="assets/scripts/bootstrap.bundle.min.js"></script>
    <script src="assets/scripts/script.js"></script>
</body>
</html>
