<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Body Types <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/body_types/add')}}" class="btn green">Add New</a>
  </div>
</div>
<div class="page-bar">
  <ul class="page-breadcrumb">
    <li>
      <i class="fa fa-home"></i>
      <a href="{{url('/admin')}}">Home</a>
      <i class="fa fa-angle-right"></i>
    </li>
    <li>
      All Body Types
    </li>   
  </ul>
</div>

@if(Session::has('delete'))
<div class="alert alert-alert alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
  <strong>Delete!</strong> {{Session::get('success')}} </a>
</div>
@endif
<!-- END PAGE HEADER-->
<div class="row">
  <div class="col-md-12 .pro-table">
    <table class="table table-stripped tablesorter">
      <thead>
        <tr>
           <th>
              #
            </th>
            <th>
               Body Status
            </th>
            <th>
               Is Active
            </th>
            <th></th>
        </tr>  
      </thead>
      <tbody>
        <?php $count = 0; ?>
        @foreach($bodys as $body)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$body->body_type}}                       
            </td> 
            <td>
              <?php echo ($body->status == 2)?'Yes':'No' ?>                      
            </td> 
            <td>
              <a href="{{url('/admin/body_types/edit/'.$body->id)}}"><span class="btn yellow">Edit </span></a>
              <a href="{{url('/admin/body_types/delete/'.$body->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
