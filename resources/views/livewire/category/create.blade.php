<div>
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Category Name</label>
            <input id="crud-form-1" type="text" class="form-control w-full" wire:model="category_name" placeholder="Input text">
        </div>
        <div class="mt-3">
            <label>Active Status</label>
            <div class="form-switch mt-2">
                <select name="category_status" id="category_status" wire:model='category_status'>
                    <option hidden="true">None</option>
                    <option selected disabled>None</option>
                    <option value="0">Active</option>
                    <option value="1">Inactive</option>
                </select>
            </div>
        </div>
        <div class="text-right mt-5">
            <a type="button" href="{{ url('/category') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
            <button class="btn btn-primary w-24" wire:click='addCategory'>Add Category</button>
        </div>
    </div>
    <!-- END: Form Layout -->
</div>
