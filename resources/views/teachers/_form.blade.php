<section class="mb-3 flex w-full items-center">
    <h1 class="self-end text-xl font-bold">Dados do Professor</h1>
    <a
        href="{{ route("teachers.index") }}"
        class="focus:shadow-outline ml-auto appearance-none rounded border px-5 py-2 leading-tight text-gray-700 shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
    >
        <i class="fa-solid fa-arrow-left mr-2"></i>
        Voltar
    </a>
    <button
        type="submit"
        class="focus:shadow-outline ml-3 appearance-none rounded border px-5 py-2 leading-tight text-gray-700 shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
    >
        <i class="fa-solid fa-plus mr-2"></i>
        Salvar
    </button>
</section>
<section class="mb-3 w-full rounded-lg border-2 px-3 py-5">
    <div class="flex flex-row">
        <div class="flex w-2/3 flex-wrap">
            <div class="@error('teacher.cpf') mb-3 @else mb-5 @enderror w-4/12">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[cpf]"
                >
                    CPF
                </label>
                <input
                    type="text"
                    name="teacher[cpf]"
                    value="{{ old("teacher.cpf", @$teacher->cpf) }}"
                    class="focus:shadow-outline @error('teacher.cpf') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.cpf")
                    <span class="truncate text-red-500">* Insira o CPF</span>
                @enderror
            </div>
            <div
                class="@error('teacher.full_name') mb-3 @else mb-5 @enderror w-8/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[full_name]"
                >
                    Nome Completo
                </label>
                <input
                    type="text"
                    name="teacher[full_name]"
                    value="{{ old("teacher.full_name", @$teacher->full_name) }}"
                    class="focus:shadow-outline @error('teacher.full_name') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.full_name")
                    <span class="truncate text-red-500">
                        * Insira o nome completo
                    </span>
                @enderror
            </div>
            <div
                class="@error('teacher.birth_date') mb-3 @else mb-5 @enderror w-4/12"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[birth_date]"
                >
                    Data de Nascimento
                </label>
                <input
                    type="date"
                    name="teacher[birth_date]"
                    value="{{ old("teacher.enrollment_date", isset($teacher) ? $teacher->getRawOriginal("birth_date") : "") }}"
                    class="focus:shadow-outline @error('teacher.birth_date') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.birth_date")
                    <span class="truncate text-red-500">
                        * Insira a data de nascimento
                    </span>
                @enderror
            </div>
            <div
                class="@error('teacher.gender') mb-3 @else mb-5 @enderror w-3/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[gender]"
                >
                    Gênero
                </label>
                <select
                    class="focus:shadow-outline @error('teacher.gender') border-red-300 @enderror w-full appearance-none rounded border bg-white px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="teacher[gender]"
                >
                    <option disabled selected value>Selecione</option>
                    <option
                        @if((old('teacher.gender', @$teacher->gender) ==  'M')) selected @endif
                        value="M"
                    >
                        Masculino
                    </option>
                    <option
                        @if((old('teacher.gender', @$teacher->gender) ==  'F')) selected @endif
                        value="F"
                    >
                        Feminino
                    </option>
                </select>
                @error("teacher.gender")
                    <span class="truncate text-red-500">* Insira o gênero</span>
                @enderror
            </div>
            <div
                class="@error('teacher.email') mb-3 @else mb-5 @enderror w-5/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="name=teacher[email]"
                >
                    E-mail
                </label>
                <input
                    type="email"
                    name="teacher[email]"
                    value="{{ old("teacher.email", @$teacher->email) }}"
                    class="focus:shadow-outline @error('teacher.email') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.email")
                    <span class="truncate text-red-500">
                        * Insira pelo menos um contato válido.
                    </span>
                @enderror
            </div>
            
            <div class="w-1/2">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[rank]"
                >
                    Grau
                </label>
                <input
                    type="text"
                    name="teacher[rank]"
                    value="{{ old("teacher.rank", @$teacher->rank) }}"
                    class="focus:shadow-outline @error('teacher.rank') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.rank")
                    <span class="truncate text-red-500">* Insira o Grau</span>
                @enderror
            </div>
            <div class="w-1/2 pl-4">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="teacher[phone_number]"
                >
                    Número de Telefone
                </label>
                <input
                    type="text"
                    name="teacher[phone_number]"
                    value="{{ old("teacher.phone_number", @$teacher->phone_number) }}"
                    class="focus:shadow-outline @error('teacher.phone_number') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error("teacher.phone_number")
                    <span class="text-red-500">
                        * Insira pelo menos um contato válido.
                    </span>
                @enderror
            </div>
        </div>
        <div class="relative flex w-1/3 justify-center pl-4">
            <img
                src="/img/user-icon.png"
                alt="Ícone de Usuário"
                class="absolute m-auto mt-3 aspect-square h-2/3 rounded-full border-8 bg-white p-5"
            />
            <button
                type="button"
                class="focus:shadow-outline absolute bottom-0 w-1/3 appearance-none rounded border bg-white px-3 py-2 leading-tight text-gray-700 shadow transition-transform duration-200 ease-in-out focus:outline-none active:scale-90"
            >
                <i class="fa-solid fa-upload fa-md"></i>
            </button>
        </div>
    </div>
</section>