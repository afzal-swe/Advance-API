<div class="card">
    <div class="card-header">Welcome , {{ Auth::user()->name ?? '' }}</div>
    <div class="card-body">
         <img class="card-img-top" src="https://thumbs.dreamstime.com/b/businessman-icon-vector-male-avatar-profile-image-profile-businessman-icon-vector-male-avatar-profile-image-182095609.jpg">
         <ul class="list-group list-group-flush">
            <a href="{{ route('Customer_Dashboard') }}" class="text-muted"> <li class="list-group-item"><i class="fas fa-home"></i> Dashboard</li></a>
          
            <a href="{{ route('open.ticket') }}" class="text-muted"> <li class="list-group-item"> <i class="fab fa-telegram-plane"></i> Open Ticket</li> </a>
            <a href="{{ route('customer.logout') }}" class="text-muted"> <li class="list-group-item"> <i class="fas fa-sign-out-alt"></i> Logout</li> </a>
           </ul>
     
    </div>
</div>