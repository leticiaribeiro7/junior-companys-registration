<x-app-layout>
    <link rel="stylesheet" href="assets/css/frontpage.css">
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3> Cadastro Federação </h3>
                    <br>
                    <form action="{{ route('federacao_created') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                        <label for="nome" class="form-label" id="nome-fed2">Nome</label>
                        <input type="text" name="nome">
                        </div>
                        <div class="mb-3" id="estado">
                            <label for="estado" class="form-label" id="nome-estado">Estado</label>
                            <select aria-label=".form-select-sm example" name="estado">
                            <option selected>Selecione</option>
                            <option value="Acre">Acre</option>
                            <option value="Bahia">Bahia</option>
                            <option value="Ceará">Ceará</option>
                            <option value="Maranhão">Maranhão</option>
                            <option value="Alagoas">Alagoas</option>
                            <option value="Amapá">Amapá</option>
                            <option value="Macapá">Macapá</option>
                            <option value="Amazonas">Amazonas</option>
                            <option value="Distrito Federal">Distrito Federal</option>
                            <option value="Espirito Santo">Espirito Santo</option>
                            <option value="Goiás">Goiás</option>
                            <option value="Mato Grosso">Mato Grosso</option>
                            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option value="Minas Gerais">Minas Gerais</option>
                            <option value="Pará">Pará</option>
                            <option value="Paraíba">Paraíba</option>
                            <option value="Paraná">Paraná</option>
                            <option value="Pernambuco">Pernambuco</option>
                            <option value="Piauí">Piauí</option>
                            <option value="Rio de Janeiro">Rio de Janeiro</option>
                            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option value="Rondônia">Rondônia</option>
                            <option value="Roraima">Roraima</option>
                            <option value="Santa Catarina">Santa Catarina</option>
                            <option value="São Paulo">São Paulo</option>
                            <option value="Tocantins">Tocantins</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>