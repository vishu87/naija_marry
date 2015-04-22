<?php

class CityController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'city' => Input::get('city'),
        'country_id' => Input::get('country_id'),
        'state_id' => Input::get('state_id'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'city' => 'required',
        'country_id' => 'required',
        'state_id' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("cities")->insertGetID(array('country_id'=>Input::get("country_id"),'state_id'=>Input::get("state_id"),'city'=>Input::get("city"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('city').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getcities(){
        $this->layout->title = 'All city | Admin';
        $this->layout->top_active = 6;
        $city = DB::table('cities')->join('countries','cities.country_id','=','countries.id')->join('states','cities.state_id','=','states.id')->select('cities.*','countries.country','states.state')->get();
        $this->layout->main = View::make("admin.city.index",array("cities"=>$city));
    }

      public function getadd(){
        $this->layout->title = 'Add | city';
        $this->layout->top_active = 6;
        $country = DB::table('countries')->lists('country','id');
        $state = DB::table('states')->lists('state','id');
        $this->layout->main = View::make("admin.city.add",array("states"=>$state,"countries"=>$country));
    }

      public function getcity($id){
        $this->layout->title = 'Admin | city';
        $this->layout->top_active = 6;   
        $country = DB::table('countries')->lists('country','id');
        $state = DB::table('states')->lists('state','id');
        $city = DB::table('cities')->where('id',$id)->first();
        $this->layout->main = View::make("admin.city.edit",array("city"=>$city,"countries"=>$country,"states"=>$state));
    }

        public function putupdate($id){       
        $cre = [
         'country_id' => Input::get('country_id'),
         'state_id' => Input::get('state_id'),
         'city' => Input::get('city'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'country_id' => 'required',
        'state_id' => 'required',
        'city' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $city = City::find($id);
                $city->country_id = Input::get('country_id');
                $city->state_id = Input::get('state_id');
                $city->city = Input::get('city');
                $city->status = Input::get('status');
                $city->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('city').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>city not found');
        } 
    }

     public function getdelete($id){
        DB::table("cities")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('city').'</b> has been successfully deleted');                    
    }

}