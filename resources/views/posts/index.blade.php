@extends('layouts.default')


@section('title','Главная')

@section('content')
    <div class="container my-5">
        <h1>Статьи</h1>
        @forelse($posts as $post)
            <div class="mb-3">
                <h3>{{$post->title}}</h3>
                Автор:
                | <a href="" class="text-primary">Редактировать</a>
                | <a href="" class="text-danger">Удалить</a>
            </div>
        @empty
            <p>Нету статей</p>

        @endforelse
    </div>
@endsection

