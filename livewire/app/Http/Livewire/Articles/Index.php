<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {

        $article = [
            'title' => 'this is article 1',
            'body' => 'article body'
        ];


        return view('livewire.articles.index' , compact('article'));
    }
}
