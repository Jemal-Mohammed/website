<?php

namespace App\Http\Controllers;

use App\Models\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SignatureController extends Controller
{
    // SignatureController.php
    public function index()
    {
        $signatures = Signature::all(); // Assuming you have a 'Signature' model

        return view('List_of_Signatures', ['signatures' => $signatures]);
    }

    public function saveSignature(Request $request)
    {
        $signatureData = $request->input('signatureData');

        // Save the base64-encoded data to a file in the storage directory
        $imagePath = 'public/signatures/' . uniqid() . '.png'; // The 'public/' is necessary for visibility

        $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $signatureData));

        // Store the file in the 'public' disk
        Storage::disk('public')->put($imagePath, $imageData);

        // Update the database with the image file path
        Signature::create([
            'sign' => $signatureData,
            'image_path' => $imagePath,
        ]);

        return response()->json(['message' => 'Signature saved successfully']);
    }
}