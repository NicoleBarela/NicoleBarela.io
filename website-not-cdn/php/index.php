<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>



<!----bootstrap css---->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<!----custom css---->
<link href="css/styles.css" rel="stylesheet">

<!----google fonts---->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!---bootstrap js---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<!----fontawesome---->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">



</head>

<body>
<!---nav--->
<header>


<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">Navbar</span>
  </div>
</nav>
</header>


<!---hero---->
<div id="hero-section">
    <div class="container-fluid hero-component hero-image">
        <div class="row">
            <div class="col-lg-6">
                <div class="padding-hero-text">
                    <h1 class="small-heading">Hello! I'm</h1>
                    <h1 class="owner-name">Nicole Liana Barela</h1>
                    <p class="intro">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et   dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
                    </div>
                    <a href="#" target="_self" type="button" class="btn btn-primary button_fill"><span class="button-font-color">Hire me</span></a>
                    <a href="#" target="_blank" type="button" class="btn button_text"><span class="button-font-color">Download CV</span><i class="fas fa-arrow-down download-arrow"></i></a>
            </div>
        </div>
    </div>
</div>

<!-----credentials----->
<div id="credentials1">
    <div class="container-fluid bg-box">
        <div class="row">
            <div class="align-credentials">
                <h3 class="credentiils-titles">13<br><span class="sub-credential">Happy Clients</span></h3>
                <h3 class="credentiils-titles">20<br><span class="sub-credential">Completed Projects</span></h3>
                <h3 class="credentiils-titles">5+<br><span class="sub-credential">Years of Experience</span></h3>
            </div>
        </div>
    </div>
</div>
<!---featured works--->
<div id="featured-project">
    <div class="container-fluid hero-component">
        <div class="row">
            <div class="col-lg-6">
                <div class="padding-hero-text">
                    <div class="horizontal-lines"></div>
                    <h1 class="titile-size">Featured Works</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
                </div>
                <a type="button" class="btn button_text">See more<i class="fas fa-arrow-right right-arrow"></i></a>
            </div>
            <div class="col-lg-6">
                <div id="project-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner"> 
                        <ol class="carousel-indicators indicator-placement">
                            <li data-bs-ride="carousel" class="active" data-bs-target="#project-carousel" data-bs-slide-to="0" aria-label="Slide 1" aria-current="true"></li>
                            <li data-bs-ride="carousel" data-bs-target="#project-carousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
                            <li data-bs-ride="carousel" data-bs-target="#project-carousel" data-bs-slide-to="2"></li>
                        </ol>                      
                        <div class="carousel-item carousel-item-bg active">
                            <img src="/images/bg-sample.jpg" class="d-block project-images" alt="">
                            <div class="container">
                                <div class="carousel-description-bg">
                                    <h2>project title 1</h2>
                                    <p>project description</p>
                                    <a href="#" class="btn button_text" type="button">learn more<i class="fas fa-arrow-right right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-bg">
                            <img src="/images/bg-sample 2.jpg" class="d-block project-images" alt="">
                            <div class="container">
                                <div class="carousel-description-bg">
                                    <h2>project title 2</h2>
                                    <p>project description</p>
                                    <a href="#" class="btn button_text" type="button">learn more<i class="fas fa-arrow-right right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item carousel-item-bg">
                            <img src="/images/bg sample 3.jpg" class="d-block project-images" alt="">
                            <div class="container">
                                <div class="carousel-description-bg">
                                    <h2>project title 3</h2>
                                    <p>project description</p>
                                    <a href="#" class="btn button_text" type="button">learn more<i class="fas fa-arrow-right right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!---testimony--->

<div id="testimony">
    <div class="container-fluid hero-component">
        <div class="row">
            <div class="col-lg-6">
                <div class="padding-hero-text">
                    <div class="horizontal-lines"></div>
                    <h1 class="titile-size">Pleasure to see my clients happy!</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et </p>
                </div>
            </div>
            <div class="col-lg-6">

        
                <div class="carousel-item active">
                    <div class="container card">
                        <div class="profile-image"></div>
                        <div class="client-placeholder"></div>
                        <div class="testimony-text">
                            <h3>Client Name</h3>
                            <p class="p-title-spacing">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor   invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</p>
                            <P>Client Name Here</P>
                        </div>
                    </div>   
                </div>

            </div>
        </div>
    </div>
</div>


<!----contact---->

<div id="contact">
    <div class=" container-fluid">
        <div class="row">
            <div>
                
            </div>
        </div>
    </div>
</div>


<!---footer--->
</body>

</html>