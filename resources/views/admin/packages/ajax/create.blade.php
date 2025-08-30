<div class="modal-dialog">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-packages.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Add Package</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                {{-- Name --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Name <span class="required">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                </div>
<div class="form-group row">
    <div class="col-sm-12">
        <label class="label-control">Select Page</label>
        <select class="form-control" name="page_id" required>
            <option value="">-- Select Page --</option>
            @foreach($pages as $page)
                <option value="{{ $page->id }}">{{ $page->title }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-12">
        <label class="label-control">Price Required?</label>
        <select class="form-control" name="price_required" id="price_required">
            <option value="yes" selected>Yes</option>
            <option value="no">No</option>
        </select>
    </div>
</div>


              <div id="price-fields">
    {{-- MRP --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">MRP <span class="required">*</span></label>
            <input type="number" step="0.01" class="form-control" name="mrp" id="mrp">
        </div>
    </div>

    {{-- Discount --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">Discount (%) <span class="required">*</span></label>
            <input type="number" step="0.01" class="form-control" name="discount" id="discount">
        </div>
    </div>

    {{-- Offered Price --}}
    <div class="form-group row">
        <div class="col-sm-12">
            <label class="label-control">Offered Price (auto-filled)</label>
            <input type="number" step="0.01" class="form-control" name="offered_price" id="offered_price" readonly>
        </div>
    </div>
</div>


                {{-- Show on Home --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Show on Home</label>
                        <select class="form-control" name="show_on_home">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Watsup No </label>
                        <input type="number"  class="form-control" name="watsup_no" id="watsup_no" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Calling No </label>
                        <input type="number"  class="form-control" name="call_no" id="call_no" >
                    </div>
                </div>

                {{-- Services --}}
                <div class="form-group row">
                    <div class="col-sm-12">
                        <label class="label-control">Service Name(s)</label>
                        <div id="service-wrapper">
                            <div class="input-group mb-2">
                                <input type="text" name="services[]" class="form-control" placeholder="Service Name">
                                <div class="input-group-append">
                                    <button class="btn btn-success add-service" type="button">Add More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- modal-body -->

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

{{-- Scripts --}}
<script>
// Auto-calculate offered price
function calculateOfferPrice() {
    let mrp = parseFloat(document.getElementById('mrp').value) || 0;
    let discount = parseFloat(document.getElementById('discount').value) || 0;
    let offeredPrice = mrp - (mrp * discount / 100);
    document.getElementById('offered_price').value = offeredPrice.toFixed(2);
}

document.getElementById('mrp').addEventListener('input', calculateOfferPrice);
document.getElementById('discount').addEventListener('input', calculateOfferPrice);

// Toggle price fields based on selection
document.getElementById('price_required').addEventListener('change', function () {
    let priceFields = document.getElementById('price-fields');
    let mrpField = document.getElementById('mrp');
    let discountField = document.getElementById('discount');

    if (this.value === "yes") {
        priceFields.style.display = 'block';
        mrpField.setAttribute('required', 'required');
        discountField.setAttribute('required', 'required');
    } else {
        priceFields.style.display = 'none';
        mrpField.removeAttribute('required');
        discountField.removeAttribute('required');
        mrpField.value = '';
        discountField.value = '';
        document.getElementById('offered_price').value = '';
    }
});

// Trigger on page load (so the form behaves correctly if editing)
document.getElementById('price_required').dispatchEvent(new Event('change'));


    // Add/remove service fields
    document.querySelector('.add-service').addEventListener('click', function () {
        let wrapper = document.getElementById('service-wrapper');
        let newField = document.createElement('div');
        newField.classList.add('input-group', 'mb-2');
        newField.innerHTML = `
            <input type="text" name="services[]" class="form-control" placeholder="Service Name">
            <div class="input-group-append">
                <button class="btn btn-danger remove-service" type="button">Remove</button>
            </div>
        `;
        wrapper.appendChild(newField);

        newField.querySelector('.remove-service').addEventListener('click', function () {
            newField.remove();
        });
    });
</script>
