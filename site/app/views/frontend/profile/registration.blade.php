  <div class="container-fluid" style="margin-top:15px; background-image:url(assets/img/smreg_bg.jpg);">
  <div class="container">
    <div class="row">
      <h1 style="margin-top:45px;">Introducing a revolutionary way to find your <span style="color:#14A69B">perfect match</span> - Search and <b style="color:#14A69B">talk 100% free</b> to all potential matches. No hidden conditions</h1>
      <div class="col-md-3"></div>
      <div class="col-md-5">
        <div style="background:rgba(255, 253, 253, 0.23); padding:20px; margin:15px 0 30px 0;">
          @if(Session::has('fail'))
          <span style="background:#f00; color:white">{{Session::get('fail')}}</span>
          @endif
          {{Form::open(array("url"=>"/registration", "method" => "POST","class"=>"login-form"))}}
          <h3 class="form-title" style="background-color:#45B6AF; color:#fff; padding:15px; text-align:center;">Go ahead & find Brides/Grooms </h3>
            <div class="form-group">
              {{Form::text('first_name','',array("class"=>"form-control", "placeholder"=>"First Name"))}}
              <span>{{$errors->first('first_name')}}</span>
            </div>
             <div class="form-group">
              {{Form::text('last_name','',array("class"=>"form-control", "placeholder"=>"Last Name"))}}
              <span>{{$errors->first('last_name')}}</span>
            </div>
             <div class="form-group">
              {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"E-mail id"))}}
              <span>{{$errors->first('email')}}</span>
            </div>
            <div class="form-group" style="margin-bottom:15px;">
              {{Form::password('password', array("class"=>"form-control","placeholder"=>"New Password"))}}
              <span>{{$errors->first('password')}}</span>
            </div>
            <div class="form-group" style="margin-bottom:15px;">
              {{Form::password('confirmpassword', array("class"=>"form-control","placeholder"=>"Confirm Password"))}}
              <span>{{$errors->first('confirmpassword')}}</span>
            </div>
                <div class="form-group" style="margin-bottom:15px;">
                  <label class="control-label visible-ie8 visible-ie9">Mobile Number</label>
                  {{Form::text('mobile_no','',array("class"=>"form-control", "autocomplete"=>"off","placeholder"=>"Mobile Number"))}}
                  <span>{{$errors->first('mobile_no')}}</span>
                </div>
              <div class="form-group">
                {{Form::select('gender',array(""=>"Gender","1"=>"Male","2"=>"Female"),'',array("class"=>"form-control"))}}
                <span>{{$errors->first('gender')}}</span>
              </div> 
              <label class="rememberme check" style="margin:5px;">
             {{Form::checkbox('agree')}} I have read agree to the <a href="#">term of use</a> & <a href="#">Privacy Policy</a> </label>
             <div class="row">
             <div class="col-md-3"></div>
              <div class="col-md-4" style="margin:7px;">
                {{Form::submit('Register Free Now!',array("class"=>"demo-loading-btn btn blue uppercase","style"=>"font-size: large; padding: 10px; background-color: rgba(75, 141, 248, 0.7);"))}}    
              </div>
            </div>          
             {{Form::close()}}              
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- END DIV -->

 