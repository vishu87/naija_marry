 <div class="portlet light">
  <div class="portlet-body form">
      {{Form::open(array("url"=>"/profile/savepi","method" => "PUT","class"=>"form-horizontal","role"=>"form"))}}                    
      <div class="form-body">
        <div class="form-group">                 
          {{ Form::label('', 'Email', array('class' => 'col-md-3 control-label')) }}
          <div class="col-md-9">                                     
            {{Form::text('email','',array("class"=>"form-control", "placeholder"=>"Enter Email id"))}}
            <span>{{$errors->first('email','Please provide your first name')}}</span> 
          </div>
        </div>
        <div class="form-group">
          {{ Form::label('', 'Password', array('class' => 'col-md-3 control-label')) }}                   
          <div class="col-md-9">
            {{Form::text('password','',array("class"=>"form-control", "placeholder"=>"Enter Password"))}}                                 
          </div>
        </div>
      </div>
       <div class="form-actions right1">
        <button type="button" class="btn default">Cancel</button>
        <button type="submit" class="btn default">Submit</button>
      </div>
      {{Form::close()}}
  </div>            
</div>