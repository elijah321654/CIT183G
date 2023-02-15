@foreach ($customers as $customer)
<table style="width:100%; border: 1px solid black;">
<td style="width:20%; border: 4px solid black;">{{$customer->lastName}}, {{$customer->firstName}}</td>
<td style="width:20%; border: 4px solid black;">{{$customer->email}}<br></td>
<td style="width:20%; border: 4px solid black;"><b>{{$customer->address}}</b><br></td>
<td style="width:20%; border: 4px solid black;"><b>{{$customer->contactNumber}}</b><br></td>
</table>
@endforeach