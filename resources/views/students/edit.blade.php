@extends('app-layout')
@section('main')
    <h1 class="text-3xl font-bold">Editar Aluno</h1>
    <hr class="my-3 border-t-2" />
    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students._form')
    </form>
@endsection
