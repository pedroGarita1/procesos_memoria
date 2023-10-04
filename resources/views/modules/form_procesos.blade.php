<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">Ingresar Procesos</h5>
        <p class="card-text">
            <form action="{{ route('Proceso-store') }}" method="POST">
                @csrf
                <select class="form-select form-select-lg @error('nom_proceso') is-invalid @enderror mb-3" name="nom_proceso" aria-label="Default select example">
                    <option value="0" selected>Nombre del proceso</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="C3">C3</option>
                    <option value="D4">D4</option>
                    <option value="E5">E5</option>
                    <option value="F6">F6</option>
                    <option value="G7">G7</option>
                    <option value="H8">H8</option>
                </select>
                @error('nom_proceso')
                        <div id="basic-addon2" class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
                <select class="form-select form-select-lg @error('size_proceso') is-invalid @enderror" name="size_proceso" aria-label="Default select example">
                    <option value="0" selected>Tamaño del proceso</option>
                    @if ($total_activos <= 896)
                    <option value="128">128 Mb</option>
                    @else
                    <option value="0">No tienes mas memoria</option>
                    @endif
                    @if ($total_activos <= 768)
                    <option value="256">256 Mb</option>
                    @endif
                    @if ($total_activos <= 512)
                    <option value="512">512 Mb</option>
                    @endif
                </select>
                @error('size_proceso')
                        <div id="basic-addon2" class="invalid-feedback">
                            {{ $message }}
                        </div>
                @enderror
                <div class="col-md-12 text-center mt-3">
                    @if ($total_activos >= 1024)
                    <span class="text-muted">Iniciar proceso</span>
                    @else
                    <button class="btn btn-outline-primary btn-lg">Iniciar proceso</button>
                    @endif
                </div>
            </form>
        </p>
    </div>
</div>