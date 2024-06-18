@extends('template.auth')
@section('content')
    <p class="fs-3 text-center fw-bolder">Welcome</p>
    <form id="" action="{{ route('login.authenticate') }}" method="POST" class="form">
        @csrf
        <label class="mb-1 label">Email</label>
        <input id="email" type="text" class=" form-control" name="email" value="{{ old('email') }}" required
            placeholder="Masukkan Email">
        <div id="emailError" class="text-danger"></div>

        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <label class="mb-1 mt-3 label">Password</label>
        <input type="password" class="mb-3 form-control" name="password" placeholder="Masukkan Password">

        <button type="submit" class="btn btn-custom w-100 py-2 mt-3">Login</button>
    </form>

    @push('scripts')
        <script>
            function closeAlert() {
                var alert = document.querySelector('.alert');
                alert.style.display = 'none';

            }
            document.getElementById('subscriptionForm').addEventListener('submit', function(event) {
                event.preventDefault();
                let hasError = false;


                // Validate email
                const email = document.getElementById('email').value;
                const emailError = document.getElementById('emailError');
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

                if (!emailPattern.test(email)) {
                    emailError.textContent = 'Please enter a valid email address.';
                    hasError = true;
                }


            });
        </script>
    @endpush
@endsection
