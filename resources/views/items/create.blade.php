@extends('layouts.app')

@section('content')
<!--
{{-- -----------------------------------------------
<pre>
    resources/views/items/create.blade.php

        return view('items.create', [
            'keyword' => $keyword,
            'items' => $items,
        ]);
<?php
print_r($_REQUEST);
 //echo    'keyword=' , @$keyword,"<br>",
 //        'items=' , @$items,  "<br>";
?>
</pre>
--------------------------------------------------- --}}
-->

    <div class="search">
        <div class="row">
            <div class="text-center">
                {!! Form::open(['route' => 'items.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                    <div class="form-group">
                        {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => 'キーワードを入力', 'size' => 40]) !!}
                    </div>
                    {!! Form::submit('商品を検索', ['class' => 'btn btn-success btn-lg']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    @include('items.items', ['items' => $items])

@endsection



