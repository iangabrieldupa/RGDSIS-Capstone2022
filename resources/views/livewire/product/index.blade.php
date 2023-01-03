<div>
    {{-- @include('livewire.product.delete') --}}
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <a href="{{ url('product/create') }}" class="btn btn-primary float-end">Add New Product</a>
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">ID</th>
                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                    <th class="whitespace-nowrap">PRODUCT UNIT PRICE</th>
                    <th class="whitespace-nowrap">QUANTITY</th>
                    {{-- <th class="whitespace-nowrap">PRODUCT IMAGE</th> --}}
                    <th class="whitespace-nowrap">PRODUCT DESCRIPTION</th>
                    <th class="whitespace-nowrap">BRAND NAME</th>
                    <th class="whitespace-nowrap">CATEGORY NAME</th>
                    <th class="whitespace-nowrap">UNIT NAME</th>
                    {{-- <th class="whitespace-nowrap">VAT TYPE</th> --}}
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="intro-x">

                    <td class="w-40">
                        {{ $product->id }}
                    </td>
                    <td>
                        {{ $product->product_name }}
                    </td>
                    <td>
                        {{ $product->product_unit_price }}
                    </td>
                    <td>
                        {{ $product->quantity }}
                    </td>
                    {{-- <td>
                        {{ $product->product_image }}
                    </td> --}}
                    <td>
                        {{ $product->product_description }}
                    </td>
                    <td>
                        {{ $product->brands->brand_name }}
                    </td>
                    <td>
                        {{ $product->categories->category_name }}
                    </td>
                    <td>
                        {{ $product->units->unit_name }}
                    </td>
                    {{-- <td>
                        {{ $product->vat_type }}
                    </td> --}}
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a href="{{ url('product/'.$product->id.'/edit') }}" class="flex items-center mr-3 text-success" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            {{-- <a class="flex items-center text-danger" href="#" wire:click="deleteProduct({{ $product->id }})" data-tw-toggle="modal" data-tw-target="#deleteProductModal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
</div>
