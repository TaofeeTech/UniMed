<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\galleryCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;


class galleryController extends Controller
{
    public function addgalleryCat()
    {
        return view('admin.create.addgalleryCat');
    } //end make sure to create it

    public function storegalleryCat(Request $request)
    {
        $request->validate([
            'gallery_category' => 'required',
        ]);

        galleryCategory::insert([
            'gallery_category' => $request->gallery_category,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => "Category Added Successfully",
            'alert-type' => "success",
        );

        return redirect()->route('view.galleryCat')->with($notification);
    }


    public function viewgalleryCat()
    {
        $galleryCat = galleryCategory::latest()->get();
        return view('admin.pages.viewGalleryCat', compact('galleryCat'));
    }


    public function editgalleryCat($id)
    {
        $galleryCat = galleryCategory::findOrFail($id);
        return view('admin.edits.edit_galleryCat', compact('galleryCat'));
    }


    public function updategalleryCat(Request $request)
    {
        $request->validate([
            'gallery_category' => 'required',
        ]);

        $galleryCat_id = $request->id;

        galleryCategory::findOrFail($galleryCat_id)->update([
            'gallery_category' => $request->gallery_category,
        ]);

        $notification = array(
            'message' => "Gallery Category Updated Successfully",
            'alert-type' => "success",
        );

        return redirect()->route('view.galleryCat')->with($notification);
    }


    public function deletegalleryCat($id)
    {
        // getting all blogs based on the category id
        $gallery = gallery::where('gallery_category_id', $id)->get();

        // getting the individual blog post ids
        foreach ($gallery as $blog_id) {
            // getting the id's of the blogs
            $delBlogBasedOnId = $blog_id->id;
            gallery::findOrFail($delBlogBasedOnId)->delete();
        }

        galleryCategory::findOrFail($id)->delete();
        $notification = array(
            'message' => "Gallery Category Sccessfully Deleted",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



    // <================= END OF GALLERY CATEGORY SECTION=======================>




    // <================= GALLERY SECTION BEGINS=======================>

    public function addGallery()
    {
        $gallery_category = galleryCategory::orderBy('gallery_category', 'ASC')->get();
        return view('admin.create.add_gallery', compact('gallery_category'));
    }


    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'gallery_category_id' => 'required',
            'image' => 'required',
        ]);

        if ($request->file('image')) {
            $img = $request->file('image');

            foreach ($img as $image) {
                # code...
                $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg
                Image::make($image)->save('upload/gallery/' . $name_gen);
                $save_url = 'upload/gallery/' . $name_gen;

                gallery::insert([
                    'title' => $request->title,
                    'gallery_category_id' => $request->gallery_category_id,
                    'image' => $save_url,
                    'created_at' => Carbon::now()
                ]);
            }
        } else {
            gallery::insert([
                'title' => $request->title,
                'gallery_category_id' => $request->gallery_category_id,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = array(
            'message' => 'Gallery Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.gallery')->with($notification);
    }


    public function viewGallery()
    {
        $gallery = gallery::latest()->get();
        return view('admin.pages.viewGallery', compact('gallery'));
    }


    public function editGallery($id)
    {
        $gallery_category = galleryCategory::orderBy('gallery_category', 'ASC')->get();
        $gallery = gallery::findOrFail($id);
        return view('admin.edits.edit_gallery', compact('gallery', 'gallery_category'));
    }

    public function updateGallery(Request $request)
    {
        $request->validate([
            'gallery_category_id' => 'required',
            'title' => 'required',
        ]);

        $gallery_id = $request->id;

        if ($request->file('image')) {
            # code...
            $image = $request->file('image');

            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // 3434343443.jpg
            Image::make($image)->save('upload/gallery/' . $name_gen);
            $save_url = 'upload/gallery/' . $name_gen;


            gallery::findOrFail($gallery_id)->update([
                'title' => $request->title,
                'gallery_category_id' => $request->gallery_category_id,
                'image' => $save_url,
            ]);
        } else {
            gallery::findOrFail($gallery_id)->update([
                'title' => $request->title,
                'gallery_category_id' => $request->gallery_category_id,
            ]);
        }

        $notification = array(
            'message' => 'Gallery Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('view.gallery')->with($notification);
    }



    public function deleteGallery($id)
    {
        $del_id = gallery::findOrFail($id);
        // to delete the Image once the data is deleted
        if ($del_id->image) {
            $img = $del_id->image;
            unlink($img);
        }
        // to delete the remaining data
        gallery::findOrFail($id)->delete();
        $notification = array(
            'message' => "Gallery Sccessfully Deleted",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
