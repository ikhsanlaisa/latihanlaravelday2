@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Data</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{url('/homestaypost')}}">
                            {{ csrf_field() }}

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Nama :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama"
                                           placeholder="Masukkan Nama Homestay" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Alamat :</label>
                                <div class="col-sm-9">
                                    <textarea type="text" class="form-control" name="alamat"
                                              placeholder="Masukkan Alamat" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">No Telepon :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="No Telp"
                                           placeholder="Masukkan No Telp" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Deskripsi :</label>
                                <div class="col-sm-9">
                                    <textarea type="textarea" class="form-control" name="deskrpsi"
                                              placeholder="Masukkan Deskripsi" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Harga :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="harga"
                                           placeholder="Masukkan Harga" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Status :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="status"
                                           placeholder="Masukkan Status" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Data
                                    </button>
                                    <a href="/lihatdata" class="btn btn-primary">Lihat Data</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
