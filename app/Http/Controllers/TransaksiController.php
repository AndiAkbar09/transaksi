<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transactions = Transaksi::paginate(3);
        return view('transaksi.index', compact('transactions'));
    }

    public function create()
    {
        return view('transaksi.create');
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create([
            'nota'  => $request->nota,
            'nama'  => $request->nama,
            'jenis'  => $request->jenis,
            'total'  => $request->total,
            'tanggal'  => $request->tanggal,
        ]);

        $transaksi->save();
        return redirect('transaksi')->with('toast_success', 'Transaksi Berhasil di Simpan!');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);

        $transaksi->delete($transaksi->all());

        return redirect('transaksi')->with('toast_success', 'Transaksi Berhasil di Hapus!');

    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::findOrFail($id);

        $transaksi->update($request->all());

        return redirect('transaksi')->with('toast_success', 'Transaksi Berhasil di Edit!');
        
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit', compact('transaksi'));
    }
}
