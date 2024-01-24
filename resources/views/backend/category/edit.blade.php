@extends('layouts.master_backend')
@section('con')
<form method="POST" action="{{  url('admin/category/update/'.$cat->category_id) }}">
@csrf
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
      <div class="col-md-12">
        <div class="card mb-9">
          <h5 class="card-header">Edit Product</h5>
          <div class="card-body">
            <div>
              <label for="defaultFormControlInput" class="form-label">Name</label>
              <input
                type="text"
                name="name"
                value="{{ $cat->name }}"
                class="form-control"
                id="defaultFormControlInput"
                placeholder="กรุณากรอกประเภทสินค้า"
                aria-describedby="defaultFormControlHelp"/>
              <input type="submit" value="อัพเดทข้อมูล" class="btn btn-primary mt-3">
              <div class="mt-3">
              @error('name')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              </div>
              <a href="{{ route('c.index') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
 
</div>

</form>
@endsection