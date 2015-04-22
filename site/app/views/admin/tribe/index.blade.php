<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Tribes <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/tribe/add')}}" class="btn green">Add New</a>
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
      All Tribes
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
               Tribe
            </th>
            <th>
               Is Active
            </th>
            <th></th>
        </tr>  
      </thead>
      <tbody>
        <?php $count = 0; ?>
        @foreach($tribes as $tribe)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$tribe->tribe}}                       
            </td> 
            <td>
              <?php echo ($tribe->status == 2)?'Yes':'No' ?>                      
            </td> 
            <td>
              <a href="{{url('/admin/tribe/edit/'.$tribe->id)}}"><span class="btn yellow">Edit </span></a>
              <a href="{{url('/admin/tribe/delete/'.$tribe->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
