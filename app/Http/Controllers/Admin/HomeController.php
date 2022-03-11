<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // dd(\Auth::guard('admin')->user()->hasRole('editor'));
        $total_order = Prescription::count();
        $not_approved = Prescription::where('status', 0)->count();
        $approved = Prescription::where('status', 1)->count();
        $delivered = Prescription::where('track', 3)->count();

        return view('admin.index')
            ->with('total_order', $total_order)
            ->with('not_approved', $not_approved)
            ->with('approved', $approved)
            ->with('delivered', $delivered);
    }


    public function adminTest()
    {

        if(\Gate::forUser(\Auth::guard('admin')->user())->allows('admin')){
            dd('only admin allowed');
        }
        abort(403);
    }

    public function editorTest()
    {
        if(\Auth::guard('admin')->user()->hasRole('editor')){
            dd('only editor allowed');
        }
        abort(403);
    }

    public function view_user()
    {
        $i = 1;
        $users = User::all();
        return view('admin.view_user')->with('users', $users)->with('i', $i);
    }

}
