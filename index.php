
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Developer Deepan</title>
    <link rel="icon" type="image/x-icon" href="image/gogle.png">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stickys.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <div class="user">
        <img src="image/d2.jpg" alt="">
        <h3>Delveloper Deepan</h3>
        <p>Web Developer</p>
    </div>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">Education</a>
        <a href="#services">Skill</a>
        <a href="#portfolio">portfolio</a>
        <a href="#language">Known Language</a>
        <a href="#contact">contact</a>
    </nav>

</header>

<!-- header section ends -->

<div id="menu-btn" class="fas fa-bars"></div>

<!-- theme toggler  -->

<!-- <div id="theme-toggler" class="fas fa-moon"></div> -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Developer Deepan</h3>
        <p>Web Developer</p>
        <a href="" class="btn">download CV</a>
    </div>

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <!-- <a href="#" class="fab fa-twitter"></a> -->
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <!-- <a href="#" class="fab fa-pinterest"></a> -->
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> me </h1>

    <div class="row">

        <div class="box-container">
            <div class="box">
                <h3>Fresher</h3>
                <p>years of experience</p>
            </div>
            <!-- <div class="box">
                <h3>30+</h3>
                <p>satisfied students</p>
            </div>
            <div class="box">
                <h3>190+</h3>
                <p>working hours</p>
            </div>
            <div class="box">
                <h3>5+</h3>
                <p>awards won</p>
            </div> -->
        </div>

        <div class="content">
            <h3>my name is <span>Deepan</span></h3>
            <p>Want to Develope Web-site ?</p>
            <a href="https://api.whatsapp.com/send?phone=+919092837344" class="btn">contact me</a>
        </div>

    </div>

    
</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> my <span>Education</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>10th</h3>
            <p>T.M.H.N.U.Higher Secondary School,Theni(Dt)</p>
            <p>SSLC</p>
            <p>2016-2017</p>
            <p>79.4%</p>
            
        </div>

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>12th</h3>
            <p>Seventh Day Adventist Higher Secondary School,Madurai(Dt)</p>
            <p>HSC</p>
            <p>2017-2019</p>
            <p>50.6%</p>
        </div>
        <div class="box">
            <i class="fas fa-search-dollar"></i>
            <h3>B.Sc(computer Science)</h3>
            <p>The American College,Madurai</p>
            <p>2019-2022</p>
            <p>68.0%</p>
        </div>
    </div>
</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> my <span>Skill</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/img-11.jpg" alt="">
            <div class="content">
                <h3>C,C++</h3>
                <p>C++ was designed with an orientation toward systems programming and embedded, resource-constrained software and large systems, with performance, efficiency, and flexibility of use as its design highlights..</p>
            </div>
        </div>
        <div class="box">
            <img src="image/img-33.png" alt="">
            <div class="content">
                <h3>Web development</h3>
                <p>Every Web Developer must have a basic understanding of HTML, CSS, and JavaScript.
                Responsive Web Design is used in all types of modern web development.</p>
            </div>
        </div>
        <div class="box">
            <img src="image/img-66.png" alt="">
            <div class="content">
                <h3>python</h3>
                <p>Python is a high-level, general-purpose programming language. Its design philosophy emphasizes code readability with the use of significant indentation. Its language constructs and object-oriented approach aim to help programmers write clear, logical code for small- and large-scale projects.</p>
            </div>
        </div>
    </div>

</section>
<section class="language" id="language">

    <h1 class="heading"> Known <span>Language</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYWIF4u5yKAXirf3mRSul4CLMCjmXEImCO8w&usqp=CAU" alt="">
            <div class="content">
                <h3>Tamil</h3>
                <p>Well in Speak & Write</p>
            </div>
        </div>
        <div class="box">
            <img src="https://thumbs.dreamstime.com/b/english-colored-rainbow-word-text-suitable-logo-design-card-brochure-typography-127992761.jpg" alt="">
            <div class="content">
                <h3>English</h3>
                <p>Well in Speak & Write</p>
            </div>
        </div>
    </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> me </h1>

    <form action="">
        <input type="text" placeholder="your name" class="box">
        <input type="email" placeholder="your email" class="box">
        <input type="text" placeholder="subject" class="box">
        <textarea name="" class="box" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <a href="https://api.whatsapp.com/send?phone=+917358814652"><input type="button" value="send message" class="btn"></a>
    </form>

</section>

<!-- contact section ends -->

<div class="credits"> created by My<span> student-Deepan</span> | all rights reserved </div>

<div class="stickys">
    <a href="https://api.whatsapp.com/send?phone=+919092837344" target="_blank"><img src="image/what's app.png" style="width: 40px;"> </a><span>Whatsapp</span>
</div>
<div class="stickys1">
    <a href="tel:+919092837344" target="_blank"><img src="image/call.png" style="width: 40px;"> </a><span>Call Us</span>
</div>










<!-- custom js file link  -->

</body>
</html>