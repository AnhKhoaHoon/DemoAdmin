@extends('admin.dashboard')
@section('title', 'Category Create')
@section('content')
   
        <section class="section">
            <div class="section-header">
                <h1>Category Create</h1>            
            </div>         
                <div class="row">
                    <div class="col-12">
                        <form action="{{route('admin.store.category')}} " method="post">
                            @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Create</h4>
                            </div>
                           
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="category_name" class="form-control">
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
   
@endsection