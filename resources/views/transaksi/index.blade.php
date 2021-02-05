@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('tambah.transaksi')}}" class="btn btn-outline-primary">Tambah Transaksi</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-4 py-4">
                    <h4 class="text-muted">Transaksi</h4>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nota</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Jenis</th>
                                    <th>Total</th>
                                    <th>Tanggal</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $transaksi)
                                <tr>

                                    <td>{{$transaksi->nota}}</td>
                                    <td>{{$transaksi->nama}}</td>
                                    <td>{{$transaksi->jenis}}</td>
                                    <td>{{$transaksi->total}}</td>
                                    <td>{{date('d-m-Y', strtotime($transaksi->tanggal))}}</td>
                                    <td>
                                        <form action="{{route('hapus.transaksi', $transaksi->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">Hapus</button>
                                            <a href="{{route('edit.transaksi', $transaksi->id)}}" type="submit" class="btn btn-outline-primary">Edit</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>  
                    <div>
                        {{  $transactions->links() }}
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection