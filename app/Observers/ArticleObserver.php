<?php

namespace App\Observers;

use App\Article;
use Auth;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ArticleObserver
{
    public function creating(Article $article)
    {
        $article->user_id = Auth::id();
    }

    public function updating(Article $article)
    {
        //
    }
}