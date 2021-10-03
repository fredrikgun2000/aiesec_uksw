<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class positions extends Model
{
    use SoftDeletes;
	protected $table = 'positions';
	protected $fillable = ['lcvp_id','department_name','team_name','team_vision'];
	protected $dates = ['deleted_at'];
}
