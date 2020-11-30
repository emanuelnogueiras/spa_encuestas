<div>
    <div class="container">
        <h5>{{$question->description}}</h5>        
        <div class="card">
            <div class="card-content">
                <p class="range-field">
                    <input type="range" wire:model.lazy="value" min="0" max="10" />
                </p>
            </div>            
        </div>
        <div class="progress">
            <div class="determinate" style="width: {{$progress}}%"></div>
        </div>
        Pregunta {{$actual}} de {{$total}} ({{ $progress }}%)
        <div class="right-align">            
            <button class="waves-effect waves-light btn blue" wire:click="loadNextQuestion">
                @if($actual < $total)
                    Siguiente...
                @else
                    Finalizar!
                @endif
            </button>
        </div>        
    </div>
</div>
