<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mode\Service;
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'description' , 'image' , 'service_id'];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
