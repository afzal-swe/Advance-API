





@extends('customer.layouts.app')
@section('content')



        
        <div class="col-md-12 col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                   All Tickets <a href="{{ route('new.ticket') }}" class="btn btn-sm btn-danger" style="float:right;">Open Ticket</a>
                </div>

                <div class="card-body">
                   <div>
                       <table class="table">
                         <thead>
                           <tr>
                             <th scope="col">No</th>
                             <th scope="col">Date</th>
                             <th scope="col">Service</th>
                             <th scope="col">Subject</th>
                             <th scope="col">Status</th>
                             <th scope="col" style="width:100px;">Action</th>
                           </tr>
                         </thead>
                         <tbody>
                          @foreach($ticket as  $key=>$row)
                           <tr>
                            <td>{{ ++$key  }}</td>
                             <th scope="row">{{ date('d F , Y') ,strtotime($row->date ?? '')  }}</th>
                             <td>{{ $row->service  ?? ''}}</td>
                             <td>{{ $row->subject ?? ''}}</td>
                             <td>
                              @if($row->status==0)
                                 <span class="badge badge-danger">Pending</span>
                              @elseif($row->status==1)
                                 <span class="badge badge-success">Replied</span>
                              @elseif($row->status==2)
                                 <span class="badge badge-muted">Closed</span>
                              @endif          
                            </td>
                            <td>
                            	<a href="{{ route('show.ticket',$row->id) }}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i></a>
                            	<a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                           </tr>
                          @endforeach 
                         </tbody>
                       </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection