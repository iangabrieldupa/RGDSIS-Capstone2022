<div>
    <!-- BEGIN: Form Layout -->
    <div class="intro-y box p-5">

        <div>
            <label for="crud-form-1" class="form-label">Bill No.</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model.defer="bill_no" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Product Name</label>
            <select wire:model.defer="product_id" class="form-control">
                @foreach ($products as $product)
                <option value="{{ $product->id }}" >{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Quantity</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model.defer="quantity" placeholder="Input text">
        </div>
        <div>
            <input id="crud-form-1" type="hidden" class="form-control w-full" placeholder="Input text">
        </div>
        {{-- <div>
            <label for="crud-form-1" class="form-label">Gross Amount</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="gross_amount" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Service Charge</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="service_charge" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Net Amount</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="net_amount" placeholder="Input text">
        </div>
        <div>
            <label for="crud-form-1" class="form-label">Discount</label>
            <input id="crud-form-1" type="number" class="form-control w-full" wire:model="discount" placeholder="Input text">
        </div>
        <label>Post Status</label>
        <div class="form-switch mt-2">
            <select name="post_status" id="post_status" wire:model='post_status'>
                <option hidden="true">-</option>
                <option selected disabled>-</option>
                <option value="0">Finished</option>
                <option value="1">Ongoing</option>
            </select>
        </div> --}}
        @if (!isset($product_id))
            <div class="text-right mt-5">
                <a type="button" href="{{ url('/invoice') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
                <button class="btn btn-primary w-24" wire:click='proceed'>Proceed</button>
            </div>
        @endif
    </div>
   @if (isset($product_id))
   <div class="intro-y box p-5">
    <div>
        <label for="crud-form-1" class="form-label">Gross Amount</label>
        <input id="crud-form-1" type="number" class="form-control w-full" wire:model="gross_amount" placeholder="Input text">
    </div>

    <div>
        <label for="crud-form-1" class="form-label">Net Amount</label>
        <input id="crud-form-1" type="number" class="form-control w-full" wire:model="net_amount" placeholder="Input text">
    </div>
    {{-- <label>Post Status</label>
    <div class="form-switch mt-2">
        <select name="post_status" id="post_status" wire:model='post_status'>
            <option hidden="true">-</option>
            <option selected disabled>-</option>
            <option value="0">Finished</option>
            <option value="1">Ongoing</option>
        </select>
    </div> --}}
    <div class="text-right mt-5">
        <a type="button" href="{{ url('/invoice') }}" class="btn btn-outline-secondary w-24 mr-1">Cancel</a>
        <button class="btn btn-primary w-24" wire:click='addInvoice'>Add Invoice</button>
    </div>
</div>
   @endif

    <!-- END: Form Layout -->
</div>
