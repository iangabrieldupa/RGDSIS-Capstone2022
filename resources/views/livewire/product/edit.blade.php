<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Product Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_name" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Product Unit Price</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="product_unit_price" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Quantity</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="quantity" placeholder="Input text">
        </div>
        {{-- <div>
            <label for="crud-form-1" class="form-label">Product Image</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_image" placeholder="Input text">
        </div> --}}
        <div>
            <label for="crud-form-1" class="form-label">Product Description</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_description" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Brand Name</label>
            <select wire:model.lazy="brand_id" class="form-control">
                <option selected>No brand</option>
                @foreach ($brands as $brand)
                <option value="{{ $brand->id }}" > {{ $brand->brand_name }} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Category Name</label>
            <select wire:model.lazy="category_id" class="form-control">
                <option selected>No category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" > {{ $category->category_name }} </option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Unit Name</label>
            <select wire:model.lazy="unit_id" class="form-control">
                <option selected>No unit</option>
                @foreach ($units as $unit)
                <option value="{{ $unit->id }}" > {{ $unit->unit_name }} </option>
                @endforeach
            </select>
        </div>
        {{-- <div>
            <label for="crud-form-1" class="form-label">VAT Type</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="vat_type" placeholder="Input text">
        </div> --}}
        <div class="text-right mt-5">
            <a type="button" href="{{ url('/product') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
            <button class="btn btn-primary w-24" wire:click='updateProduct'>Update Product</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
