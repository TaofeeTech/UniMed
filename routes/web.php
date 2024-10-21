<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\contactController;
use App\Http\Controllers\Admin\departmentController;
use App\Http\Controllers\Admin\galleryController;
use App\Http\Controllers\Admin\pageController;


use App\Http\Controllers\Admin\serviceController;
use App\Http\Controllers\Admin\subCategoryController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Seller\sellerController;
use App\Http\Controllers\Users\userController;
use Illuminate\Support\Facades\Route;






// Route::get('/', function () {
//     return view('frontend.index');
// })->name('frontend');

Route::get('/dashboard', function () {
    return view('users.index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';


Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'Index')->name('frontend');
    Route::get("/department-details/{id}", 'DepartmentDetails')->name('department.details');
    Route::get("/about", 'AboutUs')->name('about');
    Route::get("/service", "Services")->name('service');
    Route::get("/department/{id}", "Department")->name('department');
    Route::get("/gallery", "Gallery")->name('gallery');
    Route::get("/contact", "ContactUs")->name('contact');
    Route::post("/contact/message", "sendContactMessage")->name('contact.message');

});

/* ========= Admin Starts ========= */
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('/dashboard', 'Dashboard')->name('admin_dashboard');
        Route::get('/profile', 'adminProfile')->name('admin.profile');
        Route::get('/edit/profile', 'editProfile')->name('edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/view/users', 'viewAllUsers')->name('admin.all');
        Route::get('/logout', 'Logout')->name('admin_logout');
    });

    // PAGE CONTROLLER
    Route::controller(pageController::class)->group(function () {
        Route::get('/system-settings', 'systemSettings')->name('systemSettings');
        Route::post('/system-settings', 'updateSettings')->name('update_system_settings');
    });


    // SERVICE
    Route::controller(serviceController::class)->group(function () {
        Route::get('/view-services', 'viewServices')->name('view_Services');
        Route::get('/view-services', 'viewServices')->name('view_Services');
        Route::get('/create-service', 'createServices')->name('create_Services');
        Route::post('/store-service', 'storeService')->name('store_service');
        Route::get('/edit-service/{id}', 'editService')->name('editService');
        Route::post('/update-service', 'updateService')->name('update_service');
    });

    // GALLERY
    Route::controller(galleryController::class)->group(function () {
        Route::get('/add/gallery/category', 'addgalleryCat')->name('add.galleryCat');
        Route::post('/store/gallery/category', 'storegalleryCat')->name('store.galleryCat');
        Route::get('/view/gallery/category', 'viewgalleryCat')->name('view.galleryCat');
        Route::get('/edit/gallery/category/{id}', 'editgalleryCat')->name('edit.galleryCat');
        Route::post('/update/gallery/category', 'updategalleryCat')->name('update.galleryCat');
        Route::get('/delete/gallery/category/{id}', 'deletegalleryCat')->name('delete.galleryCat');


        Route::get('/add/gallery', 'addGallery')->name('add.gallery');
        Route::post('/store/gallery', 'storeGallery')->name('store.gallery');
        Route::get('/view/gallery', 'viewGallery')->name('view.gallery');
        Route::get('/edit/gallery/{id}', 'editGallery')->name('edit.gallery');
        Route::post('/update/gallery', 'updateGallery')->name('update.gallery');
        Route::get('/delete/gallery/{id}', 'deleteGallery')->name('delete.gallery');
    });

    Route::controller(contactController::class)->group(function () {
        // Route::post('/contact/message', 'storeMessage')->name('store.message');
        Route::get('/contact/message/delete/{id}', 'deleteMessage')->name('delete.contact');
    });

    // CATEGORY CONTROLLER
    Route::controller(categoryController::class)->group(function () {
        Route::post('/update/category', 'updateCategory')->name('update_category');
        Route::get('/view/category', 'viewCategories')->name('view_categories');
        // Route::get('/add/category', 'addCategory')->name('add_category');
        // Route::post('/store/category', 'storeCategory')->name('store_category');
        // Route::get('/delete/category/{id}', 'deleteCategory')->name('delete_category');
        // Route::get('/restore/category/{id}', 'restoreCategory')->name('restore_category');
        // Route::get('/recently-deleted/categories', 'deletedCategories')->name('deleted_categories');
        // Route::post('/delete-selected-categories', 'deleteSelectedCategories');
        // Route::post('/update-selected-categories-status', 'updateSelectedCategoriesStatus');
    });

    // SUB CATEGORY CONTROLLER
    Route::controller(subCategoryController::class)->group(function () {
        Route::get('/add/sub-category', 'add_Subcategory')->name('add_Subcategory');
        Route::post('/store/sub-category', 'storeSubCategory')->name('store_Subcategory');
        Route::post('/update/sub-category', 'updateSubCategory')->name('update_subcategory');
        Route::get('/view/sub-category', 'viewSubCategories')->name('view_subcategories');
        Route::get('/delete/sub-category/{id}', 'deleteSubCategory')->name('delete_subcategory');
        Route::post('/delete-selected-sub-categories', 'deleteSelectedSubCategories');
        Route::get('/recently-deleted/sub-categories', 'deletedSubCategories')->name('deleted_subcategories');
        Route::post('/update-selected-sub-categories-status', 'updateSelectedSubCategoriesStatus');
        Route::get('/restore/sub-category/{id}', 'restoreSubCategory')->name('restore_subcategory');
    });

    Route::controller(departmentController::class)->group(function () {
        Route::get('/departments', 'viewDepartment')->name('view_department');
        Route::get('/add-departments', 'addDepartment')->name('add_department');
        Route::post('/store/department', 'storeDepartment')->name('store_department');
        Route::get('/edit/department/{id}', 'editDepartment')->name('edit_department');
        Route::post('/update/department', 'updateDepartment')->name('update_department');
        Route::post('/get_SubCategory', 'getSubCategory');

    });
});


