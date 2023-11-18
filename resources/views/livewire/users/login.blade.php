<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="card">
        <div class="card-body">

            <form wire:submit="login">
                <div class="mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model="email" type="text" class="form-control @error('email')is-invalid @enderror"
                        id="email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input wire:model="password" type="password"
                        class="form-control @error('password')is-invalid @enderror" id="password" />
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">Log in</button>
            </form>
        </div>
    </div>
</div>