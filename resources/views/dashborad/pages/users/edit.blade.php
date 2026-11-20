@extends('dashborad.layout.min')






@section('body')






    <div class="page-content">
      <div class="page-header">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item"><a href="users.html">Users</a></li><li class="breadcrumb-item active">Create User</li></ol></nav>
        <h1>Create User</h1>
        <p>Add a new customer account</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <form action="{{route('user.update' , $user->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 text-center image-upload-wrapper">
                      @error("img")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                  <div class="form-section-title text-start">Profile Image</div>
                  <div class="image-upload mx-auto" style="max-width:280px;">
                    <input type="file" class="image-upload-input " name="img" accept="image/*">
                    <i class="bi bi-cloud-arrow-up d-block"></i>
                    <p>Click to upload profile image</p>
                  </div>
                  <img src="" alt="Preview" class="image-preview mt-3 d-none mx-auto">
                </div>

                <div class="form-section-title">Personal Information</div>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                      @error("name")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" value="{{old('name')}}" class="form-control" name="name" placeholder="Enter full name" >
                </div>
                  @error("email")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                  <div class="col-md-6"><label class="form-label">Email Address <span class="text-danger">*</span></label>
                    <input type="email" value="{{old('email')}}" class="form-control" name="email" placeholder="user@email.com" >
                </div>
                  @error("phone")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                  <div class="col-md-6"><label class="form-label">Phone Number</label>
                    <input type="tel" value="{{old('phone')}}" class="form-control" name="phone" placeholder="+1 (555) 000-0000">
                </div>
                  <div class="col-md-6"><label class="form-label">Status <span class="text-danger">*</span></label><select class="form-select" name="status" ><option>Active</option><option>Inactive</option></select></div>
                </div>

                <div class="form-section-title">Security</div>
                <div class="row g-3 mb-4">

                    @error("password")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                  <div class="col-md-6">

                    <label class="form-label">Password <span class="text-danger">*</span></label>
                    <div class="password-field">
                        <input type="password" value="{{old('password')}}" class="form-control" name="password" placeholder="Enter password" >
                        <button type="button" class="password-toggle"><i class="bi bi-eye"></i></button>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <div class="password-field"><input type="password" class="form-control" name="confirm" placeholder="Confirm password" ><button type="button" class="password-toggle"><i class="bi bi-eye"></i></button></div>
                  </div>
                </div>

                <div class="d-flex gap-2 btn-group-actions">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Save User</button>
                  <a href="users.html" class="btn btn-outline-primary"><i class="bi bi-x-lg"></i> Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>







@endsection
