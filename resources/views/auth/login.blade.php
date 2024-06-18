@extends('template.auth')
@section('content')
<p class="fs-3 text-center fw-bolder">Welcome</p>
    <form action="{{ route('login.authenticate') }}" method="POST" class="form">
        @csrf
        <div class="mb-1 label">Email</div>
        <input type="text" class=" form-control" name="email" value="{{ old('email') }}" required placeholder="Masukkan Email">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
        <div class="mb-1 mt-3 label">Password</div>
        <input type="password" class="mb-3 form-control" name="password" required placeholder="Masukkan Password">


            <button type="submit" class="btn btn-custom w-100 py-2 mt-3">Login</button>
    </form>

    @push('scripts')
        <script>
            function closeAlert() {
                var alert = document.querySelector('.alert');
                alert.style.display = 'none';
            }
        </script>
    @endpush
@endsection