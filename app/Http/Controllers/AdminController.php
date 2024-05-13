<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\events;
use App\Models\partnerships;
use Illuminate\Http\Request;
use \App\Models\recruitments;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function open_recruitment(){
        $recruitments = recruitments::get();
        return view('admin.recruitments', ['recruitments' => $recruitments]);
    }
    public function open_events(){
        $events = events::get();
        return view('admin.events', ['events' => $events]);
    }
    public function open_partnership(){
        $partnerships = partnerships::get();
        return view('admin.partnerships', ['partnerships' => $partnerships]);
    }

    public function edit_recruitment($id){
        $recruitments = recruitments::where('id', $id)->first();
        return view('admin.editRecruitments', ['recruitments' => $recruitments]);
    }

    public function edit_events($id){
        $events = events::where('id', $id)->first();
        return view('admin.editEvents', ['events' => $events]);
    }
    public function edit_partnership($id){
        $partnership = partnerships::where('id', $id)->first();
        return view('admin.editPartnership', ['partnership' => $partnership]);
    }
    public function edit_blog($id){
        $blog = blogs::where('id', $id)->first();
        return view('admin.editBlog', ['blog' => $blog]);
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
    public function update_blog(Request $request){

        blogs::where('id',$request->id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
            'content' => $request->content,
            'image' => $request->image,
            
        ]);
	// alihkan halaman
	return redirect('admin/blogs');
    }
    public function update_events(Request $request){

        events::where('id',$request->id)->update([
            'event_name' => $request->event_name,
            'location' => $request->location,
            'event_date' => $request->event_date,
            'description' => $request->description, 
        ]);
	// alihkan halaman
	return redirect('/home');
    }
    public function update_partnership(Request $request){

        partnerships::where('id',$request->id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'link' => $request->link,
            'description' => $request->description, 
            'image' => $request->image, 
        ]);
	// alihkan halaman
	return redirect('/admin/partnerships');
    }

    public function delete_event($id){
	    
	    DB::table('events')->where('id',$id)->delete();
	    return redirect('/home');
    }
    public function delete_events($id){
	    
	    DB::table('events')->where('id',$id)->delete();
	    return redirect('/admin/events');
    }
    public function delete_recruitment($id){
	    
	    DB::table('recruitments')->where('id',$id)->delete();
	    return redirect('/admin/recruitments');
    }
    public function delete_blog($id){
	    
	    DB::table('blogs')->where('id',$id)->delete();
	    return redirect('/admin/blogs');
    }
    public function delete_partnership($id){
	    
	    DB::table('partnerships')->where('id',$id)->delete();
	    return redirect('/admin/partnerships');
    }

    public function open_blogs(){
        $blogs = blogs::get();
        return view('admin.blogs', ['blogs' => $blogs]);
    }
    public function new_recruitment(){
        return view('admin.newRecruitment', []);
    }
    public function new_partnership(){
        return view('admin.newPartnership', []);
    }
    public function new_event(){
        return view('admin.newEvent', []);
    }
    public function new_blog(){
        return view('admin.newBlog', []);
    }
    
    public function storeRecruitment(Request $request){
        // insert data ke table
        recruitments::create([
            'program_name' => $request->program_name,
            'program_type' => $request->program_type,
            'location' => $request->location,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'decription' => $request->description,
            'requirements' => $request->requirements,
            'benefits' => $request->benefits,
        ]);       
	
	return redirect('/admin/recruitments');
    }
    public function storeEvents(Request $request){
        // insert data ke table
        events::create([
            'event_name' => $request->event_name,
            'location' => $request->location,
            'event_date' => $request->event_date,
            'description' => $request->description,
        ]);       
	
	return redirect('/admin/events');
    }

    public function storePartnership(Request $request){
        // insert data ke table
        partnerships::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'link' => $request->link,
            'image' => $request->image,
        ]);       
	
	return redirect('/admin/partnerships');
    }

    public function storeBlog(Request $request){
        // insert data ke table
        blogs::create([
            'title' => $request->title,
            'author' => $request->author,
            'publication_date' => $request->publication_date,
            'content' => $request->content,
            'image' => $request->image,
        ]);       
	
	return redirect('/admin/blogs');
    }
}
