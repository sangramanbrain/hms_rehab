<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use App\Models\UserAdress;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function view_order()
    {
        $user_id = auth()->user()->id;
        $i = 1;
        $order = Prescription::where('user_id', $user_id)->get();
//
        return view('user/view_order')->with('order_list', $order)->with('i', $i);
    }

    public function create_order(Request $request)
    {
        $file = $request->file('p_file');
        if ($file) {
            $file_name = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            if($extension == 'pdf' or $extension == 'png' or $extension == 'jpeg' or $extension == 'jpg')
            {
                $file_new_name = time() . $file_name;
                $save = $file->move(public_path('uploads/prescription'), $file_new_name);
                if ($save) {
                    $prescription = new Prescription();
                    $prescription->prescription = $file_new_name;
                    $prescription->desc = $request->desc;
                    $prescription->user_id = auth()->user()->id;
                    $prescription->order_address = $request->order_address;
                    $prescription->save();
                    return back()->with('order_success', 'ordered Placed');
                } else {
                    return back()->with('order_error', 'File not Supported');
                }
            }
            return back()->with('order_error', 'please check file and try again');
        }
        return back()->with('order_error', 'please check file and try again');
    }
    public function edit_order_address(Request $request)
    {
        $id = $request->id;
        $table = $request->table;

        if ($table == 'u_d_a') {
            User::where('id', $id)
                ->update([
                    'address' => $request->edit_address
                ]);
            return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
        } elseif ($table == "u_e_a") {
            UserAdress::where('id', $id)
                ->update([
                    'e_address' => $request->edit_address
                ]);
            return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
        } elseif ($table == "add_address") {
            $user_default_address_count = User::find($id)->count();
            $address = User::find($id)->addres()->get();
            $count_address = $address->count();
            if ($user_default_address_count = 1) {
                if ($count_address < 4) {
                    $new_address = new UserAdress();
                    $new_address->e_address = $request->edit_address;
                    $new_address->user_id = Auth::user()->id;
                    $new_address->save();
                    return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
                } else {
                    return redirect('/dashboard')->with('add_address_error_mag', 'you have exceed the maximum limit');
                }
            }
        }
        return back();
    }

    public function reorder(Request $request)
    {
        $order_id = $request->order_id;
        $user_id = $request->user_id;

        $oder = Prescription::where('id', $order_id)->with(['user'])->get();
        $address = UserAdress::where('user_id', $user_id)->get();

//        return $order[0]->prescription;
        return view('user.reorder')->with('order', $oder)->with('address', $address);
    }

    public function reorder_post(Request $request)
    {
        $order_id = $request->order_id;
        $reoder = Prescription::find($order_id);
        $reoder->order_address = $request->order_address;
        $reoder->status = 0;
        $reoder->track = null;
        if ($request->desc){
            $reoder->desc = $request->desc;
        }
        $reoder->save();
        return redirect('/dashboard')->with('reorder_msg', 'reordered successfully');
    }
}
