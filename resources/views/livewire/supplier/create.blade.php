<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Supplier Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="supplier_name" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Supplier Address</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="supplier_address" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Supplier Contact No.</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="supplier_contact_no" placeholder="Input text">
        </div>
        <div class="text-right mt-5">
            <a type="button" href="{{ url('/supplier') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
            <button class="btn btn-primary w-24" wire:click='addSupplier'>Add Supplier</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
