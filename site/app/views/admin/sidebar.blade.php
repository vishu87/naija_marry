    <div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="sidebar-toggler-wrapper">
            <div class="sidebar-toggler">
          </div>
        </li>
        <?php if(!isset($top_active))$top_active = 0 ?>
        <li @if($top_active == 0) class="active start" @endif>
          <a href="javascript:;">
            <i class="icon-home"></i>
            <span class="title">Dashboard</span>
          </a>
        </li>
        <li @if($top_active == 1) class="active" @endif>
          <a href="{{url('/admin/body_types')}}">
            <i class="icon-basket"></i>
            <span class="title">BodyType Content</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 2) class="active" @endif>
          <a href="{{url('/admin/education')}}">
            <i class="icon-basket"></i>
            <span class="title">Education</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 3) class="active" @endif>
          <a href="{{url('/admin/complexion')}}">
            <i class="icon-basket"></i>
            <span class="title">Complexion</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 4) class="active" @endif>
          <a href="{{url('/admin/country')}}">
            <i class="icon-basket"></i>
            <span class="title">Country</span>
            <span class="selected"></span>
          </a>
        </li>
         <li @if($top_active == 5) class="active" @endif>
          <a href="{{url('/admin/state')}}">
            <i class="icon-basket"></i>
            <span class="title">State</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 6) class="active" @endif>
          <a href="{{url('/admin/city')}}">
            <i class="icon-basket"></i>
            <span class="title">City</span>
            <span class="selected"></span>
          </a>
        </li>
        <li @if($top_active == 7) class="active" @endif>
          <a href="{{url('/admin/language')}}">
            <i class="icon-basket"></i>
            <span class="title">Language</span>
            <span class="selected"></span>
          </a>
        </li>   
         <li @if($top_active == 8) class="active" @endif>
          <a href="{{url('/admin/tribe')}}">
            <i class="icon-basket"></i>
            <span class="title">Tribe</span>
            <span class="selected"></span>
          </a>
        </li>   
         <li @if($top_active == 9) class="active" @endif>
          <a href="{{url('/admin/religion')}}">
            <i class="icon-basket"></i>
            <span class="title">Religion</span>
            <span class="selected"></span>
          </a>
        </li> 
         <li @if($top_active == 10) class="active" @endif>
          <a href="{{url('/admin/forum')}}">
            <i class="icon-basket"></i>
            <span class="title">Forum Category</span>
            <span class="selected"></span>
          </a>
        </li>        
      </ul>
    </div>