@extends('admin.layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Citra Satelit</div>

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

                    <form method="POST" action="{{ url('/dashboard_admin/citra/update/'.$dataCitra->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="pantai_id">Nama Pantai:</label>
                            <select name="pantai_id" id="pantai_id" class="form-control" required>
                                <option value="">Pilih Nama Pantai</option>
                                @foreach($dataPantai as $id => $namaPantai)
                                <option value="{{ $id }}" @if($dataCitra->pantai_id == $id) selected @endif>{{ $namaPantai }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <label for="tahun">Tahun:</label>
                            <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $dataCitra->tahun }}" required>
                        </div>
                        <!-- Email -->
                        <div class="form-group">
                            <label for="luasan">Luasan:</label>
                            <input type="luasan" name="luasan" id="luasan" class="form-control" value="{{ $dataCitra->luasan }}" required>
                        </div>
                        <!-- Submit Button -->
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="{{ url('/dashboard_admin/citra') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Update Data Citra</button>
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