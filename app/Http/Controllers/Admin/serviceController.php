<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class serviceController extends Controller
{
    public function updateService(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = service::find($request->id);
        $service->name = $request->name;
        $service->icon = $request->icon;
        $service->short_description = $request->short_description;
        $service->description = $request->description;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg
            Image::make($image)->resize(350, 243)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;
            $service->image = $save_url;
        }
        
        $service->updated_at = Carbon::now();
        $service->save();

        $notification = [
            'message' => "Service Successfully Updated",
            'alert-type' => "success",
        ];
        return redirect()->route('view_Services')->with($notification);
    }

    public function editService($id)
    {
        $data['service'] = service::find($id);
        return view('admin.edits.edit_service', $data);
    }


    public function deleteService($id)
    {
        $service = service::find($id);
        if ($service->image) {
            unlink($service->image);
        } // remove image from directory if exists.
        $service->delete();
        $notification = [
            'message' => "Service Successfully Deleted",
            'alert-type' => "success",
        ];
        return redirect()->route('view_Services')->with($notification);
    }


    public function viewServices()
    {
        $data['services'] = service::latest()->get();
        return view('admin.pages.services', $data);
    }

    public function createServices()
    {
        return view('admin.create.add_service');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'short_description' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $service = new service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->short_description = $request->short_description;
        $service->icon = $request->icon;
        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg
            Image::make($image)->resize(350, 243)->save('upload/service/' . $name_gen);
            $save_url = 'upload/service/' . $name_gen;
            $service->image = $save_url;
        }
        $service->save();

        $notification = [
            'message' => "Service Successfully Created",
            'alert-type' => 'success',
        ];

        return redirect()->route('view_Services')->with($notification);
    }
}
