<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function download(Request $request, $filename)
    {
        // Retrieve the file's full path from your storage system
        $filePath = storage_path('app/public/' . $filename); // Replace with your file path

        if (file_exists($filePath)) {
            // Set the appropriate headers for the download
            $headers = [
                'Content-Type' => 'application/octet-stream',
                'Content-Disposition' => 'attachment; filename="' . $filename . '"',
            ];

            // Return the file as a response
            return Response::download($filePath, $filename, $headers);
        } else {
            abort(404); // File not found
        }
    }
}
