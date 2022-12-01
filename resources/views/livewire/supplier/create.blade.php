<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Supplier Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="supplier_name" placeholder="Input text">
            <h3>{{ $supplier_name }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Supplier Address</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="supplier_address" placeholder="Input text">
            <h3>{{ $supplier_address }}</h3>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Supplier Contact No.</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="supplier_contact_no" placeholder="Input text">
            <h3>{{ $supplier_contact_no }}</h3>
        </div>
        <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
            <button type="submit" class="btn btn-primary w-24">Add Supplier</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
