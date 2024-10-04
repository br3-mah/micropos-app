@extends('layouts.main')
@section('content')
    <main class="grow content pt-5" id="content" role="content">

     <!-- begin: container -->
     <div class="container-fixed">
      <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
       <div class="flex flex-col justify-center gap-2">
        <h1 class="text-xl font-semibold leading-none text-gray-900">
         Audit Log
        </h1>
        <div class="flex items-center gap-2 font-medium">
         <span class="text-sm text-gray-600">
          Authorized Devices for Report Access
         </span>
         <span class="size-0.75 bg-gray-600 rounded-full">
         </span>
         <a class="font-semibold btn btn-link link" href="#">
          Unlink All Devices
         </a>
        </div>
       </div>
       <div class="flex items-center gap-2.5">
        <a class="btn btn-sm btn-light" href="html/demo1/account/security/overview/index.html">
         Audit Overview
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
          Audit Log
         </h3>
         <label class="switch switch-sm">
          <input checked="" class="order-2" name="check" type="checkbox" value="1"/>
          <span class="switch-label order-1">
           Push Alerts
          </span>
         </label>
        </div>
        <div class="card-body">
         <div data-datatable="true" data-datatable-page-size="10">
          <div class="scrollable-x-auto">
           <table class="table table-auto table-border" data-datatable-table="true" id="security_log_table">
            <thead>
             <tr>
              <th class="w-[60px]">
               <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
              </th>
              <th class="min-w-[200px]">
               <span class="sort">
                <span class="sort-label">
                 Timestamp
                </span>
                <span class="sort-icon">
                </span>
               </span>
              </th>
              <th class="min-w-[200px]">
               <span class="sort">
                <span class="sort-label">
                 Event Type
                </span>
                <span class="sort-icon">
                </span>
               </span>
              </th>
              <th class="min-w-[200px]">
               <span class="sort">
                <span class="sort-label">
                 Action Taken
                </span>
                <span class="sort-icon">
                </span>
               </span>
              </th>
              <th class="min-w-[130px]">
               <span class="sort">
                <span class="sort-label">
                 Source IP
                </span>
                <span class="sort-icon">
                </span>
               </span>
              </th>
              <th class="min-w-[130px]">
               <span class="sort">
                <span class="sort-label">
                 Destination IP
                </span>
                <span class="sort-icon">
                </span>
               </span>
              </th>
              <th class="min-w-[110px]">
               <span class="sort">
                <span class="sort-label">
                 Severity
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
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="1"/>
              </td>
              <td>
               2024-01-04T23:59:59Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-information-4 text-lg text-danger">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Unauthorized Access
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.10.15
              </td>
              <td>
               10.1.1.50
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
              </td>
              <td>
               2024-01-04T22:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-key text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Key Rotation
                </span>
               </div>
              </td>
              <td>
               Key Successfully Rotated
              </td>
              <td>
               10.0.0.1
              </td>
              <td>
               192.168.1.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
              </td>
              <td>
               2024-01-04T21:15:25Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-magnifier text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Suspicious Login
                </span>
               </div>
              </td>
              <td>
               User Account Locked
              </td>
              <td>
               172.16.254.3
              </td>
              <td>
               10.2.2.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
              </td>
              <td>
               2024-01-04T20:05:10Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-slash text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Firewall Update
                </span>
               </div>
              </td>
              <td>
               New Rule Implemented
              </td>
              <td>
               192.168.1.100
              </td>
              <td>
               172.16.0.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
              </td>
              <td>
               2024-01-04T18:45:05Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-icon text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Traffic Anomaly
                </span>
               </div>
              </td>
              <td>
               Traffic Analysis Initiated
              </td>
              <td>
               10.0.1.200
              </td>
              <td>
               10.1.2.50
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-danger">
                Critical
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
              </td>
              <td>
               2024-01-04T17:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-lock-3 text-lg text-success">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Transfer Completed
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.2.150
              </td>
              <td>
               192.168.2.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
              </td>
              <td>
               2024-01-04T16:00:15Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-file-down text-lg text-gray-600">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Data Backup Completed
                </span>
               </div>
              </td>
              <td>
               Backup Verified
              </td>
              <td>
               10.1.1.20
              </td>
              <td>
               192.168.4.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
              </td>
              <td>
               2024-01-04T14:45:30Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-wifi-square text-lg text-info">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Network Scanning
                </span>
               </div>
              </td>
              <td>
               Scanning Completed
              </td>
              <td>
               172.16.0.5
              </td>
              <td>
               10.3.3.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
              </td>
              <td>
               2024-01-04T13:20:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-cross text-lg text-danger">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Access Revoked
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.3.30
              </td>
              <td>
               172.16.1.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
              </td>
              <td>
               2024-01-04T12:05:05Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-setting-2 text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 System Maintenance
                </span>
               </div>
              </td>
              <td>
               Maintenance Completed
              </td>
              <td>
               10.2.2.40
              </td>
              <td>
               192.168.5.1
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
              </td>
              <td>
               2024-01-04T10:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-key text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Key Rotation
                </span>
               </div>
              </td>
              <td>
               Key Successfully Rotated
              </td>
              <td>
               10.0.0.2
              </td>
              <td>
               192.168.1.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
              </td>
              <td>
               2024-01-04T09:15:25Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-magnifier text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Suspicious Login
                </span>
               </div>
              </td>
              <td>
               User Account Locked
              </td>
              <td>
               172.16.254.4
              </td>
              <td>
               10.2.2.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
              </td>
              <td>
               2024-01-04T08:05:10Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-slash text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Firewall Update
                </span>
               </div>
              </td>
              <td>
               New Rule Implemented
              </td>
              <td>
               192.168.1.101
              </td>
              <td>
               172.16.0.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
              </td>
              <td>
               2024-01-04T07:45:05Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-icon text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Traffic Anomaly
                </span>
               </div>
              </td>
              <td>
               Traffic Analysis Initiated
              </td>
              <td>
               10.0.1.201
              </td>
              <td>
               10.1.2.51
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-danger">
                Critical
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
              </td>
              <td>
               2024-01-04T06:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-lock-3 text-lg text-success">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Transfer Completed
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.2.151
              </td>
              <td>
               192.168.2.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16"/>
              </td>
              <td>
               2024-01-04T05:00:15Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-file-down text-lg text-gray-600">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Data Backup Completed
                </span>
               </div>
              </td>
              <td>
               Backup Verified
              </td>
              <td>
               10.1.1.21
              </td>
              <td>
               192.168.4.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17"/>
              </td>
              <td>
               2024-01-04T03:45:30Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-wifi-square text-lg text-info">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Network Scanning
                </span>
               </div>
              </td>
              <td>
               Scanning Completed
              </td>
              <td>
               172.16.0.6
              </td>
              <td>
               10.3.3.4
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18"/>
              </td>
              <td>
               2024-01-04T02:20:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-cross text-lg text-danger">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Access Revoked
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.3.31
              </td>
              <td>
               172.16.1.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19"/>
              </td>
              <td>
               2024-01-04T00:05:05Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-setting-2 text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 System Maintenance
                </span>
               </div>
              </td>
              <td>
               Maintenance Completed
              </td>
              <td>
               10.2.2.41
              </td>
              <td>
               192.168.5.2
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20"/>
              </td>
              <td>
               2024-01-03T22:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-key text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Key Rotation
                </span>
               </div>
              </td>
              <td>
               Key Successfully Rotated
              </td>
              <td>
               10.0.0.3
              </td>
              <td>
               192.168.1.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21"/>
              </td>
              <td>
               2024-01-03T21:15:25Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-magnifier text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Suspicious Login
                </span>
               </div>
              </td>
              <td>
               User Account Locked
              </td>
              <td>
               172.16.254.5
              </td>
              <td>
               10.2.2.4
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22"/>
              </td>
              <td>
               2024-01-03T20:05:10Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-slash text-lg text-warning">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Firewall Update
                </span>
               </div>
              </td>
              <td>
               New Rule Implemented
              </td>
              <td>
               192.168.1.102
              </td>
              <td>
               172.16.0.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23"/>
              </td>
              <td>
               2024-01-03T18:45:05Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-icon text-lg text-primary">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Traffic Anomaly
                </span>
               </div>
              </td>
              <td>
               Traffic Analysis Initiated
              </td>
              <td>
               10.0.1.202
              </td>
              <td>
               10.1.2.52
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-danger">
                Critical
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24"/>
              </td>
              <td>
               2024-01-03T17:30:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-lock-3 text-lg text-success">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Transfer Completed
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.2.152
              </td>
              <td>
               192.168.2.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25"/>
              </td>
              <td>
               2024-01-03T16:00:15Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-file-down text-lg text-gray-600">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Data Backup Completed
                </span>
               </div>
              </td>
              <td>
               Backup Verified
              </td>
              <td>
               10.1.1.22
              </td>
              <td>
               192.168.4.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-success">
                Low
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26"/>
              </td>
              <td>
               2024-01-03T14:45:30Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-wifi-square text-lg text-info">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Network Scanning
                </span>
               </div>
              </td>
              <td>
               Scanning Completed
              </td>
              <td>
               172.16.0.7
              </td>
              <td>
               10.3.3.5
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-primary">
                Medium
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
               </a>
              </td>
             </tr>
             <tr>
              <td>
               <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27"/>
              </td>
              <td>
               2024-01-03T13:20:00Z
              </td>
              <td>
               <div class="flex items-center gap-1.5">
                <i class="ki-filled ki-shield-cross text-lg text-danger">
                </i>
                <span class="leading-none font-semibold text-gray-700">
                 Access Revoked
                </span>
               </div>
              </td>
              <td>
               Login Attempt Blocked
              </td>
              <td>
               192.168.3.32
              </td>
              <td>
               172.16.1.3
              </td>
              <td>
               <span class="badge badge-sm badge-outline badge badge-sm badge-outline badge-warning">
                High
               </span>
              </td>
              <td>
               <a class="btn btn-icon btn-light btn-clear btn-sm" href="#">
                <i class="ki-filled ki-notepad">
                </i>
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