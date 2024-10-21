<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
// use Hash;
// use Auth;
use App\Models\Admin;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class AdminController extends Controller
{
    //
    public function Dashboard()
    {
        return view("admin.index");
    }

    public function Login()
    {
        return view("admin.login");
    }
    public function Login_submit(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $check = $request->all();
        $data = [
            'email' =>  $check['email'],
            'password' => $check['password'],
        ];
        if (Auth::guard('admin')->attempt($data)) {
            $notification = array(
                'message' => 'Login Successful',
                'alert-type' => 'success'
            );
            return redirect()->route('admin_dashboard')->with($notification);
        } else {
            $notification = array(
                'message' => 'Invalid credentials',
                'alert-type' => 'error'
            );
            return redirect()->route('admin_login')->with($notification);
        }
    }

    public function Logout()
    {
        Auth::guard('admin')->logout();
        $notification = array(
            'message' => 'You have successfully logged out',
            'alert-type' => 'success'
        );
        return redirect()->route('admin_login')->with($notification);
    }


    public function ForgetPassword()
    {
        return view('admin.forgot-password');
    }



    public function ForgetPasswordSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required',
        ]);

        $adminData = Admin::where('email', $request->email)->first();
        if (!$adminData) {
            $notification = array(
                'message' => 'Email not found',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        //    $token = Hash::make(rand(111111, 999999));
        $token = hash('sha256', time());
        $adminData->token = $token;
        $adminData->update();

        $reset_link = url('admin/reset-password/' . $token . '/' . $request->email);

        $subject = "Reset Password Notification";
        $message = "<h1>Hello!</h1>";
        $message .= "<p>You are receiving this email because we received a password reset request for your account.</p>";
        $message .= "<a href='" . $reset_link . "' style='padding:8px 12px;background-color:black; color:white; display:inline-block; margin:auto; text-decoration-line:none; border-radius:6px;'> Reset Password </a>";
        $message .= "<p>This password reset link will expire in 60 minutes.</p>";
        $message .= "<p>If you did not request a password reset, no further action is required..</p>";
        $message .= "<h3> Regards!</h3>";


        Mail::to($request->email)->send(new Websitemail($subject, $message));

        $notification = array(
            'message' => 'Reset password link has been sent to your email',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



    public function resetPassword($token, $email)
    {
        $adminData = Admin::where('email', $email)->where('token', $token)->first();
        if (!$adminData) {
            $notification = array(
                'message' => 'Invalid token or email address',
                'alert-type' => 'error'
            );
            return redirect()->route('admin_login')->with($notification);
        }
        return view('admin.reset-password', compact('token', 'email'));
    }


    public function resetPasswordSubmit(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
        ]);

        $adminData = Admin::where('email', $request->email)->where('token', $request->token)->first();
        $adminData->password = Hash::make($request->password);
        $adminData->token = "";
        $adminData->update();

        $notification = array(
            'message' => 'Password reset successful',
            'alert-type' => 'success'
        );
        return redirect()->route('admin_login')->with($notification);
    }


    public function adminRegister()
    {
        return redirect()->route('admin_login');
    }


    // view profile page 
    public function adminProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $adminData = Admin::find($id);

        return view('admin.profile-view', compact('adminData'));
    }


    public function editProfile()
    {
        $id = Auth::guard('admin')->user()->id;
        $editData = Admin::find($id);

        return view('admin.edits.profile_edit', compact('editData'));
    }

    public function StoreProfile(Request $request)
    {
        $id = Auth::guard('admin')->user()->id;
        $data = Admin::find($id);
        // To get the user details
        $data->name = $request->name;
        $data->email = $request->email;

        // profile_image is the name given to the input file field 
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            // adding date to the filenae 
            $filename = date('YmdHi') . $file->getClientOriginalName();
            //    moving the file to another folder to save the image 
            $file->move(public_path('upload/admin_images'), $filename);
            $data['profile_image'] = $filename;
        }
        // saving the data 
        $data->save();

        $notification = array(
            'message' => 'Header content updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    } // End Method

    // All Users

    public function viewAllUsers()
    {
        $viewAllUsers = user::all();
        return view("admin.pages.viewAllUsers", compact('viewAllUsers'));
    }
}
