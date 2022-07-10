@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Category</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-category') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" name="slug" id="" class="form-control" required>
                    </div>
                </div>
      
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea name="description" id="" rows="3" class="form-control" required></textarea>
                </div>
                <div class="col-md-6">
                    <label for="">Status</label>
                    <input type="checkbox" name="status" id="">

                    <label for="">Popular</label>
                    <input type="checkbox" name="popular" id="">
                </div>
                <div class="col-md-12">
                    <label for="">Meta Title</label>
                    <textarea name="meta_title" id="" rows="3" class="form-control" required></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" id="" rows="3" class="form-control" required></textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" id="" rows="3" class="form-control" required></textarea>
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