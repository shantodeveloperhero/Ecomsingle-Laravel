@extends('admin.layouts.template')
@section('page_title')
Add Pending Orders - Single Ecom
@endsection
@section('content')
<div class="container my-5">
    <div class="card p-4">
        <div class="card-title">
            <h2 class="text-center">Pending Orders</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>User Id</th>
                    <th>Shipping Information</th>
                    <th>Product Id</th>
                    <th>Quantity</th>
                    <th>Total Will Pay</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                @foreach ($pending_orders as $Oredr)
                <tr>
                    <td>{{ $Oredr->userid }}</td>
                    <td>
                        <ul>
                            <li>Phone Number - {{ $Oredr->shipping_phoneNumber }}</li>
                            <li>City - {{ $Oredr->shipping_city }}</li>
                            <li>Postal Code - {{ $Oredr->shipping_postalcode }}</li>
                        </ul>
                    </td>
                    <td>{{ $Oredr->product_id }}</td>
                    <td>{{ $Oredr->quantity}}</td>
                    <td>{{ $Oredr->total_price }}</td>
                    <td>{{ $Oredr->userid }}</td>
                    <td><a href="" class="btn btn-success">Approve Now</a></td>
                </tr>
                    
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection