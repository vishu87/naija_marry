<?php

class complexionController extends BaseController {
    protected $layout = 'admin.layout';

    public function postAdd(){
        $cre = [
        'complexion' => Input::get('complexion'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'complexion' => 'required',
        'status' => 'required|not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){   

            $id = DB::table("complexions")->insertGetID(array('complexion'=>Input::get("complexion"),'status'=>Input::get("status")));               
            return Redirect::Back()->with('success', '<b>'.Input::get('complexion').'</b> has been successfully added');                    
        }else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }

     public function getcomplexions(){
        $this->layout->title = 'All complexion | Admin';
        $this->layout->top_active = 3;
        $complexion = DB::table('complexions')->get();
        $this->layout->main = View::make("admin.complexion.index",array("complexions"=>$complexion));
    }

      public function getadd(){
        $this->layout->title = 'Add | complexion s';
        $this->layout->top_active = 3;
        $this->layout->main = View::make("admin.complexion.add");
    }

      public function getcomplexion($id){
        $this->layout->title = 'Admin | complexion s';
        $this->layout->top_active = 3;   
        $complexion = DB::table('complexions')->where('id',$id)->first();
        $this->layout->main = View::make("admin.complexion.edit",array("complexion"=>$complexion));
    }

        public function putupdate($id){       
        $cre = [
         'complexion' => Input::get('complexion'),
        'status' => Input::get('status')  
        ];
        $rules = [
        'complexion' => 'required',
        'status' => 'required||not_in:0'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            $complexion = complexion::find($id);
                $complexion->complexion = Input::get('complexion');
                $complexion->status = Input::get('status');
                $complexion->save();
                return Redirect::Back()->with('success', '<b>'.Input::get('complexion').'</b> has been successfully updated');                    
            }
            else {
            return Redirect::Back()->with('failure', '<b>complexion not found');
        } 
    }

     public function getdelete($id){
        DB::table("complexions")->where('id',$id)->delete();
        return Redirect::Back()->with('delete', '<b>'.Input::get('complexion').'</b> has been successfully deleted');                    
    }

}