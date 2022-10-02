<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;
    protected $table = "resource";
    protected $primaryKey = "id_resource";
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id_user');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'categ_id','id_category');
    }
}
