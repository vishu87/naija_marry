<?php

class bodyController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'body_type' => Input::get('body_type'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'body_type' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("body_types")->insertGetID(array('body_type'=>Input::get("body_type"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('body_type').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getBodytypes(){
        $this->layout->title = 'All Body Types | Admin';
        $this->layout->top_active = 1;
        $body = DB::table('body_types')->get();
        $this->layout->main = View::make("admin.body_type.index",array("bodys"=>$body));
    }

      public function getadd(){
        $this->layout->title = 'Add | Body Types';
        $this->layout->top_active = 1;
        $this->layout->main = View::make("admin.body_type.add");
    }

      public function getBodytype($id){
        $this->layout->title = 'Admin | Body Types';
        $this->layout->top_active = 1;   
        $body = DB::table('body_types')->where('id',$id)->first();
        $this->layout->main = View::make("admin.body_type.edit",array("body"=>$body));
    }

        public function putupdate($id){       
        $cre = [
         'body_type' => Input::get('body_type'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'body_type' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $body = Body::find($id);
                $body->body_type = Input::get('body_type');
                $body->status = Input::get('status');
                $body->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('body_type').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>Body Types not found');
        } 
    }

     public function getdelete($id){
        DB::table("body_types")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('body_type').'</b> has been successfully deleted');                    
    }

}