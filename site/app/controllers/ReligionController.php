<?php

class ReligionController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'religion' => Input::get('religion'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'religion' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("religions")->insertGetID(array('religion'=>Input::get("religion"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('religion').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getreligions(){
        $this->layout->title = 'All religion | Admin';
        $this->layout->top_active = 9;
        $religion = DB::table('religions')->get();
        $this->layout->main = View::make("admin.religion.index",array("religions"=>$religion));
    }

      public function getadd(){
        $this->layout->title = 'Add | religion';
        $this->layout->top_active = 9;
        $this->layout->main = View::make("admin.religion.add");
    }

      public function getreligion($id){
        $this->layout->title = 'Admin | religion';
        $this->layout->top_active = 9;   
        $religion = DB::table('religions')->where('id',$id)->first();
        $this->layout->main = View::make("admin.religion.edit",array("religion"=>$religion));
    }

        public function putupdate($id){       
        $cre = [
         'religion' => Input::get('religion'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'religion' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $religion = religion::find($id);
                $religion->religion = Input::get('religion');
                $religion->status = Input::get('status');
                $religion->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('religion').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>religion not found');
        } 
    }

     public function getdelete($id){
        DB::table("religions")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('religion').'</b> has been successfully deleted');                    
    }

}