<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Naija Go Marry</title>
    <meta name="description" content="Naija go merry"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
     {{HTML::style("/assets/global/plugins/bootstrap/css/bootstrap.css")}}
     {{HTML::style("/assets/css/components-rounded.css")}}
    <!-- Loading Flat UI -->
     {{HTML::style("/assets/global/plugins/font-awesome/css/font-awesome.css")}}
     {{HTML::style("/assets/global/plugins/font-awesome/css/font-awesome.min.css")}}
     {{HTML::style("/assets/css/custom.css")}}

    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="home">
    <div class="container-fluid top-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6  hidden-xs col-sm-12" style="color:#FFF; font-size:24px">
            Naija Go Marry
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12 textright">
            <button class="btn btn-embossed btn-login visible-xs btn-block" style="color:#f00; background:#fff">
               <b>NAIJA GO MARRY</b>
              </button>
              @if(Auth::check())
              <div style="padding: 8px;">
                <span class="heading section-title nav-menu"> Welcome {{Auth::user()->first_name}}</span>               
                <a class="nav-menu" href="{{URL('/profile/home')}}">Home</a><span style="color:#fff;">|</span>  
                <a class="nav-menu" href="{{URL('/profile')}}">View Profile</a><span style="color:#fff;">|</span>  
                <a class="nav-menu" href="{{URL('/profile/search')}}">Search</a><span style="color:#fff;">|</span> 
                <a class="nav-menu" href="{{URL('/logout')}}">Logout</a>
              </div>
              @else
              <a href="{{url('/login')}}" class="btn btn-embossed btn-success btn-login" >
               <i class="fa fa-key"></i>&nbsp;&nbsp;|&nbsp;&nbsp;<b>LOGIN</b>
              </a>
              <a href="{{url('/registration')}}"><button class="btn btn-embossed btn-success btn-register" >
               <i class="fa fa-user"></i>&nbsp;&nbsp;|&nbsp;&nbsp;<b>REGISTER</b>
              </button></a>
              @endif
               
          </div>
        </div>
      </div>
    </div>

{{$main}}

 <div class="container-fluid" style="background:#16CEA9; padding:5px 0 ">
      <div class="container">
        <div class="row home-listing">
            <div class="col-md-6">
              <div style="background:#1abc9c; color:#fff; margin:0 5px 0 0; padding:10px;">Bride Search by:
               
                  <p style="margin-top:20px;">
                    <b>Religion</b></br>
                    Muslim Brides | Christian Brides |
                  </p>

                   <p style="margin-top:20px;">
                    <b>Tribes</b></br>
                    Hausa Brides | Yoruba Brides | Igbo Brides | Tiv Brides
                  </p>

                  <p style="margin-top:20px;">
                    <b>Location</b></br>
                    Lagos Brides | Nigerian Brides | UK Brides | USA Brides | Canada Brides 
                  </p>           
                 
                </div>
            </div>
             <div class="col-md-6">
                <div style="background:#1abc9c; color:#fff; margin:0 5px 0 0; padding:10px;">Groom Search by:
                <p style="margin-top:20px;">
                    <b>Religion</b></br>
                    Muslim Grooms | Christian Grooms |
                  </p>

                   <p style="margin-top:20px;">
                    <b>Tribes</b></br>
                    Hausa Grooms | Igbo Grooms | Yoruba Grooms | Tiv Grooms
                  </p>

                  <p style="margin-top:20px;">
                    <b>Location</b></br>
                    Lagos Grooms | Nigerian Grooms | UK Grooms | USA Grooms | Canada Grooms 
                  </p>                 
                </div>
               </div>
            </div>
        </div>
      </div>
      </div>


    <footer>
      <div class="container" style="padding:15px 0">
        <div class="row">
          <div class="col-md-12">
          <div class="col-md-8" >
              <span class="footer-title">INFORMATION</span><br>
               <p>About Us | Contact Us | FAQ's | Media | Forum | Safety Tips</p>  
               <hr style="border-color: #B8B2B2; border-width: 1.5px;">             
             </div>

            <div class="col-md-4 textright" >
             <span class="footer-title">Connect with us on</span><br><br>
            <div style="font-size:40px; color:#666"><i class="fa fa-facebook-square"></i>
               <i class="fa fa-twitter-square"></i>
               <i class="fa fa-tumblr-square"></i>
               <i class="fa fa-youtube"></i>
           </div>             
          </div>
        </div>
        </div>

       
      </div>
    </footer>
    <div class="container-fluid" style="font-size:12px; background:#ccc; padding:6px 0;">
      <div class="container">
         <div class="row">
          <div class="col-md-12" >
            Naijagomarry.com is Nigeria's premier matrimonial service portal. We offer a one stop platform for online matchmaking that allows prospective Nigerian brides and Nigerian grooms to meet and communicate regarding matrimony. We utilize the most advanced search technology available for our matrimonial service. Registration is free for our matrimonial service. Create your profile & start searching for prospective Nigerian brides and Nigerian grooms today!
          </div>
        </div>
      </div>
    </div>
    <!-- Load JS here for greater good =============================-->
    {{HTML::script("/assets/js/jquery-1.8.3.min.js")}}
    {{HTML::script("/assets/js/jquery.min.js")}}
    {{HTML::script("/assets/js/jquery-ui-1.10.3.custom.min.js")}}
    {{HTML::script("/assets/js/bootstrap.min.js")}}
    {{HTML::script("/assets/js/custom.js")}}

  </body>
</html>
