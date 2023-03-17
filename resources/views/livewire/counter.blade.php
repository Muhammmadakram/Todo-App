<div>


    @if ($check == true )
    <div>
        @if (session()->has('message'))
            <div class="alert fw-bolder fst-italic text-center alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
        <center>
            <h1>Crud App</h1>
            <form wire:submit.prevent="submit">

                <input type="text" wire:model="name" placeholder="Enter the name"> @error('name')
                <br>
                    <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
                @enderror <br><br>

                <input type="email" wire:model="email" placeholder="Enter the email"> @error('email')
                <br>
                    <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
                @enderror <br><br>

                <input type="text" wire:model="phone" placeholder="Enter the phone"> @error('phone')
                <br>
                    <span class="text-danger fw-bolder fst-italic">{{ $message }}</span>
                @enderror <br><br>

                <button class="btn-dark btn" type="submit"> Register </button>

            </form>
        </center>
        <div class="col-3 mx-auto pt-2">
        <input class="form-control shadow" placeholder="Search here " type="search" wire:model="search">
    </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>



                @forelse ($item  as $data )
                    <tr>
                        <td scope="row">{{ $data->id }}</td>
                        <td>{{ $data->Name }}</td>
                        <td>{{ $data->Email }}</td>
                        <td>{{ $data->Phone }}</td>
                        <td>
                            <button class="btn btn-danger" wire:click="delete({{ $data->id }})">Delete</button>
                            <button class="btn btn-primary" wire:click="edit({{ $data->id }})">Update</button>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td class="text-center fst-italic fw-bolder bg-warning text-light" colspan="5">No record Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>

<div class="d-flex  justify-content-center">
             {{ $item->links() }}
            </div>

    @else
        <livewire:counterupdate :uid="$userid" :name="$uname" :email="$uemail" :phone="$uphone" />
    @endif
</div>

<style>
  .page-item.active .page-link {
    border-color:rgb(43, 241, 255);
        background-color:rgb(43, 241, 255) !important;
    }
    .page-item:not(:first-child) .page-link {
    margin-left: 1px;
}
.page-link:hover{
    background-color: rgb(112, 140, 250) !important;
}
</style>
