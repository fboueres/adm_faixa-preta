@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Cadastrar Novo Professor</h1>
    <hr class="my-3 border-t-2" />
    <form action="{{ route("teachers.store") }}" method="POST">
        @csrf
        @include("teachers._form")
    </form>
@endsection
