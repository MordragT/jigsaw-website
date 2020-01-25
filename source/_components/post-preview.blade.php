
    <div class="card bg-secondary">
        <img src="{{ $post->cover_image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->getExcerpt(128) }}</p>
            <a href="{{ $post->getUrl() }}" class="btn btn-dark">Read more</a>
        </div>
        <div class="card-footer">
            {{ date('F j, Y', $post->date) }}
        </div>
    </div>
