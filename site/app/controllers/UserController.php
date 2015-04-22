<?php

class UserController extends BaseController {

    public function registration(){
        return View::make('frontend.layout',["main"=>View::make('frontend.profile.registration')]);
    }

    public function postLogin(){
        $cre = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Auth::attempt($cre)){
                return Redirect::to('/basic-information');
            } else {
                return  Redirect::Back()->withErrors($validator)->withInput()->with('fail','Email and password does not match');
            }
            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
     public function postSignup(){
        $cre = [
            'first_name' => Input::get('first_name'),
            'email' => Input::get('email'),
            'gender' => Input::get('gender'),
            'password' => Input::get('password')
        ];
        $rules = [
            'first_name' => 'required',
            'email' => 'required',
            'gender' => 'required', 
            'password' => 'required|min:8'
        ];
        $validator = Validator::make($cre,$rules);
        if($validator->passes()){
            if(Input::get('password') === Input::get('confirmpassword')){
                $password = Hash::make(Input::get('password'));
                $id = DB::table("users")->insertGetID(array('first_name'=>Input::get("first_name"),'last_name'=>Input::get("last_name"),'email'=>Input::get("email"),'mobile_no'=>Input::get("mobile_no"),'gender'=>Input::get("gender"),'password' => $password));
                Auth::loginUsingId($id);
                return Redirect::to('/basic-information');
            } else {
                return Redirect::Back()->with('fail','Both passwords do not match')->withErrors($validator)->withInput();
            }            
        } else {
            return Redirect::Back()->withErrors($validator)->withInput();
        }
    }
    public function getLogin(){
       return View::make('login');
    }
}