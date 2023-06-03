@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
Pending Orders
@if (session()->has('message'))
<div class="alert alert-success">
  {{ session()->get('message') }}
</div>
@endif

<table class="table">
    <tr>
        <th>Product Id</th>
        <th>Price</th>
    </tr>
    @foreach ($pending_orders as $Oredr)
    <tr>
        <td>
            {{ $Oredr->product_id }}
        </td>
        <td>
            {{ $Oredr->total_price }}
        </td>
    </tr>
    @endforeach
    
</table>


@endsection