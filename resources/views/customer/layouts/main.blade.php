@extends('customer.layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                   
                </div>

                <div class="card-body">
                   <div class="row">
                       <div class="col-lg-3">
                           <a href=""> 
                             <div class="card" >
                               <div class="card-body">
                                 <h5 class="card-title text-info text-center">Total Order</h5>
                                 <h6 class="card-subtitle mb-2 text-muted text-center">{{ $total_order ?? ''}}</h6>
                               </div>
                             </div>
                           </a>
                       </div>
                       <div class="col-lg-3">
                           <a href=""> 
                             <div class="card" >
                               <div class="card-body">
                                 <h5 class="card-title text-success text-center">Complete Order</h5>
                                 <h6 class="card-subtitle mb-2 text-muted text-center">{{ $complete_order ?? ''}}</h6>
                               </div>
                             </div>
                           </a>
                       </div>
                       <div class="col-lg-3">
                           <a href=""> 
                             <div class="card" >
                               <div class="card-body">
                                 <h5 class="card-title text-danger text-center">Cancel Order</h5>
                                 <h6 class="card-subtitle mb-2 text-muted text-center">{{ $cancel_order ?? ''}}</h6>
                               </div>
                             </div>
                           </a>
                       </div>
                       <div class="col-lg-3">
                          <a href=""> 
                            <div class="card" >
                              <div class="card-body">
                                <h5 class="card-title text-warning text-center">Return Order</h5>
                                <h6 class="card-subtitle mb-2 text-muted text-center">{{ $return_order ?? ''}}</h6>
                              </div>
                            </div>
                          </a>
                       </div>
                   </div><br>
                   <h4>Customer Ticket Details</h4>
                   <div>
                       <table class="table">
                         <thead>
                           <tr>
                             <th scope="col">No</th>
                             <th scope="col">Date</th>
                             <th scope="col">Total</th>
                             <th scope="col">Payment Type</th>
                             <th scope="col">Status</th>
                           </tr>
                         </thead>
                         <tbody>
                          {{-- @foreach($orders as $row) --}}
                           <tr>
                             {{-- <td>{{ ($row->order_id)  }}</td>
                             <td>{{ date('d F , Y') ,strtotime($row->order_id)  }}</td>
                             <td>{{ $row->total }} {{ $settings->currency }}</td>
                             <td>
                                @if($row->payment_type==2)
                                  <span class="badge badge-info">Paypal</span>
                                @else
                                 <span class="badge badge-info">Order</span>
                                 @endif    
                            </td>
                             <td> --}}
                              {{-- @if($row->status==0)
                                 <span class="badge badge-danger">Order Pending</span>
                              @elseif($row->status==1)
                                 <span class="badge badge-info">Order Recieved</span>
                              @elseif($row->status==2)
                                 <span class="badge badge-primary">Order Shipped</span>
                              @elseif($row->status==3)
                                 <span class="badge badge-success">Order Done</span> 
                              @elseif($row->status==4)
                                 <span class="badge badge-warning">Order Return</span>   
                              @elseif($row->status==5)  
                                 <span class="badge badge-danger">Order Cancel</span>
                              @endif           --}}
                            </td>
                           </tr>
                          {{-- @endforeach  --}}
                         </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>

@endsection