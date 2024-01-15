@extends('layouts.master_backend')
@section('con')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
      <h5 class="card-header">Product</h5>
      <div class="table-responsive text-nowrap">
          <a href="{{ route('p.create') }}"class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
        <table class="table mt-4">
          <thead class="table-dark">
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Created_at</th>
              <th>Update_at</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <a href="{{ url('admin/category/edit',$cat->category_id) }}"><i stly="font-color: black">แก้ไข</i></a>
              <a href="#"><i>ลบ</i></a>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection