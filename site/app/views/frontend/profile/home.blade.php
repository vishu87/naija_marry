<div class="main">
  <div class="container">     
    <div class="row profile-container">
      <div class="col-md-4 colmd4 pro-bar">                 
        <div class="row colmd4-row">
          <div class="col-md-5 fullpadding">
            {{HTML::image('assets/img/avatar/b1.jpg','img',array("class"=>"profile-image"))}}
            <h5 class="center-align"><b class="section-title heading">Vashistha</b></h5>
          </div> 
          <div class="col-md-7"> 
            <h5 class="heading">Profile ID :</h5>
            <h5 class="heading"><b>SMM2146326</b></h5>
            <h6 class="heading">Profile is 52% complete</h6>
            <div class="progress pro-bar">
              <div class="progress-bar barwidth" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only">70% Complete</span>
              </div> 
            </div> 
            <h5 class="heading">What's Next?</h5>
            <h6 class="heading"><a href="{{url('/basic-information')}}">Edit Profile</a></h6>
            <button class="upload-button heading"><span class="glyphicon glyphicon-camera profile-img" aria-hidden="true"></span>Upload Image</button>
          </div>                   
        </div>
         <hr class="hr-margin">
        <div class="row colmd4-row paddingtop">
          <h4 class="section-title heading">Respond to your Messages!</h4>
          <h5 class="heading">Inbox</h5>
          <ul>
            <li><a class="text-decor heading" href="#">Personalized your data</a></li>
            <li><a class="text-decor heading" href="#">Unread your Message</a></li>
          </ul>
          <hr class="hr-margin">
        </div>
        <div class="row colmd4-row paddingtop">
          <h5 class="heading">More Requests</h5>
          <ul>
            <li><a class="text-decor heading" href="#">Photos</a></li>
            <li><a class="text-decor heading" href="#">Mobile Vefification</a></li>
          </ul>
        </div>
        <div class="row colmd4-row margin-top">
          <h4  class="section-title heading">My Search</h4>
          <div class="col-md-12"> 
            <div class="col-md-5"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>06 Apr 2015</div>
            <div class="col-md-6"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> 06:43 PM</div>
          </div>
          <p><a class="text-decor heading" href="#">Looking for Mother Tongue [Hindi], Religion [Hind ...</a></p>
          <div class="col-md-12"><button class="btn send_btn" style="background: #F5F05F;" type="button">Previous Search</button>
          </div> 
        </div>
        <div class="row colmd4-row">
          {{Form::open(array("url"=>"/","method" => "PUT","id"=>"builderForm","files"=>"true"))}}                                   
            <div class="form-group col-md-12">
              <label class="heading">Age</label>
              <div class="row">
                <div class="col-md-6">
                  {{Form::select('age', array("0"=>"18","1"=>"19","2"=>"20"),'',["class"=>"form-control"])}}
                </div>                                           
                <div class="col-md-6">
                  {{Form::select('age',array("0"=>"25","1"=>"26","2"=>"27"),'',array("class"=>"form-control"))}}
                </div>                  
              </div>
            </div>
              <div class="form-group col-md-12">
                <label class="heading">Religion</label>                     
                 {{Form::select('religion',array("0"=>"Doesn't Matter","1"=>"Hindu","2"=>"Muslim"),'',array("class"=>"form-control"))}}
                 <span>{{$errors->first('marital_status')}}</span>
              </div>                         
            <div class="form-group col-md-12">
              <label class="heading">Mother Tongue</label> 
              {{Form::select('mother_tongue',array("0"=>"Doesn't Matter","1"=>"Hindi","2"=>"Marathi"),'',array("class"=>"form-control"))}}             
            </div>                                        
            <div class="form-group col-md-12 subbutton">
              <button type="submit" class="btn default">Submit</button>
          </div>
            {{Form::close()}}
        </div> 
      </div>
      <div class="col-md-8">                      
        <div class="row">
          <div class="col-md-12">
            <div class="tabbable-custom tabbable-noborder profile-tab">
              <ul class="nav nav-tabs">
                <li class="active">
                  <a href="#tab_1_1" class="heading" data-toggle="tab">My Matches</a>
                </li>
                <li>
                  <a href="#tab_1_2" class="heading" data-toggle="tab">Profile Visitor</a>
                </li>
                 <li>
                  <a href="#tab_1_3" class="heading" data-toggle="tab">My Contact</a>
                </li>
                 <li>
                  <a href="#tab_1_4" class="heading" data-toggle="tab">Relevent Updates</a>
                </li>
              </ul>
              <div class="tab-content profile-container fullpadding profile-tab margin-top">
                <div class="tab-pane active" id="tab_1_1">
                  <div class="row">
                    <div class="portlet light padding-top-row pro-bar">                            
                      <div class="portlet-body paddingtop">
                        <div class="tabbable-custom nav-justified">
                          <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                              <a href="#tab_1_1_1" data-toggle="tab" class="border-tab heading" aria-expanded="true">
                              0 I'm Seeking </a>
                            </li>
                            <li class="">
                              <a href="#tab_1_1_2" data-toggle="tab" class="border-tab heading" aria-expanded="false">
                              0 Yet To Be Viewed </a>
                            </li>
                            <li class="">
                              <a href="#tab_1_1_3" data-toggle="tab" class="full-border heading" aria-expanded="false">
                              0 Seeking Me </a>
                            </li>
                          </ul>
                          <div class="tab-content full-border heading">
                            <div class="tab-pane active" id="tab_1_1_1">
                             ------------
                            </div>
                            <div class="tab-pane" id="tab_1_1_2">
                             ---------
                            </div>
                            <div class="tab-pane" id="tab_1_1_3">
                             -----------
                            </div>
                          </div>
                        </div>                             
                      </div>
                    </div>                           
                  </div>
                </div>
                <div class="tab-pane" id="tab_1_2">
                  <div class="row">
                    <div class="portlet light padding-top-row pro-bar">                            
                      <div class="portlet-body paddingtop">
                        <div class="tabbable-custom nav-justified">
                          <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                              <a href="#tab_1_2_1" data-toggle="tab" class="border-tab heading" aria-expanded="true">
                              0 Who Viewed Me </a>
                            </li>
                            <li class="">
                              <a href="#tab_1_2_2" data-toggle="tab" class="border-tab heading" aria-expanded="false">
                              4 Viewed </a>
                            </li>
                            <li class="">
                              <a href="#tab_1_2_3" data-toggle="tab" class="full-border heading" aria-expanded="false">
                              0 Shortlist Profile </a>
                            </li>
                          </ul>
                          <div class="tab-content paddingtop full-border heading">
                            <div class="tab-pane active" id="tab_1_2_1">
                             ------------
                            </div>
                            <div class="tab-pane" id="tab_1_2_2">
                              <div class="row margin-top">
                                <div class="col-md-4 center-align colmd4">
                                  {{HTML::image('assets/img/avatar/b1.jpg','img',array("class"=>"profile-image"))}}
                                   <h5 class="section-title heading">Sachin</h5>
                                   <p>26 yrs, 5ft, Pal, Hindu, Hindi , Operations, Bangalore, India</p>
                                   <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                                <div class="col-md-4 center-align colmd4">
                                   {{HTML::image('assets/img/avatar/b3.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Srisha</h5>
                                  <p>18 yrs, 5ft, Khatri, Hindu, Telugu , , Hyderabad, India</p>
                                   <div class="section-title heading center-align"><span  class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                                <div class="col-md-4 center-align colmd4">
                                    {{HTML::image('assets/img/avatar/b4.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Poonam</h5>
                                  <p>21 yrs, 5ft 1in, Sunni, Muslim, Gujarati , , Kheda, India</p>
                                  <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                              </div>
                              <hr>
                              <div class="row">
                                <div class="col-md-4 center-align colmd4">
                                  {{HTML::image('assets/img/avatar/b2.jpg','img',array("class"=>"profile-image"))}}
                                   <h5 class="section-title heading">Sachin</h5>
                                   <p>26 yrs, 5ft, Pal, Hindu, Hindi , Operations, Bangalore, India</p>
                                   <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                                <div class="col-md-4 center-align">
                                   {{HTML::image('assets/img/avatar/b1.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Srisha</h5>
                                  <p>18 yrs, 5ft, Khatri, Hindu, Telugu , , Hyderabad, India</p>
                                  <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>                                     
                              </div>
                            </div>
                            <div class="tab-pane" id="tab_1_2_3">
                             ------------------
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>
                  </div>
                </div>
                 <div class="tab-pane" id="tab_1_3">
                  <div class="row">
                    <div class="portlet light padding-top-row pro-bar">                            
                      <div class="portlet-body paddingtop">
                        <div class="tabbable-custom nav-justified">
                          <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                              <a href="#tab_1_3_1" data-toggle="tab" class="border-top" aria-expanded="true">
                              Accepted Contacts </a>
                            </li>
                            <li class="">
                              <a href="#tab_1_3_2" data-toggle="tab" class="border-top" aria-expanded="false">
                              Prospective Contacts </a>
                            </li>
                          </ul>
                          <div class="tab-content paddingtop full-border heading">
                            <div class="tab-pane active" id="tab_1_3_1">
                                   <div class="row margin-top">
                                <div class="col-md-4 center-align colmd4">
                                  {{HTML::image('assets/img/avatar/b1.jpg','img',array("class"=>"profile-image"))}}
                                   <h5 class="section-title heading">Sachin</h5>
                                   <p>26 yrs, 5ft, Pal, Hindu, Hindi , Operations, Bangalore, India</p>
                                   <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                                <div class="col-md-4 center-align colmd4">
                                   {{HTML::image('assets/img/avatar/b3.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Srisha</h5>
                                  <p>18 yrs, 5ft, Khatri, Hindu, Telugu , , Hyderabad, India</p>
                                   <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                                <div class="col-md-4 center-align colmd4">
                                    {{HTML::image('assets/img/avatar/b4.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Poonam</h5>
                                  <p>21 yrs, 5ft 1in, Sunni, Muslim, Gujarati , , Kheda, India</p>
                                  <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                              </div>
                              <hr>
                            </div>
                            <div class="tab-pane" id="tab_1_3_2">
                              ------------
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab_1_4">
                  <div class="row">
                    <div class="portlet light padding-top-row pro-bar">                            
                      <div class="portlet-body paddingtop">
                        <div class="tabbable-custom nav-justified">
                          <ul class="nav nav-tabs nav-justified">
                            <li class="active">
                              <a href="#tab_1_4_1" data-toggle="tab" class="border-top" aria-expanded="true">
                              Accepted Contacts </a>
                            </li>
                          </ul>
                          <div class="tab-content paddingtop full-border heading">
                            <div class="tab-pane active" id="tab_1_4_1">
                              <div class="row margin-top">
                                <div class="col-md-4 center-align colmd4">
                                    {{HTML::image('assets/img/avatar/b4.jpg','img',array("class"=>"profile-image"))}}
                                  <h5 class="section-title heading">Poonam</h5>
                                  <p>21 yrs, 5ft 1in, Sunni, Muslim, Gujarati , , Kheda, India</p>
                                  <div class="section-title heading center-align"><span class="glyphicon glyphicon-plus icon-plus" aria-hidden="true"></span>More</div>
                                </div>
                              </div>
                              <hr>
                            </div>
                          </div>
                        </div>                     
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>            
</div>
</div>
</div>
</div>
</div>