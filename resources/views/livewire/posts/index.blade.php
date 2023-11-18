<div class="row">
    <div class="col-md-6">
        <livewire:posts.create />
    </div>
    <div class="col-md-6">
        @foreach ($posts as $post)
        <h4>{{$post->title}}</h4>
        <p>{{$post->body}}</p>
        @endforeach
    </div>
</div>