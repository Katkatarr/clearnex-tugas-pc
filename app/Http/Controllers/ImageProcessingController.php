<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class ImageProcessingController extends Controller
{
    // Menampilkan form upload gambar
    public function index()
    {
        return view('image-upload');
    }

    // Proses gambar yang diupload
    public function processImage(Request $request)
    {
        // Validasi file
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Menyimpan gambar yang diupload
        $image = $request->file('image');
        $imagePath = $image->store('uploads', 'public');

        // Path gambar yang disimpan
        $fullImagePath = storage_path('app/public/' . $imagePath);
        set_time_limit(60);

        // Jalankan Python Script untuk memproses gambar
        $process = new Process(['python3', base_path('process_image.py'), $fullImagePath]);
        $process->run();

        // Jika gagal
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Ambil output dari Python script (gambar yang sudah diproses)
        $output = $process->getOutput();

        return view('image-result', [
            'originalImage' => asset('storage/' . $imagePath),
            'outputImage' => asset('storage/processed_image.jpg'),
        ]);
    }
}
