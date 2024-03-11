@extends('app-layout')
@section('main')
    <h1 class="text-3xl font-bold">Lista de Alunos</h1>
    <hr class="my-3 border-t-2" />
    <table class="table-auto">
        <thead>
            <th class="px-4 py-2">Nome</th>
            <th class="px-4 py-2">Grau</th>
            <th class="px-4 py-2">Telefone</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $student->full_name }}</td>
                    <td class="border px-4 py-2">{{ $student->rank }}</td>
                    <td class="border px-4 py-2">{{ $student->phone_number }}</td>
                </tr>    
            @endforeach
        </tbody>
    </table>
@endsection
