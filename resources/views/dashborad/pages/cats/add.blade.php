
@extends('dashborad.layout.min')




@section('body')



    <div class="page-content">
      <div class="page-header">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item"><a href="categories.html">Categories</a></li><li class="breadcrumb-item active">Create Category</li></ol></nav>
        <h1>Create Category</h1>
        <p>Add a new product category</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <form  action="{{route('categorie.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 image-upload-wrapper">
                  <div class="form-section-title">Category Image</div>
                  <div class="image-upload"><input type="file" class="image-upload-input " name="img" accept="image/*"><i class="bi bi-cloud-arrow-up d-block"></i><p>Click to upload category image</p></div>
                  <img src="" alt="Preview" class="image-preview mt-3 d-none">
                </div>

                <div class="form-section-title">Category Details</div>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">

                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" placeholder="e.g. Electronics" >
                </div>




                </div>

                <div class="d-flex gap-2 btn-group-actions">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Save Category</button>
                  <a href="categories.html" class="btn btn-outline-primary"><i class="bi bi-x-lg"></i> Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>






@endsection

