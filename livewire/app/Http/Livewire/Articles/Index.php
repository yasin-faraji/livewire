<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{

    public Article $article;

    // public function mount($article){


    //     $this->article = Article::find($article);
    // }

    public function render()
    {

        return view('livewire.articles.index');
    }
}
