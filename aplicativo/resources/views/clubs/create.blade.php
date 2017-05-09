@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Novo clube @endslot
        <p><a href="{{ route('clubs.index') }}" class="btn btn-sm btn-default">Voltar</a></p>
        <form action="{{ route('clubs.store') }}" method="POST">
            @include('clubs.form')
        </form>
    @endcomponent
@endcomponent
