<?php
// cette controller ne mache pas 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class HomeController extends Controller
{

public function sendContactForm(Request $request)
{
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'message' => $request->message,
        'phone'=>$request->phone
    ];

    if($this->isOnline()){
        $mail_data = [
            'recipient' => 'partymakers95@gmail.com',
            'formEmail' => $request->email,
            'formName' => $request->name,
            'formphone' => $request->phone,
            'formmessage' => 'hi'
        ];

        Mail::send('email-template', $mail_data, function($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                    ->from($mail_data['formEmail'], $mail_data['formName'],$mail_data['formphone'])
                    ->subject($mail_data['formmessage']);
        });

        return redirect()->back()->with('success', 'Email sent!');
           }else{
    return redirect()->back()->withInput()->with('error','Check your internet');
}
    // Mail::to('partymakers95@gmail.com')->send(new ContactFormMail($details));

    // return redirect()->back()->with('message', 'Message sent successfully!');
}
public function isOnline($site="https://youtube.com/"){
    if(@fopen($site,"r")){
return true;
    }else{
        return false;
    }
}
}
