
@extends('dashborad.layout.min')



@section('body')




    <div class="page-content">
      <div class="page-header">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item"><a href="products.html">Products</a></li><li class="breadcrumb-item active">Create Product</li></ol></nav>
        <h1>Create Product</h1>
        <p>Add a new product to your catalog</p>
      </div>

      <div class="row">
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <form  action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
                @csrf



        <div class="col-lg-4">
            @error('img')

            <p style="color: red">{{$message}}</p>

            @enderror
            @error('img.*')

            <p style="color: red">{{$message}}</p>

            @enderror
          <div class="card">
            <div class="card-header"><h5>Product Image</h5></div>
            <div class="card-body image-upload-wrapper">
              <div class="image-upload"><input type="file" multiple name="img[]" class="image-upload-input " accept="image/*"><i class="bi bi-cloud-arrow-up d-block"></i><p>Click to upload product image</p><small class="text-muted">Recommended: 800x800px</small></div>
              <img src="" alt="Preview" class="image-preview mt-3 d-none w-100" style="height:200px;object-fit:cover;">
            </div>
          </div>
        </div>




                <div class="form-section-title">Product Information</div>
                <div class="row g-3 mb-4">
                     @error('name')

            <p style="color: red">{{$message}}</p>

            @enderror
                  <div class="col-md-8"><label class="form-label">Product Name <span class="text-danger">*</span></label><input type="text" class="form-control" name="name" placeholder="Enter product name" ></div>

                  <div class="col-md-6">
                     @error('cat_id')

            <p style="color: red">{{$message}}</p>

            @enderror
                    <label class="form-label">Category <span class="text-danger">*</span></label>

                    <select class="form-select" name="cat_id" >
                        @foreach ( $cats as $cat )

                        <option value="{{$cat->id}}">{{$cat->name}}</option>

                        @endforeach
                    </select>
                </div>

                </div>

                <div class="form-section-title">Pricing & Inventory</div>
                <div class="row g-3 mb-4">
                  <div class="col-md-4">
                     @error('price')

            <p style="color: red">{{$message}}</p>

            @enderror

                    <label class="form-label">Price <span class="text-danger">*</span></label><div class="input-group"><span class="input-group-text">$</span><input type="number" class="form-control" name="price" placeholder="0.00" step="0.01" ></div></div>
                  <div class="col-md-4">
                     @error('sale')

            <p style="color: red">{{$message}}</p>

            @enderror
                    <label class="form-label">Discount (%)</label><input type="number" class="form-control" name="sale" placeholder="0" min="0" max="100"></div>
                  <div class="col-md-4">
                     @error('count')

            <p style="color: red">{{$message}}</p>

            @enderror
                    <label class="form-label">Stock <span class="text-danger">*</span></label><input type="number" class="form-control" name="count" placeholder="0" ></div>
                </div>

                <div class="form-section-title">Settings</div>


                <div class="d-flex gap-2 btn-group-actions">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Save Product</button>
                  <a href="products.html" class="btn btn-outline-primary"><i class="bi bi-x-lg"></i> Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>



      </div>
    </div>






@endsection
