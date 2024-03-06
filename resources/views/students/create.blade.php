@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Cadastrar Novo Aluno</h1>
    <hr class="my-3 border-t-2" />
    <form action="{{ route("students.store") }}" method="POST">
        @csrf
        @include("students._form")
    </form>
@endsection
