@extends('admin.layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Jenis Mangrove</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/dashboard_admin/jenis_mangrove/update/' .$jenisMangrove->id) }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Method Spoofing untuk PUT/PATCH request -->
                            @method('PUT')
                            <!-- Jenis Mangrove -->
                            <div class="form-group">
                                <label for="nama_keluarga">Keluarga:</label>
                                <input type="text" name="nama_keluarga" id="nama_keluarga" class="form-control" value="{{ $jenisMangrove->nama_keluarga }}" required>
                            </div>
                            <!-- Lokasi -->
                            <div class="form-group">
                                <label for="nama_ilmiah">Nama Ilmiah:</label>
                                <input type="text-area" name="nama_ilmiah" id="nama_ilmiah" class="form-control" value="{{ $jenisMangrove->nama_ilmiah }}" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ url('/dashboard_admin/jenis_mangrove') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Update Jenis Mangrove</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
