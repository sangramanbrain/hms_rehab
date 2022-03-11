<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('p_file');
        if($file){
            $file_name = $file->getClientOriginalName();
            $file_new_name = time().$file_name;
            $save = $file->move(public_path('uploads/prescription'), $file_new_name);
            if ($save){
                $prescription = new Prescription();
                $prescription->prescription = $file_new_name;
                $prescription->desc = $request->desc;
                $prescription->save();
            }
            else{
                die('error');
            }
        }
        die('error');
    }
}
