<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\events;
use \App\Models\recruitments;
use \App\Models\blogs;
use \App\Models\partnerships;

class IndexController extends Controller
{
    public function viewEvent(){
        $events = events::orderBy('event_date', 'desc')->get();
        $recruitments = recruitments::get();
        return view('event.event', ['events' => $events, 'recruitments' => $recruitments]);
    }
    public function detailEvent($id){
        $event = events::where('id', $id)->first();
        $recruitments = recruitments::get();
        return view('event.detailEvent', ['event' => $event, 'recruitments' => $recruitments]);
    }

    public function viewRecruitment($id){
        $recruitment = recruitments::where('id', $id)->first();
        $recruitments = recruitments::get();
        return view('recruitment.viewRecruitment', ['recruitment' => $recruitment, 'recruitments' => $recruitments]);
    }
    public function viewBlog(){
        $blogs = blogs::get();
        $recruitments = recruitments::get();
        return view('blog.blog', ['blogs' => $blogs, 'recruitments' => $recruitments]);
    }
    public function detailBlog($id){
        $blog = blogs::where('id', $id)->first();
        return view('blog.detailBlog', ['blog' => $blog]);
    }
    public function viewContact(){
        $recruitments = recruitments::get();
        return view('contact.contact', ['recruitments' => $recruitments]);
    }

    public function viewPartnership(){
        $partnerships = partnerships::get(); 
        $recruitments = recruitments::get();
        return view('partnership.partnership', ['recruitments' => $recruitments, 'partnerships' => $partnerships]);
    }

    public function viewInfo(){
        $recruitments = recruitments::get();
        return view('about.about', ['recruitments' => $recruitments]);
    }
}
