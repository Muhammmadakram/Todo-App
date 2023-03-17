<div>
    @if ($check == true)
        <div class="bg-warning mx-auto col-xl-4 shadow">
            <span class="d-flex justify-content-center">
                <h2 class="text-center fw-bolder fst-italic text-light pt-5">My Todo App&nbsp;</h2>
                <h1 class="mt-5 emoji">😍</h1>
            </span>

                    <form wire:submit.prevent="todoedit" class="col-md-12 mx-auto p-2">
                        <div class="d-flex add">
                            <input type="text" class="form-control input rounded-0 shadow-sm" wire:model="name"
                                placeholder="What do you have planned ?">
                            <button class="btn btn-dark rounded-0" type="submit"><i class="fa fa-plus"></i></button>
                        </div>
                    </form>
        </div>
                @else
                    <livewire:todolist />
    @endif

</div>
