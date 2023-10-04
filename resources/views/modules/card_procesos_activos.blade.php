<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">N# Procesos activos</h5>
        <p class="card-text">
            Maximo de memoria 1024MB
            <hr>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: {{ ($total_activos *100) / 1024 }}%;" aria-valuenow="{{ ($total_activos *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_activos *100) / 1024 }}%</div>
            </div>
            Memoria ocupada: {{ $total_activos }}
        </p>
    </div>
</div>