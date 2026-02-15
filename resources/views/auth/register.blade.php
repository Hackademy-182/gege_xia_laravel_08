<x-layout title="Register">
    <h1 class="h4 fw-bold mb-3">Crea account</h1>

    <form method="POST" action="{{ route('register') }}" class="row g-3">
        @csrf

        <div class="col-12">
            <label class="form-label">Nome</label>
            <input name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label class="form-label">Conferma password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="col-12 d-flex gap-2">
            <button class="btn btn-dark">Registrati</button>
            <a class="btn btn-outline-secondary" href="{{ route('login') }}">Hai già un account?</a>
        </div>
    </form>
</x-layout>
