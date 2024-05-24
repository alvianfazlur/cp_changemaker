<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use App\Models\profile;
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
        $profile = profile::first();
        $events = events::orderBy('event_date', 'desc')->get();
        $recruitments = recruitments::get();
        return view('event.event', ['events' => $events, 'recruitments' => $recruitments, 'profile' => $profile]);
    }
    public function detailEvent($title){
        $query = str_replace('-', ' ', $title);
        $event = events::where('event_name', $query)->first();
        $profile = profile::first();
        $allEvents = events::orderBy('event_date', 'desc')->take(5)->get();
        $recruitments = recruitments::get();
        return view('event.detailEvent', ['event' => $event, 'recruitments' => $recruitments, 'allEvents' => $allEvents, 'profile' => $profile]);
    }

    public function viewRecruitment($title){
        $profile = profile::first();
        $query = str_replace('-', ' ', $title);
        $recruitment = recruitments::where('program_name', $query)->first();
        $recruitments = recruitments::get();
        return view('recruitment.viewRecruitment', ['recruitment' => $recruitment,
         'recruitments' => $recruitments, 'profile' => $profile]);
    }
    public function viewBlog(){
        $profile = profile::first();
        $blogs = blogs::get();
        $recruitments = recruitments::get();
        return view('blog.blog', ['blogs' => $blogs, 'recruitments' => $recruitments, 'profile' => $profile]);
    }
    public function detailBlog($title){
        $profile = profile::first();
        $query = str_replace('-', ' ', $title);
        $blog = blogs::where('title', $query)->first();
        $recruitments = recruitments::get();
        return view('blog.detailBlog', ['blog' => $blog,  'recruitments' => $recruitments, 'profile' => $profile]);
    }
    public function viewContact(){
        $profile = profile::first();
        $recruitments = recruitments::get();
        return view('contact.contact', ['recruitments' => $recruitments, 'profile' => $profile]);
    }

    public function viewPartnership(){
        $profile = profile::first();
        $partnerships = partnerships::get(); 
        $recruitments = recruitments::get();
        return view('partnership.partnership', ['recruitments' => $recruitments,
         'partnerships' => $partnerships, 'profile' => $profile]);
    }
    public function viewGallery(){
        $profile = profile::first();
        $gallery = gallery::get(); 
        $partnerships = partnerships::get(); 
        $recruitments = recruitments::get();
        return view('gallery.gallery', ['recruitments' => $recruitments,
         'gallery' => $gallery, 'profile' => $profile, 'partnerships' => $partnerships,]);
    }

    public function viewInfo(){
        $teams = team::get();
        $recruitments = recruitments::get();
        $partnerships = partnerships::get(); 
        $profile = profile::first();
        // $testimonials = testimonial::get();
        return view('about.about', ['recruitments' => $recruitments,
         'partnerships' => $partnerships, 'teams' => $teams, 'profile' => $profile]);
    }

    public function searchBlog($title){
        $blogs = blogs::where('title', 'LIKE', '%' . $title . '%')->get();
        $recruitments = recruitments::get();
        $profile = profile::first();
        if ($blogs->isEmpty()) {
            return view('blog.no-result', ['recruitments' => $recruitments, 'profile' => $profile]);
        }
        return view('blog.search-blog', ['blogs' => $blogs, 'recruitments' => $recruitments, 'profile' => $profile]);
    }

    public function searchEvent($title){
        $profile = profile::first();
        $events = events::where('event_name', 'LIKE', '%' . $title . '%')->get();
        $recruitments = recruitments::get();
        if ($events->isEmpty()) {
            return view('event.no-results', ['recruitments' => $recruitments, 'profile' => $profile]);
        }
        return view('event.search-event', ['events' => $events, 'recruitments' => $recruitments, 'profile' => $profile]);
    }
}
