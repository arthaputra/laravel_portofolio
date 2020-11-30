<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class TemanController extends Controller
{
    public function index() {
        $teman = DB::table('teman')->get();

        return view('home', ['teman' => $teman]);
    }
    protected function validator(Request $data) {
        $this->validate($data, [
            'nama_teman' => ['required', 'string', 'max:255'],
            'foto_teman' => ['required'],
        ]);
        $foto_teman = $data->file('foto_teman');
        $foto_teman->move('img', $foto_teman->getClientOriginalName());
        DB::table('teman')->insert([
            'nama_teman' => $data->nama_teman,
            'foto_teman' => $data->foto_teman->getClientOriginalName()
        ]);
        return redirect('/home');
    }
    public function delete($id) {
        DB::table('teman')->where('id', $id)->delete();

        return redirect('/home');
    }
}
