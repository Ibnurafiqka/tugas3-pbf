<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class GajiController extends Controller
{
    public function index()
    {
        return view('gaji_form');
    }

    public function hitungForm()
    {
        return view('gaji_form');
    }

    public function hitungGaji()
    {
        // Ambil input dari form
        $gaji_pokok = $this->request->getPost('gaji_pokok');
        $hari_tidak_hadir = $this->request->getPost('hari_tidak_hadir');

        if (!is_numeric($gaji_pokok) || !is_numeric($hari_tidak_hadir)) {
            return redirect()->to('/gaji')->with('error', 'Gaji pokok dan hari tidak hadir harus diisi dengan angka')->withInput();
        }

        // Atur pemotongan gaji per hari absen
        $potongan_per_hari = 100000;

        // Hitung gaji bersih
        $gaji_bersih = $gaji_pokok - ($hari_tidak_hadir * $potongan_per_hari);

        // Kirim hasil ke view
        return view('gaji_form', [
            'gaji_pokok' => $gaji_pokok,
            'hari_tidak_hadir' => $hari_tidak_hadir,
            'gaji_bersih' => $gaji_bersih
        ]);
    }
}