<x-layout>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>GTI Naypyitaw</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <link rel="stylesheet" href="assets/css/base.css">
  <link rel="stylesheet" href="assets/css/theme.css">
  <link rel="stylesheet" href="assets/css/index.css">

  </head>

<body>

  <!-- Sub Header -->


      <!-- ***** Header Area Start ***** -->
    
  
 <header class="header-area header-sticky">
          <div class="container">
              <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="index.php" class="logo">
                          <img src="assets/images/gti-logo.png" alt="GTI Logo"
                          style="max-width:80px; height:80px; border-radius:50%; object-fit:cover;">
                          GTI Naypyitaw
                        </a>
                        
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li ><a href="/" class="active">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/admission">Admission</a></li>
                            {{-- <li ><a href="#apply">Department</a></li> --}}
                            <li><a href="/news">News</a></li>
        @canany(['admin','it_teacher','cv_teacher','ec_teacher','mp_teacher','fm_teacher','ep_teacher'])
                            <li><a href="/admin/admin-index">Dashboard</a></li> 
                            @endcan
                            @guest
                                 <li><a href="/login">Login</a></li>
                            @endguest
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
                </div>
            </div>
        </div>
    </header>
 





    
    <!-- ***** Header Area End ***** -->
    
    <!-- ***** Main Banner Area Start ***** -->
    
    
    
    <section class="section main-banner" id="top" data-section="section1"
    style="background-image:url('assets/images/bg1.jpg'); background-size:cover; background-position:center;">
    <div class="video-overlay header-text">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h2 class="hero-lines">
                            <span class="l1">WELCOME TO</span>
                            <span class="l2">GOVERNMENT TECHNICAL</span>
                            <span class="l3">INSTITUTE</span>
                        </h2>
                        <p>The Government Technical Institute (Nay Pyi Taw) was established in 2018-2019 fiscal year.The institute was established to increase learning opportunity for local people, and to provide necessary skills for better job opportunities.</p>
              <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div>
              </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- ***** Main Banner Area End ***** -->

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-service-item owl-carousel">
                    
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/civil.jpg" alt="civil"
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Civil </h4>
                            <P>Civil engineering is a professional discipline  the design, construction, including roads, bridges, buildings, and structural components of railways.</P>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/ep.jpg" alt="ep"            
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Electronic </h4>
                            <P>Electronic engineering is a professional discipline that involves the design, development, and testing of electronic circuits and systems.</P>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/ec.jpg" alt="ec" 
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Electrical Power </h4>
                            <p>Electrical power engineering is a professional discipline that involves the generation, transmission, and distribution of electrical power.</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/me.jpg" alt="me" 
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Mechanical </h4>
                            <p>Mechanical engineering is a professional discipline that involves the design, analysis, manufacturing, and maintenance of mechanical systems.</p>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/it.jpg" alt="it"      
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Information Technology </h4>
                            <p>Information technology engineering is a professional the design, development, management of computer systems and networks.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="icon">
                            <img src="assets/images/farm.jpg" alt="farm" 
                            style="max-width:60px; height:60px; border-radius:50%; object-fit:cover;">
                        </div>
                        <div class="down-content">
                            <h4>Farm Machinery</h4>
                            <p>Farm machinery engineering is a professional the design, development, and maintenance of agricultural machinery and equipment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="upcoming-meetings" id="meetings">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Latest News</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories">
                    <h4>News Catgories</h4>
                    <ul>
                        <li><a href="#">Fresher Welcome</a></li>
                        <li><a href="#">Festival of Hta-Ma-Ne</a></li>
                        <li><a href="#">Sports competition</a></li>
                        <li><a href="#">Ai Knowledge Sharing</a></li>
                        <li><a href="#">Fresher Welcome</a></li>
                        <li><a href="#">Festival of Hta-Ma-Ne</a></li>
                        <li><a href="#">Sports competition</a></li>
                        <li><a href="#">Ai Knowledge Sharing</a></li>
                        <li><a href="#">Fresher Welcome</a></li>
                        <li><a href="#">Festival of Hta-Ma-Ne</a></li>
                        <li><a href="#">Sports competition</a></li>
                        <li><a href="#">Ai Knowledge Sharing</a></li>
                        <li><a href="#">Fresher Welcome</a></li>
                        <li><a href="#">Festival of Hta-Ma-Ne</a></li>
                        <li><a href="#">Sports competition</a></li>
                        <li><a href="#">Ai Knowledge Sharing</a></li>
                        
                    </ul>
                    <div class="main-button-red">
                        <a href="meetings.html">All Upcoming News</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                  @foreach ($blogs as $blog)

