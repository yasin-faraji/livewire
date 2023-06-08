<div>

        <h4>{{ $article->title }}</h4>
        <p>{{ $article->body }}</p>
        <div>like : {{ $article->like }} <button class="btn btn-sm btn-primary" wire:click='like()'>like</button></div>
        <hr>
</div>
