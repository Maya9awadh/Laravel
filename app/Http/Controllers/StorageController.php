<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    //
    public function uploadFile(Request $request): string
    {
        $path = $request->file('logo')->store('public/logos');
        $data['image']=$path;
        return view('show-file',$data);
    }
}
