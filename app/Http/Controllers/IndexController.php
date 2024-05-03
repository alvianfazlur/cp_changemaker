<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function viewEvent(){
        return view('event.event');
    }
    public function viewBlog(){
        return view('blog.blog');
    }
    public function viewContact(){
        return view('contact.contact');
    }
}
