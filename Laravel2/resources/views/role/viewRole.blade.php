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
                                <th>Permission</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $a)
                                <tr>
                                    <td>{{$a->name}}</td>
                                    <td> {{ $a->permissions()->count()  }}</td>
                                    <td align="center">
                                        <a href="{{"/editRoles/".$a->id}}" class="btn btn-primary">Edit</a> |
                                        <form action="{{url('/deleteRole/'.$a->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="form-group">
                            <div class="col-md-8">
                                <a href="/tambahrole" class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
