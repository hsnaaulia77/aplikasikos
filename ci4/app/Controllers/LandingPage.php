<?php

namespace App\Controllers;

class LandingPage extends BaseController
{
    public function index()
    {
        // Data dummy, nanti bisa diambil dari database
        $data = [
            'nama_kos' => 'Kos Harmoni',
            'tagline' => 'Nyaman, Aman, dan Strategis',
            'deskripsi' => 'Kos Harmoni terletak di pusat kota, cocok untuk pria/wanita/keluarga.',
            'lokasi' => 'Jl. Harmoni No. 10, Jakarta',
            'jenis_kos' => 'Campur',
            'galeri' => [
                'kamar1.jpg', 'kamar2.jpg', 'dapur.jpg', 'kamar_mandi.jpg'
            ],
            'kamar' => [
                ['nama' => 'Kamar A', 'harga' => '1.000.000', 'ukuran' => '3x4', 'status' => 'Tersedia'],
                ['nama' => 'Kamar B', 'harga' => '900.000', 'ukuran' => '3x3', 'status' => 'Terisi'],
            ],
            'fasilitas' => ['Wi-Fi', 'Laundry', 'Parkir', 'Dapur', 'AC', 'Keamanan', 'CCTV'],
            'testimoni' => [
                ['nama' => 'Budi', 'komentar' => 'Tempatnya nyaman dan bersih!'],
                ['nama' => 'Sari', 'komentar' => 'Lokasi strategis, fasilitas lengkap.']
            ],
            'google_maps_embed' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.123456789!2d110.1234567!3d-7.1234567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a123456789abc%3A0x123456789abcdef!2sNama%20Kos!5e0!3m2!1sid!2sid!4v1680000000000!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
        ];
        return view('landing_page', $data);
    }
}
