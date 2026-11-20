

@extends('dashborad.layout.min')


@section('body')



    <div class="page-content">
      <div class="page-header d-flex flex-wrap justify-content-between align-items-start gap-3">
        <div>
          <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item active">Categories</li></ol></nav>
          <h1>Categories</h1>
          <p>Organize your products into categories</p>
        </div>
        <a href="{{route('categorie.create')}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Category</a>
      </div>

      <div class="card mb-4"><div class="card-body"><div class="filters-bar mb-0">
        <div class="search-bar"><i class="bi bi-search"></i><input type="text" placeholder="Search categories..."></div>
        <select class="form-select" style="width:auto;min-width:140px;"><option value="">All Status</option><option>Active</option><option>Inactive</option></select>
        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-funnel"></i> Filter</button>
      </div></div></div>

      <div class="card">
        <div class="card-body p-0">
          <div class="table-wrapper">
            <table class="table">
              <thead><tr><th>Image</th><th>Category Name</th><th>Slug</th><th>Products</th><th>Status</th><th>Actions</th></tr></thead>
              <tbody>
                @foreach ( $cats as $cat )

                <tr>
                    <td data-label="Image">

                        <img width="40px" src="{{asset('storage/' . $cat->img)}}" alt="">

                    </td>
                    <td data-label="Category Name" class="fw-semibold">{{$cat->name}}</td>
                    <td data-label="Slug"><code style="color:var(--text-muted);">{{$cat->name}}</code></td>
                    <td data-label="Products">{{$cat->product_count}}</td>
                    <td data-label="Status"><span class="badge badge-status-active">Active</span></td>
                    <td data-label="Actions"><div class="gap-actions"><button class="btn btn-icon btn-outline-info btn-sm"><i class="bi bi-eye"></i></button><a href="category-create.html" class="btn btn-icon btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a><button class="btn btn-icon btn-outline-danger btn-sm" data-action="delete" data-item="Electronics"><i class="bi bi-trash"></i></button></div></td>
                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2">
          <span class="text-muted" style="font-size:0.8125rem;">Showing 1-5 of 48 categories</span>
          <nav><ul class="pagination mb-0"><li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li><li class="page-item active"><a class="page-link" href="#">1</a></li><li class="page-item"><a class="page-link" href="#">2</a></li><li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i></a></li></ul></nav>
        </div>
      </div>
    </div>





@endsection



