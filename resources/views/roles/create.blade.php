@extends('layouts.main')

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="container-xxl" id="kt_content_container">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create New Role</h3>
            </div>
            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <!-- Role Name -->
                    <div class="mb-5">
                        <label for="name" class="form-label required">Role Name</label>
                        <input type="text" name="name" id="name" class="form-control input-group" required>
                    </div>

                    <!-- Permissions Tree -->
                    <div class="mb-5">
                        <label class="form-label">Permissions</label>
                        <div class="row g-9">
                            @foreach($permissions as $groupName => $groupPermissions)
                                <div class="col-md-4">
                                    <div class="card card-flush h-md-100">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <h4>{{ ucfirst($groupName) }} Management</h4>
                                            </div>
                                        </div>
                                        <div class="card-body pt-1">
                                            <div class="d-flex flex-column text-gray-600">
                                                @foreach($groupPermissions as $permission)
                                                    <div class="d-flex align-items-center py-2">
                                                        <span class="bullet bg-primary me-3"></span>
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->name }}" id="permission-{{ $permission->id }}">
                                                            <label class="form-check-label" for="permission-{{ $permission->id }}">
                                                                {{ $permission->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="ms-5 text-muted fs-7">{{ $permission->description }}</div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <a href="{{ route('roles.index') }}" type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</a>
                    <button type="submit" class="btn btn-primary">Create Role</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
