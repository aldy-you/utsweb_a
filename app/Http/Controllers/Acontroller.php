<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Exam;

class Acontroller extends Controller
{
    public function index()
    {
        $exam = Exam::all();
        return view('exam/tampil', ['exam' => $exam]);
    }
    public function tambah()
    {
        return view('exam/tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_70' => 'required',
            'abstrak_70' => 'required'
        ]);

        Exam::create([
            'judul_70' => $request->judul_70,
            'abstrak_70' => $request->abstrak_70
        ]);

        return redirect('/kelompoka');
    }
    // public function edit($id)
    // {
    //     $exam = Exam::find($id);
    //     return view('exam/edit', ['exam' => $exam]);
    // }
    // public function update($id, Request $request)
    // {
    //     $this->validate($request, [
    //         'judul_70' => 'required',
    //         'abstrak_70' => 'required'
    //     ]);

    //     $exam = Exam::find($id);
    //     $exam->judul_70 = $request->judul_70;
    //     $exam->abstrak_70 = $request->abstrak_70;
    //     $exam->save();
    //     return redirect('/kelompoka');
    // }
    public function hapus($id_a)
    {
        $exam = Exam::find($id_a);
        $exam->delete();
        return redirect('/kelompoka');
    }
}
