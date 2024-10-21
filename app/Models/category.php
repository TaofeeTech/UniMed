<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
        protected $guarded = [];
        protected $table = 'categories';


        public function getSubCategory(){
        return $this->hasMany(subCategory::class, 'category_id', 'id')->where('status', 0)->where('isdelete', 0);
        }

        static public function ourCategories(){
        return self::select('categories.*')
        ->distinct()
        ->join('products', 'products.category_id', '=' ,'categories.id')
        ->where('categories.status', 0)
        ->where('categories.isdelete', 0)
        ->orderBy('categories.id', 'DESC')
        ->get();
        }
}
