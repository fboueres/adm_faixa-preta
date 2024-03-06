@extends("app-layout")
@section("main")
    <h1 class="text-3xl font-bold">Cadastrar Novo Aluno</h1>
    <hr class="my-3 border-t-2" />
    <form action="">
        <h1 class="mb-3 text-xl font-bold">Dados do Aluno</h1>
        <section class="mb-3 w-full rounded-lg border-2 px-3 py-5">
            <div class="flex flex-row">
                <div class="flex w-2/3 flex-wrap">
                    <div class="mb-5 w-4/12">
                        <label
                            class="text-md mb-2 block font-bold text-gray-700"
                            for="student[cpf]"
                        >
                            CPF
                        </label>
                        <input
                            type="text"
                            name="student[cpf]"
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
                    </div>
                    <div class="mb-5 w-8/12 pl-4">
                        <label
                            class="text-md mb-2 block font-bold text-gray-700"
                            for="student[full_name]"
                        >
                            Nome Completo
                        </label>
                        <input
                            type="text"
                            name="student[full_name]"
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
                    </div>
                    <div class="mb-5 w-4/12">
                        <label
                            class="text-md mb-2 block font-bold text-gray-700"
                            for="student[birth_date]"
                        >
                            Data de Nascimento
                        </label>
                        <input
                            type="date"
                            name="student[birth_date]"
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
                    </div>
                    <div class="mb-5 w-3/12 pl-4">
                        <label
                            class="text-md mb-2 block font-bold text-gray-700"
                            for="student[gender]"
                        >
                            Gênero
                        </label>
                        <select
                            class="focus:shadow-outline w-full appearance-none rounded border bg-white px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            name="student[gender]"
                        >
                            <option disabled selected value>Selecione</option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                    <div class="mb-5 w-5/12 pl-4">
                        <label
                            class="text-md mb-2 block font-bold text-gray-700"
                            for="name=student[email]"
                        >
                            E-mail
                        </label>
                        <input
                            type="email"
                            name="student[email]"
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
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
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
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
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
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
                            class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                        />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
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
                                class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none"
                            />
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </form>
@endsection
