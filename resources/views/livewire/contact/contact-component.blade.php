<div class="main-content">
    <livewire:boiography.form />
    <livewire:boiography.detail />
    <livewire:components.delete-modal />

    <!-- Contacts Table Section -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Contacts</h5>
                        </div>
                        <!-- <a
                            @click="$dispatch('bioModal')"
                            class="btn bg-green-400 btn-sm mb-0"
                            type="button">+&nbsp; New Biography</a> -->
                    </div>
                </div>
                <div>

                </div>

                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <!-- Only Email, Name, and Subject should be displayed -->
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Subject</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $contact->email }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $contact->name }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">{{ $contact->subject }}</p>
                                        </td>
                                        <td class="text-center">
                                            <!-- View Contact Detail Button -->
                                            <button wire:click="openContactDetailModal({{ $contact->id }})"
                                                data-modal-target="default-modal" data-modal-toggle="default-modal"
                                                class="mr-2">
                                                <i class="fa-solid fa-eye text-green-300"></i>
                                            </button>
                                            <!-- Delete Contact Button -->
                                            <button
                                                wire:click="$dispatch('openDeleteModal', { itemId: {{ $contact->id }}, model: '{{ addslashes(App\Models\Contact::class) }}' })">
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

    <!-- Contact Details Modal -->
    <div x-data="{ openModal: @entangle('openModal') }" class="flex justify-center px-8">

        <div x-cloak x-show="openModal" id="default-modal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-50 flex justify-center items-center bg-black bg-opacity-50 overflow-y-auto">
            <div x-data="{ isEdit: @entangle('is_edit') }" class="relative p-4 w-full max-w-2xl max-h-full">
                <form class="relative bg-white rounded-lg shadow dark:bg-gray-700" wire:submit.prevent="save">
                    <div class="flex flex-wrap border shadow rounded-lg p-3 dark:bg-gray-600">
                        <div>
                            <h2 class="text-xl text-gray-600 dark:text-gray-300 pb-2">Contact Details</h2>
                            <div>
                                <button type="button" @click="openModal = false" class="absolute top-0 right-0 p-4">
                                    <i class="text-red-500 fas fa-times text-2xl"></i> <!-- Close Icon -->

                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2 w-full border-gray-400">


                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                @if ($selectedContact)
                                    <div>
                                        <p class="text-base leading-relaxed text-gray-900 dark:text-white">
                                            <strong>Name:</strong>
                                            {{ $selectedContact->name }}</p>
                                        <p class="text-base leading-relaxed text-gray-900 dark:text-white">
                                            <strong>Email:</strong>
                                            {{ $selectedContact->email }}</p>
                                        <p class="text-base leading-relaxed text-gray-900 dark:text-white">
                                            <strong>Subject:</strong>
                                            {{ $selectedContact->subject }}</p>
                                        <p class="text-base leading-relaxed text-gray-900 dark:text-white">
                                            <strong>Message:</strong>
                                        </p>
                                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                            {{ $selectedContact->message }}</p>
                                    </div>
                                @else
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        No contact details available.
                                    </p>
                                @endif
                            </div>


                            <button @click="openModal = false" data-modal-hide="default-modal" type="button"
                                class="py-2.5 bg-gray-200 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>

</div>
</div>
