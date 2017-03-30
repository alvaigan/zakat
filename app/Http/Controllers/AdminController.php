<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data['result'] = \App\Muzaqi_uang::all();
        return view("admin/index")->with($data);
    }

    public function create()
    {
      return view('admin/form');
    }

    public function store(Request $request)
    {
      $rules = [
        'nama_muzaqi' => 'required|max:100',
        'rt' => 'required|max:100',
        'jiwa' => 'required|max:100',
        'jumlah_uang' => 'required|max:100'
      ];
      $this->validate($request, $rules);

      $input = $request->all();
      $status = \App\Muzaqi_uang::create($input);

      if ($status) return redirect('/')->with('success', 'Data berasil ditambahkan');
      else return redirect('/')->with('error', 'Data gagal ditambahkan');
    }

    public function edit($id)
    {
      $data['result'] = \App\Muzaqi_uang::where('id_muzaqi', $id)->first();
      return view('uang/form')->with($data);
    }

    public function update(Request $request, $id)
    {
      $rules = [
        'nama_muzaqi' => 'required|max:100',
        'rt' => 'required|max:100',
        'jiwa' => 'required|max:100',
        'jumlah_uang' => 'required|max:100'
      ];
      $this->validate($request, $rules);

      $input = $request->all();
      $result = \App\Muzaqi_uang::where('id_muzaqi', $id)->first();
      $status = $result->update($input);

      if ($status) return redirect('/')->with('success', 'Data berasil diubah');
      else return redirect('/')->with('error', 'Data gagal diubah');
    }

    public function destroy(Request $request, $id)
    {
      $result = \App\Muzaqi_uang::where('id_muzaqi', $id)->first();
      $status = $result->delete();

      if ($status) return redirect('/')->with('success', 'Data berasil dihapus');
      else return redirect('/')->with('error', 'Data gagal dihapus');
    }
}
