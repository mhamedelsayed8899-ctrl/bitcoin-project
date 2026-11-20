<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" title="Delete" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
 <i class="bi bi-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are Ue Sure To Delete {{$user->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>

        <form action="{{route('user.destroy' , $user->id)}}" method="POST">
                        @method('delete')
                        @csrf

                    <button class="btn btn-icon btn-outline-danger btn-sm"  data-item="John Doe"><i class="bi bi-trash"></i></button>

                      </form>
      </div>
    </div>
  </div>
</div>
