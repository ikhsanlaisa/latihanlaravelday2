<html>
    <head>

    </head>
    <body>
    <form action="{{url('/homestaypost')}}" method="post">
        {{csrf_field()}}
        <div>
            <div>Nama</div>
            <div><input type="text" name="nama"></div>
        </div>
        <div>
            <div>Alamat</div>
            <div><input type="text" name="alamat"></div>
        </div>
        <div>
            <div>no_telp</div>
            <div><input type="text" name="no_telp"></div>
        </div>
        <div>
            <div>Deskripsi</div>
            <div><input type="text" name="deskrpsi"></div>
        </div>
        <div>
            <div>Harga</div>
            <div><input type="text" name="harga"></div>
        </div>
        <div>
            <div>Status</div>
            <div><input type="text" name="status"></div>
        </div>

        <div><button type="submit"> submit</button></div>
    </form>
    </body>
</html>