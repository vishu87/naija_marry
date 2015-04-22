<?php

class forumController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'forum' => Input::get('forum'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'forum' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("forums")->insertGetID(array('forum'=>Input::get("forum"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('forum').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getforums(){
        $this->layout->title = 'All forum | Admin';
        $this->layout->top_active = 10;
        $forum = DB::table('forums')->get();
        $this->layout->main = View::make("admin.forum.index",array("forums"=>$forum));
    }

      public function getadd(){
        $this->layout->title = 'Add | forum';
        $this->layout->top_active = 10;
        $this->layout->main = View::make("admin.forum.add");
    }

      public function getforum($id){
        $this->layout->title = 'Admin | forum';
        $this->layout->top_active = 10;   
        $forum = DB::table('forums')->where('id',$id)->first();
        $this->layout->main = View::make("admin.forum.edit",array("forum"=>$forum));
    }

        public function putupdate($id){       
        $cre = [
         'forum' => Input::get('forum'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'forum' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $forum = forum::find($id);
                $forum->forum = Input::get('forum');
                $forum->status = Input::get('status');
                $forum->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('forum').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>forum not found');
        } 
    }

     public function getdelete($id){
        DB::table("forums")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('forum').'</b> has been successfully deleted');                    
    }

}