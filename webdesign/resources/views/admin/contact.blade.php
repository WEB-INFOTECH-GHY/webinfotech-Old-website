@extends('admin.template.admin_master')

@section('content')

<div class="page-content">
    <div class="container-fluid">
        <div class="row justify-content-center">                                 
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Contact Messages</h4>                      
                            </div>
                        </div>                                  
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Date & Time (IST)</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->created_at->timezone('Asia/Kolkata')->format('d-m-Y h:i A') }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email ?? '—' }}</td>
                                            <td>{{ $contact->number }}</td>
                                            <td>{{ $contact->message}}</td>
                                            {{-- <td>{{ Str::limit($contact->message, 60) }}</td> --}}
                                            <td>
                                                <form action="{{ route('admin.contact.delete', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center text-muted">No messages found.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table> 
                        </div>

                        <!-- Pagination -->
                        <div class="mt-3">
                            {{ $contacts->links('pagination::bootstrap-5') }}
                        </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</div>

@endsection
