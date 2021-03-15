<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Home;
use App\Model\Messege;
use Auth;
use App\User;
class HomeController extends Controller
{
    public function view(){
     $data['counthome'] = Home::count();
    $data['alldata'] = Home::all();
    return view('backend.home.view-home',$data);
    }

    public function add(){
    	return view('backend.home.add-home');
    }
    
     public function store(Request $request){
      $data = new Home();
      $data->name = $request->name;
      $data->address = $request->address;
      $data->contact_title = $request->contact_title;
      $data->mobile = $request->mobile;
      $data->email = $request->email;
      $data->facebook = $request->facebook;
      $data->twitter = $request->twitter;
      $data->youtube = $request->youtube;
      $data->linkdin = $request->linkdin;
       $data->github = $request->github;
      $data->created_by = Auth::user()->id;
	

    	 if ($request->file('image')){
          $file = $request->file('image');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/home'), $filename);
          $data['image'] = $filename;
        }


      $data->save();
    	return redirect()->route('sections.home-view')->with('success','Home Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Home::find($id);
            return view('backend.home.edit-home',compact('editdata'));

        }

      public function update(Request $request,$id){

      $data = Home::find($id);
     $data->name = $request->name;
     $data->contact_title = $request->contact_title;
      $data->address = $request->address;
      $data->mobile = $request->mobile;
      $data->email = $request->email;
      $data->facebook = $request->facebook;
      $data->twitter = $request->twitter;
      $data->youtube = $request->youtube;
      $data->linkdin = $request->linkdin;
       $data->github = $request->github;
      $data->updated_by = Auth::user()->id;

      if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('backend/image/home/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/home'), $filename);
          $data['image'] = $filename;
        }

      $data->save();

        return redirect()->route('sections.home-view')->with('success','Home Section Updated Successfully');

        }

          public function delete($id){
            $home = Home::find($id);
            $home->delete();
            return redirect()->route('sections.home-view')->with('success','Home Section  Deleted Successfully');

          } 

           public function viewcommunicate(){
    $alldata = Comm::orderBy('id','desc')->get();
    return view('backend.home.view-communicate',compact('alldata'));
    }

     public function deletecommunicate($id){
            $commuinicate = Comm::find($id);
            $commuinicate->delete();
            return redirect()->route('homes.communicate')->with('success','Commuinicate Deleted Successfully');

          } 
}
