<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form class="form form-horizontal" method="POST" action="{{ route('admin.manage-visa.update', $groupId) }}">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h4 class="modal-title">Edit Visa Costs</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
                <div id="edit-visa-cost-group">
                    @foreach($visaCosts as $index => $visa)
                        <div class="visa-cost-row row mt-2">
                            <input type="hidden" name="visa_costs[{{ $index }}][id]" value="{{ $visa->id }}">
                            <div class="col-md-4">
                                <label>Visa Type <span class="required">*</span></label>
                                <select class="form-control" name="visa_costs[{{ $index }}][business_id]" required>
                                    <option value="">-- Select Business Type --</option>
                                    @foreach($businesses as $business)
                                        <option value="{{ $business->id }}" {{ $visa->business_id == $business->id ? 'selected' : '' }}>
                                            {{ $business->Business_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label>No. of Visa</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][quantity]" value="{{ $visa->quantity }}" required>
                            </div>

                            <div class="col-md-4">
                                <label>Cost (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][cost]" value="{{ $visa->cost }}" required>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
    </div>
</div>
