@extends('admin.layouts.main')
@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Pantai</div>

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

                        <form method="POST" action="{{ url('/dashboard_admin/jenis_mangrove/create/store') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Nama Pantai -->
                            <div class="form-group">
                                <label for="nama_keluarga">Keluarga:</label>
                                <input type="text" name="nama_keluarga" id="nama_keluarga" class="form-control" required>
                            </div>
                            <!-- Lokasi -->
                            <div class="form-group">
                                <label for="nama_ilmiah">Nama Ilmiah:</label>
                                <input type="text-area" name="nama_ilmiah" id="nama_ilmiah" class="form-control" required>
                            </div>
                            <!-- Submit Button -->
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ url('/dashboard_admin/jenis_mangrove') }}" class="btn btn-secondary">Back</a>
                                    <button type="submit" class="btn btn-primary">Tambah Jenis Mangrove</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@endsection