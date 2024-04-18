<div class="card offset-3 col-6">
    <h5 class="card-header">Calculator</h5>
    <div class="card-body">
        @if (session('status'))

        <div class="alert alert-danger">
            {{session('status')}}

        </div>

        @endif
        <input type="text" class="form-control" disabled wire:model="expression">
        <table class="table">
            <thead>

            </thead>
            <tbody>
              <tr>

                <th>
                    <div class="d-grid gap-2">
                        <button class="btn btn-secondary" wire:click="resetCalc">AC</button>
                    </div>

                </th>
                <td> <div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit('.')">.</button>
                </div></td>
                <td> <div class="d-grid gap-2">
                    <button class="btn btn-secondary"wire:click="backspace"><-</button>
                </div></td>
                <td> <div class="d-grid gap-2">
                    <button class="btn btn-primary" wire:click="sign('*')">*</button>
                </div></td>
              </tr>

              <tr>
                <th><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(7)">7</button>
                </div></th>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(8)">8</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(9)">9</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-primary" wire:click="sign('/')">/</button>
                </div></td>
              </tr>
              <tr>
                <th><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(4)">4</button>
                </div></th>
                <td ><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(5)">5</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(6)">6</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-primary" wire:click="sign('-')">-</button>
                </div></td>
              </tr>

              <tr>
                <th><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(1)">1</button>
                </div></th>
                <td ><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(2)">2</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(3)">3</button>
                </div></td>
                <td><div class="d-grid gap-2">
                    <button class="btn btn-primary" wire:click="sign('+')">+</button>
                </div></td>
              </tr>

              <tr>

                <td ><div class="d-grid gap-2">
                    <button class="btn btn-secondary" wire:click="digit(0)">0</button>
                </div></td>

                <td colspan="3"><div class="d-grid gap-2">
                    <button class="btn btn-primary" wire:click="execute">=</button>
                </div></td>

              </tr>
            </tbody>
          </table>
    </div>
  </div>
