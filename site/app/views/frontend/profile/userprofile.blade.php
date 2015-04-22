  <div class="container profile-container">
  <div class="row">
    <div class="col-md-9">
      <div class="row profile-row">
        <div class="col-md-4 col4-img">{{HTML::image('assets/img/avatar/d11.jpg','img',array("class"=>"profile-image"))}}</div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-8">
              <h2 class="profile-name heading">{{$user->first_name}} {{HTML::image('assets/img/icons/prfl-id-bg.png','img')}}{{$user->id}}</h2>
              <h4 class="profile-name-detail heading">18 yrs,{{$userparam->height}}, {{$user->religion}} , <br>{{$user->education}},{{$user->state}} , {{$user->countery}}</h4>                
            </div>
            <div class="col-md-4 created heading">Created For: <span class="section-title heading">{{$userparam->relation}}</span></div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <textarea>Hi!
              I am {{$user->first_name}} and I like your profile. I wish to take the conversation ahead with you and therefore sharing my contact details.
              </textarea>
            </div>
          </div>
          <div class="row">                          
            <div class="col-md-12 send_btn"><button class=" 
              btn send_btn" type="button">Send Message</button>
            </div>                     
          </div>
        </div>
      </div>
      <div class="row">
          <div class="portlet profile-container">
            <div class="portlet-body">
              <div class=" portlet-tabs">
                <ul class="nav nav-tabs profile-tab">
                  <li class="active align-center heading">
                    <a href="#portlet_tab1" data-toggle="tab">
                      About Shirisha 
                    </a>
                  </li>
                  <li class="align-center heading">
                    <a href="#portlet_tab2" data-toggle="tab">
                    Sirisha’s Desired Partner </a>
                  </li>
                </ul>
                <div class="tab-content profile-data">                 
                  <div class="tab-pane active" id="portlet_tab1">
                     <p>
                      {{HTML::image('assets/img/icons/mr-abt.jpg','img',array("class"=>"profile-img"))}}<span class="heading section-title">About Sirisha</span>
                      <div class="row user-detail">
                        <div class="col-md-12">
                            <div class="col-md-6">Name</div>
                            <div class="col-md-6">{{$user->first_name}} {{$user->last_name}}</div>
                          </div>
                          <div class="col-md-12">
                            <div class="col-md-6">Date of Birth</div>
                            <div class="col-md-6">{{$user->dob}}</div>
                          </div>
                          <div class="col-md-12">
                            <div class="col-md-6">City</div>
                            <div class="col-md-6">{{$user->city}}</div>
                          </div>
                          <div class="col-md-12">
                            <div class="col-md-6">State</div>
                            <div class="col-md-6">{{$user->state}}</div>
                          </div>                           
                        </div> 
                     </p>
                     <p>{{HTML::image('assets/img/icons/mr-abt.jpg','img',array("class"=>"profile-img"))}}
                      <span class="heading section-title">More About Sirisha</span>
                      <div class="row user-detail" >
                        <div class="col-md-12">
                            <div class="col-md-6">Marital Status</div>
                            <div class="col-md-6">{{$marital_status_values[$user->marital_status]}}</div>
                          </div>
                           <div class="col-md-12">
                            <div class="col-md-6">Country of residence</div>
                            <div class="col-md-6">{{$user->country}}</div>
                          </div>
                           <div class="col-md-12">
                            <div class="col-md-6">Created For</div>
                            <div class="col-md-6">{{$userparam->relation}}</div>
                          </div>
                           <div class="col-md-12">
                            <div class="col-md-6">Last Login</div>
                            <div class="col-md-6"></div>
                          </div>
                        </div> 
                      </p>

                      <p>
                      {{HTML::image('assets/img/icons/abt-phys.jpg','img',array("class"=>"profile-img"))}}
                      <span class="heading section-title">About Sirisha's Physical Appearance & Looks</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Height</div>
                              <div class="col-md-6">{{$userparam->height}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Complexion</div>
                              <div class="col-md-6">{{$user->complexion}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Body Type</div>
                              <div class="col-md-6">{{$user->body_type}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Special Case</div>
                              <div class="col-md-6">{{$special_case_values[$userparam->special_case]}}</div>
                            </div> 
                          </div>
                      </p>
                      <p>
                        {{HTML::image('assets/img/icons/abt-edcn.jpg','img',array("class"=>"profile-img"))}}
                        <span class="heading section-title">About Sirisha's past and current Education & Career info</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Education</div>
                              <div class="col-md-6">{{$user->education}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Occupation</div>
                              <div class="col-md-6">{{$occupation_values[$userparam->occupation]}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Company Name</div>
                              <div class="col-md-6">{{$userparam->company_name}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Annual Income</div>
                              <div class="col-md-6">{{$userparam->annual_income}}</div>
                            </div> 
                             <div class="col-md-12">
                              <div class="col-md-6">Experience</div>
                              <div class="col-md-6">{{$userparam->experience}}</div>
                            </div> 
                          </div>
                      </p>
                      <p>
                        {{HTML::image('assets/img/icons/ep-astroico.png','img',array("class"=>"profile-img"))}}
                        <span class="heading section-title">About Sirisha's Religion and Social info</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Religion</div>
                              <div class="col-md-6">{{$user->religion}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Tribe</div>
                              <div class="col-md-6">{{$user->tribe}}</div>
                            </div>
                          </div>
                        </p>
                        <p>
                        {{HTML::image('assets/img/icons/abt-lfstl.jpg','img',array("class"=>"profile-img"))}}
                        <span class="heading section-title">About Sirisha's Lifestyle</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Smoking</div>
                              <div class="col-md-6">{{$userparam->smoking}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Drinking</div>
                              <div class="col-md-6">{{$userparam->drinking}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Eating Habits</div>
                              <div class="col-md-6">{{$eating_habit_values[$userparam->eating_habit]}}</div>
                            </div> 
                          </div>
                        </p>
                    </div>
                  <div class="tab-pane" id="portlet_tab2">
                     <p>{{HTML::image('assets/img/icons/mr-abt.jpg','img',array("class"=>"profile-img"))}}
                      <span class="heading section-title">Sirisha is looking for Groom</span></p>           
                     <p>{{HTML::image('assets/img/icons/mr-abt.jpg','img',array("class"=>"profile-img"))}}
                      <span class="heading section-title">More about Preferred Partner</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Age</div>
                              <div class="col-md-6">{{$userparam->height}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Marital Status</div>
                              <div class="col-md-6">{{$user->marital_status}}</div>
                            </div>
                         </div>
                     </p> 
                      <p>{{HTML::image('assets/img/icons/abt-phys.jpg','img',array("class"=>"profile-img"))}}
                        <span class="heading section-title">About his Physical Appearance & Looks</span>
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Height</div>
                              <div class="col-md-6">{{$userparam->height}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Marital Status</div>
                              <div class="col-md-6">{{$user->marital_status}}</div>
                            </div>
                         </div>
                     </p> 
                      <p>{{HTML::image('assets/img/icons/ep-astroico.png','img',array("class"=>"profile-img"))}}
                        <span class="heading section-title">About his Religion and Social info</span>                      
                        <div class="row user-detail">
                          <div class="col-md-12">
                              <div class="col-md-6">Religion</div>
                              <div class="col-md-6">{{$userparam->religion}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Mother Tongue</div>
                              <div class="col-md-6">{{$user->mother_tongue}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Caste</div>
                              <div class="col-md-6">{{$userparam->caste}}</div>
                            </div>
                             <div class="col-md-12">
                              <div class="col-md-6">Manglik</div>
                              <div class="col-md-6">{{$userparam->manglik}}</div>
                            </div> 
                          </div>
                     </p>            
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="row side-section">
        <div class="row heading align-center">
          Similar Profiles
        </div>
        <div class="row similar-profile">
          <div class="col-md-4">{{HTML::image('assets/img/avatar/b1.jpg','img',["class"=>""])}}</div>
          <div class="col-md-8"><a href="#"> SMF1915628</a><br>19 yrs, 5ft 2in, Khatri,<br>12th, Yamuna Nagar</div>
        </div>
        <div class="row similar-profile">
          <div class="col-md-4">{{HTML::image('assets/img/avatar/b1.jpg','img')}}</div>
          <div class="col-md-8"><a href="#"> SMF1915628</a><br>19 yrs, 5ft 2in, Khatri,<br>12th, Yamuna Nagar</div>
        </div>
      </div>
    </div>    
    
  </div>
</div>                    