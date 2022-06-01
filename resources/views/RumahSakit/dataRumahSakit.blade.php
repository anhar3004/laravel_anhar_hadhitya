@extends('layouts.main')

@section('title', 'Dashboard Admin')

@include('layouts.header')

@include('layouts.sidebar')


@section('content')

    <!--**********************************
                                                         Content body start
                                                ***********************************-->
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div id="content">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="card gradient-4">
                            <div class="card-body ">
                                <h1 class="title-1 text-white">Data Rumah Sakit</h1>
                                <br>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar " style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-group col-md-12">
                                        <button type="button" class="btn btn-primary" href="" data-toggle="modal"
                                            data-target="#modalTambah">Tambah
                                            Data</button>
                                    </div>
                                    @if (session('sukses'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ session('sukses') }}
                                        </div>
                                    @endif
                                    <table class="table table-striped table-bordered table-hover text-center" id="table">
                                        <thead>
                                            <tr>
                                                <th>Nama Rumah Sakit</th>
                                                <th>Alamat</th>
                                                <th>Email</th>
                                                <th>No Handphone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($RumahSakit as $RS)
                                        <tbody>
                                            <tr>
                                                <td>{{ $RS->nama_RS }}</td>
                                                <td>{{ $RS->alamat }}</td>
                                                <td>{{ $RS->email }}</td>
                                                <td>{{ $RS->no_hp }}</td>
                                                <td>
                                                    <div class="table-data-feature">

                                                        <a type="button" href="/dataRumahSakit/{{ $RS->ID }}/edit">
                                                            <span class="badge badge-pill gradient-3">
                                                                <i class="icon-pencil text-white"></i>
                                                            </span>
                                                        </a>
                                                        <a onclick="hapus({{ $RS->ID }})">
                                                            <span class="badge badge-pill gradient-2">
                                                                <i class="icon-trash text-white"></i>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL TAMBAH-->
            <div class="modal" id="modalTambah" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <h2 class="title-1"><strong>Tambah</strong> Data Rumah Sakit</h2>
                            </h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="card-body card-block">
                                <form action="dataRumahSakit/tambah" method="post" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-email">Nama Rumah Sakit
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="val-email" name="nama_RS"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat
                                        </label>
                                        <div class="col-lg-6">
                                            <textarea class="form-control" id="val-suggestions" name="alamat" rows="5" placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">Email
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" id="val-confirm-password"
                                                name="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="val-confirm-password">No Handphone
                                        </label>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" id="val-confirm-password"
                                                name="no_hp" placeholder="">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL TAMBAH-->

        </div>

    </div>

    <!--**********************************
                                                 Content body end
                                                ***********************************-->
    <script type="text/javascript">
        function hapus(id) {
            Swal.fire({
                title: 'Apakah kamu yakin ingin menghapus data ini?',
                text: "Data Yang telah dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'http://127.0.0.1:8000/dataRumahSakit/' + id + '/delete',
                        type: 'GET',
                        success: function(data) {
                            Swal.fire(
                                'Delete!',
                                'Data telah berhasil dihapus',
                                'success'
                            )
                            location.reload();
                        }
                    })
                }
            })

        }
    </script>
@endsection
