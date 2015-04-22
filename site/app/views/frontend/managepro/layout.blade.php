<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Naija Go Marry</title>
    <meta name="description" content="Naija go merry"/>

    <meta name="viewport" content="width=1000, initial-scale=1.0, maximum-scale=1.0">

    <!-- Loading Bootstrap -->
     {{HTML::style("/assets/global/plugins/bootstrap/css/bootstrap.css")}}
     {{HTML::style("/assets/global/plugins/bootstrap/css/bootstrap.min.css")}}
     {{HTML::style("/assets/css/components-rounded.css")}}
    <!-- Loading Flat UI -->
     {{HTML::style("/assets/global/plugins/font-awesome/font-awesome.css")}}
     {{HTML::style("/assets/global/plugins/font-awesome/font-awesome.min.css")}}
     {{HTML::style("/assets/css/custom.css")}}

    <link rel="shortcut icon" href="assets/img/favicon.ico">

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
          <div class="col-md-6  hidden-xs col-sm-12">
             Naija Go Marry
          </div>
          <div class="col-md-6 col-xs-12 col-sm-12 textright">
            <button class="btn btn-embossed btn-login visible-xs btn-block" style="color:#f00; background:#fff">
               <b>NAIJA GO MARRY</b>
              </button>

              <a href="login.php" class="btn btn-embossed btn-info btn-login" >
               <i class="fa fa-key"></i>&nbsp;&nbsp;|&nbsp;&nbsp;<b>LOGIN</b>
              </a>
               <button class="btn btn-embossed btn-success btn-login" >
               <i class="fa fa-user"></i>&nbsp;&nbsp;|&nbsp;&nbsp;<b>REGISTER</b>
              </button>
          </div>
        </div>
      </div>
    </div>
    
 <div class="container" style="margin-top:15px;">
  <div class="row">
    <div class="col-md-12">
          <div class="portlet" style="margin-top:20px;">
            <div class="portlet-body">
              <div class=" portlet-tabs">
                <ul class="nav nav-tabs corper-life-tab">
                  <li class="active col-md-2 col-sm-12 align-center">
                    <a href="#portlet_tab1" data-toggle="tab">
                      Edit My Profile 
                    </a>
                  </li>
                  <li class="col-md-2 col-sm-12 align-center">
                    <a href="#portlet_tab2" data-toggle="tab">
                    Edit Contact Details </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="portlet_tab1">
                     <div class="col-md-4">
                      <div class="side-menu">
                        <ul>
                          <li @if($top_active == 1)class="active start" @else class="start" @endif;>
                           <a href="{{url('/Authentication')}}">Reset Email &emp; Password 
                            <span class="selected"></span></a>
                          </li>
                          
                          <li @if($top_active == 2)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Basic Information
                            <span class="selected"></span></a>
                          </li>
                          <li @if($top_active == 3)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Physical Appearance
                            <span class="selected"></span></a>
                          </li>
                          <li @if($top_active == 5)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Education and Work
                            <span class="selected"></span></a>
                          </li>
                          <li @if($top_active == 6)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Religion and Astro information
                            <span class="selected"></span></a>
                          </li>
                           <li @if($top_active == 7)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Family Information
                            <span class="selected"></span></a>
                          </li>
                           <li @if($top_active == 8)class="active"@endif;>
                           <a href="{{url('/manage_profile')}}">Lifestyle and Interests
                            <span class="selected"></span></a>
                          </li>
                        </ul>
                      </div> 
                     </div>
                     <div class="col-md-8">
                       {{$main}}
                     </div>
                  </div>
                  <div class="tab-pane" id="portlet_tab2">
                     <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>Sirisha is looking for Groom</p>           
                     <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>More about Preferred Partner<br>
                         <table style="width:50%;">
                           <tr>
                            <td>Age</td>
                            <td>: 18 to 23</td>                            
                          </tr>
                          <tr>
                            <td>Marital Status</td>
                            <td>: Never Married</td> 
                          </tr>                   
                        </table>
                     </p> 
                      <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-user" aria-hidden="true"></span>About his Physical Appearance & Looks<br>
                       <table style="width:70%;">
                         <tr>
                          <td>Height</td>
                          <td>:5ft to 5ft 9in</td>                            
                        </tr>                 
                      </table>
                     </p> 
                      <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>About his Religion and Social info<br>
                        <table style="width:45%;">
                           <tr>
                            <td>Religion</td>
                            <td>:Hindu</td>                            
                          </tr>
                          <tr>
                            <td>Mother Tongue</td>
                            <td>:Telugu</td>
                          </tr> 
                           <tr>
                            <td>Caste</td>
                            <td>:Khatri</td>
                          </tr> 
                          <tr>
                            <td>Manglik</td>
                            <td>:Do Not Know</td>
                          </tr>                   
                        </table>
                     </p>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>    
     </div> 




 <div class="container-fluid" style="background:#16CEA9; padding:5px 0 ">
      <div class="container">
        <div class="row home-listing">
            <div class="col-md-6">
              <div style="background:#1abc9c; color:#fff; margin:0 5px 0 0; padding:10px;">Bride Search by:
               
                  <p style="margin-top:20px;">
                    <b>Religion</b></br>
                    Muslim Brides | Christian Brides | Other Brides
                  </p>

                   <p style="margin-top:20px;">
                    <b>Mother Tongue</b></br>
                    English Brides | Hausa Brides | Igbo Brides | Yoruba Brides | Fulani Brides | Edo Brides | Ijaw Brides | Kanuri Brides | Ibibio Brides | Ebira Brides | Nupe Brides | Gwari Brides | Itsegiri Brides | Jukun Brides | Urhobo Brides | Igala Brides | Idoma Brides | Tiv Brides
                  </p>

                  <p style="margin-top:20px;">
                    <b>Location</b></br>
                    Lagos Brides | Abuja Brides | Port Harcourt Brides | Nigerian Brides | UK Brides | USA Brides | Canada Brides 
                  </p>

                  <p style="margin-top:20px;">
                    <b>Ethnic Group</b></br>
                   Hausa Brides | Igbo Brides | Yoruba Brides | Fulani Brides | Edo Brides | Ijaw Brides | Kanuri Brides | Ibibio Brides | Ebira Brides | Nupe Brides | Gwari Brides | Itsegiri Brides | Jukun Brides | Urhobo Brides | Igala Brides | Idoma Brides | Tiv Brides
                  </p>
                  
                 
                </div>
              

            </div>
             <div class="col-md-6">
                           <div style="background:#1abc9c; color:#fff; margin:0 5px 0 0; padding:10px;">Groom Search by:
                <p style="margin-top:20px;">
                    <b>Religion</b></br>
                    Muslim Grooms | Christian Grooms | Other Grooms
                  </p>

                   <p style="margin-top:20px;">
                    <b>Mother Tongue</b></br>
                    English Grooms | Hausa Grooms | Igbo Grooms | Yoruba Grooms | Fulani Grooms | Edo Grooms | Ijaw Grooms | Kanuri Grooms | Ibibio Grooms | Ebira Grooms | Nupe Grooms | Gwari Grooms | Itsegiri Grooms | Jukun Grooms | Urhobo Grooms | Igala Grooms | Idoma Grooms | Tiv Grooms
                  </p>

                  <p style="margin-top:20px;">
                    <b>Location</b></br>
                    Lagos Grooms | Abuja Grooms | Port Harcourt Grooms | Nigerian Grooms | UK Grooms | USA Grooms | Canada Grooms 
                  </p>

                  <p style="margin-top:20px;">
                    <b>Ethnic Group</b></br>
                   Hausa Grooms | Igbo Grooms | Yoruba Grooms | Fulani Grooms | Edo Grooms | Ijaw Grooms | Kanuri Grooms | Ibibio Grooms | Ebira Grooms | Nupe Grooms | Gwari Grooms | Itsegiri Grooms | Jukun Grooms | Urhobo Grooms | Igala Grooms | Idoma Grooms | Tiv Grooms
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
          <div class="col-md-2" >
              <span class="footer-title">INFORMATION</span><br><br>
              <ul>
                <li>Advertise with Us</li>
                <li>Membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>DSA Enquiry</li>
                <li>Help</li>
                <li>Faq’s</li>
                <li>Sitemap</li>
              </ul>
          </div>
          <div class="col-md-2" >
             <span class="footer-title">INFORMATION</span><br><br>
              <ul>
                <li>Advertise with Us</li>
                <li>Membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>DSA Enquiry</li>
                <li>Help</li>
                <li>Faq’s</li>
                <li>Sitemap</li>
              </ul>
          </div>
          <div class="col-md-2" >
             <span class="footer-title">INFORMATION</span><br><br>
              <ul>
                <li>Advertise with Us</li>
                <li>Membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>DSA Enquiry</li>
                <li>Help</li>
                <li>Faq’s</li>
                <li>Sitemap</li>
              </ul>
          </div>
          <div class="col-md-2" >
             <span class="footer-title">INFORMATION</span><br><br>
              <ul>
                <li>Advertise with Us</li>
                <li>Membership</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <li>DSA Enquiry</li>
                <li>Help</li>
                <li>Faq’s</li>
                <li>Sitemap</li>
              </ul>
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
    {{HTML::script("/assets/js/jquery-ui-1.10.3.custom.min.js")}}
    {{HTML::script("/assets/js/bootstrap.min.js")}}

  </body>
</html>
