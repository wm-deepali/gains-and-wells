@foreach($datas as $data)
<option value="{{$data->id}}">{{$data->quantity}} Visa{{$data->quantity > 1 ? 's' : ''}}</option>
@endforeach