Route::controller(AdminController::class)->prefix('admin')->group(function () {
    Route::get('/login', 'Login')->name('admin_login');
    Route::get('/register', 'adminRegister')->name('admin_register');
    Route::post('/login-submit', 'Login_submit')->name('admin_login_submit');
    Route::get('/forgot-password', 'ForgetPassword')->name('admin_forgot_password');
    Route::post('/forgot-password-submit', 'ForgetPasswordSubmit')->name('admin_forgot_password_submit');
    Route::get('/reset-password/{token}/{email}', 'resetPassword')->name('admin_reset_password');
    Route::post('/reset-password-submit', 'resetPasswordSubmit')->name('admin_reset_password_submit');
});
/* ========= Admin Ends ========= */


//
//
//
//
//
//
//
//
//

/* ========= Seller Starts ========= */
Route::middleware('seller')->prefix('seller')->group(function () {
    Route::controller(sellerController::class)->group(function () {
        Route::get('/dashboard', 'Dashboard')->name('seller_dashboard');
        Route::get('/profile', 'adminProfile')->name('seller.profile');
        Route::get('/edit/profile', 'editProfile')->name('seller_edit.profile');
        Route::post('/store/profile', 'StoreProfile')->name('seller_store.profile');
        Route::get('/logout', 'Logout')->name('seller_logout');
    });
});



Route::controller(sellerController::class)->prefix('seller')->group(function () {
    Route::get('/login', 'Login')->name('seller_login');
    Route::get('/register', 'adminRegister')->name('seller_register');
    Route::post('/login-submit', 'Login_submit')->name('seller_login_submit');
    Route::get('/forgot-password', 'ForgetPassword')->name('seller_forgot_password');
    Route::post('/forgot-password-submit', 'ForgetPasswordSubmit')->name('seller_forgot_password_submit');
    Route::get('/reset-password/{token}/{email}', 'resetPassword')->name('seller_reset_password');
    Route::post('/reset-password-submit', 'resetPasswordSubmit')->name('seller_reset_password_submit');
});


/* ========= Seller ends ========= */

//
//
//
//
//
//
//

/* ========= User Starts========= */
Route::middleware('auth')->prefix('user')->group(function () {
    Route::controller(userController::class)->group(function () {
        Route::get('/profile', 'userProfile')->name('user_Profile');
        Route::get('/edit/profile', 'userEditProfile')->name('user_Edit_Profile');
        Route::post('/store/profile', 'userStoreProfile')->name('user_store_profile');
        Route::get('/logout', 'userLogout')->name('user_logout');
    });
});


/* ========= User Ends ========= */
