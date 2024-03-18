@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Cadastrar Novo Aluno</h1>
    <hr class="my-3 border-t-2" />
    <form action="{{ route("students.store") }}" method="POST">
        <div class="w-full rounded-lg bg-red-200 p-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        <span>{{ $error }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
        @csrf
        @include("students._form")
    </form>
@endsection
