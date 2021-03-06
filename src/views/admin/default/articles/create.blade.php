@extends(Config('cmsx.app.template-admin').'::layouts.main')

@section('content')
    <div class="row">
        <div class="col">
            <div>
                <a href="{{ route('articles.index') }}" class="btn btn-link btn-xs pull-right" role="button"><span
                            class="far fa-arrow-alt-circle-left"></span> Back</a>
            </div>
            <div class="clearfix"></div>
            @include(Config('cmsx.app.template-admin').'::articles.@form', ['action'=>route('articles.store')])
        </div>
    </div>
@endsection
