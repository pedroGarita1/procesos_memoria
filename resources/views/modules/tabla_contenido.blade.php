<div class="table-responsive">
    <table class="table text-center align-middle table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">N#</th>
                <th scope="col">Nombre de paginacion</th>
                <th scope="col">Tamaño del proceso</th>
                <th scope="col">Activo</th>
                <th scope="col">En espera</th>
                <th scope="col">Quitar</th>
            </tr>
        </thead>
        <tbody>
            @php
                $contador = 1;
            @endphp
            @foreach ($procesos as $item)
            <tr>
                <th scope="row">{{ $contador ++ }}</th>
                <td>{{ $item->nom_proceso }}</td>
                <td>{{ $item->size_proceso }} mb</td>
                @if ($item->procesos_activos == 1)
                <td class="text-success fs-2"><i class="fa-solid fa-circle-check"></i></td>
                @else
                    @if ($total_activos >= 1024)
                    <td class="text-muted fs-2"><i class="fa-solid fa-circle-check"></i></td>
                    @else
                    <td><a class="btn btn-secondary rounded-circle" href="{{ route('Proceso-update-activo', ['id'=>$item->id]) }}"><i class="fa-solid fa-circle-pause"></i></a></td>
                    @endif
                @endif
                @if ($item->procesos_espera == 1)
                <td class="text-warning fs-2"><i class="fa-solid fa-circle-pause"></i></td>
                @else
                    @if ($total_espera >= 1024)
                    <td class="text-muted fs-2"><i class="fa-solid fa-circle-pause"></i></td>
                    @else
                    <td><a class="btn btn-secondary rounded-circle" href="{{ route('Proceso-update-pause', ['id'=>$item->id]) }}"><i class="fa-solid fa-circle-pause"></i></a></td>
                    @endif
                @endif
                <td><a href="{{ route('Proceso-delete', ['id'=>$item->id]) }}" class="btn btn-danger rounded-circle"><i class="fa-solid fa-delete-left"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>