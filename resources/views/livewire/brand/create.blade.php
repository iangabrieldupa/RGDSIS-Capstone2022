<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Brand Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="brand_name" placeholder="Input text">
<<<<<<< Updated upstream
            <h3>{{ $brand_name }}</h3>
<<<<<<< HEAD
=======
            @error('brand_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
>>>>>>> Stashed changes
=======
            @error('brand_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
>>>>>>> 90ea9537cfc1abd7c9c823eca288f82bca43821f
        </div>
        <div class="mt-3">
            <label>Active Status</label>
            <div class="form-switch mt-2">
<<<<<<< HEAD
<<<<<<< Updated upstream
                <input type="checkbox" value="" class="form-check-input">
=======
                <input type="checkbox" value="1" wire:model='brand_status' class="form-check-input">
>>>>>>> 90ea9537cfc1abd7c9c823eca288f82bca43821f
            </div>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
<<<<<<< HEAD
            <button type="submit" class="btn btn-primary w-24">Add Brand</button>
=======
                <select name="brand_status" id="brand_status" wire:model='brand_status'>
                    <option hidden="true">None</option>
                    <option selected disabled>None</option>
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                </select>
            </div>
        </div>
        <div class="text-right mt-5">
            <a type="button" href="{{ url('/brand') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
            <button class="btn btn-primary w-24" wire:click='addBrand'>Add Brand</button>
>>>>>>> Stashed changes
=======
            <button class="btn btn-primary w-24" wire:click='addBrand'>Add Brand</button>
>>>>>>> 90ea9537cfc1abd7c9c823eca288f82bca43821f
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
