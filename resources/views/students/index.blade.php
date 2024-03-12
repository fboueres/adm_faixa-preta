@extends("app-layout")
@section("main")
    <section class="flex">
        <h1 class="text-3xl font-bold">Lista de Alunos</h1>
        <a
            href="{{ route("students.create") }}"
            class="focus:shadow-outline ml-auto appearance-none rounded border px-5 py-2 leading-tight text-gray-700 shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
        >
            <i class="fa-solid fa-plus mr-2"></i>
            Cadastrar Novo Aluno
        </a>
    </section>
    <hr class="my-3 border-t-2" />
    <div class="relative overflow-x-auto">
        <table class="w-full border text-left text-sm">
            <thead class="text-xs uppercase">
                <tr>
                    <th scope="col" class="border px-6 py-3">Nome do Aluno</th>
                    <th scope="col" class="border px-6 py-3">Gênero</th>
                    <th scope="col" class="border px-6 py-3">Grau</th>
                    <th scope="col" class="border px-6 py-3">
                        Data da Matrícula
                    </th>
                    <th scope="col" class="border px-6 py-3 text-center">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
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
                            {{ $student->enrollment_date }}
                        </td>
                        <td class="flex justify-center gap-x-3 text-center">
                            <a
                                href="{{ route("students.edit", $student) }}"
                                class="my-1 inline-block appearance-none rounded border px-5 py-3 text-gray-700 shadow transition-transform duration-200 active:scale-90"
                            >
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <form
                                action="{{ route("students.destroy", $student) }}"
                                method="POST"
                            >
                                @csrf
                                @method("DELETE")
                                <button
                                    type="submit"
                                    class="my-1 appearance-none rounded border px-5 py-3 text-gray-700 shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
                                >
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="5" class="text-md py-2 text-center">
                            Nenhum aluno encontrado...
                        </th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
