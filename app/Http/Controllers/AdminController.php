<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\recruitments;

class AdminController extends Controller
{
    public function open_recruitment(){
        $recruitments = recruitments::get();
        return view('admin.recruitments', ['recruitments' => $recruitments]);
    }

    public function edit_recruitment($id){
        $recruitments = recruitments::where('id', $id)->first();
        return view('admin.editRecruitments', ['recruitments' => $recruitments]);
    }
    public function update_recruitments(Request $request){

        recruitments::where('id',$request->id)->update([
            'program_name' => $request->program_name,
            'program_type' => $request->program_type,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'decription' => $request->description,
            'requirements' => $request->requirements,
            'benefits' => $request->benefits
            
        ]);
	// alihkan halaman
	return redirect('admin/recruitments');
    }
}
