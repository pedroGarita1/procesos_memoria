<div class="card h-100">
    <div class="card-body">
        <h5 class="card-title text-center">N# Procesos activos</h5>
        <p class="card-text">
            Maximo de memoria 4096MB
            <hr>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ ($total_A1 *100) / 1024 }}%;" aria-valuenow="{{ ($total_A1 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_A1 *100) / 1024 }}%</div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ ($total_B2 *100) / 1024 }}%;" aria-valuenow="{{ ($total_B2 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_B2 *100) / 1024 }}%</div>
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($total_C3 *100) / 1024 }}%;" aria-valuenow="{{ ($total_C3 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_C3 *100) / 1024 }}%</div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ ($total_D4 *100) / 1024 }}%;" aria-valuenow="{{ ($total_D4 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_D4 *100) / 1024 }}%</div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($total_E5 *100) / 1024 }}%;" aria-valuenow="{{ ($total_E5 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_E5 *100) / 1024 }}%</div>
                <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($total_F6 *100) / 1024 }}%;" aria-valuenow="{{ ($total_F6 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_F6 *100) / 1024 }}%</div>
                <div class="progress-bar bg-light" role="progressbar" style="width: {{ ($total_G7 *100) / 1024 }}%;" aria-valuenow="{{ ($total_G7 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_G7 *100) / 1024 }}%</div>
                <div class="progress-bar bg-dark" role="progressbar" style="width: {{ ($total_H8 *100) / 1024 }}%;" aria-valuenow="{{ ($total_H8 *100) / 1024 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_H8 *100) / 1024 }}%</div>
            </div>
            Memoria ocupada: {{ $total_activos }} mb
            <div class="col-md-12 text-center mt-3"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Marco de pagina</button></div>
        </p>
    </div>
</div>