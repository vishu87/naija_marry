<?php

class countryController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'country' => Input::get('country'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'country' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("countries")->insertGetID(array('country'=>Input::get("country"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('country').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getcountries(){
        $this->layout->title = 'All country Types | Admin';
        $this->layout->top_active = 4;
        $country = DB::table('countries')->get();
        $this->layout->main = View::make("admin.country.index",array("countries"=>$country));
    }

      public function getadd(){
        $this->layout->title = 'Add | country Types';
        $this->layout->top_active = 4;
        $this->layout->main = View::make("admin.country.add");
    }

      public function getcountry($id){
        $this->layout->title = 'Admin | country Types';
        $this->layout->top_active = 4;   
        $country = DB::table('countries')->where('id',$id)->first();
        $this->layout->main = View::make("admin.country.edit",array("country"=>$country));
    }

        public function putupdate($id){       
        $cre = [
         'country' => Input::get('country'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'country' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $country = country::find($id);
                $country->country = Input::get('country');
                $country->status = Input::get('status');
                $country->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('country').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>country Types not found');
        } 
    }

     public function getdelete($id){
        DB::table("countries")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('country').'</b> has been successfully deleted');                    
    }

}