@extends('layouts.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<section>
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header border-bottom">
                  <h4 class="card-title">Owners</h4>
                  <a class="btn btn-success" href="/tenants/create">Create Tenant</a>

              </div>
              <div class="card-datatable">

                  <table class="table" id="dataTableExample">
                      <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th width="280px">Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $key => $user)
                        <tr>
                          <td>{{ ++$i }}</td>
                          <td>{{ $user->name }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                            @if(!empty($user->getRoleNames()))
                              @foreach($user->getRoleNames() as $v)
                                 <label class="badge badge-success">{{ $v }}</label>
                              @endforeach
                            @endif
                          </td>
                          <td>
                             <a class="btn btn-info" href="{{ route('tenants.show',$user->id) }}">Show</a>
                             <a class="btn btn-primary" href="{{ route('tenants.edit',$user->id) }}">Edit</a>
                             <a class="btn btn-danger" href="{{ route('tenants.edit',$user->id) }}">Delete</a>

                             
                          </td>
                        </tr>
                 
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</section>
</div>

@endsection