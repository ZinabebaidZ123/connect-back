<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Mode\Project;
class Service extends Model
{
    use HasFactory;
    protected $fillable =['name' , 'description' , 'image'];

    public function projects(){
        return $this->hasMany(Project::class);
    }
}
