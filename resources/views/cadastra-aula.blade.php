@vite(['resources/css/app.css','resources/js/app.js'])

<x-topo></x-topo>


<section class="bg-white dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Cadastro de aluno</h2>
      <form action="{{route('salva-aula')}}" method="POST">
        @csrf

          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                  <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nome do aluno" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                  <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email do aluno" required="">
              </div>
              <div class="sm:col-span-2">
                  <label for="semestre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semestre</label>
                  <select name="semestre" id="semestre" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                  </select>
                </div>        
              <div class="sm:col-span-2">
                  <label for="curso" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Curso</label>
                  <select name="curso" id="curso" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" >
                    <option value="Análise e Desenvolvimento de Sistemas (AMS)">Análise e Desenvolvimento de Sistemas (AMS)</option>
                    <option value="Automação Industrial">Automação Industrial</option>
                    <option value="Gestão de Tecnologia da Informação (GTI)">Gestão de Tecnlogia da Informação (GTI)</option>
                    <option value="Gestão Empresarial">Gestão Empresarial</option>
                    <option value="Manutenção Industrial">Manutenção Industrial</option>
                    <option value="Produção Fonográfica">Produção Fonográfica</option>
                    <option value="Processos Gerencias (AMS)">Processos Gerencias (AMS)</option>
                  </select>
              </div>
          </div>
          <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-green-600">
              Salvar Cadastro
          </button>
      </form>
  </div>
</section>