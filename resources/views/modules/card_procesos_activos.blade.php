<div class="card">
    <div class="card-body">
        <h5 class="card-title text-center">N# Procesos activos</h5>
        <p class="card-text">
            Maximo de memoria 4096MB
            <hr>
            <div class="progress">
                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ ($total_A1 *100) / 4096 }}%;" aria-valuenow="{{ ($total_A1 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_A1 *100) / 4096 }}%</div>
                <div class="progress-bar bg-secondary" role="progressbar" style="width: {{ ($total_B2 *100) / 4096 }}%;" aria-valuenow="{{ ($total_B2 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_B2 *100) / 4096 }}%</div>
                <div class="progress-bar bg-success" role="progressbar" style="width: {{ ($total_C3 *100) / 4096 }}%;" aria-valuenow="{{ ($total_C3 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_C3 *100) / 4096 }}%</div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ ($total_D4 *100) / 4096 }}%;" aria-valuenow="{{ ($total_D4 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_D4 *100) / 4096 }}%</div>
                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ ($total_E5 *100) / 4096 }}%;" aria-valuenow="{{ ($total_E5 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_E5 *100) / 4096 }}%</div>
                <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($total_F6 *100) / 4096 }}%;" aria-valuenow="{{ ($total_F6 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_F6 *100) / 4096 }}%</div>
                <div class="progress-bar bg-light" role="progressbar" style="width: {{ ($total_G7 *100) / 4096 }}%;" aria-valuenow="{{ ($total_G7 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_G7 *100) / 4096 }}%</div>
                <div class="progress-bar bg-dark" role="progressbar" style="width: {{ ($total_H8 *100) / 4096 }}%;" aria-valuenow="{{ ($total_H8 *100) / 4096 }}" aria-valuemin="0" aria-valuemax="100">{{ ($total_H8 *100) / 4096 }}%</div>
            </div>
            Memoria ocupada: {{ ($total_activos *100) / 4096 }}%
        </p>
    </div>
</div>