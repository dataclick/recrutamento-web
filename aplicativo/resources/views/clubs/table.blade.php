@if (count($clubs) > 0)
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome do clube</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clubs as $club)
                <tr>
                    <td>{{ $club->name }}</td>
                    <td class="text-right">
                        <a href="{{ route('clubs.edit', $club->id) }}" class="btn btn-xs btn-info">Editar</a>
                        <form
                            onsubmit="return confirm('Você tem certeza?')"
                            action="{{ route('clubs.destroy', $club->id) }}"
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
    <p>Nenhum clube foi cadastrado ainda!!</p>
@endif
