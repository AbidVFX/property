@extends('layouts.app')

@section('content')


    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/roles">Roles</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Role</h6>
                    <form role="form" method="POST" action="/roles/{{ $role->id }}" class="needs-validation">
                        @method('PATCH')
                        @csrf

                        <div class="form-group mb-1 row">
                            <label class="col-sm-2 col-form-label" for="name">Role Name</label>
                            <div class="col-sm-10">
                                <input type="text" id="name" name="name" class="form-control"
                                       value="{{ old('name', $role->name) }}"
                                       {{ $errors->has('name') ? 'autofocus' : '' }} tabindex="1" required readonly>
                                @if ($errors->has('name'))
                                    <div class="alert alert-warning">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <fieldset>

                            <legend>Permissions</legend>

                            <div class="form-group p-4">
                                <div class="row">
                                    @if ($errors->has('permission'))
                                        <div class="alert alert-warning">{{ $errors->first('permission') }}</div>
                                    @endif
                                    @foreach ($permissions as $permission)
                                        <div class="col-md-4 form-check">
                                            <input class="form-check-input" name="permission[]"
                                                   id="checkInlineChecked{{ $permission->id }}" type='checkbox'
                                                   value='{{ $permission->id }}'
                                                    @checked(in_array($permission->id, $rolePermissions))>
                                            <label class="form-check-label"
                                                   for="checkInlineChecked{{ $permission->id }}">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </fieldset>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success my-4" tabindex="9">Update</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
