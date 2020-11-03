@extends('layouts.admin_layout.admin_layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      @if(Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ Session::get('success_message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Categories</h3>
                <a href="{{ url('admin/add-edit-category') }}" style="max-width: 150px; float: right;display: inline-block;" class="btn btn-block btn-success">Add category</a>
              </div>
              <!-- /.card-header -->
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Category name</th>
                    <th>Url</th>
                    <th>Section</th>
                    <th>Parent Category</th> 
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($categories as $categorie)
                    @if(!isset($categorie->parentcategory->category_name))
                      <?php $parent_category = "Root"; ?>
                    @else
                      <?php $parent_category = $categorie->parentcategory->category_name; ?>
                    @endif
	                  <tr>
	                    <td>{{ $categorie->id }}</td>
                      <td>{{ $categorie->category_name }}</td>
                      <td>{{ $categorie->url }}</td>
                      <td>{{ $categorie->section->name }}</td>
                      <td>{{ $parent_category }}</td>
	                    <td>
	                    	@if($categorie->status==1)
	                    		<a class="updateCategoryStatus" id="category-{{ $categorie->id }}" category_id="{{ $categorie->id }}" href="javascript:void(0)"><span style="color: green;">Active</span></a>
	                    	@else
	                    		<a class="updateCategoryStatus" id="category-{{ $categorie->id }}" category_id="{{ $categorie->id }}" href="javascript:void(0)"><span style="color: red;">Inactive</span></a>
	                    	@endif
	                    </td>
                      <td>
                        <a href="{{ url('admin/add-edit-category/'.$categorie->id) }}">Edit</a>&nbsp;&nbsp;
                        <a href="javascript:void(0)" class="confirmDelete" record="category" recordid="{{ $categorie->id }}" ><span style="color: red;">Delete</span></a>
                      </td>
	                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection