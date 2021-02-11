<?php

namespace App\Http\Controllers;

use App\Mail\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WebsiteController extends Controller
{

    public function __construct()
    {
        $this->middleware('maintenance');
    }

    /**
     *  Function to return index page.
     */
    public function indexView()
    {
        return view('index');
    }

    /**
     *  Function to return photography page.
     */
    public function photographyView()
    {
        return view('photography-page');
    }

    /**
     *  Function to return video page.
     */
    public function videoView()
    {

        return view('video');
    }

    /**
     *  Function to return single video page.
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function singleVideoView($name)
    {
        switch ($name) {
            case 'mansio-intro':
                $link = '424953460';
                break;

            case 'mansio':
                $link = '378634391';
                break;

            case 'mathis':
                $link = '378601747';
                break;

            case 'tugu':
                $link = '421928695';
                break;

            default:
                abort('404');
        }

        return view('single-video', compact('link'));
    }

    /**
     *  Function to return architecture page.
     */
    public function architectureView()
    {
        return view('architecture');
    }

    /**
     *  Function to return about page.
     */
    public function aboutView()
    {
        return view('about');
    }

    /**
     *  Function to return FAQ page.
     */
    public function faqView()
    {
        return view('faq');
    }

    /**
     *  Function to return contact page.
     */
    public function contactView()
    {
        return view('contact');
    }

    /**
     *  Function to return press page.
     */
    public function pressView()
    {
        return redirect()->back();
    }

    /**
     *  Function to return single architecture page.
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singleArchitectureView($name)
    {
        switch ($name) {
            case 'school':
                return view('architecture/school');
                break;

            case 'house-for-sculptor':
                return view('architecture/home-for-sculptor');
                break;

            case 'kindergarten':
                return view('architecture/kindergarten');
                break;

            case 'native-museum':
                return view('architecture/native-museum');
                break;

            case 'vertical-submarine':
                return view('architecture/vertical-submarine');
                break;

            case 'winery':
                return view('architecture/winery');
                break;

            default:
                abort(404);
        }
    }

    /**
     *  Function to send email
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        $request->validate([
           'sender' => 'required|max:100',
           'email' => 'required|email',
           'message' => 'required|string|max:500'
        ],
            [
                'sender.required' => 'First & Last name are required',
                'sender.max' => 'First & Last name should contain maximum 100 characters.',
                'email.required' => 'Email is required.',
                'email.email' => 'Email format is not valid.',
                'message.required' => 'Message is required.',
                'message.max' => 'Message should contain maximum 500 characters.',
                'message.string' => 'Message format not valid.'
            ]);

    \Illuminate\Support\Facades\Mail::to('info@mansio.me')
            ->send(new Mail($request->sender, $request->email, $request->message));

        return response('Success', 200);
    }
}
