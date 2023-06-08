<div>

    <div style="border: solid 1px black">
        {{-- <livewire:layouts.header :article="$article" /> --}}
    </div>

    <h1>
        Articles List
    </h1>


    <div class="container">
        @foreach ($articles as $article)
            <h4>{{ $article->title }}</h4>
            <p>{{ $article->body }}</p>
            <div>like : {{ $article->like }} <button class="btn btn-sm btn-primary" wire:click='likeArticle({{ $article->id }})'>like</button></div>
        @endforeach
    </div>

</div>
