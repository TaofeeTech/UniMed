<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class contactController extends Controller
{
        public function storeMessage(Request $request){
        contact::insert([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
        'created_at' => Carbon::now()
        ]);

        $notification = array(
        'message' => 'Message Successfully Sent',
        'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        }

        public function deleteMessage($id){
        contact::findOrFail($id)->delete();

        $notification = array(
        'message' => 'Message Successfully Deleted',
        'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        }
}
