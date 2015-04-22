  <div class="container" style="margin-top:15px;">
  <div class="row">
    <div class="col-md-12">
          <div class="portlet" style="margin-top:20px;">
            <div class="portlet-body">
              <div class=" portlet-tabs">
                <ul class="nav nav-tabs corper-life-tab">
                  <li class="active col-md-2 col-sm-12 align-center">
                    <a href="#portlet_tab1" data-toggle="tab">
                      Edit My Profile 
                    </a>
                  </li>
                  <li class="col-md-2 col-sm-12 align-center">
                    <a href="#portlet_tab2" data-toggle="tab">
                    Edit Contact Details </a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="portlet_tab1">
                     <div class="col-md-4">
                      @include('frontend.profile.sidebar')
                     </div>
                     <div class="col-md-8">
                       {{$main}}
                     </div>
                  </div>
                  <div class="tab-pane" id="portlet_tab2">
                     <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>Sirisha is looking for Groom</p>           
                     <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>More about Preferred Partner<br>
                         <table style="width:50%;">
                           <tr>
                            <td>Age</td>
                            <td>: 18 to 23</td>                            
                          </tr>
                          <tr>
                            <td>Marital Status</td>
                            <td>: Never Married</td> 
                          </tr>                   
                        </table>
                     </p> 
                      <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-user" aria-hidden="true"></span>About his Physical Appearance & Looks<br>
                       <table style="width:70%;">
                         <tr>
                          <td>Height</td>
                          <td>:5ft to 5ft 9in</td>                            
                        </tr>                 
                      </table>
                     </p> 
                      <p><span style="color:red; margin:5px;" class="glyphicon glyphicon-plus" aria-hidden="true"></span>About his Religion and Social info<br>
                        <table style="width:45%;">
                           <tr>
                            <td>Religion</td>
                            <td>:Hindu</td>                            
                          </tr>
                          <tr>
                            <td>Mother Tongue</td>
                            <td>:Telugu</td>
                          </tr> 
                           <tr>
                            <td>Caste</td>
                            <td>:Khatri</td>
                          </tr> 
                          <tr>
                            <td>Manglik</td>
                            <td>:Do Not Know</td>
                          </tr>                   
                        </table>
                     </p>            
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

    </div>

     
  </div>                 