<div class="col-lg-6">
    <div class="meeting-item">
        <div class="thumb">

            @php
                $raw = $blog->blogImage;

                // remove extra quotes if double encoded
                $raw = trim($raw, '"');

                $images = json_decode($raw, true);

                // if still string, decode again
                if (is_string($images)) {
                    $images = json_decode($images, true);
                }

                $firstImage = $images[0] ?? null;
            @endphp

            @if($firstImage)
                <a href="/blog/{{$blog->slug}}">
                    <img src="{{ asset('storage/' . $firstImage) }}" alt="Blog Image">
                </a>
            @endif

        </div>

        <div class="down-content">
            <div class="date">
                <h6>created : <h5>{{$blog->created_at->diffForHumans()}}</h5></h6>
            </div>
            <a href="/blog/{{$blog->slug}}" ><h4 class="mt-2">{{ $blog->title ?? 'Blog Title' }}</h4></a>
            <p>{{ $blog->intro ?? '' }}</p>
        </div>

    </div>
</div>

@endforeach

                </div>
            </div>
        </div>
    </div>
</section>



<section class="our-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>A Few Facts About Our University</h2>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">2020</div>
                                    <p class="count-title">Founded in Year</p>
                                </div>
                                
                                
                            </div>
                            <div class="col-12">
                                <div class="count-area-content">
                                    <div class="count-digit">6</div>
                    <div class="count-title">Departments</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
              <div class="row">
                  <div class="col-12">
                      <div class="count-area-content students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">Students</div>
                </div>
            </div> 
            <div class="col-12">
                <div class="count-area-content">
                    <div class="count-digit">100</div>
                    <div class="count-title">Teachers</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> 
<div class="col-lg-6 align-self-center">
    <div class="video">
        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
    </div>
</div>
</div>
</div>
</section>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>

<script>
    
    //according to loftblog tut
    // $('.nav li:first').addClass('active');
    
    // var showSection = function showSection(section, isAnimate) {
    //     var
    //     direction = section.replace(/#/, ''),
    //     reqSection = $('.section').filter('[data-section="' + direction + '"]'),
    //     reqSectionPos = reqSection.offset().top - 0;
        
    //       if (isAnimate) {
    //         $('body, html').animate({
    //           scrollTop: reqSectionPos },
    //         800);
    //       } else {
    //         $('body, html').scrollTop(reqSectionPos);
    //       }

    //     };

//         var checkSection = function checkSection() {
//           $('.section').each(function () {
//             var
//             $this = $(this),
//             topEdge = $this.offset().top - 80,
//             bottomEdge = topEdge + $this.height(),
//             wScroll = $(window).scrollTop();
//             if (topEdge < wScroll && bottomEdge > wScroll) {
//               var
//               currentId = $this.data('section'),
//               reqLink = $('a').filter('[href*=\\#' + currentId + ']');
//               reqLink.closest('li').addClass('active').
//               siblings().removeClass('active');
//             }
//           });
//         };

//         $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
//   const href = $(this).attr('href');

//   // only smooth-scroll for anchor links like #top, #apply
//   if (href && href.startsWith('#')) {
//     e.preventDefault();
//     showSection(href, true);
//   }
// });

    </script>
</body>
</html>
</x-layout>

