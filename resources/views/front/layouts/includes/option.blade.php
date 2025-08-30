@if(isset($datas) && count($datas)>0)
<div class="col-md-12 col-lg-12 mb-6">
    <div class="form-group">
        <select name="sub_service_id" id="sub_service_id" class="form-control" required>
            <option value="">Select Sub Service</option>
            @foreach($datas as $data)
            <option value="{{$data->id}}">{{$data->name}}</option>
            @endforeach
            
        </select>
    </div>
</div>
@endif