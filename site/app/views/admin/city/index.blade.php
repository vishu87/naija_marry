<!-- BEGIN PAGE HEADER-->
<div class="row">
  <div class="col-md-6">
    <h3 class="page-title">
      Cities <small></small>
    </h3>
  </div>
  <div class="col-md-6 add-new">
    <a href="{{url('/admin/city/add')}}" class="btn green">Add New</a>
  </div>
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
               Country
            </th>
             <th>
               State
            </th>
             <th>
               City
            </th>
            <th>
               Is Active
            </th>
            <th></th>
        </tr>  
      </thead>
      <tbody>
        <?php $count = 0; ?>
        @foreach($cities as $city)
          <tr>
            <td>{{++$count}}</td>
            <td>
              {{$city->country}}                       
            </td> 
             <td>
              {{$city->state}}                       
            </td>
             <td>
              {{$city->city}}                       
            </td>  
            <td>
              <?php echo ($city->status == 2)?'Yes':'No' ?>                      
            </td> 
            <td>
              <a href="{{url('/admin/city/edit/'.$city->id)}}"><span class="btn yellow">Edit </span></a>
              <a href="{{url('/admin/city/delete/'.$city->id)}}" class="del"><span class="btn btn-danger">Delete </span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<!-- BEGIN PAGE CONTENT-->
