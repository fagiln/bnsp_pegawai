<div class="d-flex justify-content-center align-items-center gap-2">
    <input type="hidden" name="id" value="{{ $pegawai->id }}">

    {{-- @can($globalModule['update']) --}}
    <a href="{{ route('employee.edit',$pegawai->id ) }}" class="btn btn-warning">
        <i class="fas fa-pen fs-2"></i>
    </a>
    {{-- @endcan --}}
    {{-- @can($globalModule['delete']) --}}
    <button data-url="{{ route('employee.destroy', $pegawai->id) }}" data-action="delete"
        data-table-id="pegawai-table" data-name="{{ $pegawai->first_name }}" class="btn btn-danger">
        <i class="fas fa-trash fs-2"></i></button>
    {{-- @endcan --}}
</div>
