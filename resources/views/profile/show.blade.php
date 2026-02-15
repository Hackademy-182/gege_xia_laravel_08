<x-layout title="Profilo">
    <h1 class="h4 fw-bold">Profilo</h1>

    <div class="mb-4">
        <div class="text-muted small">Utente</div>
        <div class="fw-semibold">{{ $user->name }}</div>
        <div class="text-muted">{{ $user->email }}</div>
    </div>

    <h2 class="h5 fw-bold mb-3">I miei annunci</h2>

    <div class="row g-3">
        @forelse($houses as $house)
            <div class="col-md-6 col-xl-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="fw-bold">{{ $house->title }}</div>
                        <div class="text-muted small">
                            € {{ number_format($house->price, 2, ',', '.') }}
                        </div>
                        <a href="{{ route('houses.show', $house) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary">Non hai ancora inserito annunci.</div>
            </div>
        @endforelse
    </div>
</x-layout>
