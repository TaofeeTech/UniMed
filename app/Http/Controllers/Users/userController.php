<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class userController extends Controller
{
    public function userLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Successfully Logged out', 
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    // view profile page 
    public function userProfile() {
            $id = Auth::user()->id;
            $userData = User::find($id);
    
            return view('users.profile-view', compact('userData'));
        }


    public function userEditProfile() {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('users.edits.profile_edit', compact('editData'));
    }

    public function userStoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        // To get the user details
        $data->name = $request->name;
        $data->email = $request->email;

        // profile_image is the name given to the input file field 
        if ($request->file('profile_image')) {
           $file = $request->file('profile_image');

        // adding date to the filenae 
           $filename = date('YmdHi').$file->getClientOriginalName();
        //    moving the file to another folder to save the image 
           $file->move(public_path('upload/user_images'),$filename);
           $data['profile_image'] = $filename;
        }
        // saving the data 
        $data->save();
        
        $notification = array(
            'message' => 'Header content updated', 
            'alert-type' => 'success'
        );
        return redirect()->route('user_Profile')->with($notification);

    }// End Method

    // All Users

    // public function viewAllUsers(){
    //     $viewAllUsers = user::all();
    //     return view("admin.pages.viewAllUsers", compact('viewAllUsers'));
    // }



      /**
     * Delete the user's account.
     */
    public function delete(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
