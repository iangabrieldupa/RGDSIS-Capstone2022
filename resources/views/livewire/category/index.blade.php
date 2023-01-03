<div>
    {{-- @include('livewire.category.delete') --}}
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <a href="{{ url('category/create') }}" class="btn btn-primary float-end">Add New Category</a>
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">ID</th>
                    <th class="whitespace-nowrap">CATEGORY NAME</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_categories as $category)
                <tr class="intro-x">

                    <td class="w-40">
                        {{ $category->id }}
                    </td>
                    <td>
                        {{ $category->category_name }}
                    </td>
                    <td class="w-40">
                        <div class="flex items-center justify-center">{{ $category->category_status == '1' ? 'Visible':'Hidden'}} </div>
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a href="{{ url('category/'.$category->id.'/edit') }}" class="flex items-center mr-3 text-success" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            {{-- <a class="flex items-center text-danger" href="#" wire:click="deleteCategory({{ $category->id }})" data-tw-toggle="modal" data-tw-target="#deleteCategoryModal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
    @push('script')

    <script>
        window.addEventListener('close-modal', event=> {

            $('#deleteModal').modal('hide');
        });
    </script>

    @endpush
</div>
