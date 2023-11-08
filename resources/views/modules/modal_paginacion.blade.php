  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Marco de paginacion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="table-responsive">
                <table class="table text-center align-middle table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">N#</th>
                            <th scope="col">Nombre de paginacion</th>
                            <th scope="col">Tamaño de paginacion</th>
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
                            <td>
                                @if ($item->nom_proceso == 'A1')
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ ($total_A1 *100) / 4096 }}%;" aria-valuenow="{{ ($total_A1 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_A1 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'B2')
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ ($total_B2 *100) / 4096 }}%;" aria-valuenow="{{ ($total_B2 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_B2 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'C3')
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($total_C3 *100) / 4096 }}%;" aria-valuenow="{{ ($total_C3 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_C3 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'D4')
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ ($total_D4 *100) / 4096 }}%;" aria-valuenow="{{ ($total_D4 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_D4 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'E5')
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($total_E5 *100) / 4096 }}%;" aria-valuenow="{{ ($total_E5 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_E5 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'F6')
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($total_F6 *100) / 4096 }}%;" aria-valuenow="{{ ($total_F6 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_F6 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'G7')
                                <div class="progress">
                                    <div class="progress-bar bg-light" role="progressbar" style="width: {{ ($total_G7 *100) / 4096 }}%;" aria-valuenow="{{ ($total_G7 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_G7 }} mb</div>
                                </div>
                                @endif
                                @if ($item->nom_proceso == 'H8')
                                <div class="progress">
                                    <div class="progress-bar bg-black" role="progressbar" style="width: {{ ($total_H8 *100) / 4096 }}%;" aria-valuenow="{{ ($total_H8 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ $total_H8 }} mb</div>
                                </div>
                                @endif
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>