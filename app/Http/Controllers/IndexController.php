<?php

namespace App\Http\Controllers;

use App\Models\team;
use App\Models\testimonial;
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
        $allEvents = events::orderBy('event_date', 'desc')->take(5)->get();
        $recruitments = recruitments::get();
        return view('event.detailEvent', ['event' => $event, 'recruitments' => $recruitments, 'allEvents' => $allEvents]);
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
        $recruitments = recruitments::get();
        return view('blog.detailBlog', ['blog' => $blog,  'recruitments' => $recruitments]);
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
        $teams = team::get();
        $recruitments = recruitments::get();
        $partnerships = partnerships::get(); 
        // $testimonials = testimonial::get();
        return view('about.about', ['recruitments' => $recruitments, 'partnerships' => $partnerships, 'teams' => $teams]);
    }

    public function searchBlog($title){
        $blogs = blogs::where('title', 'LIKE', '%' . $title . '%')->get();
        $recruitments = recruitments::get();
        if ($blogs->isEmpty()) {
            return view('blog.no-result', ['recruitments' => $recruitments]);
        }
        return view('blog.search-blog', ['blogs' => $blogs, 'recruitments' => $recruitments]);
    }

    public function searchEvent($title){
        $events = events::where('event_name', 'LIKE', '%' . $title . '%')->get();
        $recruitments = recruitments::get();
        if ($events->isEmpty()) {
            return view('event.no-results', ['recruitments' => $recruitments]);
        }
        return view('event.search-event', ['events' => $events, 'recruitments' => $recruitments]);
    }
}
