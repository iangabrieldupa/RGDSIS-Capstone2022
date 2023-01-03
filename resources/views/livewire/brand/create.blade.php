<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Brand Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="brand_name" placeholder="Input text">
<<<<<<< Updated upstream
            <h3>{{ $brand_name }}</h3>
=======
            @error('brand_name')
                <p class="text-danger">{{$message}}</p>
            @enderror
>>>>>>> Stashed changes
        </div>
        <div class="mt-3">
            <label>Active Status</label>
            <div class="form-switch mt-2">
<<<<<<< Updated upstream
                <input type="checkbox" value="" class="form-check-input">
            </div>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
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
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
