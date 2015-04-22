<div class="container" style="margin-top:20px;">
  <div class="row" style="margin-bottom:20px;">
    <div class="portlet" style="margin-top:20px;">
      <div class="portlet-body">
        <div class=" portlet-tabs">
          <ul class="nav nav-tabs profile-tab">
            <li class="active align-center">
              <a class="tab-search heading" style="border-radius:0px;" href="#portlet_tab1" data-toggle="tab">
                Edit My Profile 
              </a>
            </li>
            <li class="align-center">
              <a class="tab-search heading"href="#portlet_tab2" data-toggle="tab">
              Edit Contact Details </a>
            </li>            
          </ul>
          <div class="tab-content profile-data">
            <div class="tab-pane active" id="portlet_tab1">
              <div class="col-md-3">
                 <div class="div_links heading refine" data-id="prob-1">Basic Information</div>
                 <div class="div_links heading refine" data-id="prob-2">Religion Information</div>
                 <div class="div_links heading refine" data-id="prob-3">Physical Appearance</div>
                 <div class="div_links heading refine" data-id="prob-4">Education and Work</div>                 
                 <div class="div_links heading refine" data-id="prob-5">Family Information</div>
                 <div class="div_links heading refine" data-id="prob-6">Lifestyle and Interests</div>
              </div>
              <div class="col-md-9" style="border: 1px solid #F2EFEF;">
                <div id="prob-1" class="div_form"  @if(Session::has('tab')) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                        <div class="col-md-12">
                          {{Form::open(array("url"=>"/basicinfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}  
                            <div class="form-group col-md-6">
                              <label>Name</label>
                                {{Form::text('first_name',$user->first_name,array("class"=>"form-control", "placeholder"=>"first_name"))}}
                                <span>{{$errors->first('first_name','Please provide your name')}}</span> 
                            </div>                         
                            <div class="form-group col-md-6 ">
                              <label>D.O.B</label>
                              <div class="row dob">
                                <div class="col-md-4" style="padding-right: 5px;">
                                  {{Form::selectRange('dob_date', 1, 31,$dob[2],["class"=>"form-control"])}}
                                </div>                                
                                <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
                                  {{Form::selectMonth('dob_month',$dob[1],array("class"=>"form-control"))}}
                                </div>                                
                                <div class="col-md-4" style="padding-left: 5px;">
                                  {{Form::selectYear('dob_year',1970, 2010, $dob[0], ['class' => 'form-control'])}}
                                </div>
                              </div>
                            </div>
                            <div class="form-group col-md-6">
                               {{ Form::label('', 'Marital Status') }}                                     
                               {{Form::select('marital_status',array("0"=>"Select","1"=>"Married","2"=>"UnMarried"),$user->marital_status,array("class"=>"form-control"))}}
                               <span>{{$errors->first('marital_status')}}</span>
                            </div>                           
                            <div class="form-group col-md-6">
                              <label>Country of residence</label> 
                              {{Form::select('country_id',$countries,$user->country_id,array("class"=>"form-control"))}}             
                            </div>
                            <div class="form-group col-md-6">
                              <label>State</label> 
                              {{Form::select('state_id',$states,$user->state_id,array("class"=>"form-control"))}}            
                            </div>
                            <div class="form-group col-md-6">
                              <label>City</label> 
                              {{Form::select('city_id',$cities,$user->city_id,array("class"=>"form-control"))}}            
                            </div>
                            <div class="form-group col-md-12">
                                <label>About Me</label> 
                                 {{ Form::textarea('about_me',$userparam->about_me,["class"=>"form-control textarea"])}}  
                            </div>                          
                            <div class="form-group col-md-12 subbutton">
                              <button type="submit" class="btn default">Submit</button>
                          </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>
                  <div id="prob-2" class="div_form" @if(Session::get('tab') != 2) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/religioninfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}                                             
                            <div class="form-group col-md-6">
                               {{ Form::label('', 'Religion') }}                                     
                               {{Form::select('religion_id',$religions,$user->religion_id,array("class"=>"form-control"))}}
                               <span>{{$errors->first('religion')}}</span>
                            </div>                         
                          <div class="form-group col-md-6">
                            <label>Tribe</label> 
                            {{Form::select('tribe_id',$tribes,$user->tribe_id,array("class"=>"form-control"))}}             
                          </div>                                                                                                  
                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                        </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>


                  <div id="prob-3" class="div_form" @if(Session::get('tab') != 3) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/physicalinfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}  
                          <div class="form-group col-md-6">
                            <label>Weight</label>
                              {{Form::text('weight',$userparam->weight,array("class"=>"form-control", "placeholder"=>"Weight"))}}
                              <span>{{$errors->first('weight','Please provide your weight')}}</span> 
                          </div>                       
                            <div class="form-group col-md-6">
                               {{ Form::label('', 'Complexion') }}                                     
                               {{Form::select('complexion_id',$complexions,$user->complexion_id,array("class"=>"form-control"))}}
                               <span>{{$errors->first('complexion_id','Please provide your Comlplexion')}}</span>
                            </div>                         
                          <div class="form-group col-md-6">
                            <label>Body Type</label> 
                            {{Form::select('body_type_id',$body_types,$user->body_type_id,array("class"=>"form-control"))}}             
                          </div>
                          <div class="form-group col-md-6">
                            <label>Height</label> 
                            {{Form::select('height',array(""=>"Select","1"=>"4ft 5in","2"=>"5ft","3"=>"5ft 5in"),$userparam->height,array("class"=>"form-control"))}}            
                          </div>
                           <div class="form-group col-md-6">
                            <label>Special Case</label> 
                            {{Form::select('special_case',array(""=>"None","1"=>"Doesn't Matter","2"=>"Hiv Positive","3"=>"Physically Challenged from birth"),$userparam->special_case,array("class"=>"form-control"))}}            
                          </div>                                                 
                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                        </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>
                  <div id="prob-4" class="div_form" @if(Session::get('tab') != 4) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/educationinfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}                                           
                                                 
                          <div class="form-group col-md-6">
                            <label>Education</label> 
                            {{Form::select('education_id',$educations,$user->education_id,array("class"=>"form-control"))}}             
                          </div>
                          
                           <div class="form-group col-md-6">
                               {{ Form::label('', 'Occupation') }}                                     
                               {{Form::select('occupation',array("0"=>"Select","1"=>"Admin","2"=>"Agriculture"),$userparam->occupation,array("class"=>"form-control"))}}
                               <span>{{$errors->first('occupation')}}</span>
                            </div>   
                              
                           <div class="form-group col-md-6">
                            <label>Company Name</label>
                              {{Form::text('company_name',$userparam->company_name,array("class"=>"form-control", "placeholder"=>"Company Name"))}}
                              <span>{{$errors->first('company_name','Please provide your first Company Name')}}</span> 
                          </div> 
                          <div class="form-group col-md-6">
                            <label>Annual Income</label> 
                            {{Form::text('annual_income',$userparam->annual_income,array("class"=>"form-control", "placeholder"=>"Annual Income"))}}            
                          </div>
                          <div class="form-group col-md-6">
                            <label>Experience</label> 
                            {{Form::text('experience',$userparam->experience,array("class"=>"form-control", "placeholder"=>"Experience"))}}                                        
                          </div>                                                   
                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                        </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>
   
                  <div id="prob-5" class="div_form" @if(Session::get('tab') != 5) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/familyinfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}                                                  
                            <div class="form-group col-md-6">
                               <label>Father's Occupation</label>                                    
                               {{Form::select('f_occupation',array("0"=>"Select","1"=>"Business","2"=>"Service"),$userparam->f_occupation,array("class"=>"form-control"))}}
                               <span>{{$errors->first('religion')}}</span>
                            </div>                         
                          <div class="form-group col-md-6">
                            <label>Mother's Occupation'</label> 
                            {{Form::select('m_occupation',array(""=>"Select","1"=>"Housewife","2"=>"Business","3"=>"Service"),$userparam->m_occupation,array("class"=>"form-control"))}}             
                          </div>
                          <div class="form-group col-md-6">
                            <label>Brothers</label> 
                            {{Form::select('brother',array(""=>"0","1"=>"1","2"=>"2","3"=>"3"),$userparam->brother,array("class"=>"form-control"))}}                            
                          </div>
                           <div class="form-group col-md-6">
                            <label>Sisters</label> 
                             {{Form::select('sister',array(""=>"0","1"=>"1","2"=>"2","3"=>"3"),$userparam->sister,array("class"=>"form-control"))}}                                    
                          </div>                          
                          <div class="form-group col-md-12">
                              <label>About Family</label> 
                               {{ Form::textarea('about_family',$userparam->about_family,["class"=>"form-control textarea"])}}  
                          </div> 

                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                        </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>
                  <div id="prob-6" class="div_form" @if(Session::get('tab') != 6) style="display:none" @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/lifestyleinfo","method" => "PUT","id"=>"builderForm","files"=>"true"))}}  
                          <div class="form-group  col-md-6">
                            <label>Smoking</label>
                            <div class="radio-list"  style="margin-left: 20px;">
                              <label class="radio-inline">
                              {{ Form::radio('smoking', 'yes', true) }} Yes </label>
                              <label class="radio-inline">
                              {{ Form::radio('smoking', 'no') }} No </label>
                              <label class="radio-inline">
                              {{ Form::radio('smoking', 'moderate') }}Moderate </label>
                            </div>
                          </div> 
                          <div class="form-group  col-md-6">
                            <label>Drinking</label>
                            <div class="radio-list"  style="margin-left: 20px;">
                              <label class="radio-inline">
                              {{ Form::radio('drinking', 'yes', true) }} Yes </label>
                              <label class="radio-inline">
                              {{ Form::radio('drinking', 'no') }} No </label>
                              <label class="radio-inline">
                              {{ Form::radio('drinking', 'occasionally') }}Occasionally </label>
                            </div>
                          </div>                     
                          <div class="form-group col-md-6">
                            <label>Eating Habits</label>                                    
                             {{Form::select('eating_habit',array("0"=>"Select","1"=>"Jain","2"=>"Vegetarian","2"=>"Non-Vegetarian"),$userparam->eating_habit,array("class"=>"form-control"))}}
                            <span>{{$errors->first('eating_habit')}}</span>
                          </div>                         
                          <div class="form-group col-md-6">
                            <label>Favourite Music Genre(s)</label> 
                            {{Form::text('favourite_music',$userparam->favourite_music,array("class"=>"form-control", "placeholder"=>"Favourite Music"))}}            
                          </div>
                          <div class="form-group col-md-6">
                            <label>Favourite Artist(s)</label> 
                            {{Form::text('favourite_artist',$userparam->favourite_artist,array("class"=>"form-control", "placeholder"=>"Favourite Artist"))}}            
                          </div>
                           <div class="form-group col-md-6">
                            <label>Favourite Song(s)</label> 
                            {{Form::text('favourite_song',$userparam->favourite_song,array("class"=>"form-control", "placeholder"=>"Favourite Song"))}}           
                          </div>                          
                          <div class="form-group col-md-6">
                            <label>Favourite Movie(s)</label> 
                            {{Form::text('favourite_movie',$userparam->favourite_movie,array("class"=>"form-control", "placeholder"=>"Favourite Movie"))}}              
                          </div>
                          <div class="form-group col-md-6">
                            <label>Favourite Destination(s)</label> 
                             {{Form::text('favourite_destination',$userparam->favourite_destination,array("class"=>"form-control", "placeholder"=>"Favourite Destination"))}}    
                          </div>
                          <div class="form-group col-md-6">
                            <label>Favourite Book(s)</label> 
                             {{Form::text('favourite_book',$userparam->favourite_book,array("class"=>"form-control", "placeholder"=>"Favourite Book"))}}          
                          </div>
                          <div class="form-group col-md-6">
                            <label>Favourite Auther(s)</label> 
                             {{Form::text('favourite_auther',$userparam->favourite_auther,array("class"=>"form-control", "placeholder"=>"Favourite Auther"))}}            
                          </div>                          
                          
                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                        </div>
                          {{Form::close()}}
                        </div>
                      </div>                      
                      </div>
                    </div>            
                  </div>
              </div>
            </div>
            <div class="tab-pane" id="portlet_tab2">
              <div class="col-md-3">
               <div class="div_links" data-id="prob-1">Contact Details</div>
              </div>
              <div class="col-md-9">
                <div id="prob-1" class="div_form" @if(Session::get('tab') != 7) @endif>
                  <div class="portlet light">
                    <div class="portlet-body form">
                      <div class="row">
                       <div class="col-md-12">
                        {{Form::open(array("url"=>"/contactinfo","method" => "PUT","id"=>"builderForm"))}}  
                         <div class="form-group col-md-6">
                            <label>Primary Mobile Number</label> 
                            <div class="row">
                              <div class="col-md-4" style="padding-right: 0px;">{{Form::select('mobile_code',array("1"=>"India +91","2"=>"USA +1","3"=>"Pakistan +92"),$user->mobile_code,array("class"=>"form-control"))}}</div>
                              <div class="col-md-8">{{Form::text('mobile_no',$user->mobile_no,array("class"=>"form-control", "placeholder"=>"Mobile Number"))}}</div>
                            </div>                                  
                          </div>              
                          <div class="form-group col-md-6">
                            <label>Alternate Mobile Number</label> 
                            <div class="row">
                              <div class="col-md-4" style="padding-right: 0px;">{{Form::select('code',array(""=>"Select","1"=>"India +91","2"=>"USA +1","3"=>"Pakistan +92"),$userparam->code,array("class"=>"form-control"))}}</div>
                              <div class="col-md-8"> {{Form::text('alt_number',$userparam->alt_number,array("class"=>"form-control", "placeholder"=>"Mobile Number"))}} </div>
                            </div>                              
                          </div>  
                          <div class="form-group col-md-6">
                            <label>Name of Contact Person</label> 
                             {{Form::text('first_name',$user->first_name,array("class"=>"form-control", "placeholder"=>"Name"))}}
                              <label class="rememberme check" style="margin:5px;">
                             {{Form::checkbox('agree')}} Show my contact details to the paid members </label>    
                          </div>                            
                          <div class="form-group col-md-6">
                            <label>Relationship with the profile</label> 
                            {{Form::select('relation',array("1"=>"Self","2"=>"Sister","3"=>"Brother"),$userparam->relation,array("class"=>"form-control"))}}            
                          </div>
                          <div class="form-group  col-md-6">
                            <label>Best time to call</label>
                            <div class="radio-list"  style="margin-left: 20px;">
                              <label class="radio-inline">
                              {{ Form::radio('timeof_call', 'anytime', true) }} Any time </label>
                              <label class="radio-inline">
                              {{ Form::radio('timeof_call', 'preferredtime') }} Preferred time </label>                             
                            </div>
                          </div>                                                   
                          <div class="form-group col-md-12 subbutton">
                            <button type="submit" class="btn default">Submit</button>
                          </div>
                          {{Form::close()}}
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