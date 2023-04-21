<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

        <title>CHAMPA RESTAURANT</title>

       <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    

            <style>
                @foreach($sliders as $key=>$slider)
                .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key + 1 }}) .item
        {
                background: url({{ asset('uploads/slider/'.$slider->image) }});
                background-size: cover;
                height: 80vh;
                background-repeat: no-repeat;
        }
        @endforeach
        h3{
            color : #22527C;
        }
        body{
            scroll-behavior: smooth;

        }
        pricing-filter-wrapper{
            background-color: lightblue;
        }
       
            </style>
       
    <script src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.flexslider.min.js') }}"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: ".flexslider-container"
            });
        });
    </script>

      


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

      
        <nav id="template-navbar" class="navbar navbar-fixed-top navbar-light  custom-navbar-default" style="background-color: #D9EBF7;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div >
                    <h3>CHAMPA RESTAURANT</h3>
                    </div>
                </div>

            
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#menu-list">MENU</a></li>
                        <li><a href="#reserve">RESERVATION</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                        <li><a href="#Location">LOCATION</a></li>
                        <li><a href="{{url('/admin/dashboard')}}">ADMIN</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>
         @if(Session::has('frontend_reservation'))
                            <div class="alert alert-primary alert-dismissible" style="background-color: lightblue; color: #22527C; margin-top: 100px; margin-bottom: 0px;">
                                <strong>{!! session('frontend_reservation') !!}</strong>
                                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'" style="color: black;"><span aria-hidden="true">&times;</span></button>
                            </div>  
                            @endif
                            @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Something is Wrong</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
        @if(Session::has('frontend_contact'))
                <div class="alert alert-primary alert-dismissible"  style="background-color: lightblue; color: #22527C; margin-top: 100px; margin-bottom: 0px;">
                                <strong>{!! session('frontend_contact') !!}</strong>
                <button type="button" class="btn-close" aria-hidden="true" aria-label="Close" onclick="this.parentElement.style.display='none'" style="color: black;"><span aria-hidden="true">&times;</span></button>
                </div>
                @endif
                @if (count($errors) > 0)
                    <!-- Form Error List -->
                    <div class="alert alert-danger">
                        <strong>Something is Wrong</strong>
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
      
        <section id="header-slider" class="owl-carousel">
           
            @foreach($sliders as $key => $slider)
             <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title text-light">{{ $slider->title }}</h1>
                        <p class="header-sub-title">{{ $slider->sub_title }}</p>
                    </div> <!-- /.header-content -->
                </div>
            </div>
            @endforeach
           
        </section>
        <section>
                <br>
        </section>

        <section id="about">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-content">
                    <iframe width="610" height="450" src="https://www.youtube.com/embed/--MdohXec7M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6" >
                    <div class="section-content" style="background-color: #D9EBF7; padding-top: 50px; margin-top: 50px;">                 
                        <h2 class="section-content-title" style="color:#22527C;">About us</h2>
                        <p class="section-content-para">
                            Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                        </p>
                        <p class="section-content-para">
                            beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                        </p>
                    </div> <!-- /.section-content -->
                </div>
            </div>
        </section>
        
        <section>
                <br>
        </section>
        <section id="menu-list" class="menu-list">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper" style="background-color: #D9ECF7;">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="menu-system">
                                        <h2 class="section-content-title" style="color:#22527C;" >Menu</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <li class="filter" data-filter="all">All</li>
                                            @foreach($categories as $category)
                                            
                                            <li class="filter"  data-filter="#{{ $category->slug}}">
                                                {{ $category->name }} <span class="badge">
                                                    {{ $category->items->count() }}
                                                </span>
                                            </li>
                                            @endforeach
                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                            <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                @foreach($items as $item)
                                <li class="item" id="{{ $item->category->slug }}">

                                    <a href="#">
                                        <img src="{{ asset('uploads/item/'.$item->image) }}" class="img-responsive" alt="Food" style= "height:200px; ">
                                        <div class="menu-desc" style="vertical-align: center;">
                                                <h3>{{ $item->name }}</h3>
                                                {{ $item->description }}
                                                <br>
                                                <b>{{ $item->price }} $</b>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                               
                            </ul> 

                        </div>   
                    </div>
                </div>

            </div> 
        </section>




        <section id="reserve" class="reserve">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="col-xs-6 col-sm-6 dis-table-cell bg-info">
                            <h2 class="section-title" style="color:#22527C;">Reserve A Table !</h2>
                        </div>
                        <div class="col-xs-6 col-sm-6 dis-table-cell section-bg">
                            
                        </div>
                    </div> 
                </div>
            </div> 
        </section> 

        <section class="reservation">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class=" section-content">
                        <div class="row">
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="dateandtime" id="datetimepicker1" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation" style="background-color: lightblue;">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs" ></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time" style="background-color: lightblue;">
                                    <h3 class="opening-time-title" style="color: white;">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>


        <section id="Location" class="Location">
            <div class="container-fluid " style="background-color: #D9EBF7;">
                    <div class="row dis-table">
                        <div class="col-sm-6 ">
                            <h3 class="section-title" style="color: #22527C;">Location</h3>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="wrapper" style="margin-left: 125px; margin-top: 250px;">
                        <div class="opening-time" style="background-color: lightblue; max-width: 500px; height: 300px; text-align:center; float:center; padding-top: 70px;">
                            <h3 class="opening-time-title" style="color: white;">Our Address</h3>
                            <p>Third Floor, AEON Mall Phnom Penh #132, Samdach Sothearos Street, 12102</p>
                            <p>Phnom Penh Tmei, Sensok</p>  
                            <p>Phnom Penh</p>  
                            <p>Tel: 097979797</p>       
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="section-content">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.0572226566123!2d104.93209931503894!3d11.54775299180099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109512bf3a3758d%3A0x7b57fc4329303c1d!2sChampa%20Restaurant!5e0!3m2!1sen!2skh!4v1679209938748!5m2!1sen!2skh" width="750" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>    
        </section>

        
        <section id="contact" class="contact">
            <div class="container-fluid " style="background-color: #D9EBF7;">
                <div class="row dis-table">
                    <div class="col-sm-6 ">
                        <h3 class="section-title" style="color: #22527C;">Contact</h3>
                    </div>
                </div>
            </div>
        </section>
                
        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                                @csrf
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder="  Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder="  Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder="  Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="  Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send" style="background-color: lightblue;">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


       

    
       <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}" ></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   @if($errors->any())
   @foreach($errors->all() as $error)
   <script>
   toastr.error('{{ $error }}');
   </script>
   @endforeach
   @endif
<script>
    $(function() {
        $('#datetimepicker1').datetimepicker({
           format: "dd MM yyyy -HH:ii p",
           showMeridian: true,
           autoclose: true,
           todayBtn: true
        });
    })
    </body>
</html>