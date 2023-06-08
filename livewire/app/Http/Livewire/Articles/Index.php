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

    public function likeArticle($id){
        $article = Article::find($id);

        $article->increment('like');
    }

    public function render()
    {

        return view('livewire.articles.index' , ['articles' => Article::latest()->paginate(5)]);
    }
}
