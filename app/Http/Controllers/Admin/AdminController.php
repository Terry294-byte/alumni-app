<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class AdminController extends Controller
{
	public function dashboard()
	{
		return view('dashboards.admin', [
			'totalUsers' => \App\Models\User::count(),
			'totalEvents' => \App\Models\Event::count(),
			'totalAlumni' => \App\Models\Alumni::count(),
			'totalMembers' => \App\Models\Member::count(),
		]);
	}
}
?>