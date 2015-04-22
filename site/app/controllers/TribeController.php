<?php

class tribeController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'tribe' => Input::get('tribe'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'tribe' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("tribes")->insertGetID(array('tribe'=>Input::get("tribe"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('tribe').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getTribes(){
        $this->layout->title = 'All tribe Types | Admin';
        $this->layout->top_active = 8;
        $tribe = DB::table('tribes')->get();
        $this->layout->main = View::make("admin.tribe.index",array("tribes"=>$tribe));
    }

      public function getadd(){
        $this->layout->title = 'Add | tribe Types';
        $this->layout->top_active = 8;
        $this->layout->main = View::make("admin.tribe.add");
    }

      public function gettribe($id){
        $this->layout->title = 'Admin | tribe Types';
        $this->layout->top_active = 8;   
        $tribe = DB::table('tribes')->where('id',$id)->first();
        $this->layout->main = View::make("admin.tribe.edit",array("tribe"=>$tribe));
    }

        public function putupdate($id){       
        $cre = [
         'tribe' => Input::get('tribe'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'tribe' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $tribe = tribe::find($id);
                $tribe->tribe = Input::get('tribe');
                $tribe->status = Input::get('status');
                $tribe->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('tribe').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>tribe Types not found');
        } 
    }

     public function getdelete($id){
        DB::table("tribes")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('tribe').'</b> has been successfully deleted');                    
    }

}