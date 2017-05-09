@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Editar sócio @endslot
        <p><a href="{{ route('partners.index') }}" class="btn btn-sm btn-default">Voltar</a></p>
        <form action="{{ route('partners.update', $partner->id) }}" method="POST">
            {{ method_field('PUT') }}
            @include('partners.form')
        </form>
    @endcomponent
@endcomponent
