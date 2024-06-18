@extends('template.app')
@section('title', 'Employee List')
@section('content')
    @if (session('status'))
        <div class="mt-3">
            <div id="success-alert" class="alert alert-success d-flex justify-content-between fade show" role="alert">
                {{ session('status') }}

            </div>
        </div>
    @endif
    <a href="{{ route('employee.show') }}" class="btn btn-primary my-2">
        <i class="fas fa-plus fs-2"></i> Add
    </a>
    {{ $dataTable->table() }}
    @push('scripts')
        {{ $dataTable->scripts() }}
        <script>
            $(document).on('click', 'button[data-action="delete"]', function() {
                var url = $(this).data('url');
                var tableId = $(this).data('table-id');
                var name = $(this).data('name');

                if (confirm('Apa kamu yakin ingin menghapus Pegawai ' + name + '?')) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                        },
                        success: function(result) {
                            $('#' + tableId).DataTable().ajax.reload();
                            // alert('Category ' + name + ' berhasil di hapus');
                        },
                        error: function(xhr) {
                            alert('Error deleting user');
                        }
                    });
                }
            });
        </script>
    @endpush
@endsection