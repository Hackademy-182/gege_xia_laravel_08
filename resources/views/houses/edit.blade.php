<x-layout title="Modifica appartamento">
    <h1 class="h4 fw-bold mb-3">Modifica appartamento</h1>

    <form method="POST" action="{{ route('houses.update', $house) }}" class="row g-3">
        @csrf
        @method('PUT')

        <div class="col-12">
            <label class="form-label">Titolo</label>
            <input name="title" class="form-control" value="{{ old('title', $house->title) }}">
            @error('title')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">Prezzo</label>
            <input name="price" class="form-control" value="{{ old('price', $house->price) }}">
            @error('price')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-md-6">
            <label class="form-label">Piano</label>
            <input name="floor" class="form-control" value="{{ old('floor', $house->floor) }}">
            @error('floor')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12 d-flex gap-2">
            <button class="btn btn-warning">Salva modifiche</button>
            <a href="{{ route('houses.show', $house) }}" class="btn btn-outline-secondary">Annulla</a>
        </div>
    </form>
</x-layout>
