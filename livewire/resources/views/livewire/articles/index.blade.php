<div>

    <div style="border: solid 1px black">
        {{-- <livewire:layouts.header :article="$article" /> --}}
    </div>

    <h1>
        Articles List
    </h1>

    <div class="container">
        <livewire:layouts.header>

        @foreach ($articles as $article)
            <livewire:articles.article-box :article="$article">
        @endforeach
    </div>

</div>
