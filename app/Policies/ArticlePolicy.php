<?php

namespace App\Policies;

use App\User;
use App\Article;

class ArticlePolicy extends Policy
{
    public function update(User $user, Article $article)
    {
        // return $article->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Article $article)
    {
        return true;
    }
}
