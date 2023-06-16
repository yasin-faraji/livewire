<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Index extends Component
{

    public Article $article;

    protected $listeners = [
        'forTest' => 'handleTest'
    ];

    public function handleTest(){
        Log::info(" run handle text in index article");
    }

    public function render()
    {

        return view('livewire.articles.index' , ['articles' => Article::latest()->paginate(5)]);
    }
}
