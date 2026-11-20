
@extends('dashborad.layout.min')


@section('body')




<div class="page-content">
      <div class="page-header d-flex flex-wrap justify-content-between align-items-start gap-3">
        <div>
          <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item active">Products</li></ol></nav>
          <h1>Products</h1>
          <p>Manage your product catalog</p>
        </div>
        <a href="{{route('product.create')}}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add Product</a>
      </div>

      <div class="card mb-4"><div class="card-body"><div class="filters-bar mb-0">
        <div class="search-bar"><i class="bi bi-search"></i><input type="text" placeholder="Search products..."></div>
        <select class="form-select" style="width:auto;min-width:140px;"><option value="">All Categories</option><option>Electronics</option><option>Fashion</option><option>Home & Garden</option></select>
        <select class="form-select" style="width:auto;min-width:140px;"><option value="">All Status</option><option>Active</option><option>Inactive</option><option>Out of Stock</option></select>
        <button class="btn btn-outline-primary btn-sm"><i class="bi bi-funnel"></i> Filter</button>
      </div></div></div>

      <div class="card">
        <div class="card-body p-0">
          <div class="table-wrapper">
            <table class="table">
              <thead><tr><th>Product</th><th>Category</th><th>Price</th><th>Discount</th><th>Stock</th><th>Status</th><th>Created</th><th>Actions</th></tr></thead>
              <tbody>

                @foreach ($products as $product )



                <tr>
                  <td data-label="Product">
                    <div class="d-flex align-items-center gap-2">

                        @foreach ($product->image as $image )


                        <div class="product-thumb bg-red">
                           <img width="45px" src="{{asset('storage/' . $image['imgName'])}}" alt="">
                        </div>
                        @endforeach
                        <span class="fw-semibold">{{$product->name}}</span>
                    </div>
                </td>
                  <td data-label="Category">{{$product->cat->name}}</td>
                  <td data-label="Price">${{$product->price}}</td>
                  <td data-label="Discount">{{$product->sale}}%</td>
                  <td data-label="Stock">{{$product->count}}</td>
                  <td data-label="Status"><span class="badge badge-status-cancelled">Out of Stock</span></td>
                  <td data-label="Created">May 8, 2025</td>
                  <td data-label="Actions">
                    <div class="gap-actions">
                        <button class="btn btn-icon btn-outline-info btn-sm"><i class="bi bi-eye"></i></button>
                        <a href="product-create.html" class="btn btn-icon btn-outline-warning btn-sm"><i class="bi bi-pencil"></i></a>
                        <form method="POST" action="{{route('product.destroy' , $product->id)}}">
                            @method('delete')
                            @csrf

                            <button class="btn btn-icon btn-outline-danger btn-sm"  data-item="Action Camera 4K"><i class="bi bi-trash"></i></button>
                        </form>
                    </div></td>
                </tr>
                    @endforeach

              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer d-flex flex-wrap justify-content-between align-items-center gap-2">
          <span class="text-muted" style="font-size:0.8125rem;">Showing 1-5 of 1,284 products</span>
          <nav><ul class="pagination mb-0"><li class="page-item disabled"><a class="page-link" href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>

            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><span class="page-link">...</span></li>
            <li class="page-item"><a class="page-link" href="#">257</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="bi bi-chevron-right"></i> </a></li>
        </ul>
        </nav>
        </div>
      </div>
    </div>






@endsection


