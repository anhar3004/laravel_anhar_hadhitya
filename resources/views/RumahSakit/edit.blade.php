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

                <div class="col-lg-12">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="title-1"><strong>Ubah</strong> Data Rumah Sakit</h2>
                            </div>
                            <div class="card-body card-block">
                                <form action="/dataRumahSakit/{{ $RumahSakit->ID }}/update" method="post" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Nama Rumah Sakit</label>
                                            <input name="nama_RS" type="text" id="vat" placeholder="" class="form-control" value="{{ $RumahSakit->nama_RS}}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Alamat</label>
                                            <input name="alamat" type="text" id="vat" placeholder="" class="form-control" value="{{ $RumahSakit->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Email</label>
                                            <input name="email" type="text" id="vat" placeholder="" class="form-control"  value="{{ $RumahSakit->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">No Handphone</label>
                                            <input name="no_hp" type="text" id="vat" placeholder="" class="form-control"  value="{{ $RumahSakit->no_hp }}">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </div>

    <!--**********************************
                                                 Content body end
                                                ***********************************-->

@endsection
