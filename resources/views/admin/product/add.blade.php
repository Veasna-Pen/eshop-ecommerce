@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control" name="cate_id" id="">
                            <option value="">Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" class="form-control">
                    </div>
                </div>
      
                <div class="col-md-12">
                    <label for="">Small Description</label>
                    <textarea name="small_description" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Original Price</label>
                        <input type="number" name="original_price" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Selling Price</label>
                        <input type="number" name="selling_price" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tax</label>
                        <input type="number" name="tax" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" id="" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" id="">

                    <label for="">Trending</label>
                    <input type="checkbox" name="trending" id="">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <textarea name="meta_title" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12">
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection