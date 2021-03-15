<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Messege;
class MessegeController extends Controller
{
    public function view(){
     $data['countmessege'] = Messege::count();
    $data['alldata'] = Messege::all();
    return view('backend.messege.view-messege',$data);
    }

    public function add(){

    	return view('backend.messege.add-messege');
    }
    
     public function store(Request $request){
      $data = new Messege();
      $data->address = $request->address;
      $data->mobile = $request->mobile;
      $data->email = $request->email;
      $data->facebook = $request->facebook;
      $data->twitter = $request->twitter;
      $data->youtube = $request->youtube;
      $data->googleplus = $request->googleplus;
      $data->created_by = Auth::user()->id;
      $data->save();
    	return redirect()->route('sections.messege-view')->with('success','Messege Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Messege::find($id);
            return view('backend.messege.edit-messege',compact('editdata'));

        }

        public function update(Request $request,$id){

      $data = Messege::find($id);
      $data->address = $request->address;
      $data->mobile = $request->mobile;
      $data->email = $request->email;
      $data->facebook = $request->facebook;
      $data->twitter = $request->twitter;
      $data->youtube = $request->youtube;
      $data->googleplus = $request->googleplus;
      $data->updated_by = Auth::user()->id;
      $data->save();

        return redirect()->route('sections.messege-view')->with('success','Messege Updated Successfully');

        }

          public function delete($id){
            $messege = Messege::find($id);
            $messege->delete();
            return redirect()->route('sections.messege-view')->with('success','Messege Deleted Successfully');

          } 
}
