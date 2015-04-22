
    <div class="container-fluid home-slider">
        <div class="container middle-image">
          <div class="row home-search">
            <div class="col-md-3 light-red">
              <div style="text-align:right; float:left">
                  <b>SEARCH</b><br> YOUR MATCH
              </div>
              <div style="text-align:left; float:left; margin-left:20px">
                  <input type="radio" name="gen" > Bride <br>
                  <input type="radio" name="gen"> Groom
              </div>
              <div class="clear"></div>
           
            </div>
             

            <div class="col-md-6 dark-grey">

              <div class="search-div search-div-first">
                               AGE<br>
              <select>
                <?php
                for($i=18;$i<=40;$i++){
                  echo '<option>'.$i.'</option>';
                }
                ?>
              </select>
              to
              <select>
                <?php
                for($i=18;$i<=40;$i++){
                  echo '<option>'.$i.'</option>';
                }
                ?>
              </select>
              </div>

              <div class="search-div">
               Religion<br>
              <select id="religionSelect" name="religions" onchange="updateCaste();" class="qsselect">
                 <option selected="selected" value="DONM">Select</option><option value="HIND">Christian</option><option value="MUSL">Muslim</option><option value="OTHE">Others</option>
              </select>
              </div>

              <div class="search-div">
               Mother Tongue<br>
              <select id="religionSelect" name="religions" onchange="updateCaste();" class="qsselect">

                 <option>Select</option>
                 <option>English</option>
                                  <option>Hausa</option>
<option>Igbo</option>
<option>Yoruba</option>
<option>Fulani</option>
<option>Edo</option>
<option>Ijaw</option>
<option>Kanuri</option>
<option>Ibibio</option>
<option>Ebira</option>
<option>Nupe</option>
<option>Gwari</option>
<option>Itsegiri</option>
<option>Jukun</option>
<option>Urhobo</option>
<option>Igala</option>
<option>Idoma</option>
<option>Tiv</option>
              </select>
              </div>


              <div class="search-div search-div-last">
               Location<br>
              <select id="religionSelect" name="religions" onchange="updateCaste();" class="qsselect" style="width:100px">
                 <option selected="selected" value="DONM">Select</option><option>Lagos, Nigeria</option>
<option>Abuja, Nigeria</option>
<option>Port Harcourt, Nigeria</option>
<option>Anywhere in Nigeria</option>
<option>UK</option>
<option>USA</option>
<option>Canada</option>
<option>Anywhere in the World</option>
              </select>
              </div>
              <div class="clear"></div>

            </div>
            <div class="col-md-3 light-red">
              <a href="{{url('/profile/search')}}"><button class="btn btn-embossed btn-warning btn-home-search">
               <span class="glyphicon glyphicon-search"></span> Search Now
              </button></a>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row" style="margin:6px 0 5px 0;">
            <div class="col-md-3" style="line-height:1">
              <span style="color:rgba(181,29,34,1)">BROWSE</span>
              MATRIMONIAL
              PROFILES BY
            </div>
             <div class="col-md-9" style="font-size:12px; ">
               <span style="color:rgba(181,29,34,1)">By Ethnic Group:</span>&nbsp; Hausa | Igbo | Yoruba | Fulani | Edo | Ijaw | Kanuri | Ibibio | Ebira | Nupe | Gwari | Itsegiri | Jukun | Urhobo | Igala | Idoma<br>
               <span style="color:rgba(181,29,34,1)">By Religion:</span>&nbsp; Muslim | Christian | Other &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:rgba(181,29,34,1)">By location:</span> Lagos | Abuja | Port Harcourt | Nigerian | UK | USA | Canada 
            </div>
          </div>
        </div>
    </div>

    <div class="container">
      <div class="row home-middle">
        <div class="col-md-9">
          <h4>Naija Matrimonial</h4>
          <p>Searching for Nigerian brides and  grooms, join the leading matrimonial site in Nigeria. Join for free and add your Naija matrimony profile on naijagomarry.com. Join the best site for online Nigerian matchmaking where Nigerian brides and Nigerian grooms meet and communicate regarding Nigerian matrimony. Naijagomarry.com's matrimonial search will help you find your life partner easily.</p>
        </div>
        <div class="col-md-3">
          <h5>It's free</h5>
           <a class="btn btn-embossed btn-primary reg-btn">
               <span class="glyphicon glyphicon-search"></span> Register Now
              </a>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="border-top: 1px solid #eee">
      <div class="container">
      <div class="row home-middle">
        <div class="col-md-6" style="border-right: 1px solid #eee">
          <h6>Feautured Brides</h6>
          <div class="row">
            <?php 

              for($i=0; $i<4;$i++){

            ?>
            <div class="col-md-6 col-xs-12" style="  ">
              <div style="margin:5px;background:#f7f7f7;padding:5px;">
             <img src="assets/img/avatar/b<?php echo $i+1; ?>.jpg" style="float:left">
             <p class="font-small">
                <a href="">Sarima Okonkwo</a><br>
                5ft 3in, 33 yrs <br>
                Business Person , Muslim <br>
                Lagos
            </p> 
            <div class="clear"></div>
          </div>
            </div>
            <?php 
              if($i == 1) echo '          </div>
          <div class="row">';
          } ?>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <h6 class="textright">Feautured Grooms</h5>
          <div class="row">
            <?php 

              for($i=0; $i<4;$i++){

            ?>
            <div class="col-md-6 col-xs-12" style="  ">
              <div style="margin:5px;background:#f7f7f7;padding:5px;">
             <img src="assets/img/avatar/g<?php echo $i+1; ?>.jpg" style="float:left">
             <p class="font-small">
                <a href="">Wale Akintola</a><br>
                5ft 3in, 33 yrs <br>
                Business Person , Christian <br>
                Lagos
            </p> 
            <div class="clear"></div>
          </div>
            </div>
            <?php 
              if($i == 1) echo '          </div>
          <div class="row">';
          } ?>
          </div>
        </div>
      </div>
    </div>
    </div>


   