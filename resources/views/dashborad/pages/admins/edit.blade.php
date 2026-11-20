


@extends('dashborad.layout.min')



@section('body')


    <div class="page-content">
      <div class="page-header">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item"><a href="admins.html">Admins</a></li><li class="breadcrumb-item active">Edit Admin</li></ol></nav>
        <h1>Create Admin</h1>
        <p>Add a new administrator to the system</p>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-body">
              <form  action="{{route('admin.update' , $admin->id)}} " method="POST" enctype="multipart/form-data">

                @method('put')

                @csrf
                <!-- Profile Image -->
                <div class="mb-4 text-center image-upload-wrapper">
                    @error("img")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                  <div class="form-section-title text-start">Profile Image</div>
                  <div class="image-upload mx-auto" style="max-width:280px;">
                    <input type="file" class="image-upload-input " name="img" accept="image/*">
                    <i class="bi bi-cloud-arrow-up d-block"></i>
                    <p>Click to upload profile image</p>
                    <small class="text-muted">PNG, JPG up to 2MB</small>
                  </div>
                  <img src="" alt="Preview" class="image-preview mt-3 d-none mx-auto">
                </div>

                <!-- Personal Info -->
                <div class="form-section-title">Personal Information</div>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    @error("name")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                    <label class="form-label" for="name">Full Name <span class="text-danger">*</span></label>
                    <input type="text" value="{{$admin->name}}" class="form-control" id="name" name="name" placeholder="Enter full name">
                  </div>
                  <div class="col-md-6">
                    @error("email")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                    <label class="form-label" for="email">Email Address <span class="text-danger">*</span></label>
                    <input type="email" value="{{$admin->email}}" class="form-control" id="email" name="email" placeholder="admin@shopadmin.com" >
                  </div>
                  <div class="col-md-6">
                    @error("phone")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                    <label class="form-label" for="phone">Phone Number</label>
                    <input type="tel" value="{{$admin->phone}}" class="form-control" id="phone" name="phone" placeholder="+1 (555) 000-0000">
                  </div>
                </div>

                <!-- Security -->
                <div class="form-section-title">Security</div>


                <!-- Role & Status -->
                <div class="form-section-title">Role & Status</div>
                <div class="row g-3 mb-4">
                  <div class="col-md-6">
                    @error("role")

                        <p style="color: red">{{$message}}</p>

                    @enderror
                    <label class="form-label" for="role">Role <span class="text-danger">*</span></label>
                    <select class="form-select" id="role" name="role" >

                      <option @selected($admin->role =="Super Admin")>Super Admin</option>
                      <option @selected($admin->role ==" Admin" )>Admin</option>
                      <option @selected($admin->role =="Moderator")>Moderator</option>
                    </select>
                  </div>


                </div>

                <!-- Actions -->
                <div class="d-flex gap-2 btn-group-actions">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-check-lg"></i> Save Admin</button>
                  <a href="admins.html" class="btn btn-outline-primary"><i class="bi bi-x-lg"></i> Cancel</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection
