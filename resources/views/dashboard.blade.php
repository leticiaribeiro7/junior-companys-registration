<x-app-layout>
    <link rel="stylesheet" href="assets/css/frontpage.css">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bem vindo(a)!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                            <th>Empresas Juniores</th>
                            <th>&nbsp;</th>

                        </thead>
                        <!-- Table Body -->
                        <tbody>
                            @foreach ($empresasjuniores as $empresajunior)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $empresajunior->nome }}</div>
                                    </td>

                                    <td>
                                        <!-- TODO: Delete Button -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
