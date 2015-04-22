<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Educations <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/education/add')}}" class="btn green">Add New</a>
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
      All Educations
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
               Education
            </th>
            <th>
               Is Active
            </th>
            <th></th>
        </tr>  
      </thead>
      <tbody>
        <?php $count = 0; ?>
        @foreach($educations as $education)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$education->education}}                       
            </td> 
            <td>
              <?php echo ($education->status == 2)?'Yes':'No' ?>                      
            </td> 
            <td>
              <a href="{{url('/admin/education/edit/'.$education->id)}}"><span class="btn yellow">Edit </span></a>
              <a href="{{url('/admin/education/delete/'.$education->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
