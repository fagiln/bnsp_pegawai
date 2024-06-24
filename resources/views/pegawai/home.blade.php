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
    <div class="table-responsive">

        {{ $dataTable->table() }}
    </div>
    @push('scripts')
        {{ $dataTable->scripts() }}
        <script>
            $(document).ready(function() {
                var table = $('#pegawai-table').DataTable();
                table.on('draw.dt', function() {
                    var PageInfo = table.page.info();
                    table.column(1, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        cell.innerHTML = i + 1 + PageInfo.start;
                    });
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                var alert = document.getElementById('success-alert');
                if (alert) {
                    setTimeout(function() {
                        var bootstrapAlert = new bootstrap.Alert(alert);
                        bootstrapAlert.close();
                    }, 3000); // waktu dalam milidetik (5000 ms = 5 detik)
                }
            });

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
