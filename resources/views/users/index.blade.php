@extends('layouts.main')
@section('content')
<main class="grow content pt-5" id="content" role="content">
    
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
      <div class="flex flex-col justify-center gap-2">
       <h1 class="text-xl font-semibold leading-none text-gray-900">
        All Registered Users
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Overview of all team members and roles.
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        Import Members
       </a>
       <a class="btn btn-sm btn-primary" href="#">
        Add Member
       </a>
      </div>
     </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="grid gap-5 lg:gap-7.5">
      <div class="card card-grid min-w-full">
       <div class="card-header py-5 flex-wrap">
        <h3 class="card-title">
         Staff Members
        </h3>
        <div class="flex gap-6">
         <div class="relative">
          <i class="ki-filled ki-magnifier leading-none text-md text-gray-500 absolute top-1/2 left-0 -translate-y-1/2 ml-3">
          </i>
          <input class="input input-sm pl-8" data-datatable-search="#members_table" placeholder="Search Members" type="text"/>
         </div>
         <label class="switch switch-sm">
          <input class="order-2" name="check" type="checkbox" value="1"/>
          <span class="switch-label order-1">
           Active Users
          </span>
         </label>
        </div>
       </div>
       <div class="card-body">
        <div data-datatable="true" data-datatable-page-size="10">
         <div class="scrollable-x-auto">
          <table class="table table-border" data-datatable-table="true" id="members_table">
           <thead>
            <tr>
             <th class="w-[60px] text-center">
              <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
             </th>
             <th class="min-w-[300px]">
              <span class="sort asc">
               <span class="sort-label">
                Member
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="min-w-[220px]">
              Roles
             </th>
             <th class="min-w-[165px]">
              <span class="sort">
               <span class="sort-label">
                Location
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="min-w-[165px]">
              <span class="sort">
               <span class="sort-label">
                Status
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="min-w-[165px]">
              <span class="sort">
               <span class="sort-label">
                Recent activity
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[60px]">
             </th>
            </tr>
           </thead>
           <tbody>
            <tr>
             <td class="text-center">
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
             </td>
             <td>
              <div class="flex items-center gap-2.5">
               <div class="">
                <img class="h-9 rounded-full" src="{{ asset('public/assets/media/avatars/300-3.png') }}"/>
               </div>
               <div class="flex flex-col gap-0.5">
                <a class="leading-none font-semibold text-sm text-gray-900 hover:text-primary" href="#">
                 {{ auth()->user()->fname }} {{ auth()->user()->lname }}
                </a>
                <span class="text-xs text-gray-600 font-medium">
                 0 tasks
                </span>
               </div>
              </div>
             </td>
             <td>
              <div class="flex flex-wrap gap-2.5 mb-2">
               <span class="badge badge-sm badge-light badge-outline">
                Admin
               </span>
               {{-- <span class="badge badge-sm badge-light badge-outline">
                Support
               </span>
               <span class="badge badge-sm badge-light badge-outline">
                Editor
               </span> --}}
              </div>
             </td>
             <td>
              <div class="flex items-center gap-1.5">
               <img alt="flag" class="h-4 rounded-full" src="{{ asset('public/assets/media/flags/estonia.svg') }}"/>
               <span class="leading-none text-gray-700">
                Estonia
               </span>
              </div>
             </td>
             <td>
              <span class="badge badge-sm badge-outline badge-success">
               Active
              </span>
             </td>
             <td>
              Current session
             </td>
             <td class="w-[60px]">
              <div class="menu" data-menu="true">
               <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
                 <i class="ki-filled ki-dots-vertical">
                 </i>
                </button>
                <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
                 <div class="menu-item">
                  <a class="menu-link" href="#">
                   <span class="menu-icon">
                    <i class="ki-filled ki-search-list">
                    </i>
                   </span>
                   <span class="menu-title">
                    View
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#">
                   <span class="menu-icon">
                    <i class="ki-filled ki-file-up">
                    </i>
                   </span>
                   <span class="menu-title">
                    Export
                   </span>
                  </a>
                 </div>
                 <div class="menu-separator">
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#">
                   <span class="menu-icon">
                    <i class="ki-filled ki-pencil">
                    </i>
                   </span>
                   <span class="menu-title">
                    Edit
                   </span>
                  </a>
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#">
                   <span class="menu-icon">
                    <i class="ki-filled ki-copy">
                    </i>
                   </span>
                   <span class="menu-title">
                    Make a copy
                   </span>
                  </a>
                 </div>
                 <div class="menu-separator">
                 </div>
                 <div class="menu-item">
                  <a class="menu-link" href="#">
                   <span class="menu-icon">
                    <i class="ki-filled ki-trash">
                    </i>
                   </span>
                   <span class="menu-title">
                    Remove
                   </span>
                  </a>
                 </div>
                </div>
               </div>
              </div>
             </td>
            </tr>
           </tbody>
          </table>
         </div>
         <div class="card-footer justify-center md:justify-between flex-col md:flex-row gap-5 text-gray-600 text-2sm font-medium">
          <div class="flex items-center gap-2 order-2 md:order-1">
           Show
           <select class="select select-sm w-16" data-datatable-size="true" name="perpage">
           </select>
           per page
          </div>
          <div class="flex items-center gap-4 order-1 md:order-2">
           <span data-datatable-info="true">
           </span>
           <div class="pagination" data-datatable-pagination="true">
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>


      
      
     </div>
    </div>
    <!-- end: container -->
   </main>
@endsection