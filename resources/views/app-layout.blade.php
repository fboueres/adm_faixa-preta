<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
  </head>
  <body class="flex min-h-[100vh] bg-white">
    <section class="sticky top-0 h-[100vh] w-[25vw] p-7">
      <aside
        class="h-full w-full overflow-y-auto rounded-lg bg-gradient-to-br from-gray-100 to-gray-200 shadow-lg border-[5px] border-gray-250"
      >
        <div
          class="mx-auto my-6 flex aspect-square h-1/4 items-center rounded-full border-8 bg-white p-3 shadow-2xl"
        >
          <img src="/img/sidebar-img.png" alt="ADM Faixa Preta Ícone" />
        </div>
        <h1 class="mb-5 text-center text-2xl font-bold">ADM Faixa-Preta</h1>
        <ul class="flex w-full flex-col px-5">
          <li
            class="mb-3 rounded-lg bg-gray-300 from-gray-300 to-gray-500 p-3 hover:bg-gradient-to-br"
          >
            <a href="{{ route('lessons.index') }}" class="block h-full w-full"
              ><i
                class="fa-solid fa-users-between-lines fa-lg inline-block align-middle"
              ></i
              ><span class="ml-3 inline-block align-middle">Aulas</span></a
            >
          </li>
          <li
            class="mb-3 rounded-lg bg-gray-300 from-gray-300 to-gray-500 p-3 hover:bg-gradient-to-br"
          >
            <a href="{{ route('students.index') }}" class="block h-full w-full"
              ><i
                class="fa-solid fa-graduation-cap fa-lg inline-block align-middle"
              ></i
              ><span class="ml-3 inline-block align-middle">Alunos</span>
            </a>
          </li>
          <li
            class="mb-3 rounded-lg bg-gray-300 from-gray-300 to-gray-500 p-3 hover:bg-gradient-to-br"
          >
            <a href="{{ route('teachers.index') }}" class="block h-full w-full"
              ><i
                class="fa-solid fa-id-card-clip fa-lg inline-block align-middle"
              ></i
              ><span class="ml-3 inline-block align-middle"
                >Professores</span
              ></a
            >
          </li>
        </ul>
      </aside>
    </section>
    <main class="flex min-h-[100vh] w-[75vw] grow flex-col py-7 pr-7">
        @yield('main')
    </main>
  </body>
</html>
