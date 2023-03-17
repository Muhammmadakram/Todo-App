<div class="bubbles">
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    {{-- main work start laravel --}}
    @if ($check == true)
    <div class="bg-warning mx-auto col-xl-4 shadow">
        <span class="d-flex justify-content-center">
            <h2 class="text-center fw-bolder fst-italic text-light pt-5">My Todo App&nbsp;</h2>
            <h1 class="mt-5 emoji">😍</h1>
        </span>

        <table class="table table-hover border p-2">
            <thead>
                <form wire:submit.prevent="submit" class="col-md-12 mx-auto p-2">
                    <div class="d-flex add">
                        <input type="text" class="form-control input rounded-0 shadow-sm" wire:model="text"
                            placeholder="What do you have planned ?">
                        <button class="btn btn-dark rounded-0" type="submit"><i class="fa fa-plus"></i></button>
                    </div>
                </form>
            </thead>
            <div class="row py-2">
                <div class="col-md-8 mx-auto">
                    <div class="input-group">
                        <input class="form-control search border-end-0 border" type="search" wire:model="search"
                            placeholder="Search here" id="example-search-input">
                        <span class="input-group-append">
                            <button
                                class="pt-2  btn btn-dark bg-primary shadow border-start-0 border-bottom-0 border ms-n5"
                                type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <tbody>
                @forelse ($item  as $data)
                    <tr>
                        <td class="text-ligh fst-italic align-middle" scope="row">{{ $data->name }}</td>
                        <td>
                            <button class="btn btn-light rounded-circle" wire:click="delete({{ $data->id }})"><i
                                    class="fa fa-times text-danger"></i></button>
                            <button class="btn btn-light rounded-circle" wire:click="edit({{ $data->id }})"><i
                                    style="color: springgreen;" class="fa fa-pencil"></i></button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center fst-italic fw-bolder bg-light text-danger" colspan="5">No record
                            Found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $item->links() }}
           </div>
    </div>
    {{-- end main work laravel --}}
    @else
    <livewire:todoupdate :uid="$userid" :name="$uname" />
    @endif


</div>

{{-- style css --}}
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
        padding: 0;
        margin: 0;
    }

    /* search */
    .ms-n5 {
        margin-left: -38px;
    }


    .search:focus {
        border: 2px solid rgb(115, 0, 182) !important;
        box-shadow: rgb(249, 232, 232) 0px 0px 10px 3px !important;
    }

    .search {
        border: 2px solid rgb(110, 184, 245) !important;
        box-shadow: #e9ebee 0px 0px 10px 2px !important;
    }
.text-danger{
    color: rgb(252, 39, 39) !important;
}
/* pagination style */
.page-item .page-link {
    font-weight: 600 !important;
    }
