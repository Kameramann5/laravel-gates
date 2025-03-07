@extends('layouts.default')


@section('title','Главная')

@section('content')
    <div class="container my-5">
        <h1>Регистрация</h1>
       <div class="col-md-6 offset-md-3">
           <form action="{{route('register.store')}}" method="post">
               @csrf
               <div class="mb-3">
                   <label for="name" class="form-label">Имя</label>
                   <input type="text" name="name" class="form-control" id="name" placeholder="Имя">
               </div>
               <div class="mb-3">
                   <label for="email" class="form-label">Email</label>
                   <input type="email" name="email" class="form-control" id="email" placeholder="Email">
               </div>
               <div class="mb-3">
                   <label for="password" class="form-label">Пароль</label>
                   <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
               </div>
<button type="submit" class="btn btn-warning">Отправить</button>

           </form>


       </div>
    </div>
@endsection

