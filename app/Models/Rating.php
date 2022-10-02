<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = "ratings";
    protected $primaryKey = "id_ratings";
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id_user');
    }

    public function resource()
    {
        return $this->belongsTo(Resource::class,'resource_id','id_resource');
    }
}
