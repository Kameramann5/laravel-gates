@extends('layouts.default')


@section('title','Главная')

@section('content')
    <div class="container my-5">
        <h1>Новая статья</h1>
       <div class="col-md-6 offset-md-3">
           <form action="{{route('posts.store')}}" method="post">
               @csrf
               <div class="mb-3">
                   <label for="title" class="form-label">Название</label>
                   <input type="text" name="title" class="form-control" id="title" placeholder="Название">
               </div>
<button type="submit" class="btn btn-warning">Отправить</button>
           </form>


       </div>
    </div>
@endsection

