<div>
    {{-- @include('livewire.brand.delete') --}}
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <a href="{{ url('brand/create') }}" class="btn btn-primary float-end">Add New Brand</a>
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">ID</th>
                    <th class="whitespace-nowrap">BRAND NAME</th>
                    <th class="text-center whitespace-nowrap">STATUS</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product_brands as $brand)
                <tr class="intro-x">
<<<<<<< Updated upstream
                    <td class="w-40">
                        <div class="flex">
                            <div class="w-10 h-10 image-fit zoom-in">
                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-9.jpg" title="Uploaded at 12 November 2022">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-3.jpg" title="Uploaded at 12 November 2022">
                            </div>
                            <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                <img alt="Midone - HTML Admin Template" class="tooltip rounded-full" src="dist/images/preview-8.jpg" title="Uploaded at 12 November 2022">
                            </div>
                        </div>
                    </td>
                    <td>
                        <a href="" class="font-medium whitespace-nowrap">Sony Master Series A9G</a>
                        <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">Electronic</div>
                    </td>
                    <td class="w-40">
                        <div class="flex items-center justify-center text-danger"> <i data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
=======

                    <td class="w-40">
                        {{ $brand->id }}
                    </td>
                    <td>
                        {{ $brand->brand_name }}
                    </td>
                    <td class="w-40">
                        <div class="flex items-center justify-center">{{ $brand->brand_status == '1' ? 'Visible':'Hidden'}} </div>
>>>>>>> Stashed changes
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a href="{{ url('brand/'.$brand->id.'/edit') }}" class="flex items-center mr-3 text-success" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            {{-- <a class="flex items-center text-danger" href="#" wire:click="deleteBrand({{ $brand->id }})" data-tw-toggle="modal" data-tw-target="#deleteBrandModal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                        </div>
                    </td>
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
</div>
