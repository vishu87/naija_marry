<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Religions <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/religion')}}" class="btn green">Go Back</a>
  </div>
</div>

<!-- END PAGE HEADER-->

@if(Session::has('success'))
<div class="alert alert-success alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Success!</strong> {{Session::get('success')}} </a>
</div>
@endif

@if(Session::has('failure'))
<div class="alert alert-alert alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Error!</strong> {{Session::get('success')}} </a>
</div>
@endif

<!-- BEGIN PAGE CONTENT-->
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption">
          Edit Religion
        </div>           
      </div>
      <div class="portlet-body form">
        {{Form::open(array("url"=>"/admin/religion/update/".$religion->id,"method" => "PUT","role"=>"form","class" => "form-horizontal","files"=>true))}}
          <div class="form-religion update">
            <div class="form-group">
              <label class="col-md-2 control-label">Religion</label>
              <div class="col-md-9">
                {{Form::text('religion',$religion->religion,array("class"=>"form-control", "placeholder"=>"religion Status"))}}
                  <span>{{$errors->first('religion')}}</span>
              </div>
            </div>  
            <div class="form-group">
              <label class="col-md-2 control-label">Is Active</label>
              <div class="col-md-9">
                 {{Form::select('status',  [ 0 => 'Select', 1 => 'No', 2 => 'Yes' ]  , $religion->status,["class"=>"form-control"])}}
                  <span>{{$errors->first('status')}}</span>
              </div>
            </div>    
            <div class="sub-center">
              <button type="submit" class="btn btn-success">Update</button>
            </div> 
          </div>  
        {{Form::close()}}    
      </div>
      <!-- END SAMPLE FORM PORTLET-->
    </div>
  </div>
</div>