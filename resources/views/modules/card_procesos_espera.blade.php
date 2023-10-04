<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">N# Procesos espera</h5>
        <p class="card-text">
            Maximo de memoria 1024MB
            <hr>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($total_espera *100) / 1024 }}%;" aria-valuenow="{{ ($total_espera *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_espera *100) / 1024 }}%</div>
            </div>
            Memoria ocupada: {{ $total_espera }}
        </p>
    </div>
</div>