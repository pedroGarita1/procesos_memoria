  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
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
                            <th scope="col">Nombre de paginacion</th>
                            <th scope="col">Tamaño de paginacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($A1 != 'no hay')
                        @include('modules/procesos/a1')
                        @endif
                        @if ($B2 != 'no hay')
                        @include('modules/procesos/b2')
                        @endif
                        @if ($C3 != 'no hay')
                        @include('modules/procesos/c3')
                        @endif
                        @if ($D4 != 'no hay')
                        @include('modules/procesos/d4')
                        @endif
                        @if ($E5 != 'no hay')
                        @include('modules/procesos/e5')
                        @endif
                        @if ($F6 != 'no hay')
                        @include('modules/procesos/f6')
                        @endif
                        @if ($G7 != 'no hay')
                        @include('modules/procesos/g7')
                        @endif
                        @if ($H8 != 'no hay')
                        @include('modules/procesos/h8')
                        @endif
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