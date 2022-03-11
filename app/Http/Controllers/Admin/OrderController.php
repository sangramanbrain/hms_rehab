<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function view_orders(Request $request)
    {
        $start_date = $request->a_s_d;
        $end_date = $request->a_e_d;
        if ($start_date && $end_date) {

            $i = 1;
            $data = Prescription::whereBetween('created_at', [$start_date, $end_date])->with('user')->get();

        return view('admin/view-orders')->with('orders', $data)->with('i', $i);
        } elseif ($request->action  == "today") {
            $i = 1;
            $today_date = new \DateTime();
            $dt = $today_date->format('Y-m-d H:i:s');
            $data = Prescription::whereDate('created_at', Carbon::today())->with('user')->get();

            return view('admin.view-orders')->with('orders', $data)->with('i', $i);
        } elseif ($request->action  == "weekely") {
            $i = 1;
            $data = Prescription::select("*")
                ->whereBetween('created_at',
                    [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]
                )
                ->with('user')
                ->get();
            return view('admin.view-orders')->with('orders', $data)->with('i', $i);
        } elseif ($request->action  == "monthly") {
//            echo $request->action; die();
            $i = 1;
            $data = Prescription::select('*')
                ->whereMonth('created_at', Carbon::now()->month)
                ->with('user')
                ->get();
            return view('admin.view-orders')->with('orders', $data)->with('i', $i);
        }

        $data1 = Prescription::all();
       $data = Prescription::with('user')->get();
//       foreach ($data as $each)
//       {
//           var_dump($each->user->email);
//       }

//        die();
$i = 1;
        return view('admin.view-orders')->with('orders', $data)->with('i', $i);
    }

    public function order_set(Request $request)
    {
        $action = $request->action;

        if ($action == 'approve') {
            $update = Prescription::find($request->id);
            $update->status = 1;
            $update->save();
            return redirect('admin/view-orders')->with('o_msg_success', 'approved successfully');
        } elseif ($action == 'reject') {
            $update = Prescription::find($request->id);
            $update->status = 2;
            $update->save();
            return redirect('admin/view-orders')->with('o_msg_error', 'rejected successfully');
        }
        return redirect('admin/view-orders')->with('o_msg_error', 'please try again');
    }

    public function track_order(Request $request)
    {
        $update_oder = Prescription::find($request->id);
        $update_oder->track = $request->track_order;
        $update_oder->save();
        return redirect('admin/view-orders')->with('track_msg', 'updated successfully');
    }

}
