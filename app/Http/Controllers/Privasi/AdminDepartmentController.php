<?php

namespace App\Http\Controllers\Privasi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\departments;
use App\Models\members;

class AdminDepartmentController extends Controller
{
	public function department_lcvpdata()
	{
		$datas = members::whereNull('lcvp_id')->whereNotNull('lcp_id')->get();
		$data = [];
		foreach ($datas as $d) {
			$data[] = array(
				"id" => $d['id'],
				"fullname" => $d['fullname'],
			);
		}

    	$status = True;
    	$pesan = 'Data Opsi LCVP';

	    $api = array(
	        'status' => $status,
	        'data' => $data,
	        'pesan' => $pesan
	    );

	    return response()->json($api);
	}

	public function department_departmentdata()
	{
		$datas = departments::join('members','departments.lcvp_id', '=', 'members.id')->select('departments.*','fullname')->get();
		$data = [];
		foreach ($datas as $d) {
			$data[] = array(
				"id" => $d['id'],
				"department_name" => $d['department_name'],
				"lcvp_id" => $d['lcvp_id'],
				"lcvp_name" => $d['fullname'],
				"team_name" => $d['team_name'],
				"team_vision" => $d['team_vision'],
			);
		}

    	$status = True;
    	$pesan = 'Data Departments';

	    $api = array(
	        'status' => $status,
	        'data' => $data,
	        'pesan' => $pesan
	    );

	    return response()->json($api);
	}

    public function department_submitdata(Request $request)
    {
    	$lcvp_id = $request['lcvp_id'];
    	$department_name = $request['department_name'];
    	$team_name = $request['team_name'];
    	$team_vision = $request['team_vision'];

    	$data = array(
    		'lcvp_id' => $lcvp_id,
    		'department_name' => $department_name,
    		'team_name' => $team_name,
    		'team_vision' => $team_vision
    	);

    	departments::create($data);

    	$data = [];
    	$status = True;
    	$pesan = 'Data inserted';

	    $api = array(
	        'status' => $status,
	        'data' => $data,
	        'pesan' => $pesan
	    );

	    return response()->json($api);
    }
}
