<x-layout title="Auth">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-6">

            <ul class="nav nav-pills nav-justified mb-3" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-login" type="button"
                        role="tab">
                        Login
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-register" type="button"
                        role="tab">
                        Register
                    </button>
                </li>
            </ul>

            <div class="tab-content">

                {{-- LOGIN --}}
                <div class="tab-pane fade show active" id="tab-login" role="tabpanel">
                    <form method="POST" action="{{ route('login') }}" class="card p-4 shadow-sm">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                required autofocus>
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required
                                autocomplete="current-password">
                            @error('password')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <button class="btn btn-dark w-100">Sign in</button>
                    </form>
                </div>

                {{-- REGISTER --}}
                <div class="tab-pane fade" id="tab-register" role="tabpanel">
                    <form method="POST" action="{{ route('register') }}" class="card p-4 shadow-sm">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input name="name" class="form-control" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                required>
                            @error('email')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            @error('password')
                                <div class="text-danger small">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Repeat password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <button class="btn btn-dark w-100">Create account</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</x-layout>
