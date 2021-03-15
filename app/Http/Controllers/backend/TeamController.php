<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Team;
use Auth;
use App\User;
class TeamController extends Controller
{
   public function view(){
     $data['countteam'] = Team::count();
    $data['alldata'] = Team::all();
    return view('backend.team.view-team',$data);
    }

    public function add(){

      return view('backend.team.add-team');
    }
    
     public function store(Request $request){
      $data = new Team();
      $data->name = $request->name;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->created_by = Auth::user()->id;

 if ($request->file('image')){
          $file = $request->file('image');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/team'), $filename);
          $data['image'] = $filename;
        }


 if ($request->file('file')){
          $file = $request->file('file');
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/file'), $filename);
          $data['file'] = $filename;
        }

      $data->save();
      return redirect()->route('sections.team-view')->with('success','Team Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Team::find($id);
            return view('backend.team.edit-team',compact('editdata'));

        }

        public function update(Request $request,$id){

      $data = Team::find($id);
      $data->name = $request->name;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->updated_by = Auth::user()->id;

        if ($request->file('image')){
          $file = $request->file('image');
          @unlink(public_path('backend/image/team/'.$data->image));
          $filename =date('YmdHi').$file->getClientOriginalName();
          $file->move(public_path('backend/image/team'), $filename);
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

        return redirect()->route('sections.team-view')->with('success','Team Updated Successfully');

        }

          public function delete($id){
            $team = Team::find($id);
            $team->delete();
            return redirect()->route('sections.team-view')->with('success','Team Deleted Successfully');

          } 
}
