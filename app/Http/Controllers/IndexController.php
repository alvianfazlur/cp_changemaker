<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\events;
use \App\Models\recruitments;

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
        return view('recruitment.viewRecruitment', ['recruitment' => $recruitment]);
    }
    public function viewBlog(){
        return view('blog.blog');
    }
    public function viewContact(){
        return view('contact.contact');
    }
}
