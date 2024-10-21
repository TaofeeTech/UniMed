<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departments extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'departments';


    public function departmentCategory()
    {
        return $this->belongsTo(category::class, 'category_id', 'id');
    }
    public function departmentSubCategory()
    {
        return $this->belongsTo(subCategory::class, 'subcategory_id', 'id');
    }

    static public function getSingle($id)
    {
        return self::find($id);
    }

    public function getTeam()
    {
        return $this->hasMany(department_team::class, 'department_id');
    }
}
