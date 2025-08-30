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

                            <!-- Visa Type -->
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

                            <!-- No. of Visa -->
                            <div class="col-md-4">
                                <label>No. of Visa</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][quantity]" value="{{ $visa->quantity }}" required>
                            </div>

                            <!-- No. of Shareholders/Partners -->
                            <div class="col-md-4">
                                <label>No. of Shareholders/Partners <span class="text-danger">*</span></label>
                                <select class="form-control" name="visa_costs[{{ $index }}][number_owner]" required>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}" {{ $visa->number_owner == $i ? 'selected' : '' }}>
                                            {{ $i }} Shareholder{{ $i > 1 ? 's' : '' }}/Partner{{ $i > 1 ? 's' : '' }}
                                        </option>
                                    @endfor
                                </select>
                            </div>

                            <!-- Cost: Dubai Mainland -->
                            <div class="col-md-4 mt-3">
                                <label>Cost Dubai Mainland (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][dubai_mainland]" value="{{ $visa->dubai_mainland }}" step="0.01" required>
                            </div>

                            <!-- Cost: UAE Offshore -->
                            <div class="col-md-4 mt-3">
                                <label>Cost UAE Offshore (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][uae_offshore]" value="{{ $visa->uae_offshore }}" step="0.01" required>
                            </div>

                            <!-- Cost: UAE Freezone -->
                            <div class="col-md-4 mt-3">
                                <label>Cost UAE Freezone (AED)</label>
                                <input type="number" class="form-control" name="visa_costs[{{ $index }}][uae_freezone]" value="{{ $visa->uae_freezone }}" step="0.01" required>
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
