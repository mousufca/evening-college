<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
      'name',
      'image',
      'role',
      'about',
      'department_id'
    ];
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
