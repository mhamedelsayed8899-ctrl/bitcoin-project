
@extends('dashborad.layout.min')



@section('body')



    <div class="page-content">
      <div class="page-header d-flex flex-wrap justify-content-between align-items-start gap-3">
        <div>
          <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item active">Admins</li></ol></nav>
          <h1>Admin Management</h1>
          <p>Manage administrator accounts and permissions</p>
        </div>
        <a href="{{route('admin.create')}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Admin</a>
      </div>

      <!-- Filters -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="filters-bar mb-0">
            <div class="search-bar"><i class="bi bi-search"></i><input type="text" placeholder="Search by name or email..."></div>
            <select class="form-select" style="width: auto; min-width: 140px;">
              <option value="">All Roles</option>
              <option>Super Admin</option>
              <option>Admin</option>
              <option>Moderator</option>
            </select>
            <select class="form-select" style="width: auto; min-width: 140px;">
              <option value="">All Status</option>
              <option>Active</option>
              <option>Inactive</option>
            </select>
            <button class="btn btn-outline-primary btn-sm"><i class="bi bi-funnel"></i> Filter</button>
          </div>
        </div>
      </div>

      <!-- Admins Table -->
      <div class="card">
        <div class="card-body p-0">
          <div class="table-wrapper">
            <table class="table">
              <thead>
                <tr>
                  <th>Admin</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Created</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $admins as $admin )

                <tr>
                  <td data-label="Admin"><div class="table-user"><div class="avatar-placeholder" style="background:#0d6efd;">
                    <img src="{{asset('storage/'.$admin->img)}}" alt=""></div><div class="table-user-info"><div class="name">{{$admin->name}}</div></div></div></td>
                  <td data-label="Email">{{$admin->email}}</td>
                  <td data-label="Phone">+2 {{$admin->phone}}</td>
                  <td data-label="Role"><span class="badge badge-role-super">{{$admin->role}}</span></td>
                  <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                  <td data-label="Created">{{$admin->created_at}}</td>
                  <td data-label="Actions">
                    <div class="gap-actions">

                        <button class="btn btn-icon btn-outline-info btn-sm" data-bs-toggle="tooltip" title="View"><i class="bi bi-eye"></i></button>
                      <a href="{{route('admin.edit' , $admin->id)}}" class="btn btn-icon btn-outline-warning btn-sm" data-bs-toggle="tooltip" title="Edit"><i class="bi bi-pencil"></i></a>
                        @include('dashborad.layout.model')

                    </div>
                  </td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2">
          <span class="text-muted" style="font-size:0.8125rem;">Showing 1-5 of 12 admins</span>
          <nav><ul class="pagination mb-0">
            <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul></nav>
        </div>
      </div>
    </div>

@endsection
