<?php

class StateController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'state' => Input::get('state'),
        'country_id' => Input::get('country_id'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'state' => 'required',
        'country_id' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("states")->insertGetID(array('country_id'=>Input::get("country_id"),'state'=>Input::get("state"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('state').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getstates(){
        $this->layout->title = 'All state | Admin';
        $this->layout->top_active = 5;
        $state = DB::table('states')->join('countries','states.country_id','=','countries.id')->select('states.*','countries.country')->get();
        $this->layout->main = View::make("admin.state.index",array("states"=>$state));
    }

      public function getadd(){
        $this->layout->title = 'Add | state';
        $this->layout->top_active = 5;
        $country = DB::table('countries')->lists('country','id');
        $this->layout->main = View::make("admin.state.add",array("countries"=>$country));
    }

      public function getstate($id){
        $this->layout->title = 'Admin | state';
        $this->layout->top_active = 5;   
        $country = DB::table('countries')->lists('country','id');
        $state = DB::table('states')->where('id',$id)->first();
        $this->layout->main = View::make("admin.state.edit",array("state"=>$state,"countries"=>$country));
    }

        public function putupdate($id){       
        $cre = [
         'country_id' => Input::get('country_id'),
         'state' => Input::get('state'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'country_id' => 'required',
        'state' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $state = state::find($id);
                $state->country_id = Input::get('country_id');
                $state->state = Input::get('state');
                $state->status = Input::get('status');
                $state->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('state').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>state not found');
        } 
    }

     public function getdelete($id){
        DB::table("states")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('state').'</b> has been successfully deleted');                    
    }

}