/* end pagination */
    input[type='search'] {
        font-weight: bold;
    }

    input[type='search']::placeholder {
        font-weight: normal !important;
    }

    .input:focus {
        border: 2px solid rgb(255, 77, 77) !important;
        box-shadow: rgb(249, 232, 232) 0px 0px 10px 3px !important;
    }

    input[type='text']::placeholder {
        font-weight: normal !important;
    }

    input[type='text'] {
        font-weight: bold;
    }

    .input {
        border: 2px solid rgb(8, 8, 8);
        box-shadow: #e9ebee 0px 0px 10px 2px !important;
    }

    .bg-warning {
        height: 100vh;
        border: 1px solid none;
        box-shadow: #7faef5 0px 0px 10px 2px !important;
        /* background: -webkit-linear-gradient(#FFD200,#F7971E); */
        background: -webkit-linear-gradient(bottom, #0175a6, #5ac4f1, #77a1fb);
        background-repeat: no-repeat;
    }

    .text-light {
        text-shadow: 10px 10px 25px rgb(252, 122, 205),
            -10px 10px 25px rgb(255, 117, 204),
            -10px -10px 25px rgb(254, 119, 205),
            10px -10px 25px rgb(251, 130, 207);
    }

    .text-ligh {
        color: white;
        font-size: 18px;
    }

    .emoji {
        font-size: 35px !important;
    }

    /*Background Bubbles Animation*/
    body {
        background: #5E9EFF;
        margin: 0;
    }

    .bubbles {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .bubble {
        position: absolute;
        left: var(--bubble-left-offset);
        bottom: -75%;
        display: block;
        width: var(--bubble-radius);
        height: var(--bubble-radius);
        border-radius: 50%;
        animation: float-up var(--bubble-float-duration) var(--bubble-float-delay) ease-in infinite;
    }

    .bubble::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(136, 246, 251, 0.3);
        border-radius: inherit;
        animation: var(--bubble-sway-type) var(--bubble-sway-duration) var(--bubble-sway-delay) ease-in-out alternate infinite;
    }

    .bubble:nth-child(0) {
        --bubble-left-offset: 34vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(1) {
        --bubble-left-offset: 29vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(2) {
        --bubble-left-offset: 30vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(3) {
        --bubble-left-offset: 6vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(4) {
        --bubble-left-offset: 9vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(5) {
        --bubble-left-offset: 14vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(6) {
        --bubble-left-offset: 67vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(7) {
        --bubble-left-offset: 32vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(8) {
        --bubble-left-offset: 47vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(9) {
        --bubble-left-offset: 4vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(10) {
        --bubble-left-offset: 0vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(11) {
        --bubble-left-offset: 20vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(12) {
        --bubble-left-offset: 41vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(13) {
        --bubble-left-offset: 99vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(14) {
        --bubble-left-offset: 92vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(15) {
        --bubble-left-offset: 49vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(16) {
        --bubble-left-offset: 62vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(17) {
        --bubble-left-offset: 43vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(18) {
        --bubble-left-offset: 9vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(19) {
        --bubble-left-offset: 16vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(20) {
        --bubble-left-offset: 11vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(21) {
        --bubble-left-offset: 18vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(22) {
        --bubble-left-offset: 36vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(23) {
        --bubble-left-offset: 66vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(24) {
        --bubble-left-offset: 47vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(25) {
        --bubble-left-offset: 20vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(26) {
        --bubble-left-offset: 28vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(27) {
        --bubble-left-offset: 14vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(28) {
        --bubble-left-offset: 43vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(29) {
        --bubble-left-offset: 59vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(30) {
        --bubble-left-offset: 63vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(31) {
        --bubble-left-offset: 72vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(32) {
        --bubble-left-offset: 66vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(33) {
        --bubble-left-offset: 97vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(34) {
        --bubble-left-offset: 97vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(35) {
        --bubble-left-offset: 99vw;
        --bubble-radius: 2vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(36) {
        --bubble-left-offset: 77vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(37) {
        --bubble-left-offset: 98vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(38) {
        --bubble-left-offset: 95vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(39) {
        --bubble-left-offset: 53vw;
        --bubble-radius: 8vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(40) {
        --bubble-left-offset: 22vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 4s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(41) {
        --bubble-left-offset: 53vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 4s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(42) {
        --bubble-left-offset: 94vw;
        --bubble-radius: 5vw;
        --bubble-float-duration: 8s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(43) {
        --bubble-left-offset: 49vw;
        --bubble-radius: 9vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(44) {
        --bubble-left-offset: 32vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 9s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(45) {
        --bubble-left-offset: 49vw;
        --bubble-radius: 3vw;
        --bubble-float-duration: 10s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 2s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(46) {
        --bubble-left-offset: 84vw;
        --bubble-radius: 7vw;
        --bubble-float-duration: 7s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(47) {
        --bubble-left-offset: 12vw;
        --bubble-radius: 4vw;
        --bubble-float-duration: 6s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 2s;
        --bubble-sway-delay: 1s;
        --bubble-sway-type: sway-right-to-left;
    }

    .bubble:nth-child(48) {
        --bubble-left-offset: 80vw;
        --bubble-radius: 6vw;
        --bubble-float-duration: 12s;
        --bubble-sway-duration: 6s;
        --bubble-float-delay: 0s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(49) {
        --bubble-left-offset: 36vw;
        --bubble-radius: 10vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 5s;
        --bubble-float-delay: 1s;
        --bubble-sway-delay: 0s;
        --bubble-sway-type: sway-left-to-right;
    }

    .bubble:nth-child(50) {
        --bubble-left-offset: 47vw;
        --bubble-radius: 1vw;
        --bubble-float-duration: 11s;
        --bubble-sway-duration: 4s;
        --bubble-float-delay: 3s;
        --bubble-sway-delay: 3s;
        --bubble-sway-type: sway-right-to-left;
    }

    @keyframes float-up {
        to {
            transform: translateY(-175vh);
        }
    }

    @keyframes sway-left-to-right {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(100%);
        }
    }

    @keyframes sway-right-to-left {
        from {
            transform: translateX(100%);
        }

        to {
            transform: translateX(-100%);
        }
    }
</style>
