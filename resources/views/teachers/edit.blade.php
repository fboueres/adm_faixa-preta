@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Editar Professor</h1>
    <hr class="my-3 border-t-2" />
    <form action="{{ route("teachers.update", $teacher) }}" method="POST">
        @csrf
        @method("PUT")
        @include("teachers._form")
    </form>
@endsection
