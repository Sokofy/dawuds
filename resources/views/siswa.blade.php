<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center mb-4">Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <button type="button" class="btn btn-success">tambah +</button>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis kelamin</th>
                    <th scope="col">Nomor Telpon</th>
                    <th scope="col">Tanggal Buat</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i=1;
                    @endphp
                    @foreach ( $data as $d)

                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->jeniskelamin }}</td>
                        <td>0{{ $d->notelpon }}</td>
                        <td>{{ $d->created_at->format('d-m-Y') }}</td>

                    <td>
                      <button type="button" class="btn btn-danger">Delete</button>
                      <button type="button" class="btn btn-info">Edit</button>
                    </td>
                  </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
