<div class="container mt-5">
    <h2 class="text-center mb-4">Haberler</h2>

    @if($news->isEmpty())
        <div class="alert alert-warning text-center">Haber bulunamadı.</div>
    @else
        <div class="row">
            @foreach($news as $new)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ $new->image_url ?? 'default-image.jpg' }}" class="card-img-top" alt="{{ $new->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $new->title }}</h5>
                            <p class="card-text">{{ Str::limit($new->content, 100) }}</p>
                            <p class="text-muted">{{ $new->created_at->format('d-m-Y H:i') }}</p>
                            <a href="{{ route('news.show', $new->id) }}" class="btn btn-primary">Devamını Oku</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
