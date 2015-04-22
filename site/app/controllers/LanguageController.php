<?php

class languageController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'language' => Input::get('language'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'language' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("languages")->insertGetID(array('language'=>Input::get("language"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('language').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getlanguages(){
        $this->layout->title = 'All languaged | Admin';
        $this->layout->top_active = 7;
        $language = DB::table('languages')->get();
        $this->layout->main = View::make("admin.language.index",array("languages"=>$language));
    }

      public function getadd(){
        $this->layout->title = 'Add | languaged';
        $this->layout->top_active = 7;
        $this->layout->main = View::make("admin.language.add");
    }

      public function getlanguage($id){
        $this->layout->title = 'Admin | languaged';
        $this->layout->top_active = 7;   
        $language = DB::table('languages')->where('id',$id)->first();
        $this->layout->main = View::make("admin.language.edit",array("language"=>$language));
    }

        public function putupdate($id){       
        $cre = [
         'language' => Input::get('language'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'language' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $language = language::find($id);
                $language->language = Input::get('language');
                $language->status = Input::get('status');
                $language->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('language').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>languaged not found');
        } 
    }

     public function getdelete($id){
        DB::table("languages")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('language').'</b> has been successfully deleted');                    
    }

}
