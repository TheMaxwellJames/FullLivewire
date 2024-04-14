<div class="offset-3 col-6">

    <form wire:submit="SaveUser">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" wire:model="form.name">
        </div>

        <div>
            @error('form.name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" wire:model="form.email">
        </div>

        <div>
            @error('form.email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>



        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" wire:model="form.password">
        </div>

        <div>
            @error('form.password')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>



        <button type="submit" class="btn btn-primary" >
            Submit
                <div class="spinner-border spinner-border-sm" wire:loading>

                </div>
        </button>
    </form>

</div>
