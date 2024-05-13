@extends('admin.dashboard')
@section('title','Index Product')
@section('content')

        <!--breadcrumb-->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Advanced Table</h4>
            
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th>
                              SN
                            </th>
                            <th>
                              Product Name
                            </th>
                            <th>
                              Category Name
                            </th>
                            <th>
                              Prices
                            </th>
                            <th>
                              Status
                            </th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_index as $key => $category)
                                <tr>
                                    <td>
                                        {{$key + 1}}
                                    </td>
                                    <td>
                                        {{$category->name}}
                                    </td>
                                    <td>
                                        {{$category->category_name}}
                                    </td>
                                    <td>
                                        {{$category->price}}
                                    </td>
                                    <td>
                                        {{$category->status}}
                                    </td>
                                    <td><img src="{{asset($category->image)}}" width="150px" height="150px" alt=""></td>

                                    <td>
                                        <a href="{{route('admin.edit.product',$category->id)}}" class="btn btn-warning px-3 radius-30"> Edit</a>

                                    <a href="{{route('admin.delete.product',$category->id)}}" id="delete" class="btn btn-danger px-3 radius-30"> Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
                        


<!--end page wrapper -->
@endsection