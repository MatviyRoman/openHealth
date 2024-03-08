<div>

    <x-section-title>
        <x-slot name="title">
            {{$mode === 'edit' ? __('Редагувати співробітника') : __('Додати співробітника')}}
        </x-slot>
        <x-slot name="description">
            {{$mode === 'edit' ? __('Редагувати співробітника') : __('Додати співробітника')}}
        </x-slot>
    </x-section-title>

    <div class="flex bg-white  p-6 flex-col ">


                @include('livewire.employee._parts._employee')
                @include('livewire.employee._parts._documents')
                @include('livewire.employee._parts._education')
                @include('livewire.employee._parts._specialities')
                @include('livewire.employee._parts._positions')
                @include('livewire.employee._parts._role')
                @include('livewire.employee._parts._science_degree')
                @include('livewire.employee._parts._qualifications')

                <div class="mb-4.5 flex flex-col gap-6 xl:flex-row justify-between items-center ">
                    <div class="xl:w-1/4 text-left">
                        <x-secondary-button wire:click="closeModal()">
                            {{__('Назад')}}
                        </x-secondary-button>
                    </div>
                    <div class="xl:w-1/4 text-right">
                        <x-button type="submit" class="btn-primary">
                            {{__('Відправити на затвердження ')}}
                        </x-button>
                    </div>
                </div>
                <div wire:loading role="status" class="absolute -translate-x-1/2 -translate-y-1/2 top-2/4 left-1/2">
                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
                         viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                            fill="currentColor"/>
                        <path
                            d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                            fill="currentFill"/>
                    </svg>
                </div>

 </div>
    @if($showModal == 'education')
        @include('livewire.employee._parts.modals._modal_education')
    @elseif($showModal == 'documents')
        @include('livewire.employee._parts.modals._modal_documents')
    @elseif($showModal == 'specialities')
        @include('livewire.employee._parts.modals._modal_specialities')
    @elseif($showModal == 'positions')
        @include('livewire.employee._parts.modals._modal_positions')
    @elseif($showModal == 'role')
        @include('livewire.employee._parts.modals._modal_role')
    @elseif($showModal == 'science_degree')
        @include('livewire.employee._parts.modals._modal_science_degree')
    @elseif($showModal == 'qualifications')
        @include('livewire.employee._parts.modals._modal_qualifications')
    @endif
    <div class="flex fixed max-w-xl w-3  bottom-[1.5rem] z-100 right-2  w- border-l-6 border-[#34D399] bg-[#34D399] bg-opacity-[15%] px-7 py-8 shadow-md dark:bg-[#1B1B24] dark:bg-opacity-30 md:p-3">
        <div class="mr-5 flex h-9 w-full max-w-[36px] items-center justify-center rounded-lg bg-[#34D399]">
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.2984 0.826822L15.2868 0.811827L15.2741 0.797751C14.9173 0.401867 14.3238 0.400754 13.9657 0.794406L5.91888 9.45376L2.05667 5.2868C1.69856 4.89287 1.10487 4.89389 0.747996 5.28987C0.417335 5.65675 0.417335 6.22337 0.747996 6.59026L0.747959 6.59029L0.752701 6.59541L4.86742 11.0348C5.14445 11.3405 5.52858 11.5 5.89581 11.5C6.29242 11.5 6.65178 11.3355 6.92401 11.035L15.2162 2.11161C15.5833 1.74452 15.576 1.18615 15.2984 0.826822Z" fill="white" stroke="white"></path>
            </svg>
        </div>
        <div class="w-full">
            <h5 class="mb-3 text-sm font-bold text-black dark:text-[#34D399]">
                Дані успішно збережені
            </h5>
        </div>
    </div>

</div>



