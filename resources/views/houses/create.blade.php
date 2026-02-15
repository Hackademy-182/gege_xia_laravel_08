<x-layout title="Inserisci appartamento">
    <h1 class="h4 fw-bold mb-3">Inserisci appartamento</h1>

    <form method="POST" action="{{ route('houses.store') }}" class="row g-3">
        @csrf

        <div class="col-12">
            <label class="form-label">Titolo</label>
            <input name="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">Prezzo</label>
            <input name="price" class="form-control" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">Piano (opzionale)</label>
            <input name="floor" class="form-control" value="{{ old('floor') }}">
            @error('floor')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <button class="btn btn-dark">Salva</button>
            <a href="{{ route('houses.index') }}" class="btn btn-outline-secondary">Annulla</a>
        </div>
    </form>
</x-layout>
