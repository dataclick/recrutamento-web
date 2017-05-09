@if (count($partners) > 0)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome completo</th>
                <th>Clube(s)</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($partners as $partner)
                <tr>
                    <td>{{ $partner->name }}</td>
                    <td>
                        @php $clubs = $partner->clubs()->orderBy('name')->get() @endphp
                        @foreach ($clubs as $club)
                            <span class="label label-default">{{ $club->name }}</span>
                        @endforeach
                    </td>
                    <td class="text-right">
                        <a href="{{ route('partners.edit', $partner->id) }}" class="btn btn-xs btn-info">Editar</a>
                        <form
                            onsubmit="return confirm('Você tem certeza?')"
                            action="{{ route('partners.destroy', $partner->id) }}"
                            method="POST"
                            style="display:inline-block">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-xs btn-danger">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <br>
    <p>Nenhum sócio foi cadastrado ainda!!</p>
@endif
