<x-layout title="{{ $house->title }}">
    <h1 class="h4 fw-bold">{{ $house->title }}</h1>

    <div class="text-muted mb-3">
        € {{ number_format($house->price, 2, ',', '.') }}
        @if (!is_null($house->floor))
            • Piano {{ $house->floor }}
        @endif
    </div>

    <div class="mb-4">
        <div class="small text-muted">Proprietario:</div>
        <div>{{ $house->user->name }}</div>
    </div>

    @auth
        @if (auth()->id() === $house->user_id)
            <a href="#" class="btn btn-warning">Modifica</a>
            <form method="POST" action="#" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Cancella</button>
            </form>
        @endif
    @endauth

    <div class="mt-4">
        <a href="{{ route('houses.index') }}">← Torna alla lista</a>
    </div>
</x-layout>
