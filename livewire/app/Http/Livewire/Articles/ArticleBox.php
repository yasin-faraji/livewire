<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ArticleBox extends Component
{
    public Article $article;

    public function like(){
        // $this->article->increment('like');
        // $this->emit('forTest');
    }

    public function render()
    {
        return view('livewire.articles.article-box');
    }
}
