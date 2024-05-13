@extends('admin.dashboard')
@section('title', 'Product Create')
@section('content')
   
        <section class="section">
            <div class="section-header">
                <h1>Product Create</h1>            
            </div>         
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.store.product')}} " method="post">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Create</h4>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="category_id" class="form-control selectric">
                                            @foreach ($data as $key => $data_ca)
                                            <option value="{{ $data_ca->id }}"> {{ $data_ca->category_name }} </option>
                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Product Price</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="status" class="form-control selectric">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="input45" class="col-sm-3 col-form-label">Image</label>
                                    <div class="col-sm-9">
                                        <div class="position-relative input-icon">
                                            <input type="file" name="image" class="form-control" id="image" >
                                            <span class="position-absolute top-50 translate-middle-y"><i class='bx bx-link'></i></span>
                                        </div>
            
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Image</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                         <img id="showImage"
                                            src="{{ !empty($data->image) ? url('upload/product_image/' . $data->image) : url('upload/no_image.jpg') }}"
                                            width="80" height="80" class="rounded-circle shadow" alt="">
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Create</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    </div>
                </div>
            
        </section>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#image').change(function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#showImage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(e.target.files['0']);
                })
            })
        </script>
@endsection