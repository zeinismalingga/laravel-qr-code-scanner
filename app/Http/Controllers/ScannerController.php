<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ScannedData;

class ScannerController extends Controller
{
    public function index()
    {
        return view('scan');
    }

    public function save(Request $request)
    {
        $data = $request->input('data');
        
        // Save the scanned data to the database
        ScannedData::create([
            'data' => $data,
        ]);

        return response()->json(['message' => 'Data saved successfully']);
    }
}
