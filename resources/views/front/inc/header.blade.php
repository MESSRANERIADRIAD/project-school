<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Ecole math et phisique </title>
    <link rel="icon" href="{{ asset('uploads/settings/'. $sett->favicon) }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/slick.css">
    <link rel="stylesheet" href="{{ asset('front/css') }}/slicke.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('front/css') }}/style.css">
@yield('styles')
 
     <title> Ecole math et phisique </title>
     <link rel="stylesheet" href="style.css"> 
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!--::header part start::-->
     <section class="header">
      <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset('uploads/settings/'. $sett->logo) }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                            
                        <div class="collapse navbar-collapse main-menu-item justify-content-end ms-auto"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav  ms-auto">
                                <li class="nav-item active">
                                    <a class="nav-links"  href=" {{ route('front.homepage') }}">Home</a>
                                    
                                </li>                            
                                <li class="nav-item dropdown">
                                    <a class="nav-links dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Courses </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach ($cats as $cat)    
                                    <a class="dropdown-item" href="{{ route('front.cat', $cat->id) }}">{{ $cat->name }}</a>
                                    @endforeach
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-links" href="{{ route('front.contact') }}">Contact</a>
                                </li> 
                              <li class="nav-item">
                             <a class="nav-links" href="#"> About</a>
                             </li> 
                            </ul>
                             </div>      
                    </nav>
                <div class="text-box">
                    <h1>Ecole Math et Phisique</h1>
                    <p> lyce provéé study first second third hight school</p>
                    <a href="" class="hero-btn">Visit to know more</a> 
                 </div>        
                </div>
            </div>
        </div>
  
</section>

<!------Course---------->

<section class="course">
    <h1>Courses We Offer</h1>
    <p> math phisique arabic seance istoir gion frensh english, islamic sport.</p>

   <div class="row">
     <div class="course-col">
        <h3>FRIST</h3>
        <P>specialite seantifique courses seantifique math phisique seance arabic 
            istoir gian sport islamic frensh english</p>
     </div>
     <div class="course-col">
        <h3>SECOND</h3>
        <P>seantifique math tiqninique mathilam courses seantifique phisique seance
             arabic istoir gian sport islamic frensh english</p>
     </div>
    <div class="course-col">
        <h3>THIRD</h3>
        <P>seantifique math tiqninque seantifique courses phisique seance arabic
              istoir gian sport islamic frensh english</p>
     </div>
</div>

</section>    

<!-------compus------->
<section class="compus">
   <h1>Courses We Offer</h1>
    <p> math phisique arabic seance istoir gion frensh english, islamic sport.</p>
    
    <div class="row">   
    <div class="compus-col">
        <img src="uploads/courses/14.png"> 
        <div class="layer">
        <h3>Lycéé</h3>   
</div>
 </div>
 <div class="compus-col">
        <img src="uploads/courses/21.png"> 
        <div class="layer">
        <h3>adminstratif</h3>   
 </div>
</div>
 <div class="compus-col">
        <img src="uploads/courses/11.png"> 
        <div class="layer">
        <h3>reception</h3>   
 </div>
</div>
</div>
</section>   
<!------second img---->

<section class="compus">
<h1>Offise</h1>

    <div class="row">   
    <div class="compus-col">
        <img src="uploads/courses/24.png"> 
        <div class="layer">
        <h3>Contrôler</h3>   
</div>
 </div>
 <div class="compus-col">
        <img src="uploads/courses/23.png"> 
        <div class="layer">
        <h3>La cour</h3>   
 </div>
</div>
 <div class="compus-col">
        <img src="uploads/courses/22.png"> 
        <div class="layer">
        <h3>Classe</h3>   
 </div>
</div>
</div>
</section>   
<!---------call To Action----->
<section class="cta">
    <h1>Enroll Four Our Various Online Courses Anywhere From
        The  World</h1>
        <a href="{{ route('front.contact') }}" class="">CONTACT US</a>
</section>



    <!-- Header part end-->