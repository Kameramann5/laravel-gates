@extends('layouts.default')


@section('title','Главная')

@section('content')
    <div class="container my-5">
        <h1>Статьи</h1>
        @forelse($posts as $post)
            <div class="mb-3">
                <h3>{{$post->title}}</h3>
                Автор: {{$post->user->name}}
                @can('update',$post)
                 <a href="{{route('posts.edit',$post->id) }}" class="text-primary">Редактировать</a>
                @endcan
                @can('delete',$post)
                <form action="{{route('posts.destroy',$post->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="brn btn-link link-danger" type="submit">Удалить</button>
                </form>
                @endcan
            </div>
        @empty
            <p>Нету статей</p>

        @endforelse
    </div>
@endsection

