@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-product/'.$products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <select class="form-control" name="cate_id" id="">
                            <option value="">{{ $products->category->name }}</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" value="{{ $products->name }}" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" name="slug" value="{{ $products->slug }}" id="" class="form-control">
                    </div>
                </div>
      
                <div class="col-md-12">
                    <label for="">Small Description</label>
                    <textarea name="small_description" id="" rows="3" class="form-control">{{ $products->small_description }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="3" class="form-control">{{ $products->description }}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Original Price</label>
                        <input type="number" name="original_price" value="{{ $products->original_price }}" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Selling Price</label>
                        <input type="number" name="selling_price" value="{{ $products->selling_price }}" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Tax</label>
                        <input type="number" name="tax" value="{{ $products->tax }}" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" value="{{ $products->qty }}" id="" class="form-control">
                    </div>
                </div>
                
                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" {{$products->status == '1' ? 'checked' : ''}} name="status" id="">

                    <label for="">Trending</label>
                    <input type="checkbox" {{$products->trending == '1' ? 'checked' : ''}} name="trending" id="">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <textarea name="meta_title" id="" rows="3" class="form-control">{{ $products->meta_title }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" id="" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                </div>
                @if ($products->image)
                    <img class="w-25" src="{{ asset('assets/uploads/product/'.$products->image) }}" alt="">
                @endif
                <div class="col-md-12">
                    <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection