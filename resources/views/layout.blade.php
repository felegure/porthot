<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="responsive site for LuxAppart.">
    <script src="https://kit.fontawesome.com/b7413b592a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Styles -->
 <!--    <link rel="stylesheet" href="{{'css/styles.css'}}" type="text/css">    -->
  <!--  <link rel="stylesheet" href="{{'css/styles.css'}}" type="text/css"> 
    <link rel="stylesheet" src="{{ url('css/styles.css') }}" type="text/css" >
    -->
    <link rel="stylesheet" href="{{URL::asset('css/styles.css')}}">  
    
    <link rel="shortcut icon" href="img/logo-4.png">
    <title>Chaput Lux Hotel</title>
</head>
      
<body id="top">
  <div class="container-fluid rounded">
    <!--   ************************** NAVBAR **********************************-->
    <nav class="navbar navbar-expand-lg navbar-info bg-info fixed-top rounded">
        <a class="navbar-brand text-white" href="#top"><img src="img/logo-31.png" alt="logo hotel"> Where you'll feel Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto rounded">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="home"><strong>Home</strong><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="benefits"><strong>Our benefits</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="testimonials"><strong>Testimonials</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="rooms"><strong>Rooms</strong></a>
                </li>
                
                <li class="nav-item">
 <!--                   <a class="nav-link" href="contact">Contact</a>   -->
                  <a class="nav-link text-white" href="contact"><strong>Contact</strong></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="about"><strong>About</strong></a>
                </li>
 <!--               <li class="nav-item">
                    <a class="nav-link" href="admin">Administration</a>
                </li>
-->
            </ul>
      
        </div>
    </nav>
 
    @yield('content') 
  
   </div>
  
   <footer class="container-fluid-fluid rounded">
        <div class="row row1 justify-content-around align-items-center rounded">
            <div class="col-12 col-md-4 text-center">
                <p>Adresse</p>
                <p>Denderstraat 76/1 <br> 9300 Aalst, Belgium</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <a href="http://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i>
                </a>
                <a href="http://www.twitter.com" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="http://www.youtube.com" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        $(function() {
            // n'est jamais executé  a voir 
        //    console.log("Avant tout");
            $('nav a[href^="#"]').click(function() {
                var the_id = $(this).attr("href");
                console.log("var the_id");
                if (the_id === '#') {
                    console.log("the_id ==='#'");
                    return;
                }
                var posCible = $(the_id).offset().top - 65;
                console.log('posCible');
                /* $("nav").height();*/
                $('html, body').animate({
                    scrollTop: posCible
                }, 'slow');
                return false;
            });
        })
    </script>
</body>

</html>


