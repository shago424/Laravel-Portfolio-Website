<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Messege;
class ContactController extends Controller
{
   public function view(){
     $data['countcontact'] = Messege::count();
    $data['alldata'] = Messege::all();
    return view('backend.contact.view-contact',$data);
    }

    public function add(){

    	return view('backend.contact.add-contact');
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
    	return redirect()->route('sections.contact-view')->with('success','Messege Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Messege::find($id);
            return view('backend.contact.edit-contact',compact('editdata'));

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

        return redirect()->route('sections.contact-view')->with('success','Messege Updated Successfully');

        }

          public function delete($id){
            $contact = Messege::find($id);
            $contact->delete();
            return redirect()->route('sections.contact-view')->with('success','Messege Deleted Successfully');

          } 
}
