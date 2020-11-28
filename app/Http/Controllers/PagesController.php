<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\EnquireMail;
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

    public function mechanical() {
        SEOTools::setTitle('Mechanical Courses - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/course/mechanical');
        SEOTools::setCanonical('https://spotlighttechs.com/course/mechanical');
        SEOTools::opengraph()->addProperty('type', 'Mechanical Courses - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('mechanical');
    }

    public function civil() {
        SEOTools::setTitle('Civil Courses - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/course/civil');
        SEOTools::setCanonical('https://spotlighttechs.com/course/civil');
        SEOTools::opengraph()->addProperty('type', 'Civil Courses - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('civil');
    }

    public function programming() {
        SEOTools::setTitle('CSE/IT/EEE/ECE Courses - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/course/programming');
        SEOTools::setCanonical('https://spotlighttechs.com/course/programming');
        SEOTools::opengraph()->addProperty('type', 'CSE/IT/EEE/ECE Courses - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));

        return view('programming');
    }

    public function enquiry(Request $request, $id) {
        SEOTools::setTitle('Course enquiry - Spotlight Tech');
        SEOTools::setDescription('This is my page description');
        SEOTools::opengraph()->setUrl('https://spotlighttechs.com/enquiry');
        SEOTools::setCanonical('https://spotlighttechs.com/enquiry');
        SEOTools::opengraph()->addProperty('type', 'Course enquiry - Spotlight Tech');
        SEOTools::twitter()->setSite('@LuizVinicius73');
        SEOTools::jsonLd()->addImage(asset('images/spotlight.png'));
        
        return view('enquiry', ['course' => $id]);
    }

    public function enquiryMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'course' => 'required',
            'message' => 'required'
        ]);
    
        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'course' => $request->course,
            'message' => $request->message,
        ];

        Mail::to('info@spotlighttechs.com')->send(new EnquireMail($message));

        return redirect('/courses')->with('toast_success', 'Your enquiry request has been sent. We will reply soon. Thank you!');
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
