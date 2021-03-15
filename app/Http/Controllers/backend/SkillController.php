<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Skill;
use Auth;
use App\User;

class SkillController extends Controller
{
    public function view(){
     $data['countcontact'] = Skill::count();
    $data['alldata'] = Skill::all();
    return view('backend.skill.view-skill',$data);
    }

    public function add(){

    	return view('backend.skill.add-skill');
    }
    
     public function store(Request $request){
      $data = new Skill();
      $data->item = $request->item;
      $data->parcent = $request->parcent;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->created_by = Auth::user()->id;
      $data->save();
    	return redirect()->route('sections.skill-view')->with('success','Skill Inserted Successfully');
    }
        
        public function edit($id){
            $editdata = Skill::find($id);
            return view('backend.skill.edit-skill',compact('editdata'));

        }

        public function update(Request $request,$id){

      $data = Skill::find($id);
      $data->item = $request->item;
      $data->parcent = $request->parcent;
      $data->title = $request->title;
      $data->description = $request->description;
      $data->updated_by = Auth::user()->id;
      $data->save();

        return redirect()->route('sections.skill-view')->with('success','Skill Updated Successfully');

        }

          public function delete($id){
            $skill = Skill::find($id);
            $skill->delete();
            return redirect()->route('sections.skill-view')->with('success','Skill Deleted Successfully');

          } 
}
