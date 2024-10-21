<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\settings;
use Intervention\Image\Facades\Image;

class pageController extends Controller
{
    public function systemSettings()
    {
        $settinga = settings::getSingle();
        return view('admin.pages.pageSetting', compact('settinga'));
    }


    public function updateSettings(Request $request)
    {
        $save = settings::getSingle();
        $save->name = trim($request->name);
        $save->footer_description = trim($request->footer_description);
        $save->address = trim($request->address);
        $save->phone1 = trim($request->phone1);
        $save->phone2 = trim($request->phone2);
        $save->contact_email = trim($request->contact_email);
        $save->email1 = trim($request->email1);
        $save->email2 = trim($request->email2);
        $save->linkedin = trim($request->linkedin);
        $save->facebook = trim($request->facebook);
        $save->twitter = trim($request->twitter);
        $save->instagram = trim($request->instagram);

        if (!empty($request->file('logo'))) {

            if (!empty($save->logo)) {
                unlink($save->logo);
                $save->logo = "";
            }


            if ($request->file('logo')->isValid()) {
                $logo = $request->file('logo');
                $extension = $logo->getClientOriginalExtension();
                $uniqueName = hexdec(uniqid()) . '.' . $extension;

                // Save normal image
                $normalPath = 'upload/settings/' . $uniqueName;
                Image::make($logo)->save($normalPath);
                $save->logo = $normalPath;
            }
        }


        if (!empty($request->file('favicon'))) {

            if (!empty($save->favicon)) {
                unlink($save->favicon);
                $save->favicon = "";
            }


            if ($request->file('favicon')->isValid()) {
                $favicon = $request->file('favicon');
                $extension = $favicon->getClientOriginalExtension();
                $uniqueName = hexdec(uniqid()) . '.' . $extension;

                // Save normal image
                $normalPath = 'upload/settings/' . $uniqueName;
                Image::make($favicon)->save($normalPath);
                $save->favicon = $normalPath;
            }
        }

        $save->save();


        $notification = [
            'message' => 'Settings successfully updated',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }
}
