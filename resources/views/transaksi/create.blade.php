@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 ">

            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('upload.transaksi')}}" enctype="multipart/form-data" method="post">                                                <div class="row">
                        @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nota</label>
                                    <input type="text" name="nota" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Pelanggan</label>
                                    <input type="text" name="nama" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jenis</label>
                                    <input type="text" name="jenis" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Total</label>
                                    <input type="text" name="total" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="" >
                                </div>
                            </div>
                            
                        </div>
                        <div >
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
                            <a href="{{route('transaksi')}}" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection