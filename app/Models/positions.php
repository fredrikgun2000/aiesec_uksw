<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class positions extends Model
{
    use SoftDeletes;
	protected $table = 'positions';
	protected $fillable = ['department_id','manager_id','role_name'];
	protected $dates = ['deleted_at'];
}
