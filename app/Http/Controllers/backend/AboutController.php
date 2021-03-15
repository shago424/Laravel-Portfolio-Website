<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\About;
use Auth;
use App\User;

class AboutController extends Controller
{
     public function view(){
     $data['countabout'] = About::count();
    $data['alldata'] = About::all();
    return view('backend.about.view-about',$data);
    }

    public function add(){

    	return view('backend.about.add-about');
    }
    
     public function store(Request $request){
      $data = new About();
      $data->name = $request->name;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->created_by = Auth::user()->id;

 if ($request->file('image')){
          $file = $request->file('image');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/about'), $filename);
          $data['image'] = $filename;
        }


 if ($request->file('file')){
          $file = $request->file('file');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/file'), $filename);
          $data['file'] = $filename;
        }

      $data->save();
    	return redirect()->route('sections.about-view')->with('success','About Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = About::find($id);
            return view('backend.about.edit-about',compact('editdata'));

        }

        public function update(Request $request,$id){

      $data = About::find($id);
      $data->name = $request->name;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->updated_by = Auth::user()->id;

        if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('backend/image/about/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/about'), $filename);
          $data['image'] = $filename;
        }


          if ($request->file('file')){
          $file = $request->file('file');
          @unlink(public_path('backend/file/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/file'), $filename);
          $data['file'] = $filename;
        }



      $data->save();

        return redirect()->route('sections.about-view')->with('success','About Updated Successfully');

        }

          public function delete($id){
            $about = About::find($id);
            $about->delete();
            return redirect()->route('sections.about-view')->with('success','About Deleted Successfully');

          } 

}
