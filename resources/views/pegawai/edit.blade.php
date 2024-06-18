@extends('template.app')
@section('title', 'Edit Employee')
@section('content')
<form action="{{ route('employee.update', $pegawai->id) }}" method="POST" class="form" enctype="multipart/form-data">
    @csrf
    <div class="row ">
        <div class="col-md-6">

            <div class="mb-1 label">NIP</div>
            <input type="text" class=" form-control" name="nip"  value="{{ old('nip', $pegawai->nip) }}"
                placeholder="Masukkan NIP">
            @error('nip')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">

            <div class="mb-1 label">First Name</div>
            <input type="text" class=" form-control" name="first_name"  value="{{ old('first_name', $pegawai->first_name) }}"
                placeholder="Masukkan Nama Depan">
            @error('first_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row ">

        <div class="col-md-6">

            <div class="mb-1 label">Last Name</div>
            <input type="text" class=" form-control" name="last_name" value="{{ old('last_name', $pegawai->last_name) }}"
                placeholder="Masukkan Nama Akhir">
            @error('last_name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">

            <div class="mb-1 label">No Handphone</div>
            <input type="number" class=" form-control" name="no_hp"  value="{{ old('no_hp', $pegawai->no_hp) }}"
                placeholder="Masukkan No Hp">
            @error('no_hp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <div class="mb-1 mt-3 label">Alamat</div>
            <textarea type="text" class=" form-control" name="alamat"  placeholder="Masukkan Alamat">{{ old('alamat', $pegawai->alamat) }}</textarea>
            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-md-6">

            <button type="submit" class="mt-5 btn btn-primary">Edit Employee</button>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{ route('home') }}" type="button" class="mt-5 btn btn-secondary">Cancel</a>
    </div>
</form>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(function() {
                    var bootstrapAlert = new bootstrap.Alert(alert);
                    bootstrapAlert.close();
                }, 5000); // waktu dalam milidetik (5000 ms = 5 detik)
            }
        });
    </script>
@endpush
@endsection