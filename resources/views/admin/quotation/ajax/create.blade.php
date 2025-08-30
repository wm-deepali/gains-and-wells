<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-visa.store') }}">
            @csrf
            <div class="modal-header">
                <h4 class="modal-title">Add Visa Cost</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="visa-cost-group">
                    <div class="visa-cost-row row">
                        <div class="col-md-4">
                        <label>Visa Type <span class="required">*</span></label>
                        <select class="form-control" name="visa_costs[0][business_id]" required>
                        <option value="">-- Select Business Type --</option>
                        @foreach($businesses as $business)
                        <option value="{{ $business->id }}">{{ $business->Business_name }}</option>
                        @endforeach
                        </select>
                        </div>

                        <div class="col-md-4">
                            <label>No. of Visa <span class="required">*</span></label>
                            <input type="number" class="form-control" name="visa_costs[0][quantity]" required>
                        </div>

                        <div class="col-md-4">
                            <label>Cost (AED) <span class="required">*</span></label>
                            <input type="number" class="form-control" name="visa_costs[0][cost]" required>
                        </div>
                    </div>
                </div>

                <div class="mt-3">
                    <button type="button" class="btn btn-success" id="add-more">Add More</button>
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>

<script>
     const businesses = @json($businesses);
    let rowIndex = 1;

    document.getElementById('add-more').addEventListener('click', function () {
        const container = document.getElementById('visa-cost-group');

        // Build dynamic business options from JSON
        let businessOptions = '<option value="">-- Select Business Type --</option>';
        businesses.forEach(function (business) {
            businessOptions += `<option value="${business.id}">${business.Business_name}</option>`;
        });

        const row = document.createElement('div');
        row.classList.add('visa-cost-row', 'row', 'mt-2');
        row.innerHTML = `
            <div class="col-md-4">
                <select class="form-control" name="visa_costs[${rowIndex}][business_id]" required>
                    ${businessOptions}
                </select>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" name="visa_costs[${rowIndex}][quantity]" required>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" name="visa_costs[${rowIndex}][cost]" required>
            </div>
        `;
        container.appendChild(row);
        rowIndex++;
    });
</script>


