<?php

class UserprofileController extends BaseController {
    protected $layout = 'frontend.layout';

    public function getProfile(){
        $this->layout->title = 'NaijaGo Marry | User Profile';
        $this->layout->top_active = 1;
        $this->layout->main = View::make("frontend.managepro.emailinfo");
    }

    public function editprofile(){
        $countries = DB::table('countries')->lists('country','id');
        $states = DB::table('states')->lists('state','id');
        $cities = DB::table('cities')->lists('city','id');
        $tribes = DB::table('tribes')->lists('tribe','id');
        $religions = DB::table('religions')->lists('religion','id');
        $body_types = DB::table('body_types')->lists('body_type','id');
        $complexions = DB::table('complexions')->lists('complexion','id');
        $educations = DB::table('educations')->lists('education','id');
        $countries[0]="Select"; ksort($countries);
        $states[0]="Select"; ksort($states);
        $cities[0]="Select"; ksort($cities);
        $tribes[0]="Select"; ksort($tribes);
        $religions[0]="Select"; ksort($religions);
        $body_types[0]="Select"; ksort($body_types);
        $complexions[0]="Select"; ksort($complexions);
        $educations[0]="Select"; ksort($educations);
        $user = User::find(Auth::id());
        $dob = explode('-', $user->dob);
        $userparam = UserParam::where('user_id', Auth::id())->first();        
        if(sizeof($userparam) == 0){
            $userparam = new UserParam();
            $userparam->user_id = Auth::id();
            $userparam->save();
        }
        $this->layout->main = View::make('frontend.managepro.basicinfo', [ "countries" => $countries,"states"=>$states, "cities"=>$cities,"tribes"=>$tribes,"religions"=>$religions, "body_types"=>$body_types,"complexions"=>$complexions,"educations"=>$educations,"user"=>$user, "userparam"=>$userparam,"dob" => $dob]);
    }
    public function basicinfo(){
         $cre = [
            'first_name' => Input::get('first_name')
        ];
        $rules = [
            'first_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());
            $user->first_name = Input::get('first_name');    
            $user->dob = Input::get("dob_year").'-'.Input::get("dob_month").'-'.Input::get("dob_date");  
            $user->marital_status = Input::get('marital_status');  
            $user->country_id = Input::get('country_id');  
            $user->state_id = Input::get('state_id');  
            $user->city_id = Input::get('city_id');
            $user->save();

            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->about_me = Input::get('about_me'); 
            $userparam->save();

            return Redirect::Back();
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

    public function religioninfo(){
         $cre = [
            'religion_id' => Input::get('religion_id')
        ];
        $rules = [
            'religion_id' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());
            $user->religion_id = Input::get('religion_id');    
            $user->tribe_id = Input::get('tribe_id'); 
            $user->save();

            return Redirect::Back()->withInput()->with('tab','2');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','2');
        }
    }

    public function physicalinfo(){
         $cre = [
            'complexion_id' => Input::get('complexion_id')
        ];
        $rules = [
            'complexion_id' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());   
            $user->complexion_id = Input::get('complexion_id');  
            $user->body_type_id = Input::get('body_type_id');
            $user->save();

            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->weight = Input::get('weight');    
            $userparam->height = Input::get('height'); 
            $userparam->special_case = Input::get('special_case');
            $userparam->save();

            return Redirect::Back()->with('tab','3');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','3');
        }
    }

      public function educationinfo(){
         $cre = [
            'education_id' => Input::get('education_id')
        ];
        $rules = [
            'education_id' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());   
            $user->education_id = Input::get('education_id'); 
            $user->save();

            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->occupation = Input::get('occupation');    
            $userparam->company_name = Input::get('company_name'); 
            $userparam->annual_income = Input::get('annual_income');
            $userparam->experience = Input::get('experience');
            $userparam->save();

            return Redirect::Back()->with('tab','4');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','4');
        }
    }

          public function familyinfo(){
          $cre = [
        ];
        $rules = [
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->f_occupation = Input::get('f_occupation');    
            $userparam->m_occupation = Input::get('m_occupation'); 
            $userparam->brother = Input::get('brother');
            $userparam->sister = Input::get('sister');
            $userparam->about_family = Input::get('about_family');
            $userparam->save(); 
            return Redirect::Back()->withInput()->with('tab','5');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','5');
        }
    }

        public function lifestyleinfo(){
          $cre = [
        ];
        $rules = [
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
                   
            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->smoking = Input::get('smoking');    
            $userparam->drinking = Input::get('drinking'); 
            $userparam->eating_habit = Input::get('eating_habit');
            $userparam->favourite_music = Input::get('favourite_music');
            $userparam->favourite_artist = Input::get('favourite_artist');
            $userparam->favourite_song = Input::get('favourite_song');
            $userparam->favourite_movie = Input::get('favourite_movie');
            $userparam->favourite_destination = Input::get('favourite_destination');
            $userparam->favourite_book = Input::get('favourite_book');
            $userparam->favourite_auther = Input::get('favourite_auther');
            $userparam->save();

            return Redirect::Back()->withInput()->with('tab','6');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','6');
        }
    }

     public function contactinfo(){
         $cre = [
            'first_name' => Input::get('first_name')
        ];
        $rules = [
            'first_name' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $user = User::find(Auth::id());
            $user->first_name = Input::get('first_name');    
            $user->mobile_no = Input::get('mobile_no'); 
            $user->mobile_code = Input::get('mobile_code'); 
            $user->save();

            $userparam  = UserParam::where('user_id',Auth::id())->first();
            $userparam->alt_number = Input::get('alt_number');    
            $userparam->code = Input::get('code');    
            $userparam->relation = Input::get('relation'); 
            $userparam->timeof_call = Input::get('timeof_call'); 
            $userparam->save();

            return Redirect::Back()->with('tab','7');
        } else {
            return Redirect::Back()->withErrors($validator)->withInput()->with('tab','7');
        }
    }

    public function getUserinfo($id=null){
        if($id == null) $id = Auth::id();
        $user = User::select('users.*','complexions.complexion','states.state','cities.city','countries.country','educations.education','body_types.body_type','religions.religion','tribes.tribe')->leftJoin('complexions','users.complexion_id','=','complexions.id')->leftJoin('states','users.state_id','=','states.id')->leftJoin('cities','users.city_id','=','cities.id')->leftJoin('countries','users.country_id','=','countries.id')->leftJoin('educations','users.education_id','=','educations.id')->leftJoin('body_types','users.body_type_id','=','body_types.id')->leftJoin('religions','users.religion_id','=','religions.id')->leftJoin('tribes','users.tribe_id','=','tribes.id')->where('users.id',$id)->first();
           $marital_status_values = array("","Married","UnMarried");
           $special_case_values = array("","Doesn't Matter","Hiv Positive","Physically Challenged from birth");
           $occupation_values = array("","Admin","Agriculture");
           $eating_habit_values = array("","Jain","Vegetarian","Non-Vegetarian");
            $userparam = UserParam::where('user_id',$id)->first();
        $this->layout->main =  View::make('frontend.profile.userprofile',array(
            "user" => $user,
            "userparam" => $userparam,
            "marital_status_values" => $marital_status_values,
            "special_case_values" => $special_case_values,
            "occupation_values" => $occupation_values,
            "eating_habit_values"=> $eating_habit_values
        ));          
    }
      
}
    