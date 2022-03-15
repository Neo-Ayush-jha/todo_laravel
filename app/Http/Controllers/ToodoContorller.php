<?php

namespace App\Http\Controllers;
use App\Models\Toodo;
use Illuminate\Http\Request;

class ToodoContorller extends Controller
{
    public function index(){
            $data = ["data"=>Toodo::all()];
            return view("index" ,$data);    }
    public function store(Request $req){
        $v = new Toodo();
        $v->title = $req->title;
        $v->description= $req->description;
        $v->status= $req->status;
        $v->save();
        return redirect("/");
        // return response()->json(['success'=>'Status change successfully.']); 
    }
// status--------------------------------
// public function changeUserStatus(Request $request)
//     {
//         $file=DB::table('toodo')->where('id',$id)->first();
//         $user=$file->status;
//         $task ['status']= $request->user_id;
 
//     $data=DB::table('toodo')->where('id',$request)->update($task);
//     } 




// ---------------

    public function delete(Request $req, $id){
        $data= Toodo::find($id);
        $data->delete();
        return redirect("/");
    }
    public function edit(Request $req, $id){
        $data = [
            "Toodo"=>Toodo::find($id)
        ];
        return view("/edit",$data);
    }
}
