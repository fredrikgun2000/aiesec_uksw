<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class members extends Model
{
    use SoftDeletes;
	protected $table = 'members';
	protected $fillable = ['department_id','role_id','lcp_id','lcvp_id','manager_id','fullname','nim','email','password','status'];
	protected $dates = ['deleted_at'];
}
