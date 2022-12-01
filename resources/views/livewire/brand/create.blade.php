<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Brand Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="brand_name" placeholder="Input text">
            <h3>{{ $brand_name }}</h3>
            @error('brand_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mt-3">
            <label>Active Status</label>
            <div class="form-switch mt-2">
                <input type="checkbox" value="1" wire:model='brand_status' class="form-check-input">
            </div>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button class="btn btn-primary w-24" wire:click='addBrand'>Add Brand</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
