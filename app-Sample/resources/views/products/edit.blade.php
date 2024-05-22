@extends('Layouts.app')
@section('main')
<h5><i class="bi bi-pencil-square"></i> Edit Event</h5>
      <hr>
      <nav class="my-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href ="/"> Home </a></li>
            <li class="breadcrumb-item active">Edit Event</li>
        </ol>
      </nav>
      <div class="col-md-6">
        <form action="/products/update/{{$product->id}}" method="post">
            @csrf
            @method('PUT')
            <div class="row mb-4">
              <div class="col-md-12">
                <label for="name" class="form-label" >Name</label>
                <input type="text" name="name" id="name" class="form-control 
                @if($errors->has('name')) {{'is-invalid'}} @endif" placeholder="Event Name" value="{{ old('name',$product->name) }}">
                @if($errors->has('name'))
                <div class="invalid-feedback">{{$errors->first("name")}}</div>
                @endif
            </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12">
                <label for="Institute" class="form-label ">Institute</label>
                <input type="text" name="Institute" id="Institute"  value="{{ old('Institute',$product->Institute) }}" class="form-control @if($errors->has('Institute')) {{'is-invalid'}} @endif" placeholder="Organization">
                @if($errors->has('Institute'))
                <div class="invalid-feedback">{{$errors->first("Institute")}}</div>
                @endif
            </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12">
                <label for="Location" class="form-label">Location</label>
                <input type="text" name="Location" id="Location" class="form-control @if($errors->has('Location')) {{'is-invalid'}} @endif" value="{{ old('Location',$product->Location) }}">
                @if($errors->has('Location'))
                <div class="invalid-feedback">{{$errors->first("Location")}}</div>
                @endif  
            </div>
            </div>
            <div class="row mb-4 ">
              <div class="col-md-6">
                  <label for="startDate" class="form-label" >Event Starting Date</label>
                  <input type="date" value="{{ old('startDate',$product->startDate) }}" class="form-control @if($errors->has('startDate')) {{'is-invalid'}} @endif" id="startDate" name="startDate">
                  @if($errors->has('startDate'))
                <div class="invalid-feedback">{{$errors->first("startDate")}}</div>
                @endif
                </div>
              <div class="col-md-6">
                  <label for="endDate" class="form-label" >Event Ending Date</label>
                  <input type="date" value="{{ old('endDate',$product->endDate) }}" class="form-control @if($errors->has('endDate')) {{'is-invalid'}} @endif" id="endDate" name="endDate">
                  @if($errors->has('endDate'))
                <div class="invalid-feedback">{{$errors->first("endDate")}}</div>
                @endif
                </div>
            </div>          
            <div class="row mb-4">
                    <div class="col-md-6">
                        <label for="approvalStatus" class="form-label">IQAC Verification</label>
                        <select id="approvalStatus" name="approvalStatus" class="form-control @if($errors->has('approvalStatus')) {{'is-invalid'}} @endif" value="{{ old('endDate',$product->approvalStatus) }}">
                        <option {{ old('approvalStatus') == 'Approved' ? 'selected' : '' }}>Approved</option>
                        <option {{ old('approvalStatus') == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                        </select>
                        @if($errors->has('approvalStatus'))
                <div class="invalid-feedback">{{$errors->first("approvalStatus")}}</div>
                @endif
                    </div>
                    <div class="col-md-6" style="padding-left: 10%; text-align:center">
                        <label for="iraRequired" class="form-label">IRA Required</label><br>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input @if($errors->has('iraRequired')) {{'is-invalid'}} @endif" type="radio" name="iraRequired" id="iraYes" value="yes" {{ old('iraRequired',$product->iraRequired) == 'yes' ? 'checked' : '' }}>
                        <label class="form-check-label" name="iraRequired" for="iraYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input @if($errors->has('iraRequired')) {{'is-invalid'}} @endif" type="radio" name="iraRequired" id="iraNo" value="no" {{ old('iraRequired'),$product->iraRequired == 'no' ? 'checked' : '' }}>
                        <label class="form-check-label" name="iraRequired" for="iraNo">No</label>
                    </div>
                    @if($errors->has('iraRequired'))
                           <div class="invalid-feedback">IRA Required or Not</div>
                        @endif 
                    </div>
                </div>
                </div>
                    <div class="mb-3">
                    <button type="Submit" class="btn btn-dark"><i class="bi bi-floppy2-fill"></i>Update Event</button>
                    </div>
                    <div class="mb-3">
                    <button type="reset" class="btn btn-danger"> Clear All</button>
                 </div>
         </form>
     </div>
   @endsection