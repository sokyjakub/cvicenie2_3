<?php


namespace App\Http\Controllers;
use App\Storage;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getAddUserForm(){
        return view("adduser");
    }

    public function insertAction(Request $request){

        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $email=$request->input('Email');
        $age=$request->input('age');

        $user = new User();
        $user -> firstname = $firstname;
        $user -> lastname = $lastname;
        $user -> email = $email;
        $user -> age = $age;
        $user -> save();

        return redirect()->action("UserController@showAllAction");
    }

    public function showAllAction(){
        $user = User::all();
        return view("users", ['users'=>$user]);
    }

    public function showAction($id){
        $user = User::where('id',$id)->first();
        return view("update", compact('user'));
    }

    public function updateAction($id, Request $request){
        $user = User::find($id);
        //$user = User::where("id" , "=" , $id)->first();
        $user -> update([
            'firstname' => $request -> input('firstname'),
            'lastname' => $request -> input('lastname'),
            'Email' => $request -> input('Email'),
            'age' => $request -> input('age')
        ]);

        return redirect()->action("UserController@showAllAction");
    }

    public function deleteAction($id){
        $user = User::where('id',$id)->first();
        $user->delete();
        return redirect()->action("UserController@showAllAction");
    }
}