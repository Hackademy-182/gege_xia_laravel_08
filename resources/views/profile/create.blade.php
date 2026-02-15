<x-layout title="Completa profilo">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">


                <h1 class="h4 fw-bold mb-3">Completa profilo</h1>

                <form method="POST" action="{{ route('profile.store') }}" class="row g-3">
                    @csrf

                    <div class="col-md-6">
                        <label class="form-label">Telefono</label>
                        <input name="phone" class="form-control" value="{{ old('phone') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email alternativa</label>
                        <input name="email_alt" class="form-control" value="{{ old('email_alt') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Instagram</label>
                        <input name="instagram" class="form-control" value="{{ old('instagram') }}">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Facebook</label>
                        <input name="facebook" class="form-control" value="{{ old('facebook') }}">
                    </div>

                    <div class="col-12">
                        <label class="form-label">Bio</label>
                        <textarea name="bio" class="form-control">{{ old('bio') }}</textarea>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-dark">Salva profilo</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-layout>
