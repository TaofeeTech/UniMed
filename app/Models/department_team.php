<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department_team extends Model
{
    use HasFactory;
        protected $guarded = [];

        static function DeleteSizeRecord($department_id){
        self::where('department_id', $department_id)->delete();
        }

        static public function getSingle($id){
        return self::find($id);
        }

}
