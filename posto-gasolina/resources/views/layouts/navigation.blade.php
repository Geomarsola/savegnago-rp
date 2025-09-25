<nav class="bg-white shadow mb-8">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ url('/') }}" class="font-bold text-xl text-gray-800">Posto de Gasolina</a>

        <div>
            @if(Auth::check())
                <span class="mr-4">Olá, {{ Auth::user()->name }}</span>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 hover:text-red-800">Sair</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="mr-4 text-blue-600 hover:text-blue-800">Login</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-800">Registrar</a>
            @endif
        </div>
    </div>
</nav>