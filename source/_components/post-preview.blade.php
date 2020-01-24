<div class="col-md-4">
    <div class="card bg-secondary" style="width: 18rem;">
        <img src="{{ $post->cover_image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->getExcerpt(128) }}</p>
            <p> - {{ $post->author }}</p>
            <a href="{{ $post->getUrl() }}" class="btn btn-dark">Read more</a>
        </div>
    </div>
</div>