<section class="mb-3 flex w-full items-center">
    <h1 class="self-end text-xl font-bold">Dados do Aluno</h1>
    <a
        href="{{ route('students.index') }}"
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
            <div class="@error('student.cpf') mb-3 @else mb-5 @enderrorw-4/12">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[cpf]"
                >
                    CPF
                </label>
                <input
                    type="text"
                    name="student[cpf]"
                    value="{{ old('student.cpf', @$student->cpf) }}"
                    class="focus:shadow-outline @error('student.cpf') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.cpf')
                    <span class="truncate text-red-500">* Insira o CPF</span>
                @enderror
            </div>
            <div
                class="@error('student.full_name') mb-3 @else mb-5 @enderrorw-8/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[full_name]"
                >
                    Nome Completo
                </label>
                <input
                    type="text"
                    name="student[full_name]"
                    value="{{ old('student.full_name', @$student->full_name) }}"
                    class="focus:shadow-outline @error('student.full_name') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.full_name')
                    <span class="truncate text-red-500">
                        * Insira o nome completo
                    </span>
                @enderror
            </div>
            <div
                class="@error('student.birth_date') mb-3 @else mb-5 @enderrorw-4/12"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[birth_date]"
                >
                    Data de Nascimento
                </label>
                <input
                    type="date"
                    name="student[birth_date]"
                    value="{{ old('student.enrollment_date', isset($student) ? $student->getRawOriginal('birth_date') : '') }}"
                    class="focus:shadow-outline @error('student.birth_date') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.birth_date')
                    <span class="truncate text-red-500">
                        * Insira a data de nascimento
                    </span>
                @enderror
            </div>
            <div
                class="@error('student.gender') mb-3 @else mb-5 @enderrorw-3/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[gender]"
                >
                    Gênero
                </label>
                <select
                    class="focus:shadow-outline @error('student.gender') border-red-300 @enderrorw-full appearance-none rounded border bg-white px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    name="student[gender]"
                >
                    <option disabled selected value>Selecione</option>
                    <option
                        @if((old('student.gender', @$student->gender) ==  'M')) selected @endif
                        value="M"
                    >
                        Masculino
                    </option>
                    <option
                        @if((old('student.gender', @$student->gender) ==  'F')) selected @endif
                        value="F"
                    >
                        Feminino
                    </option>
                </select>
                @error('student.gender')
                    <span class="truncate text-red-500">* Insira o gênero</span>
                @enderror
            </div>
            <div
                class="@error('student.email') mb-3 @else mb-5 @enderrorw-5/12 pl-4"
            >
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="name=student[email]"
                >
                    E-mail
                </label>
                <input
                    type="email"
                    name="student[email]"
                    value="{{ old('student.email', @$student->email) }}"
                    class="focus:shadow-outline @error('student.email') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.email')
                    <span class="truncate text-red-500">
                        * Insira pelo menos um contato válido.
                    </span>
                @enderror
            </div>
            <div class="w-2/6">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[enrollment_date]"
                >
                    Data de Matrícula
                </label>
                <input
                    type="date"
                    name="student[enrollment_date]"
                    value="{{ old('student.enrollment_date', isset($student) ? $student->getRawOriginal('enrollment_date') : '') }}"
                    class="focus:shadow-outline @error('student.enrollment_date') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.enrollment_date')
                    <span class="truncate text-red-500">
                        * Insira a data de matrícula
                    </span>
                @enderror
            </div>
            <div class="w-2/6 pl-4">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[phone_number]"
                >
                    Número de Telefone
                </label>
                <input
                    type="text"
                    name="student[phone_number]"
                    value="{{ old('student.phone_number', @$student->phone_number) }}"
                    class="focus:shadow-outline @error('student.phone_number') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.phone_number')
                    <span class="text-red-500">
                        * Insira pelo menos um contato válido.
                    </span>
                @enderror
            </div>
            <div class="w-2/6 pl-4">
                <label
                    class="text-md mb-2 block font-bold text-gray-700"
                    for="student[rank]"
                >
                    Grau
                </label>
                <input
                    type="text"
                    name="student[rank]"
                    value="{{ old('student.rank', @$student->rank) }}"
                    class="focus:shadow-outline @error('student.rank') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                />
                @error('student.rank')
                    <span class="truncate text-red-500">* Insira o Grau</span>
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
<div class="flex w-full">
    <div class="w-1/3">
        <h1 class="mb-3 text-xl font-bold">Endereço do Aluno</h1>
        <section class="w-full rounded-lg border-2 px-3 py-5">
            <div class="flex flex-wrap gap-y-3">
                <div class="w-1/2">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="address[cep]"
                    >
                        CEP
                    </label>
                    <input
                        type="text"
                        name="address[cep]"
                        value="{{ old('address.cep', @$student->address->cep) }}"
                        class="focus:shadow-outline @error('address.cep') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('address.cep')
                        <span class="truncate text-red-500">
                            * Insira o CEP
                        </span>
                    @enderror
                </div>
                <div class="w-1/2 pl-4">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="address[bairro]"
                    >
                        Bairro
                    </label>
                    <input
                        type="text"
                        name="address[bairro]"
                        value="{{ old('address.bairro', @$student->address->bairro) }}"
                        class="focus:shadow-outline @error('address.bairro') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('address.bairro')
                        <span class="truncate text-red-500">
                            * Insira o bairro
                        </span>
                    @enderror
                </div>
                <div class="w-1/2">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="address[rua]"
                    >
                        Rua
                    </label>
                    <input
                        type="text"
                        name="address[rua]"
                        value="{{ old('address.rua', @$student->address->rua) }}"
                        class="focus:shadow-outline @error('address.rua') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('address.rua')
                        <span class="truncate text-red-500">
                            * Insira a rua
                        </span>
                    @enderror
                </div>
                <div class="w-1/2 pl-4">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="name=address[quadra]"
                    >
                        Quadra
                    </label>
                    <input
                        type="text"
                        name="address[quadra]"
                        value="{{ old('address.quadra', @$student->address->quadra) }}"
                        class="focus:shadow-outline @error('address.quadra') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('address.quadra')
                        <span class="truncate text-red-500">
                            * Insira a quadra
                        </span>
                    @enderror
                </div>
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="address[numero]"
                    >
                        Número
                    </label>
                    <input
                        type="text"
                        name="address[numero]"
                        value="{{ old('address.numero', @$student->address->numero) }}"
                        class="focus:shadow-outline @error('address.rua') border-red-300 @enderror w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('address.numero')
                        <span class="truncate text-red-500">
                            * Insira o número
                        </span>
                    @enderror
                </div>
            </div>
        </section>
    </div>
    <div class="w-2/3 pl-4">
        <h1 class="mb-3 text-xl font-bold">Guardiões Legais</h1>
        <section class="flex w-full rounded-lg border-2 px-3 py-5">
            <div class="flex w-1/2 flex-wrap gap-y-3 pr-4">
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[0][cpf]"
                    >
                        CPF
                    </label>
                    <input
                        type="text"
                        name="guardians[0][cpf]"
                        value="{{ old('guardians.0.cpf', @$student->guardians[0]->cpf) }}"
                        class="focus:shadow-outline @error('guardians.0.cpf') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.0.cpf')
                        <span class="truncate text-red-500">
                            * Insira o CPF
                        </span>
                    @enderror
                </div>
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[0][full_name]"
                    >
                        Nome Completo
                    </label>
                    <input
                        type="text"
                        name="guardians[0][full_name]"
                        value="{{ old('guardians.0.full_name', @$student->guardians[0]->full_name) }}"
                        class="focus:shadow-outline @error('guardians.0.full_name') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.0.full_name')
                        <span class="truncate text-red-500">
                            * Insira o nome completo
                        </span>
                    @enderror
                </div>
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[0][affiliation]"
                    >
                        Afiliação (Parentesco)
                    </label>
                    <input
                        type="text"
                        name="guardians[0][affiliation]"
                        value="{{ old('guardians.0.affiliation', @$student->guardians[0]->affiliation) }}"
                        class="focus:shadow-outline @error('guardians.0.affiliation') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.0.affiliation')
                        <span class="truncate text-red-500">
                            * Insira a afiliação
                        </span>
                    @enderror
                </div>
            </div>
            <div class="flex w-1/2 flex-wrap gap-y-3">
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[1][cpf]"
                    >
                        CPF
                    </label>
                    <input
                        type="text"
                        name="guardians[1][cpf]"
                        value="{{ old('guardians.1.cpf', @$student->guardians[1]->cpf) }}"
                        class="focus:shadow-outline @error('guardians.1.cpf') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.1.cpf')
                        <span class="truncate text-red-500">
                            * Insira o CPF
                        </span>
                    @enderror
                </div>
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[1][full_name]"
                    >
                        Nome Completo
                    </label>
                    <input
                        type="text"
                        name="guardians[1][full_name]"
                        value="{{ old('guardians.1.full_name', @$student->guardians[1]->full_name) }}"
                        class="focus:shadow-outline @error('guardians.1.full_name') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.1.full_name')
                        <span class="truncate text-red-500">
                            * Insira o nome completo
                        </span>
                    @enderror
                </div>
                <div class="w-full">
                    <label
                        class="text-md mb-2 block font-bold text-gray-700"
                        for="guardians[1][affiliation]"
                    >
                        Afiliação (Parentesco)
                    </label>
                    <input
                        type="text"
                        name="guardians[1][affiliation]"
                        value="{{ old('guardians.1.affiliation', @$student->guardians[1]->affiliation) }}"
                        class="focus:shadow-outline @error('guardians.1.affiliation') border-red-300 @enderrorw-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                    />
                    @error('guardians.1.affiliation')
                        <span class="truncate text-red-500">
                            * Insira a afiliação
                        </span>
                    @enderror
                </div>
            </div>
        </section>
    </div>
</div>
