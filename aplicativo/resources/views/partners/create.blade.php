@component('layouts.app')
    @component('layouts.elements.panel')
        @slot('title') Novo sócio @endslot
        <p><a href="{{ route('partners.index') }}" class="btn btn-sm btn-default">Voltar</a></p>
        <form action="{{ route('partners.store') }}" method="POST">
            @include('partners.form')
        </form>
    @endcomponent
@endcomponent
