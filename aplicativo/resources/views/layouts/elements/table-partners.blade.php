<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome completo</th>
            <th>Clube(s)</th>
            <th class="text-right">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach(range(1, 2) as $i)
            <tr>
                <td>Sócio {{ $i }}</td>
                <td>
                    @foreach(range('A', 'D') as $x)
                        <span class="label label-default">Clube {{ $x }}</span>
                    @endforeach
                </td>
                <td class="text-right">
                    <form
                        onsubmit="return confirm('Você tem certeza?')"
                        action=""
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
