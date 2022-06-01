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
                                <h2 class="title-1"><strong>Ubah</strong> Data Pasien</h2>
                            </div>
                            <div class="card-body card-block">
                                <form action="/dataPasien/{{ $pasien->ID }}/update" method="post" class="form-horizontal">
                                    {{ csrf_field() }}
                                    <div class="card-body card-block">
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Nama Pasien</label>
                                            <input name="nama_pasien" type="text" id="vat" placeholder=""
                                                class="form-control" value="{{ $pasien->nama_pasien }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Alamat</label>
                                            <input name="alamat" type="text" id="vat" placeholder="" class="form-control"
                                                value="{{ $pasien->alamat }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">No Handphone</label>
                                            <input name="no_hp" type="text" id="vat" placeholder="" class="form-control"
                                                value="{{ $pasien->no_hp }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="vat" class=" form-control-label">Rumah Sakit</label>
                                            <select id="disabledSelect" class="form-select" name="RS">
                                                @foreach ($RumahSakit as $RS)
                                                    <option value="{{ $RS->ID }}"
                                                        @if ($RS->nama_RS == $pasien->RumahSakit->nama_RS) selected @endif>
                                                        {{ $RS->nama_RS }}
                                                    </option>
                                                @endforeach
                                            </select>
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
    {{--  <script type="text/javascript">
        $(document).ready(function() {
            event.preventDefault();
            tampil();
        });

        function tampil() {

            $.ajax({
                url: 'http://127.0.0.1:8000/dataPasien/tampil',
                type: 'GET',
                success: function(data) {
                    $.each(data, function(key, value) {
                        nama_rs = data[key].nama_RS;
                        rs = data[key].ID;

                        {{--  $("#disabledSelect").append(
                            '<option value=' + rs + '>' + nama_rs + '</option>'
                        );  --}}
                    });

                }
            })
        }


    </script>  --}}
@endsection
