<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Entries;

class Mycontroller extends Controller
{
    public function index(){
        $url="http://127.0.0.1:8000/newPage";
        $data=compact('url');
        return view('layout.form')->with($data);
    }
    public function store(Request $request){
           $request->validate([
            'userName' => 'required',
            'email'=> 'required|email',
            'password'=>'required|confirmed',
            'password_confirmation'=>'required',
            ]
        );
            $obj = new Entries;
            $obj->userName = $request->userName; 
            $obj->email = $request->email; 
            $obj->password = md5($request->userName); 
            $obj->save();
            return redirect('/newPage/view');

    }
    public function view(){
        $allUsers=Entries::all();
        $data=compact('allUsers');
        return view('layout.show')->with($data);
    }
    public function delete($id){
        $user = Entries::find($id)->delete();
          echo ("User Record deleted successfully.");
          return redirect('/newPage/view');
    }
    public function pass($id){
        $url="http://127.0.0.1:8000/update/$id";
        $data=compact('id','url');
        return view('layout.form')->with($data);
    }
    public function update(Request $request, $id){
        $row= Entries::find($id);
       // print_r($request->toArray());
        //print_r($row->toArray());
         $row->userName=$request->userName;
         $row->save();
         return redirect('/newPage/view');
    }
}
