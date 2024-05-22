@extends('Layouts.app')
@section('main')
    <div class="d-flex justify-content-between">
      <div><h5><i class="bi bi-journal-richtext" ></i> Event Status</h5></div>
      <a href='/products/create' class="btn btn-primary" ><i class="bi bi-plus-circle"></i> New Event</a>
  </div>
  <div class="col-md-12 table-responsive mt-3">
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>S.No</th>
        <th>Event Name</th>
        <th>Institute</th>
        <th>Location</th>
        <th>Event Starting Date</th>      
        <th>Event Ending date</th>
        <th>IQAC Verification</th>
        <th>IRA Required</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($products as $product)
      @php
        $index = ($products->currentPage()-1) * $products->perPage() + $loop->iteration;
      @endphp
        <tr>
          <td>{{$loop->iteration}}</td>
          <td><a href="/products/show/{{$product->id}}" style="text-decoration: none;">{{$product->name}}</a></td>
          <td>{{$product->Institute}}</td>
          <td>{{$product->Location}}</td>
          <td>{{$product->startDate}}</td>
          <td>{{$product->endDate}}</td>
          <td>{{$product->approvalStatus}}</td>
          <td>{{$product->iraRequired}}</td>
          <td>
            <a href="products/edit/{{$product->id}}" class="btn btn-dark btn-sm"><i class="bi bi-pencil-square"></i></a>
            <a href="products/delete/{{$product->id}}" onclick="return confirm('Are you sure you want to Delete?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>          </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    {{$products->links()}}
  </div>
@endsection