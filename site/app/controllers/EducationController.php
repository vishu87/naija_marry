<?php

class educationController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'education' => Input::get('education'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'education' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("educations")->insertGetID(array('education'=>Input::get("education"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('education').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getEducations(){
        $this->layout->title = 'All education Types | Admin';
        $this->layout->top_active = 2;
        $education = DB::table('educations')->get();
        $this->layout->main = View::make("admin.education.index",array("educations"=>$education));
    }

      public function getadd(){
        $this->layout->title = 'Add | education Types';
        $this->layout->top_active = 2;
        $this->layout->main = View::make("admin.education.add");
    }

      public function geteducation($id){
        $this->layout->title = 'Admin | education Types';
        $this->layout->top_active = 2;   
        $education = DB::table('educations')->where('id',$id)->first();
        $this->layout->main = View::make("admin.education.edit",array("education"=>$education));
    }

        public function putupdate($id){       
        $cre = [
         'education' => Input::get('education'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'education' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $education = Education::find($id);
                $education->education = Input::get('education');
                $education->status = Input::get('status');
                $education->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('education').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>education Types not found');
        } 
    }

     public function getdelete($id){
        DB::table("educations")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('education').'</b> has been successfully deleted');                    
    }

}