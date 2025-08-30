<div class="modal-dialog">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST"
              action="{{ isset($package) ? route('admin.manage-packages.update', $package->id) : '#' }}"
              enctype="multipart/form-data">
            @csrf
            @if(isset($package))
                @method('PUT')
            @endif

            <div class="modal-header">
                <h4 class="modal-title">{{ isset($package) ? 'Edit Package' : 'Add Package' }}</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {{-- Name --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name"
                               value="{{ old('name', $package->name ?? '') }}" required>
                    </div>
                </div>

                {{-- Page ID --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Select Page</label>
                        <select class="form-control" name="page_id" required>
                            <option value="">-- Select Page --</option>
                            @foreach($pages as $page)
                                <option value="{{ $page->id }}"
                                        {{ (isset($package) && $package->page_id == $page->id) ? 'selected' : '' }}>
                                    {{ $page->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


<div class="form-group row">
    <div class="col-sm-12">
        <label class="label-control">Price Required?</label>
        <select class="form-control" name="price_required" id="price_required">
            <option value="yes" {{ $package->price_required === 'yes' ? 'selected' : '' }}>Yes</option>
            <option value="no"  {{ $package->price_required === 'no'  ? 'selected' : '' }}>No</option>
        </select>
    </div>
</div>

               {{-- Price Fields Wrapper --}}
<div id="price-fields">
    {{-- MRP --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">MRP</label>
            <input type="number" step="0.01" class="form-control" name="mrp" id="mrp"
                   value="{{ old('mrp', $package->mrp ?? '') }}">
        </div>
    </div>

    {{-- Discount --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">Discount (%)</label>
            <input type="number" step="0.01" class="form-control" name="discount" id="discount"
                   value="{{ old('discount', $package->discount ?? '') }}">
        </div>
    </div>

    {{-- Offered Price --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">Offered Price</label>
            <input type="number" step="0.01" class="form-control" name="offered_price" id="offered_price"
                   value="{{ old('offered_price', $package->offered_price ?? '') }}" readonly>
        </div>
    </div>
</div>


                {{-- Show on Home --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Show on Home</label>
                        <select class="form-control" name="show_on_home">
                            <option value="0" {{ isset($package) && $package->show_on_home == 0 ? 'selected' : '' }}>No</option>
                            <option value="1" {{ isset($package) && $package->show_on_home == 1 ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                </div>

                {{-- Services --}}
<div class="form-group row">
    <div class="col-sm-12">
        <label class="label-control">Service Name(s)</label>
        <div id="service-wrapper">
           @php
    $services = isset($package) && !empty($package->services)
        ? json_decode($package->services, true)
        : [''];
@endphp

            @foreach($services as $index => $service)
                <div class="input-group mb-2">
                    <input type="text" name="services[]" class="form-control" value="{{ $service }}"
                           placeholder="Service Name">
                    <div class="input-group-append">
                        @if($index === 0)
                            <button class="btn btn-success add-service" type="button">Add More</button>
                        @else
                            <button class="btn btn-danger remove-service" type="button">Remove</button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

            </div> <!-- modal-body -->

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">{{ isset($package) ? 'Update' : 'Add' }}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

{{-- Script --}}
<script>

    function calculateOfferPrice() {
        let mrp = parseFloat(document.getElementById('mrp')?.value || 0);
        let discount = parseFloat(document.getElementById('discount')?.value || 0);
        let offeredPrice = mrp - (mrp * discount / 100);
        document.getElementById('offered_price').value = offeredPrice.toFixed(2);
    }

    // Price Required change event
    const priceRequiredSelect = document.getElementById('price_required');
    const priceFieldsDiv = document.getElementById('price-fields');

    function togglePriceFields() {
        if (priceRequiredSelect.value === 'yes') {
            priceFieldsDiv.style.display = 'block';
        } else {
            priceFieldsDiv.style.display = 'none';
            // Optional: clear values when hidden
            document.getElementById('mrp').value = '';
            document.getElementById('discount').value = '';
            document.getElementById('offered_price').value = '';
        }
    }

    if (priceRequiredSelect) {
        priceRequiredSelect.addEventListener('change', togglePriceFields);
        togglePriceFields(); // Initial load
    }

    // Auto-calc offered price
    const mrpInput = document.getElementById('mrp');
    const discountInput = document.getElementById('discount');

    if (mrpInput && discountInput) {
        mrpInput.addEventListener('input', calculateOfferPrice);
        discountInput.addEventListener('input', calculateOfferPrice);
        calculateOfferPrice();
    }
    
    
 

    // Event delegation for adding/removing service fields
    const serviceWrapper = document.getElementById('service-wrapper');

    if (serviceWrapper) {
        serviceWrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('add-service')) {
                const newField = document.createElement('div');
                newField.className = 'input-group mb-2';
                newField.innerHTML = `
                    <input type="text" name="services[]" class="form-control" placeholder="Service Name">
                    <div class="input-group-append">
                        <button class="btn btn-danger remove-service" type="button">Remove</button>
                    </div>
                `;
                serviceWrapper.appendChild(newField);
            }

            if (e.target.classList.contains('remove-service')) {
                const group = e.target.closest('.input-group');
                if (group) group.remove();
            }
        });
    }
</script>

