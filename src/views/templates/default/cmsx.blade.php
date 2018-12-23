@extends(config('cmsx.app.template').'::layouts.app')

@section('content')
    @if (Route::has('login'))
        <div class="container">
            <div class="row">
                <div class="col-12 text-right">
                    @guest
                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        {{ Auth::user()->name }}
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </div>
    @endif
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 text-center">
                <h1>CMSX</h1>
            </div>
        </div>
    </div>
    @if($user->count())
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Jak začít</div>
                        <div class="card-body">
                            <ol>
                                <li>Vytvořte laravel aplikaci a jako šablonu použijte
                                    <pre>

&#64;extends(config('cmsx.app.template').'::layouts.app')
&#64;section('content')
   ...
&#64endsection
                                    </pre>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <ul>
                        <li>Aplikace nemá žádného uživatele. Zaregistrujte se jako vlastník.</li>
                    </ul>
                </div>
            </div>
        </div>

        @include(config('cmsx.app.template').'::auth.register-form')
    @endif
@endsection
