<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {
    
    public function getIndex() {
        
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
        
    }
    
    public function getAbout() {
        
        $first = "Ron";
        $last = "Chai";
        
        $fullname = $first." ".$last;
        $email = "ronrawee@hotmail.com";
        
        return view('pages.about')->withFullname($fullname)->withEmail($email);
        
    }
    
    public function getContact() {
        
        return view('pages.contact');
        
    }
    

}