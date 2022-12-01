<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Unit Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="unit_name" placeholder="Input text">
            <h3>{{ $unit_name }}</h3>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-primary w-24">Add Unit</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
