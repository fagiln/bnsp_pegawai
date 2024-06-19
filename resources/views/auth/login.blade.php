@extends('template.auth')
@section('content')
    <p class="fs-3 text-center fw-bolder">Welcome</p>
    <form id="subscriptionForm" action="{{ route('login.authenticate') }}" method="POST" class="form">
        @csrf
        <label class="mb-1 label">Email</label>
        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"
            placeholder="Masukkan Email">
        <div id="emailError" class="text-danger"></div>

        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label class="mb-1 mt-3 label">Password</label>
        <input id="pass" type="password" class=" form-control" name="password" placeholder="Masukkan Password">
        <div id="passError" class="text-danger"></div>

        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <button type="submit" class="mt-3 btn btn-custom w-100 py-2 mt-3">Login</button>
    </form>

    @push('scripts')
    <script src="{{asset('assets/js/validasi.js')}}"></script>
        <script>
            function closeAlert() {
                var alert = document.querySelector('.alert');
                alert.style.display = 'none';
            }

          
        </script>
    @endpush
@endsection
