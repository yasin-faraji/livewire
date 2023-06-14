<div>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h3 class="mb-5">register page</h3>

                <form wire:submit.prevent="register">

                    <div class="row mb-3">
                        <label for="inputEmail1" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail1" wire:model.debounce.1000ms='user.name'>
                        @error('user.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3" wire:model.debounce.1000ms='user.email'>
                        @error('user.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" wire:model.debounce.1000ms='user.password'>
                        @error('user.password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Sign up</button>
                  </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            Livewire.hook('component.initialized', (component) => {
                console.log('element.initialized' , component);
            })

            Livewire.hook('element.initialized', (el, component) => {
                console.log('element.updating' ,  el, component);
            })

            Livewire.hook('element.updating', (fromEl, toEl, component) => {
                console.log('element.updating' , fromEl, toEl, component);
            })

            Livewire.hook('element.updated', (el, component) => {
                console.log('element.updated' , el, component);
            })

            Livewire.hook('element.removed', (el, component) => {
                console.log('element.removed' , el, component);
            })

            Livewire.hook('message.sent', (message, component) => {
                console.log('message.sent' , message, component);
            })

            Livewire.hook('message.failed', (message, component) => {
                console.log('message.failed' , message, component);
            })

            Livewire.hook('message.received', (message, component) => {
                console.log('message.received' , message, component);
            })

            Livewire.hook('message.processed', (message, component) => {
                console.log('message.received' , message, component);
            })

        });
    </script>
</div>
