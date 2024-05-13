@extends('admin.dashboard')
@section('title', 'Edit Product')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
       
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div class="card">
                <form action="{{route('admin.update.product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body p-4">
                    <h5 class="mb-4">Update</h5>
                    <input type="hidden" name="id" value="{{$data_edit->id}}">
                    <div class="row mb-3">
                        <label for="input42" class="col-sm-3 col-form-label">Enter Your Name</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <input name="name" type="text" class="form-control" id="input42" placeholder="Enter Your Name" value="{{$data_edit->name}}">
                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-user'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input43" class="col-sm-3 col-form-label"> Update Price</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <input name="price" type="text" class="form-control" id="input43" placeholder="Enter Your Price" value="{{$data_edit->price}}">
                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-pin'></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input45" class="col-sm-3 col-form-label">Update Status</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <input name="status" type="text" class="form-control" id="input45" placeholder="Please Enter Status" value="{{$data_edit->status}}">
                                <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-link'></i></span>
                            </div>
                        </div>
                    </div>
                   
                   
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="input48">
                                <label class="form-check-label" for="input48">Check me out</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <button type="reset" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--end row-->
@endsection