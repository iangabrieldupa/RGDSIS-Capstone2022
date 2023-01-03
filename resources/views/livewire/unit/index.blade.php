<div>
    {{-- @include('livewire.unit.delete') --}}
    <!-- BEGIN: Data List -->
    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <a href="{{ url('unit/create') }}" class="btn btn-primary float-end">Add New Unit</a>
        <table class="table table-report -mt-2">
            <thead>
                <tr>
                    <th class="whitespace-nowrap">ID</th>
                    <th class="whitespace-nowrap">UNIT NAME</th>
                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($units as $unit)
                <tr class="intro-x">

                    <td class="w-40">
                        {{ $unit->id }}
                    </td>
                    <td>
                        {{ $unit->unit_name }}
                    </td>
                    <td class="table-report__action w-56">
                        <div class="flex justify-center items-center">
                            <a href="{{ url('unit/'.$unit->id.'/edit') }}" class="flex items-center mr-3 text-success" href="javascript:;"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            {{-- <a class="flex items-center text-danger" href="#" wire:click="deleteUnit({{ $unit->id }})" data-tw-toggle="modal" data-tw-target="#deleteUnitModal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a> --}}
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- END: Data List -->
</div>
