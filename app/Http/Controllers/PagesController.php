<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function home() {
        SEOTools::setTitle('Spotlight Tech - Education for everyone');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com');
        SEOTools::setCanonical('https://spotlighttechs.com');
        SEOTools::opengraph()->addProperty('type', 'Spotlight Tech - Education for everyone');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));
        
        return view('welcome');
    }

    public function about() {
        SEOTools::setTitle('About us - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/about');
        SEOTools::setCanonical('https://spotlighttechs.com/about');
        SEOTools::opengraph()->addProperty('type', 'About us - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('about');
    }

    public function courses() {
        SEOTools::setTitle('Courses - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/courses');
        SEOTools::setCanonical('https://spotlighttechs.com/courses');
        SEOTools::opengraph()->addProperty('type', 'Courses - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('courses');
    }

    public function blog() {
        SEOTools::setTitle('Blog - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/blog');
        SEOTools::setCanonical('https://spotlighttechs.com/blog');
        SEOTools::opengraph()->addProperty('type', 'Blog - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('blog');
    }

    public function contact() {
        SEOTools::setTitle('Contact us - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/contact');
        SEOTools::setCanonical('https://spotlighttechs.com/contact');
        SEOTools::opengraph()->addProperty('type', 'Contact us - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));
        
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to('info@spotlighttechs.com')->send(new ContactMail($message));

        return redirect('/contact')->with('toast_success', 'Your message has been sent. We will reply soon. Thank you!');
    }
}
