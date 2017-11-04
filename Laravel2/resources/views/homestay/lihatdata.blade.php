@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">List Data</div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    @if(Auth::user())
                                    <th>Action</th>
                                        @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($homestay as $a)
                                    <tr>
                                        <td>{{$a->nama}}</td>
                                        <td>{{$a->alamat}}</td>
                                        <td>{{$a->no_telp}}</td>
                                        <td>{{$a->deskrpsi}}</td>
                                        <td>{{$a->harga}}</td>
                                        <td>{{$a->status}}</td>
                                        @if(Auth::user())
                                        <td>
                                            <a href="{{"/edithomestays/".$a->id}}" class="btn btn-primary">Edit</a> |
                                            <form action="{{url('/deleteHomestay/'.$a->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input type="hidden" name="_method" value="delete">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                            @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        <div class="form-group">
                            <div class="col-md-8">
                                <a href="/inshomestay" class="btn btn-primary">Tambah Data</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
