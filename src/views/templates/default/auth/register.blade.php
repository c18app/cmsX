@extends(config('cmsx.app.template').'::layouts.app')

@section('content')
    @include(config('cmsx.app.template').'::auth.register-form')
@endsection