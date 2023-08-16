<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akademik</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-md btn-primary mb-3">Kembali</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nim</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Prodi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($mahasiswas as $item)
                                <tr>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->nama_mhs }}</td>
                                    <td>{{ $item->prodi->nama_prodi }}</td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Mahasiswa belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>
</html>