<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Portfolio</title>
        <!-- MDB -->
        <link rel="stylesheet" href="css/mdb.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css">
         <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">

       <!-- Animate on Scroll CDN -->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    

    </head>

 <body>

    <!-- main section -->
<div class="row ">

<!-- Sidebar -->
  <div class="col-md-3 side-bar offset-md-1">


    <!-- Scrollspy -->
    <div id="scrollspy-collapsible" class="sticky-top">

        <div class="image">
            <img src="./images/profile.png" class="img-fluid offset-3 mt-5 profile-image" alt="Profile">
             <h5 class="text-center mt-2">John Morphie</h5>
             <p class="muted text-center">Full-Stack Web Developer</p>
        </div>

      <ul class="nav flex-column nav-pills menu-sidebar text-center p-1 gap-3">
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#service">Service</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#education">Education</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#epxerience">Experience</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#work">Work</a></li>
        <li class="nav-item"><a class="nav-link collapsible-scrolspy " href="#contact">Contact</a></li>
      </ul>


      <!-- Copy right Info -->
    <div class="text-center copyright mt-5 text-muted">

     <small>&copy;Copy Right 2024. <br>
      Technologies used: Laravel + MBD Bootstrap 5+ <br>
      Created by Ahmadzai Walizadah</small> 
      
    </div>


    </div>
    <!-- end Scrollspy -->
  </div>

    <!-- Main Page -->
  <div class="col-md-8">
    <!-- Spied element -->
    <div data-mdb-scrollspy-init data-mdb-target="#scrollspy-collapsible"data-mdb-offset="0" class="scrollspy-example">

      <section  id="home" >
          
          <!-- Carousel-slider -->
<div id="carouselExampleCaptions" class="carousel carousel-fade" data-mdb-ride="carousel" data-mdb-carousel-init>
  <div class="carousel-indicators">
        <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1" aria-label="Slide 2"></button>

  </div>

  <div class="carousel-inner">

    <div class="carousel-item active ratio ratio-1x1 h-50%">
         <img src="images/profile1.jpg"  alt="Profile 1"/>
      <div class="carousel-caption d-none d-md-block">
         <h5>Full Stack Web Application Developer</h5>
         <p>Currently imployeed in one of the greatest IT Companies in Germany</p>
      </div>
    </div>

    <div class="carousel-item ratio  ratio-1x1" >
      <img src="images/profile2.jpg" alt="Profile 2"/>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-dark">Above 10 Years of Experiences</h5>
        <p class="text-dark">Team-work, Project-Management.</p>
      </div>
    </div>
  </div>
</div> <!-- End of Carousel -->


      </section>

      <section id="about" class="m-5 p2">
        <h6 >About-Us</h6>

        <h3 class="text-center">Who Am I?</h3>
        
        
        <p> <b>Hi I'm Jackson Ford</b> On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country.</p>

        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>

        <div class="row">
            
        <div class="col-md-3 mb-2" data-aos="zoom-out">
          <div class="card card-graphic">
              <div class="card-body">
                <h5 class="card-title text-center"><i class="far fa-lightbulb fa-3x text-danger"></i></h5>
                <p class="card-text text-center p-3 twisterInDown">Graphic Design</p>
              </div>
            </div>   
            <hr  class="hr-graphic">  
         </div>

            <div class="col-md-3 mb-2" data-aos="zoom-out">
            <div class="card card-it">
              <div class="card-body">
                <h5 class="card-title text-center"><i class="fas fa-globe fa-3x text-warning"></i></h5>
                <p class="card-text text-center p-3 twisterInDown">IT & Networking</p>

              </div>
            </div> 
            <hr  class="hr-it">
         </div>

            <div class="col-md-3 mb-2" data-aos="zoom-out">
            <div class="card card-graphic">
              <div class="card-body">
                <h5 class="card-title text-center"><i class="fas fa-database fa-3x text-success"></i></h5>
                <p class="card-text text-center p-3">Database Development</p>
            </div>
            <hr  class="hr-database">
        </div> 

            </div>

            <div class="col-md-3 mb-2" data-aos="zoom-out">
             <div class="card card-web">
              <div class="card-body">
                <h5 class="card-title text-center"><i class="fas fa-laptop-code fa-3x text-primary"></i></h5>
                <p class="card-text text-center p-3">Web App</p>
              </div>
            </div>
            <hr  class="hr-web-app"> 
        </div>
        </div>

        <div class="row mt-4">
             <!-- Extra Information -->
        <div class="cotnainer info-box bg-warning text-white p-4 rounded rounded-2">
            <h2 class="text-center">I'm Happy to share</h2>

            <p class="lead">I've done Successfully more then 1,000 Projects in my life time.</p>
            <a class="btn btn-outline-danger bordered border-0">Hire Me</a>
            
        </div>
        </div>

        <!-- Service  -->

      </section>

      <section id="service">
        
        @include('./partials/service')
        
       
      </section>

      <section id="skills">
            @include('./partials.skills')
      </section>


      <section id="education">
            @include('./partials/education')
      </section>


      <section id="epxerience">
            @include('./partials/experience')
      </section>

    <section id="work">
            @include('./partials/work')
      </section>


       <section id="contact">
            @include('./partials/contact')
      </section>

       <section id="contact">
            @include('./partials/footer')
      </section>


    </div>


    <!-- Spied element -->
  </div>



<!-- end of the row -->
</div>


        <!-- MDB -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <!-- Animate on Scroll -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <!-- Initialize-->
        <script type="text/javascript">
           AOS.init();
        </script>
    </body>
</html>
