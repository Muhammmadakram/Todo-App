<div>
   @if ($check == true)
   <center>
    <h1>update student</h1>
    <form wire:submit.prevent="updatecounter">
        <input type="text" wire:model="name" placeholder="Enter the name"> <br> @error('name')
            <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
        @enderror <br>

        <input type="email" wire:model="email" placeholder="Enter the email"> <br> @error('email')
            <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
        @enderror <br>

        <input type="text" wire:model="phone" placeholder="Enter the phone"> <br> @error('phone')
            <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
        @enderror  <br>

        <button class="btn-dark btn" type="submit"> Update </button>
    </form>
</center>
   @else
   <div>
    @if (session()->has('update'))
        <div class="alert alert-primary">
            {{ session('update') }}
        </div>
    @endif
</div>
   <livewire:counter />
   @endif
</div>
