<x-guest-layout>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/frontpage.css">

    <x-auth-card>
        <x-slot name="logo">
                <img src="https://ecompjr.com.br/images/logomarca.png" width="200" height="150" class="img">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <div class="pd-3 bd-highlight">
            <div class="container">
                <div class="row">
                    <div class="col-3" id="mission">MISSÃO<br><br>Através da vivência empresarial e trabalho em equipe, formar profissionais inovadores, comprometidos e capazes de vencer desafios futuros.</div>
                    <div class="col-3" id="vision">VISÃO<br><br>Ser uma empresa que realiza projetos de impacto, mais conectada ao movimento empresa júnior e com grande reconhecimento dentro e fora da universidade.</div>
                    <div class="col-3" id="values">VALORES<br><br>Os valores de uma empresa guiam a conduta da mesma, portanto a EcompJr. baseia-se nos seguintes valores: Protagonisto, Cooperatividade, Assiduidade, Resiliência, Constância em resultados, Evolução com erros, Conexão com o Movimento, Foco na Qualidade, Ética e Empatia.</div>
                    <div class="col-3" id="services">SERVIÇOS<br><br>Sites<br>Sistemas - Locais<br>Aplicativos Mobile<br>Sistemas Web<br>e-Commerce</div>
                </div>

                <br>

            </div>
        </div>

        <br>
        <br>
        
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" class="col-md-3 offset-md-4" :value="__('Email')" />

                <x-input id="email" class="col-md-3 offset-md-4" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" class="col-md-3 offset-md-4" :value="__('Password')" />

                <x-input id="password" class="col-md-3 offset-md-4"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center col-md-3 offset-md-4 mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>

    </x-auth-card>
</x-guest-layout>
