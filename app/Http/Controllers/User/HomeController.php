<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\User;
use App\Models\UserAdress;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\Console\Input\Input;
use Validator;

class HomeController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $user_default_address = User::where('id', $user_id)->pluck('address');
        $user_default_address_new = trim($user_default_address, '[""]');
        $user_extra_addres = User::find($user_id)->addres;
//        foreach($user_extra_addres as $each)
//        {
//            echo( $each->e_address );
//        }
//        die();

        $user_extra_addres_count = $user_extra_addres->count();
        $user_default_addres_count = $user_default_address->count();
        if ($user_extra_addres_count < 1 and $user_default_addres_count < 1) {
            return view('user.index');
        } elseif ($user_extra_addres_count < 1 and $user_default_addres_count > 0) {
            return view('user.index')->with('user_default_address', $user_default_address_new);
        } elseif ($user_extra_addres_count > 0 and $user_default_addres_count < 1) {
            return view('user.index')->with('user_extra_address', $user_extra_addres);
        } else {
            return view('user.index')->with('user_default_address', $user_default_address_new)->with('user_extra_address', $user_extra_addres);
        }
    }

//    public function create_order(Request $request)
//    {
//        $file = $request->file('p_file');
//        if ($file) {
//            $file_name = $file->getClientOriginalName();
//            $file_new_name = time() . $file_name;
//            $save = $file->move(public_path('uploads/prescription'), $file_new_name);
//            if ($save) {
//                $prescription = new Prescription();
//                $prescription->prescription = $file_new_name;
//                $prescription->desc = $request->desc;
//                $prescription->user_id = auth()->user()->id;
//                $prescription->order_address = $request->order_address;
//                $prescription->save();
//                return back()->with('order_success', 'ordered Placed');
//            } else {
//                return back()->with('order_error', 'please check database  and try again');
//            }
//        }
//        return back()->with('order_error', 'please check file and try again');
//    }

    public function edit_address(Request $request)
    {

        $id = $request->id;
        $user_data = User::find($id);
        $table = $request->table;
        $address = "";
        if ($table == "u_d_a") {
            $address_temp = User::find($id)->pluck('address');
            $address = trim($address_temp, '[""]');
        } elseif ($table == "u_e_a") {
            $addres = UserAdress::where('id', $id)->pluck('e_address');
            $address = trim($addres, '[""]');
        }


        return view('user.edit_address')->with('table', $table)->with('address', $address)->with('id', $id);
    }

//    public function edit_order_address(Request $request)
//    {
//        $id = $request->id;
//        $table = $request->table;
//
//        if ($table == 'u_d_a') {
//            User::where('id', $id)
//                ->update([
//                    'address' => $request->edit_address
//                ]);
//            return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
//        } elseif ($table == "u_e_a") {
//            UserAdress::where('id', $id)
//                ->update([
//                    'e_address' => $request->edit_address
//                ]);
//            return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
//        } elseif ($table == "add_address") {
//            $user_default_address_count = User::find($id)->count();
//            $address = User::find($id)->addres()->get();
//            $count_address = $address->count();
//            if ($user_default_address_count = 1) {
//                if ($count_address < 4) {
//                    $new_address = new UserAdress();
//                    $new_address->e_address = $request->edit_address;
//                    $new_address->user_id = Auth::user()->id;
//                    $new_address->save();
//                    return redirect('/dashboard')->with('add_address_success_mag', 'Address Updated Successfully');
//                } else {
//                    return redirect('/dashboard')->with('add_address_error_mag', 'you have exceed the maximum limit');
//                }
//            }
//        }
//        return back();
//    }

//    public function reorder(Request $request)
//    {
//        $order_id = $request->order_id;
//        $user_id = $request->user_id;
//
//        $oder = Prescription::where('id', $order_id)->with(['user'])->get();
//        $address = UserAdress::where('user_id', $user_id)->get();
//
////        return $order[0]->prescription;
//        return view('user.reorder')->with('order', $oder)->with('address', $address);
//    }

//    public function reorder_post(Request $request)
//    {
//        $order_id = $request->order_id;
//        $reoder = Prescription::find($order_id);
//        $reoder->order_address = $request->order_address;
//        $reoder->status = 0;
//        $reoder->track = null;
//        if ($request->desc){
//            $reoder->desc = $request->desc;
//        }
//        $reoder->save();
//       return redirect('/dashboard')->with('reorder_msg', 'reordered successfully');
//    }

    public function profile()
    {
        $user_data = User::where('id',Auth::user()->id)->with('addres')->get();
//        return $user_data[0]->addres;

        return view('user.profile')->with('user_data', $user_data);
    }

    public function update_profile(Request $request)
    {
        $validator = validator::make($request->all(), [
            'name' => 'required',
        ]);
//        if(!$validator){
//            return redirect::back()->withInput(Input::all());
//            echo 'error';
//        }
//        die('error');
        $user = User::where('id', Auth::user()->id)
            ->update([
                'name' =>$request->name,
                'email' =>$request->email,
                'contact' => $request->contact,
                'address' => $request->address,
                'password' =>\Hash::make($request->password),
            ]);
        return back();
    }

    public function edit_other_address(Request $request)
    {
        $id = $request->id;
        $update_address = UserAdress::where('id', $id)
            ->update([
                'e_address' => $request->address
            ]);
        return back();

    }
    public function support()
    {
        return view('user/support');
    }

    public function support_post()
    {
        //
    }
}
