@extends('Layouts.app')

@section('main')
    <h5><i class="bi bi-ticket-detailed-fill"></i> Product Details</h5>
    <hr>
    <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">View</li>
        </ol>
    </nav>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-bold">{{ $product->name }}</h5>
                <p class="card-title fw-bold">{{ $product->Institute }}</p>
                <p class="fw-semibold">Location: <small class="text-success">{{ $product->Location }}</small></p>
                <p class="fw-semibold">StartDate: <small class="text-success">{{ $product->startDate }}</small></p>
                <p class="fw-semibold">EndDate: <small class="text-success">{{ $product->endDate }}</small></p>
                <p class="card-text text-secondary" ><b class="text-success">{{ $product->approvalStatus }}<b></p>
                <p class="card-text text-secondary">IRA REQUIRED: <b class="text-success">{{ $product->iraRequired }}<b></p>
            </div>
        </div>

@endsection
