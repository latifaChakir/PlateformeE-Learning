<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Message;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function contact(){
        $courses=Course::where('price', 0)
        ->paginate(4);
        return view('user.contact.contact',compact('courses'));
    }

    public function SendMessage(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'image_path'=>'required',
           'subject'=>'required',
           'message'=>'required'
        ]);
        $uploadDir = 'images/';
        $uploadFileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move($uploadDir, $uploadFileName);
        $contact=new Message();

        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->subject=$request->subject;
        $contact->image_path=$uploadFileName;
        $contact->message=$request->message;

        $contact->save();
        return redirect('/Contacts')->with('success', 'Message sending successfully');

    }

    public function commantaire(){
        $messages=Message::where('is_published', 'pending')->get();
        return view('dashboard.commantaire.commantaire',compact('messages'));
    }

    public function showCommantaire($messageID){
        $message=Message::find($messageID);
        return view('dashboard.commantaire.showcommantaire',compact('message'));

    }

    public function refusedCommantaire($messageID){
        $message=Message::findOrFail($messageID);
        $message->is_published='rejected';
        $message->save();
        return redirect('/Commantaires')->with('success', 'Comment refused successufely');
    }
    public function AcceptComment($messageID){
        $message=Message::findOrFail($messageID);
        $message->is_published='approved';
        $message->save();
        return redirect('/Commantaires')->with('success', 'Comment Accepted successufely');
    }
}
