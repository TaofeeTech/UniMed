<?php

namespace App\Http\Controllers\Home;

use App\Models\contact;
use App\Models\gallery;
use App\Models\service;
use App\Models\category;
use App\Models\settings;
use App\Models\departments;
use Illuminate\Http\Request;
use App\Models\department_team;
use App\Models\galleryCategory;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function sendContactMessage(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string'],
            'message' => ['required', 'string'],
            'phone' => ['required']
        ]);

        try {

            $contact = new contact();

            $contact->name = $validatedData['name'];
            $contact->email = $validatedData['email'];
            $contact->subject = $validatedData['subject'];
            $contact->message = $validatedData['message'];
            $contact->phone = $validatedData['phone'];

            $contact->save();

            return back()->with('mssg', 'Message Sent Successfully');

        } catch (\Exception $e) {

            return back()->with('mssg', throw $e);

        }

    }//end method

    public function ContactUs()
    {

        $getSystemSettingsApp = settings::getSingle();

        return view('frontend.contact-us', compact('getSystemSettingsApp'));

    }//end method

    public function Gallery()
    {

        $galleryCat = galleryCategory::all();

        $gallery = gallery::latest()->paginate(8);

        return view('frontend.gallery', compact('galleryCat', 'gallery'));

    }//end method

    public function Department($id)
    {

        $category = category::findOrFail($id);

        // $department = departments::where('category_id', $id)
        //     ->get();
        $departments = departments::where('category_id', $id)->orderBy('name')->get();

        $groupedDepartments = $departments->groupBy(function ($item) {

            return strtoupper(substr($item->name, 0, 1));

        });

        return view('frontend.department', compact('groupedDepartments', 'category'));

    }//end method

    public function Services()
    {

        $services = service::latest()
            ->get();
        $departments = departments::whereNot('category_id', null)
            ->limit(3)
            ->get();

        return view('frontend.services', compact('services', 'departments'));

    }//end method

    public function AboutUs()
    {
        $departments = departments::whereNot('category_id', null)
            ->limit(3)
            ->get();

        return view('frontend.about-us', compact('departments'));

    }//end method

    public function DepartmentDetails($id)
    {

        $department = departments::findOrFail($id);
        $department_team = department_team::where('department_id', $id)
            ->get();

        return view('frontend.department-details', compact('department', 'department_team'));

    }//end method

    public function Index()
    {

        $services = service::latest()
            ->limit(6)
            ->get();
        $departments = departments::whereNot('category_id', null)
            ->limit(3)
            ->get();

        return view('frontend.index', compact('services', 'departments'));

    }//end method

}
