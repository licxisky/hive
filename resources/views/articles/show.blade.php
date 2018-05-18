@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="well well-sm">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <a class="btn btn-link" href="{{ route('articles.index') }}"><i class="glyphicon glyphicon-backward"></i> 返回</a>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                             <a class="btn btn-link pull-right" href="{{ route('articles.edit', $article->id) }}">
                                <i class="glyphicon glyphicon-edit"></i> 编辑
                            </a>
                            <form class="pull-right" action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display: inline;" onsubmit="return confirm('你确定要删除这条记录吗？');">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-link"><i class="glyphicon glyphicon-trash"></i> 删除</button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>

                <label>{{ $article->title }}</label>
                <hr>

                <div>
                    <p>{!! $article->body !!}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


