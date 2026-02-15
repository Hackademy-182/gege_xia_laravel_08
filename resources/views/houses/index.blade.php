<x-layout title="Appartamenti">
    <div class="row g-4">

        <div class="col-lg-3">
            <div class="p-3 border rounded-3">
                <div class="fw-bold mb-2">Filtri</div>
                <div class="text-muted small">Arrivano dal DB (tra poco).</div>
            </div>
        </div>

        <div class="col-lg-9">
            <h1 class="h4 fw-bold mb-3">Appartamenti</h1>

            <div class="row g-3">
                @forelse($houses as $house)
                    <div class="col-md-6 col-xl-4">
                        <div class="card h-100 shadow-sm">

                            @if ($house->image)
                                <img src="{{ asset('storage/' . $house->image) }}" class="card-img-top"
                                    style="height:220px; object-fit:cover;">
                            @else
                                <div class="bg-light d-flex flex-column justify-content-center align-items-center text-muted"
                                    style="height:220px;">
                                    <i class="bi bi-image fs-1"></i>
                                    <small>Nessuna immagine</small>
                                </div>
                            @endif

                            <div class="card-body">
                                <div class="fw-bold">{{ $house->title }}</div>
                                <div class="text-muted small">
                                    € {{ number_format($house->price, 2, ',', '.') }}
                                    <a href="{{ route('houses.show', $house) }}" class="stretched-link"></a>

                                    @if (!is_null($house->floor))
                                        • Piano {{ $house->floor }}
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary">Nessun appartamento inserito.</div>
                    </div>
                @endforelse
            </div>
        </div>

    </div>
</x-layout>
