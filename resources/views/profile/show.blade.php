<x-layout title="Profilo">
    <div class="container py-4">

        <div class="row">
            <div class="col-12">
                <h1 class="h4 fw-bold">Profilo</h1>

                <div class="mb-4">
                    <div class="text-muted small">Utente</div>
                    <div class="fw-semibold">{{ $user->name }}</div>
                    <div class="text-muted">{{ $user->email }}</div>
                </div>


                @if (!$profile)
                    <div class="alert alert-secondary">
                        Non hai ancora inserito i dati profilo.
                    </div>

                    <a class="btn btn-dark mb-4" href="{{ route('profile.create') }}">
                        Completa profilo
                    </a>
                @else
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="row g-2">
                                <div class="col-12 col-md-6"><strong>Telefono:</strong> {{ $profile->phone ?? '-' }}
                                </div>
                                <div class="col-12 col-md-6"><strong>Email alternativa:</strong>
                                    {{ $profile->email_alt ?? '-' }}</div>
                                <div class="col-12 col-md-6"><strong>Instagram:</strong>
                                    {{ $profile->instagram ?? '-' }}</div>
                                <div class="col-12 col-md-6"><strong>Facebook:</strong> {{ $profile->facebook ?? '-' }}
                                </div>
                                <div class="col-12"><strong>Bio:</strong> {{ $profile->bio ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <h2 class="h5 fw-bold mb-3">I miei annunci</h2>
            </div>

            @forelse($houses as $house)
                <div class="col-12 col-md-6 col-xl-4">
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

    </div>
</x-layout>
