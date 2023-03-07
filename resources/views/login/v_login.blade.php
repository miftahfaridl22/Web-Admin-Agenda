<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Agenda Webmin</title>
    <!-- CSS files -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('dist/css/demo.min.css') }}" rel="stylesheet"/>
  </head>
  <body  class="border-top-wide border-primary d-flex flex-column">
    <div class="page page-center">
      <div class="container-tight py-4">
        <form class="card card-md" action="{{ route('login.proses') }}" method="post">
        @csrf
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login Agenda BPPKAD</h2>
            <div class="mb-3">
              <label class="form-label">NIP/NIK</label>
              <input name="nip" type="text" 
                class="form-control 
                    @error('nip') 
                        is-invalid 
                    @enderror
                " 
                placeholder="NIP/NIK"
                value="{{ old('nip') }}"
              >
              @error('nip')
                <span class="invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="mb-2">
            <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input name="password" type="password" 
                  class="form-control
                    @error('password') 
                        is-invalid 
                    @enderror
                  " 
                  placeholder="Password"
                >
                @error('password')
                  <span class="invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>