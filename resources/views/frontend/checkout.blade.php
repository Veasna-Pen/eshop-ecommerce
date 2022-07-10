@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
           <!-- @csrf-->
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-6">
                                    <label for="FirstName">First Name</label>
                                    <input type="text" name="fname" value="{{ Auth::user()->name }}" id="" class="form-control"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="LastName">Last Name</label>
                                    <input type="text" name="lname" value="{{ Auth::user()->lname }}"  id="" class="form-control"
                                        placeholder="Enter Last Name">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="Email">Email</label>
                                    <input type="text" name="email" value="{{ Auth::user()->email }}"  id="" class="form-control"
                                        placeholder="Enter Email">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="Phone">Phone Number</label>
                                    <input type="text" name="phone" value="{{ Auth::user()->phone }}"  id="" class="form-control"
                                        placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="Address1">Address 1</label>
                                    <input type="text" name="address1" value="{{ Auth::user()->address1 }}"  id="" class="form-control"
                                        placeholder="Enter Address 1">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="Address2">Address 2</label>
                                    <input type="text" name="address2" value="{{ Auth::user()->address2 }}"  id="" class="form-control"
                                        placeholder="Enter Address 2">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="city">City</label>
                                    <input type="text" name="city" value="{{ Auth::user()->city }}"  id="" class="form-control"
                                        placeholder="Enter City">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="Country">Country</label>
                                    <input type="text" name="country" value="{{ Auth::user()->country }}"  id="" class="form-control"
                                        placeholder="Enter Country">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="State">State</label>
                                    <input type="text" name="state" value="{{ Auth::user()->state }}"  id="" class="form-control"
                                        placeholder="Enter State">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="PinCode">Pin Code</label>
                                    <input type="text" name="pincode" value="{{ Auth::user()->pincode }}"  id="" class="form-control"
                                        placeholder="Enter Pin Code">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <hr>
                            @if ($cartitems->count() > 0)
                                
                            <table class="table table-borded">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty }}</td>
                                            <td>$ {{ $item->products->selling_price }}</td>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary float-end">Place Order</button>
                            @else
                            <div class="card-body text-center">
                                <h3>No Products In Cart</h3>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
