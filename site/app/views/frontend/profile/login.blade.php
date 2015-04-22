  <div class="container-fluid margin-top" style="background-image:url(assets/img/smreg_bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="page-login">
          @if(Session::has('fail'))
          <span class="nav-menu">{{Session::get('fail')}}</span>
          @endif
          {{Form::open(array("url"=>"/login", "method" => "POST","class"=>"login-form"))}}
          <h3 class="form-title heading">Login and begin with a beautiful journey </h3>
          <h5 class="heading">Already a member? Please enter your Email id</h5>
            <div class="form-group">
              <div class="row"> 
                <div class="col-md-4 heading send_btn">{{ Form::label('', 'Login id/Email id') }} </div>              
              <div class="col-md-8 heading">{{Form::text('email','',array("class"=>"form-control heading", "placeholder"=>"Enter User id"))}}</div>
               <span>{{$errors->first('email')}}</span>
             </div>             
            </div>
            <div class="form-group pro-bar">
              <div class="row">
                <div class="col-md-4 heading send_btn">{{ Form::label('', 'Password') }} </div>
              <div class="col-md-8">{{Form::password('password', array("class"=>"form-control heading","placeholder"=>"Password"))}}</div>
               <span>{{$errors->first('password')}}</span>
             </div>              
            </div>
              <h4 class="heading send_btn"><a href="#">Forget your password?</a></h4>
              
              <label class="rememberme check heading pro-bar"> 
             {{Form::checkbox('agree')}} Keep me logged in </label>
             <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-4 center-align">
                {{Form::submit('Login',array("class"=>"demo-loading-btn btn blue uppercase heading"))}}    
              </div>
            </div>
            </div>            
             {{Form::close()}}              
           </div>
           <div class="col-md-6"></div>
         </div>
       </div>
     </div>
   </div>

   <!-- END DIV -->

 