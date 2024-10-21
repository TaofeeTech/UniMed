<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\department_team;
use App\Models\departments;
use App\Models\subCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class departmentController extends Controller
{
    //
    public function updateDepartment(Request $request)
    {
        // dd($request->all());
        $request_id = $request->id;

        $departments = departments::find($request_id);

        // if (empty($request->category_id) || empty($request->subcategory_id)) {
        if (empty($request->category_id)) {
            $notification = [
                'message' => 'Please select a category first',
                'alert-type' => 'error',
            ];

            return redirect()->back()->with($notification);
        }


        if (!empty($departments)) {

            $departments->name = trim($request->name);
            $departments->category_id = $request->category_id;
            // $departments->subcategory_id = $request->subcategory_id;
            $departments->short_description = trim($request->short_description);
            $departments->description = trim($request->description);
            $departments->hod_name = trim($request->hod_name);
            $departments->hod_degrees = trim($request->hod_degrees);

            if (!empty($request->file('image'))) {
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg
                Image::make($image)->save('upload/departments/' . $name_gen);
                $department_image = 'upload/departments/' . $name_gen;
                $departments->image = $department_image;
            }

            if (!empty($request->file('hod_image'))) {
                $hod_image = $request->file('hod_image');
                $name_gen = hexdec(uniqid()) . '.' . $hod_image->getClientOriginalExtension(); // 3434343443.jpg
                Image::make($hod_image)->save('upload/departments/HOD/' . $name_gen);
                $hod_image = 'upload/departments/HOD/' . $name_gen;
                $departments->hod_image = $hod_image;
            }

            $departments->save();


            // department_team::DeleteSizeRecord($departments->id);

            // if (!empty($request->size)) {
            //     foreach ($request->size as $teams) {
            //         if (!empty($teams['name'])) {
            //             $department_team = new department_team();
            //             $department_team->name = $teams['name'];
            //             $department_team->role = $teams['role'];

            //             if (!empty($teams['image'])) {
            //                 $team = $teams['image'];
            //                 $name_gen = hexdec(uniqid()) . '.' . $team->getClientOriginalExtension(); //3434343443.jpg
            //                 Image::make($team)->save('upload/departments/team/' . $name_gen);
            //                 $team = 'upload/departments/team/' . $name_gen;
            //                 $department_team->image = $team;
            //             }

            //             $department_team->department_id = $departments->id;
            //             $department_team->save();
            //         }
            //     }
            // }




            department_team::DeleteSizeRecord($departments->id);

            if (!empty($request->size)) {
                foreach ($request->size as $teams) {
                    if (!empty($teams['name'])) {
                        // Check if updating an existing team, if so, load it from the DB
                        if (!empty($teams['id'])) {
                            $department_team = department_team::find($teams['id']);
                        } else {
                            $department_team = new department_team();
                        }

                        $department_team->name = $teams['name'];
                        $department_team->role = $teams['role'];

                        // Only process the image if a new one is uploaded
                        if (!empty($teams['image'])) {
                            $team = $teams['image'];
                            $name_gen = hexdec(uniqid()) . '.' . $team->getClientOriginalExtension(); // Generate unique image name
                            Image::make($team)->save('upload/departments/team/' . $name_gen);
                            $team_path = 'upload/departments/team/' . $name_gen;
                            $department_team->image = $team_path; // Update the image field
                        } else {
                            // If no image is uploaded, keep the existing image (do nothing to the image field)
                            // Do not overwrite the 'image' attribute here if a new file is not uploaded.
                            $department_team->image = $teams['imageValue'];
                        }

                        $department_team->department_id = $departments->id;
                        $department_team->save();
                    }
                }
            }


            $notification = [
                'message' => 'Department Successfully Updated',
                'alert-type' => 'success',
            ];

            return redirect()->route('view_department')->with($notification);
        } else {
            abort(404);
        }
    }

    public function getSubCategory(Request $request)
    {
        $category_id = $request->id;
        $getSubCategory = subCategory::where('category_id', $category_id)->where('status', 0)->where(
            'isdelete',
            0
        )->orderBy('name', 'ASC')->get();
        $html = "";
        $html .= "<option value=''>Select</option>";
        foreach ($getSubCategory as $value) {
            $html .= "<option value='$value->id'> $value->name </option>";
        }
        return response()->json([
            'success' => true,
            'html' => $html,
        ]);
    }
    // updateDepartment

    public function editDepartment($id)
    {
        $data['department'] = departments::getSingle($id);
        $data['getSubCategory'] = subCategory::where('id', '=', $data['department']->subcategory_id)->where('status', 0)->where('isdelete', 0)->orderBy('name', 'ASC')->get(); // Retrieve related subcategories
        $data['categories'] = category::latest()->orderBy('name', 'ASC')->get();

        return view('admin.edits.editDepartment', $data);
    }
    public function viewDepartment()
    {

        $departments = departments::latest()->get();
        return view('admin.pages.viewdepartments', compact('departments'));
    }

    public function addDepartment()
    {
        return view('admin.create.departments');
    }


    public function storeDepartment(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $product = new departments();
        $product->name = $request->name;
        $product->save();

        $notification = [
            'message' => 'Department name created successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('view_department')->with($notification);
    }
}
