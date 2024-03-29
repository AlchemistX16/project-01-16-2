@extends('layouts.master_backend')
@section('con')
<div class="container-xxl flex-grow-1 container-p-y" style="color:#000">
  <div class="card">
      <h5 class="card-header">Product</h5>
      <div class="table-responsive text-nowrap">
          <a href="{{ route('p.create') }}"class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
        <table class="table mt-4">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>images</th>
              <th>Price</th>
              <th>Description</th>
              <th>Created_at</th>
              <th>Update_at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0" style="color:#000">
            @foreach ($product as $pro)
            <tr>
            <td>{{ $product->firstItem() + $loop->index }}</td>
            <td>{{ $pro->name }}</td>
            <td>
              <img src ="{{ asset('backend/product/resize/'.$pro->image) }}">
            </td>
            <td>{{ $pro->price }}</td>
            <td>{{ $pro->description }}</td>
            <td>{{ $pro->created_at }}</td>
            <td>{{ $pro->updated_at }}</td>
            <td>
              <a href="{{ route('p.edit',$pro->product_id) }}"><i stly="font-color: black">แก้ไข</i></a>
              <a href="{{ url('admin/product/deiete/'.$pro->product_id) }}"><i>ลบ</i></a>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection