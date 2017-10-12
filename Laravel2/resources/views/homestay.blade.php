<htnl>
    <head>

    </head>
    <body>
    <center>


        <table border="1">
            <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No_telp</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Action</th>
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
                <td>
                    <button><a href={{"/edit/".$a->id}}>Edit</a></button> |
                    <form action="{{url('/delete/'.$a->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </center>
    </body>
</htnl>