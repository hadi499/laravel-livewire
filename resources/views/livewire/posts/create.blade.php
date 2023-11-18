<div>
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add Post</h5>
            <form wire:submit="save">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input wire:model="form.title" type="text"
                        class="form-control @error('form.title')is-invalid @enderror" id="title">
                    @error('form.title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model="form.body" type="text"
                        class="form-control @error('form.body')is-invalid @enderror" id="body" rows="3"></textarea>
                    @error('form.body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="btn btn-primary">save</button>
            </form>
        </div>
    </div>
</div>