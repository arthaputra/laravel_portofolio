<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayController extends Controller
{
    public function index() {
        $nama = "Exova Indonesia";
        $anak = ["Exova", "Exstuffs", "Exchat", "Excloud", "Exovastudios"];
        return view('biodata', ['nama' => $nama, 'anak' => $anak]);
    }

    public function parse($anak_id) {
        return view('payment', ['nama' => $anak_id]);
    }
}
