<div>
    {{-- @include('livewire.invoice.delete') --}}
<!-- BEGIN: Data List -->
<div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
    <a href="{{ url('invoice/create') }}" class="btn btn-primary float-end">Add New Invoice</a>
    <table class="table table-report -mt-2">
        <thead>
            <tr>
                <th class="whitespace-nowrap">ID</th>
                <th class="whitespace-nowrap">BILL NO.</th>
                <th class="whitespace-nowrap">PRODUCT NAME</th>
                <th class="whitespace-nowrap">GROSS AMOUNT</th>
                {{-- <th class="whitespace-nowrap">SERVICE CHARGE</th> --}}
                {{-- <th class="whitespace-nowrap">VAT CHARGE</th> --}}
                <th class="whitespace-nowrap">NET AMOUNT</th>
                {{-- <th class="whitespace-nowrap">DISCOUNT</th> --}}
                {{-- <th class="whitespace-nowrap">POST STATUS</th> --}}
                {{-- <th class="text-center whitespace-nowrap">ACTIONS</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($invoices as $invoice)
            <tr class="intro-x">

                <td class="w-40">
                    {{ $invoice->id }}
                </td>
                <td>
                    {{ $invoice->bill_no }}
                </td>
                <td>
                    {{ $invoice->products->product_name }}
                </td>
                <td>
                    {{ $invoice->gross_amount }}
                </td>
                {{-- <td>
                    {{ $invoice->service_charge }}
                </td> --}}
                {{-- <td>
                    {{ $invoice->vat_charge }}
                </td> --}}
                <td>
                    {{ $invoice->net_amount }}
                </td>
                {{-- <td>
                    {{ $invoice->discount }}
                </td> --}}
                {{-- <td>
                    {{ $invoice->post_status }}
                </td> --}}
                {{-- <td class="table-report__action w-56">
                    <div class="flex justify-center items-center">
                        <a href="{{ url('admin/invoice/'.$invoice->id.'/edit') }}" class="flex items-center mr-3 text-success" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a> --}}
                        {{-- <a class="flex items-center text-danger" href="#" wire:click="deleteInvoice({{ $invoice->id }})" data-tw-toggle="modal" data-tw-target="#deleteInvoiceModal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                    {{-- </div>
                </td> --}}

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- END: Data List --></div>
