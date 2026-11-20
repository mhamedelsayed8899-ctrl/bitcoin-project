
@extends('dashborad.layout.min')

@section("body")









    <div class="page-content">
      <div class="page-header">
        <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="dashboard.html">Home</a></li><li class="breadcrumb-item active">Messages</li></ol></nav>
        <h1>Messages <span class="badge bg-danger unread-badge ms-2">5</span></h1>
        <p>Customer inquiries and support messages</p>
      </div>

      <!-- Gmail-style Messages Layout -->
      <div class="messages-layout">
        <!-- Message List Sidebar -->
        <div class="messages-sidebar">
          <div class="messages-sidebar-header">
            <div class="search-bar mb-0"><i class="bi bi-search"></i><input type="text" placeholder="Search messages..."></div>
          </div>
          <div class="message-list">

            @foreach ($data as $key => $value )

            <a href="{{route("dashboard.message.details" , $value->email)}}" class="message-item unread">
              <div class="avatar-placeholder message-avatar" style="background:#58a6ff;">EM</div>
              <div class="message-preview">
                <div class="d-flex justify-content-between"><span class="message-sender">{{$value->name}}  </span><span class="message-time">
                    @if (isset($messages))

                    {{$messages[0]->status}}

                    @endif

                </span></div>
                <div class="message-subject">{{$value->email}}</div>
                {{-- <div class="message-snippet">Hello, I'd like to initiate a return for the Smart Watch Pro I purchased...</div> --}}
              </div>
            </a>

            @endforeach



          </div>
        </div>






        <!-- Message Detail -->
        @if (isset($messages))

        <div class="message-detail">
          <div class="message-detail-header">
            <h5 class="mb-2">{{$messages[0]->phone}}</h5>
            <div class="d-flex align-items-center gap-2">
              <div class="avatar-placeholder" style="background:#3fb950;width:32px;height:32px;font-size:0.75rem;">JD</div>
              <div>
                <div class="fw-semibold" style="font-size:0.875rem;">{{$messages[0]->name}}</div>
                <div class="text-muted" style="font-size:0.75rem;">{{$messages[0]->email}}·  {{$messages[0]->created_at}}</div>
              </div>
            </div>
          </div>
          <div class="message-detail-body">
            @foreach ($messages as $key => $value)

            <h3>{{$value->message}}</h3>
            <p style="font-size:0.75rem;">{{$value->created_at}}</p>

            <hr />
            @endforeach



            <p>Best regards,<br>{{$messages[0]->name}}</p>
          </div>
          <div class="message-detail-actions">
            <button class="btn btn-primary btn-sm"><i class="bi bi-reply"></i> Reply</button>
            <button class="btn btn-outline-primary btn-sm"><i class="bi bi-forward"></i> Forward</button>
            <button class="btn btn-outline-danger btn-sm ms-auto" data-action="delete" data-item="this message"><i class="bi bi-trash"></i> Delete</button>
          </div>
        </div>

        @endif

      </div>
    </div>




















@endsection
