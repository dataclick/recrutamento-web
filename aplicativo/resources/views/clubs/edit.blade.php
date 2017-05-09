@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Editar clube @endslot
        <p><a href="{{ route('clubs.index') }}" class="btn btn-sm btn-default">Voltar</a></p>
        <form action="{{ route('clubs.update', $club->id) }}" method="POST">
            {{ method_field('PUT') }}
            @include('clubs.form')
        </form>
    @endcomponent
@endcomponent
