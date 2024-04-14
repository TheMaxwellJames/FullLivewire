
<div>

<div class="card offset-3 col-6">

    <div class="card-header">

        Counter App

    </div>

    <div class="card-body">

        @if (session('status'))

        <div class="alert alert-info">
            {{session('status')}}
        </div>

        @endif

        <h1 class="text-primary">Your Count is: {{$count}}</h1>
        <button class="btn btn-primary" wire:click="increase">Incrementing</button>
        <button class="btn btn-secondary" wire:click="decrease">Decrementing</button>

    </div>

</div>

<livewire:create-user/>


</div>
