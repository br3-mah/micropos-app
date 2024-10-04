@extends('layouts.main')
@section('content')
<main class="grow content pt-5" id="content" role="content">
    <!-- end: container -->
    
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
      <div class="flex flex-col justify-center gap-2">
       <h1 class="text-xl font-semibold leading-none text-gray-900">
        Billing History
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Central Hub for your billing history
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        Billing
       </a>
      </div>
     </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="grid gap-5 lg:gap-7.5">
      <div class="card card-grid min-w-full">
       <div class="card-header">
        <h3 class="card-title">
         Billing and Invoicing
        </h3>
        <button class="btn btn-light btn-sm">
         <i class="ki-filled ki-exit-down">
         </i>
         Download PDF
        </button>
       </div>
       <div class="card-body">
        <div data-datatable="true" data-datatable-page-size="20">
         <div class="scrollable-x-auto">
          <table class="table table-border" data-datatable-table="true">
           <thead>
            <tr>
             <th class="w-14">
              <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
             </th>
             <th class="min-w-[200px]">
              <span class="sort">
               <span class="sort-label">
                Member
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[170px]">
              <span class="sort">
               <span class="sort-label">
                Status
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[170px]">
              <span class="sort">
               <span class="sort-label">
                Date
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[170px]">
              <span class="sort">
               <span class="sort-label">
                Due Date
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[170px]">
              <span class="sort">
               <span class="sort-label">
                Amount
               </span>
               <span class="sort-icon">
               </span>
              </span>
             </th>
             <th class="w-[100px]">
             </th>
            </tr>
           </thead>
           <tbody>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
             </td>
             <td>
              Invoice-2024-xd912c
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              HR Dept
             </td>
             <td>
              K24.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
             </td>
             <td>
              Invoice-2024-rq857m
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              17 Jun, 2024
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              K29.99
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
             </td>
             <td>
              Invoice-2024-jk563z
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              30 Apr, 2024
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              K24.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
             </td>
             <td>
              Invoice-2024-hg234x
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              21 Apr, 2024
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              K6.59
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
             </td>
             <td>
              Invoice-2024-lp098y
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              14 Mar, 2024
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              K79.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
             </td>
             <td>
              Invoice-2024-q196l
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              08 Jan, 2024
             </td>
             <td>
              6 Aug, 2024
             </td>
             <td>
              K257.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
             </td>
             <td>
              Invoice-2024-m113s
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              07 Nov, 2024
             </td>
             <td>
              Design Dept
             </td>
             <td>
              K67.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
             </td>
             <td>
              Invoice-2024-u859c
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              16 May, 2024
             </td>
             <td>
              07 Nov, 2024
             </td>
             <td>
              K494.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
             </td>
             <td>
              Invoice-2024-m803g
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              16 Mar, 2024
             </td>
             <td>
              16 Mar, 2024
             </td>
             <td>
              K142.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
             </td>
             <td>
              Invoice-2024-r204u
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              25 Mar, 2024
             </td>
             <td>
              25 Mar, 2024
             </td>
             <td>
              K35.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
             </td>
             <td>
              Invoice-2024-b907a
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              12 Feb, 2024
             </td>
             <td>
              12 Feb, 2024
             </td>
             <td>
              K59.99
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
             </td>
             <td>
              Invoice-2024-n567k
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              01 Mar, 2024
             </td>
             <td>
              Marketing Dept
             </td>
             <td>
              K150.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
             </td>
             <td>
              Invoice-2024-k453j
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              03 Apr, 2024
             </td>
             <td>
              03 Apr, 2024
             </td>
             <td>
              K89.50
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
             </td>
             <td>
              Invoice-2024-d981q
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              20 Feb, 2024
             </td>
             <td>
              20 Feb, 2024
             </td>
             <td>
              K200.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
             </td>
             <td>
              Invoice-2024-p846y
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              15 May, 2024
             </td>
             <td>
              15 May, 2024
             </td>
             <td>
              K75.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16"/>
             </td>
             <td>
              Invoice-2024-z190x
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              10 Jun, 2024
             </td>
             <td>
              Finance Dept
             </td>
             <td>
              K130.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17"/>
             </td>
             <td>
              Invoice-2024-l892v
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              25 Jan, 2024
             </td>
             <td>
              25 Jan, 2024
             </td>
             <td>
              K100.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18"/>
             </td>
             <td>
              Invoice-2024-t675c
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              18 Jul, 2024
             </td>
             <td>
              18 Jul, 2024
             </td>
             <td>
              K45.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19"/>
             </td>
             <td>
              Invoice-2024-w432r
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              09 Aug, 2024
             </td>
             <td>
              09 Aug, 2024
             </td>
             <td>
              K60.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20"/>
             </td>
             <td>
              Invoice-2024-e765n
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              12 Oct, 2024
             </td>
             <td>
              IT Dept
             </td>
             <td>
              K500.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21"/>
             </td>
             <td>
              Invoice-2024-h789p
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              27 May, 2024
             </td>
             <td>
              27 May, 2024
             </td>
             <td>
              K220.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22"/>
             </td>
             <td>
              Invoice-2024-m987l
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              19 Sep, 2024
             </td>
             <td>
              R&amp;D Dept
             </td>
             <td>
              K350.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23"/>
             </td>
             <td>
              Invoice-2024-c654j
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              23 Oct, 2024
             </td>
             <td>
              23 Oct, 2024
             </td>
             <td>
              K75.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24"/>
             </td>
             <td>
              Invoice-2024-q341w
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              29 Nov, 2024
             </td>
             <td>
              29 Nov, 2024
             </td>
             <td>
              K180.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25"/>
             </td>
             <td>
              Invoice-2024-b453g
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              11 Dec, 2024
             </td>
             <td>
              11 Dec, 2024
             </td>
             <td>
              K90.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26"/>
             </td>
             <td>
              Invoice-2024-d768k
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              05 Jan, 2024
             </td>
             <td>
              05 Jan, 2024
             </td>
             <td>
              K40.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27"/>
             </td>
             <td>
              Invoice-2024-z123v
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              14 Feb, 2024
             </td>
             <td>
              14 Feb, 2024
             </td>
             <td>
              K115.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="28"/>
             </td>
             <td>
              Invoice-2024-t786y
             </td>
             <td>
              <div class="badge badge-sm badge-success badge-outline">
               Paid
              </div>
             </td>
             <td>
              23 Mar, 2024
             </td>
             <td>
              23 Mar, 2024
             </td>
             <td>
              K55.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="29"/>
             </td>
             <td>
              Invoice-2024-r890p
             </td>
             <td>
              <div class="badge badge-sm badge-warning badge-outline">
               Upcoming
              </div>
             </td>
             <td>
              30 Apr, 2024
             </td>
             <td>
              30 Apr, 2024
             </td>
             <td>
              K95.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
             </td>
            </tr>
            <tr>
             <td>
              <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="30"/>
             </td>
             <td>
              Invoice-2024-q654j
             </td>
             <td>
              <div class="badge badge-sm badge-danger badge-outline">
               Declined
              </div>
             </td>
             <td>
              08 May, 2024
             </td>
             <td>
              08 May, 2024
             </td>
             <td>
              K32.00
             </td>
             <td class="text-center">
              <a class="btn btn-link" href="">
               Download
              </a>
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