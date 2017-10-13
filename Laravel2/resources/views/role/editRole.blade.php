@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Data</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="post" action="{{url('/editrole/'.$role->id)}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label">Nama Role:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name"
                                           placeholder="Masukkan Nama Homestay" value="{{ $role->name  }}" required>
                                </div>
                            </div>
                            <table class=" table table-bordered">
                                <tr>
                                    <td class="text-center" style="vertical-align: middle;">Permission</td>
                                    <td>
                                        @foreach($permission as $controller)
                                         <div class="col-sm-9">
                                            <input type="checkbox" name="permissions[]" value="{{$controller->name}}">
                                            {{strtoupper($controller->name)}}
                                        </div>
                                         @endforeach
                                    </td>
                                </tr>
                            </table>

                            <div class="form-group">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        Update Data
                                    </button>
                                    <a href="/lihatrole" class="btn btn-primary">Lihat Data</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
