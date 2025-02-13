<div class="main-content">
    <livewire:gallery.form />
    <livewire:components.delete-modal />
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All galleries</h5>
                        </div>
                        <button
                            @click="$dispatch('galleryModal')"
                            class="btn bg-[#56C596] text-white btn-sm mb-0"
                            type="button">+&nbsp; New gallery</button>
                    </div>
                </div>

                <div x-data="{ openRow: null }" class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $num => $gallery)
                                <tr>
                                    <!-- Row Data -->
                                    <td class="ps-4">
                                        <p class="text-xs font-weight-bold mb-0">{{ $num + 1 }}</p>
                                    </td>
                               
                                    <td class="text-center align-middle">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ asset('storage/' . $gallery->image) }}" class="w-24 h-24 mb-0" alt="gallery Image" />
                                        </div>
                                    </td>
                                    <td class="text-center">
                                    
                                        <button @click="$dispatch('edit-gallery', { gallery: {{ $gallery->id }} })">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                        <button wire:click="$dispatch('openDeleteModal', { itemId: {{ $gallery->id }}, model: '{{ addslashes(App\Models\Gallery::class) }}' })">
                                            <i class="fa-solid fa-trash text-red-400"></i>
                                        </button>
                                    </td>
                                </tr>
 


                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>