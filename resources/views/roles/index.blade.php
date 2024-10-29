@extends('layouts.main')
@section('content')
<main class="grow content pt-5" id="content" role="content">

<div class="container-fixed">
    <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
        <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-semibold leading-none text-gray-900">
        User Roles
        </h1>
        <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Overview of all system user roles.
        </div>
        </div>
        <div class="flex items-center gap-2.5">
        <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary" href="#">
        Create New Role
        </a>
        </div>
    </div>
</div>


<div class="container-fixed">
    <div class="container-xxl" id="kt_content_container">
        <!-- Roles Table -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-border" data-datatable-table="true" id="members_table">
                        <thead>
                         <tr>
                          <th class="min-w-[300px]">
                           <span class="sort asc">
                            <span class="sort-label">
                             Role Name
                            </span>
                            <span class="sort-icon">
                            </span>
                           </span>
                          </th>
                          <th class="min-w-[220px]">
                           Active Users
                          </th>
                          <th class="min-w-[165px]">
                           <span class="sort">
                            <span class="sort-label">
                             Description
                            </span>
                            <span class="sort-icon">
                            </span>
                           </span>
                          </th>
                          <th class="min-w-[165px]">
                           <span class="sort">
                            <span class="sort-label">
                             Quick Action
                            </span>
                            <span class="sort-icon">
                            </span>
                           </span>
                          </th>
                         </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <td class="ps-4">
                                    <span class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $role->name }}</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold">{{ $role->users_count ?? 0 }} Users</span>
                                </td>
                                <td>
                                    <span class="text-muted fw-semibold">{{ Str::limit($role->description ?? 'No description available', 50) }}</span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end flex-shrink-0">
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-success text-white btn-sm me-1">
                                            <i class="bi bi-pencil-fill fs-5"></i>Edit
                                        </a>
                                        <a href="{{ route('roles.clone', $role->id) }}" class="btn btn-warning btn-active-color-primary btn-sm me-1">
                                            <i class="bi bi-clipboard-fill fs-5"></i>Clone
                                        </a>
                                        <button type="button" class="btn btn-danger btn-active-color-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_delete_role_{{ $role->id }}">
                                            <i class="bi bi-trash-fill fs-5"></i>Delete
                                        </button>
                                    </div>
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

<!-- Delete Role Modals -->
@foreach($roles as $role)
<div class="modal fade" id="kt_modal_delete_role_{{ $role->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Delete Role: {{ $role->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-muted">Are you sure you want to delete this role? This action cannot be undone.</p>
                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="text-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end: container -->
</main>
@endforeach
@endsection
