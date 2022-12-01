<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Product Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_name" placeholder="Input text">
            <h3>{{ $product_name }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Product Unit Price</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_unit_price" placeholder="Input text">
            <h3>{{ $product_unit_price }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Quantity</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="quantity" placeholder="Input text">
            <h3>{{ $quantity }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Product Image</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_image" placeholder="Input text">
            <h3>{{ $product_image }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Product Description</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="product_description" placeholder="Input text">
            <h3>{{ $product_description }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Brand Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="brand_id" placeholder="Input text">
            <h3>{{ $brand_id }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Category Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="category_id" placeholder="Input text">
            <h3>{{ $category_id }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Unit Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="unit_id" placeholder="Input text">
            <h3>{{ $unit_id }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">VAT Type</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="vat_type" placeholder="Input text">
            <h3>{{ $vat_type }}</h3>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-primary w-24">Add Product</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
