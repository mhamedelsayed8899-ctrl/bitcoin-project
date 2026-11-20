

@extends('dashborad.layout.min')






@section('body')






    <div class="page-content">
      <div class="page-header d-flex flex-wrap justify-content-between align-items-start gap-3">
        <div>
          <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item active">Users</li></ol></nav>
          <h1>User Management</h1>
          <p>Manage registered customer accounts</p>
        </div>

        <a href="{{route('user.create')}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add User</a>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <div class="filters-bar mb-0">
            <div class="search-bar"><i class="bi bi-search"></i><input type="text" placeholder="Search by name or email..."></div>
            <select class="form-select" style="width:auto;min-width:140px;"><option value="">All Status</option><option>Active</option><option>Inactive</option></select>
            <button class="btn btn-outline-primary btn-sm"><i class="bi bi-funnel"></i> Filter</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body p-0">
          <div class="table-wrapper">
            <table class="table">
              <thead>
                <tr><th>User</th><th>Email</th><th>Phone</th><th>Orders</th><th>Status</th><th>Joined</th><th>Actions</th></tr>
              </thead>
              <tbody>


                @foreach ($users as $user )

                <tr>
                  <td data-label="User"><div class="table-user">
                    <div class="avatar-placeholder" style="background:#3fb950;">

                        <img src="{{asset('storage/'.$user->img)}}" alt="">

                    </div>
                    <div class="table-user-info"><div class="name">{{$user->name}}</div></div></div></td>
                  <td data-label="Email">{{$user->email}}</td>
                  <td data-label="Phone">+2 {{$user->phone}}</td>
                  <td data-label="Orders">24</td>
                  <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                  <td data-label="Joined">{{$user->created_at}}</td>
                  <td data-label="Actions"><div class="gap-actions">
                    <button class="btn btn-icon btn-outline-info btn-sm"><i class="bi bi-eye"></i></button>
                    <a href="{{route('user.edit' , $user->id)}}" class="btn btn-icon btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>

                        @include('dashborad.layout.modell')




                </div>
                </td>
                </tr>

                @endforeach


              </tbody>
            </table>
          </div>
        </div>


        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2">
          <span class="text-muted" style="font-size:0.8125rem;">Showing 1-5 of 8,432 users</span>
          <nav><ul class="pagination mb-0">
            <li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#">1687</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul></nav>
        </div>
      </div>
    </div>















@endsection
