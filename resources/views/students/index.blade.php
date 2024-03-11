@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Lista de Alunos</h1>
    <hr class="my-3 border-t-2" />
    <div class="relative overflow-x-auto">
        <table class="w-full border text-left text-sm">
            <thead class="text-xs uppercase">
                <tr>
                    <th scope="col" class="border px-6 py-3">Nome do Aluno</th>
                    <th scope="col" class="border px-6 py-3">Gênero</th>
                    <th scope="col" class="border px-6 py-3">Grau</th>
                    <th scope="col" class="border px-6 py-3">
                        Número de Telefone
                    </th>
                    <th scope="col" class="border px-6 py-3">
                        Data da Matrícula
                    </th>
                    <th scope="col" class="border px-6 py-3">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr class="border">
                        <th
                            scope="row"
                            class="text-md whitespace-nowrap border px-6 py-4 font-medium"
                        >
                            {{ $student->full_name }}
                        </th>
                        <td class="text-md border px-6 py-4">
                            {{ $student->gender }}
                        </td>
                        <td class="text-md border px-6 py-4">
                            {{ $student->rank }}
                        </td>
                        <td class="text-md border px-6 py-4">
                            {{ $student->phone_number }}
                        </td>
                        <td class="text-md border px-6 py-4">
                            {{ $student->enrollment_date }}
                        </td>
                        <td class="text-center">
                            <a
                                href="{{ route("students.edit", $student) }}"
                                class="appearance-none rounded border px-5 py-3 text-gray-700 shadow inline-block transition-transform duration-200 active:scale-90"
                            >
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
