@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('update-category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" value="{{ $category->name }}" name="name" id="" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" value="{{ $category->slug }}" name="slug" id="" class="form-control">
                    </div>
                </div>
      
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="3" class="form-control"> {{ $category->description }} </textarea>
                </div>
                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" {{ $category->status == '1' ? 'checked' : '' }} name="status" id="">

                    <label for="">Popular</label>
                    <input type="checkbox" {{ $category->popular == '1' ? 'checked' : '' }} name="popular" id="">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <textarea name="meta_title" id="" rows="3" class="form-control"> {{ $category->meta_title }} </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" id="" rows="3" class="form-control"> {{ $category->meta_keywords }} </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="3" class="form-control"> {{ $category->meta_descrip }} </textarea>
                </div>
                @if ($category->image)
                    <img class="w-25" src="{{ asset('assets/uploads/category/'.$category->image) }}" alt="">
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