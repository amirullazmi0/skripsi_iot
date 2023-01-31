<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => "IOT KU"
        ];

        return view('/admin/index', ($data));
    }

    public function store(Request $request)
    {
        $data = [
            'value' => $request->value
        ];
        // proses data
        Sensor::create($data);
        // simpan data ke database jika diperlukan
        return response()->json(['message' => 'Data berhasil diterima']);
    }
}
