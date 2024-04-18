<div>
    <h1 class="text-primary" wire:loading.class="opacity-50">Loading States</h1>

    <form wire:submit="save">
        <div class="alert alert-warning" wire:loading.remove>
            Instructions
        </div>
        <div class="alert alert-primary" wire:loading.delay wire:target="save">
            Saving form...
        </div>
        <button type="submit" class="btn btn-primary" delay wire:target="save">
            <div class="spinner-border spinner-border-sm" wire:loading  wire:target="save">

            </div>
            Save
        </button>
    </form>


    <div class="alert alert-secondary" wire:loading.block wire:target="delete">
        deleting form...
    </div>
    <button class="btn btn-danger" wire:click="delete" wire:loading.attr="disabled" wire:target="delete">

        <div class="spinner-border spinner-border-sm" wire:loading wire:target="delete">

        </div>


        Delete
    </button>

</div>
