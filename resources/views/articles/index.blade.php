@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1>
                    <i class="glyphicon glyphicon-align-justify"></i> 文章
                    @auth
                    <a class="btn btn-success pull-right" href="{{ route('articles.create') }}"><i class="glyphicon glyphicon-plus"></i> 创建</a>
                    @endauth
                </h1>
            </div>

            <div class="panel-body">
                @if($articles->count())
                    <ul class="list-group">
                            @foreach($articles as $article)
                                <li class="list-group-item">
                                    <a href="{{ route('articles.show', $article->id) }}">{{$article->title}}</a>
                                </li>
                            @endforeach
                    </ul>
                    {!! $articles->render() !!}
                @else
                    <h3 class="text-center alert alert-info">什么都没有...</h3>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection