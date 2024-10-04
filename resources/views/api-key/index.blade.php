@extends('layouts.main')
@section('content')

<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <div class="container-fixed" id="content_container">
    </div>
    <!-- end: container -->
    <div class="flex flex-nowrap items-center lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-6 mb-5 lg:mb-10">
     <!-- begin: container -->
     <div class="container-fixed">
      <div class="grid">
       <div class="scrollable-x-auto">
        <div class="menu gap-3" data-menu="true">
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Account Home
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/get-started.html" tabindex="0">
             <span class="menu-title">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/user-profile.html" tabindex="0">
             <span class="menu-title">
              User Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/company-profile.html" tabindex="0">
             <span class="menu-title">
              Company Profile
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
             <span class="menu-title">
              Settings - With Sidebar
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
             <span class="menu-title">
              Settings - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-plain.html" tabindex="0">
             <span class="menu-title">
              Settings - Plain
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/home/settings-modal.html" tabindex="0">
             <span class="menu-title">
              Settings - Modal
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Billing
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/basic.html" tabindex="0">
             <span class="menu-title">
              Billing - Basic
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/enterprise.html" tabindex="0">
             <span class="menu-title">
              Billing - Enterprise
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/plans.html" tabindex="0">
             <span class="menu-title">
              Plans
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/billing/history.html" tabindex="0">
             <span class="menu-title">
              Billing History
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Security
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/get-started.html" tabindex="0">
             <span class="menu-title">
              Get Started
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/overview.html" tabindex="0">
             <span class="menu-title">
              Security Overview
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/allowed-ip-addresses.html" tabindex="0">
             <span class="menu-title">
              Allowed IP Addresses
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
             <span class="menu-title">
              Privacy Settings
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/device-management.html" tabindex="0">
             <span class="menu-title">
              Device Management
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
             <span class="menu-title">
              Backup &amp; Recovery
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/current-sessions.html" tabindex="0">
             <span class="menu-title">
              Current Sessions
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/security/security-log.html" tabindex="0">
             <span class="menu-title">
              Security Log
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Members &amp; Roles
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-starter.html" tabindex="0">
             <span class="menu-title">
              Teams Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/teams.html" tabindex="0">
             <span class="menu-title">
              Teams
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-info.html" tabindex="0">
             <span class="menu-title">
              Team Info
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/members-starter.html" tabindex="0">
             <span class="menu-title">
              Members Starter
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/team-members.html" tabindex="0">
             <span class="menu-title">
              Team Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/import-members.html" tabindex="0">
             <span class="menu-title">
              Import Members
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/roles.html" tabindex="0">
             <span class="menu-title">
              Roles
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
             <span class="menu-title">
              Permissions - Toggler
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/members/permissions-check.html" tabindex="0">
             <span class="menu-title">
              Permissions - Check
             </span>
            </a>
           </div>
          </div>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Integrations
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/notifications.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            Notifications
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary active">
          <a class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" href="html/demo1/account/api-keys.html" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            API Keys
           </span>
          </a>
         </div>
         <div class="menu-item border-b-2 border-b-transparent menu-item-active:border-b-primary menu-item-here:border-b-primary" data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click">
          <div class="menu-link gap-1.5 pb-2 lg:pb-4 px-2" tabindex="0">
           <span class="menu-title text-nowrap font-medium text-sm text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-item-here:text-primary menu-item-here:font-semibold menu-item-show:text-primary menu-link-hover:text-primary">
            More
           </span>
           <span class="menu-arrow">
            <i class="ki-filled ki-down text-2xs text-gray-500 menu-item-active:text-primary menu-item-here:text-primary menu-item-show:text-primary menu-link-hover:text-primary">
            </i>
           </span>
          </div>
          <div class="menu-dropdown menu-default py-2 min-w-[200px]">
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/appearance.html" tabindex="0">
             <span class="menu-title">
              Appearance
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/invite-a-friend.html" tabindex="0">
             <span class="menu-title">
              Invite a Friend
             </span>
            </a>
           </div>
           <div class="menu-item">
            <a class="menu-link" href="html/demo1/account/activity.html" tabindex="0">
             <span class="menu-title">
              Activity
             </span>
            </a>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- end: container -->
    </div>
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
      <div class="flex flex-col justify-center gap-2">
       <h1 class="text-xl font-semibold leading-none text-gray-900">
        API Settings
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Central Hub for Personal Customization
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        Privacy Settings
       </a>
      </div>
     </div>
    </div>
    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <!-- begin: grid -->
     <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
      <div class="col-span-2">
       <div class="flex flex-col gap-5 lg:gap-7.5">
        <style>
         .user-access-bg {
       background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5.png');
   }
   .dark .user-access-bg {
       background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5-dark.png');
   }
        </style>
        <div class="card">
         <div class="card-header mb-5" id="external_services_manage_api">
          <h3 class="card-title">
           Public API Key
          </h3>
          <div class="flex items-center gap-2">
           <label class="switch switch-sm">
            <span class="switch-label">
             Pause
            </span>
            <input name="check" type="checkbox" value="1"/>
           </label>
          </div>
         </div>
         <div class="card-body lg:py-7.5 grid gap-5 lg:gap-7.5">
          <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
           <label class="form-label max-w-56">
            API Key
           </label>
           <label class="input">
            <input placeholder="Right icon" type="text" value="abc123xyz456sample789key000">
             <button class="btn btn-icon">
              <i class="ki-filled ki-copy">
              </i>
             </button>
            </input>
           </label>
          </div>
          <div class="flex items-center justify-between grow border border-gray-200 rounded-xl gap-2 p-5 [background-position:220%_44%] bg-no-repeat bg-[length:650px] user-access-bg">
           <div class="flex items-center gap-4">
            <div class="relative size-[50px] shrink-0">
             <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
              </path>
              <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
              </path>
             </svg>
             <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
              <i class="ki-filled ki-security-user text-xl text-brand">
              </i>
             </div>
            </div>
            <div class="flex flex-col gap-1.5">
             <div class="flex items-center gap-2.5">
              <a class="text-base font-semibold text-gray-900 hover:text-primary-active" href="#">
               User Access
              </a>
              <span class="badge badge-sm badge-outline">
               16 days left
              </span>
             </div>
             <div class="form-info">
              This API key can only access
              <a class="link" href="https://keenthemes.com/">
               @keenthemes
              </a>
              <br/>
              Secure access with a unique API key for enhanced functionality.
             </div>
            </div>
           </div>
           <div class="flex items-center gap-1.5">
            <button class="btn btn-sm btn-dark">
             Renew Plan
            </button>
            <a class="btn btn-sm btn-clear btn-light" href="#">
             Docs
            </a>
           </div>
          </div>
          <p class="text-2sm font-medium text-gray-700">
           Unlock the full potential of your application with our API, a secure gateway facilitating seamless integration, empowering developers 
           to create innovative and dynamic experiences effortlessly.
          </p>
         </div>
        </div>
        <div class="card card-grid min-w-full">
         <div class="card-header py-5 flex-wrap">
          <h3 class="card-title">
           API Integrations
          </h3>
          <div class="flex gap-7.5">
           <label class="switch switch-sm">
            <input class="order-2" name="check" type="checkbox" value="1"/>
            <span class="switch-label order-1">
             Pause all
            </span>
           </label>
           <a class="btn btn-sm btn-primary" href="#">
            Add New
           </a>
          </div>
         </div>
         <div class="card-body">
          <div data-datatable="true" data-datatable-page-size="10">
           <div class="scrollable-x-auto">
            <table class="table table-auto table-border" data-datatable-table="true" id="api_integration_table">
             <thead>
              <tr>
               <th class="w-[60px]">
                <input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox"/>
               </th>
               <th class="min-w-[206px]">
                <span class="sort">
                 <span class="sort-label">
                  Integration
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="min-w-[224px]">
                <span class="sort">
                 <span class="sort-label">
                  API Key
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="min-w-[122px]">
                <span class="sort">
                 <span class="sort-label">
                  Daily Calls
                 </span>
                 <span class="sort-icon">
                 </span>
                </span>
               </th>
               <th class="min-w-[98px]">
                <span class="sort">
                 <span class="sort-label">
                  Status
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
                Quick Pay Service
               </td>
               <td>
                <div class="flex items-center">
                 a1b2Xc3dY4ZxQvPlQp
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                10,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="2"/>
               </td>
               <td>
                User Auth System
               </td>
               <td>
                <div class="flex items-center">
                 f6g7Z8h9R0TfUaSdTf
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                15,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="3"/>
               </td>
               <td>
                Data Analytics
               </td>
               <td>
                <div class="flex items-center">
                 k1V2m3N4L5CvPbDvDa
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                5,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="4"/>
               </td>
               <td>
                CRM Connector
               </td>
               <td>
                <div class="flex items-center">
                 p6qM7rS8tK9BnHjCcR
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                8,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="5"/>
               </td>
               <td>
                Inventory Manager
               </td>
               <td>
                <div class="flex items-center">
                 u1vP2wF3xJ4KlYnIlM
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                12,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="6"/>
               </td>
               <td>
                Inventory Manager
               </td>
               <td>
                <div class="flex items-center">
                 z6G7bT8cQ9WxEcEdEs
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                20,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="7"/>
               </td>
               <td>
                Order Tracking Sys
               </td>
               <td>
                <div class="flex items-center">
                 e1E2gH3hB4iYtUvOtS
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                9,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="8"/>
               </td>
               <td>
                Feedback Loop
               </td>
               <td>
                <div class="flex items-center">
                 j6k7l8m9n0QaWsFlFb
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                7,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="9"/>
               </td>
               <td>
                Payment Gateway
               </td>
               <td>
                <div class="flex items-center">
                 1p2q3r4s5DfGhPgPy
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                25,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="10"/>
               </td>
               <td>
                Shipping Coordinator
               </td>
               <td>
                <div class="flex items-center">
                 t6u7v8w9x0CvBnNlSc
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                14,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="11"/>
               </td>
               <td>
                Accounting Tool
               </td>
               <td>
                <div class="flex items-center">
                 a9b8c7d6e5f4g3h2i1
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                18,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="12"/>
               </td>
               <td>
                Customer Support
               </td>
               <td>
                <div class="flex items-center">
                 j1k2l3m4n5o6p7q8r9
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                22,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="13"/>
               </td>
               <td>
                Social Media Manager
               </td>
               <td>
                <div class="flex items-center">
                 s1t2u3v4w5x6y7z8a9
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                13,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="14"/>
               </td>
               <td>
                SEO Analyzer
               </td>
               <td>
                <div class="flex items-center">
                 b1c2d3e4f5g6h7i8j9
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                6,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="15"/>
               </td>
               <td>
                Newsletter Service
               </td>
               <td>
                <div class="flex items-center">
                 k2l3m4n5o6p7q8r9s1
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                11,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="16"/>
               </td>
               <td>
                SMS Notification Service
               </td>
               <td>
                <div class="flex items-center">
                 t2u3v4w5x6y7z8a9b1
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                19,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="17"/>
               </td>
               <td>
                Cloud Storage
               </td>
               <td>
                <div class="flex items-center">
                 c2d3e4f5g6h7i8j9k1
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                23,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="18"/>
               </td>
               <td>
                Fraud Detection
               </td>
               <td>
                <div class="flex items-center">
                 u3v4w5x6y7z8a9b1c2
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                17,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="19"/>
               </td>
               <td>
                AI Chatbot
               </td>
               <td>
                <div class="flex items-center">
                 d3e4f5g6h7i8j9k1l2
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                21,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="20"/>
               </td>
               <td>
                Project Management
               </td>
               <td>
                <div class="flex items-center">
                 v4w5x6y7z8a9b1c2d3
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                14,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="21"/>
               </td>
               <td>
                Event Logging
               </td>
               <td>
                <div class="flex items-center">
                 e4f5g6h7i8j9k1l2m3
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                20,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="22"/>
               </td>
               <td>
                Calendar Sync
               </td>
               <td>
                <div class="flex items-center">
                 w5x6y7z8a9b1c2d3e4
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                18,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="23"/>
               </td>
               <td>
                HR Management
               </td>
               <td>
                <div class="flex items-center">
                 f5g6h7i8j9k1l2m3n4
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                16,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="24"/>
               </td>
               <td>
                Content Delivery Network
               </td>
               <td>
                <div class="flex items-center">
                 x6y7z8a9b1c2d3e4f5
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                12,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="25"/>
               </td>
               <td>
                Marketing Automation
               </td>
               <td>
                <div class="flex items-center">
                 g6h7i8j9k1l2m3n4o5
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                24,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="26"/>
               </td>
               <td>
                File Sharing
               </td>
               <td>
                <div class="flex items-center">
                 y7z8a9b1c2d3e4f5g6
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                9,000
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="27"/>
               </td>
               <td>
                Customer Feedback
               </td>
               <td>
                <div class="flex items-center">
                 h7i8j9k1l2m3n4o5p6
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                7,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="28"/>
               </td>
               <td>
                Sales Forecasting
               </td>
               <td>
                <div class="flex items-center">
                 z8a9b1c2d3e4f5g6h7
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                11,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="29"/>
               </td>
               <td>
                Data Warehouse
               </td>
               <td>
                <div class="flex items-center">
                 i8j9k1l2m3n4o5p6q7
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                20,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="30"/>
               </td>
               <td>
                Email Campaigns
               </td>
               <td>
                <div class="flex items-center">
                 a9b1c2d3e4f5g6h7i8
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                10,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
                 </i>
                </a>
               </td>
              </tr>
              <tr>
               <td>
                <input class="checkbox checkbox-sm" data-datatable-row-check="true" type="checkbox" value="31"/>
               </td>
               <td>
                Business Intelligence
               </td>
               <td>
                <div class="flex items-center">
                 j9k1l2m3n4o5p6q7r8
                 <a class="btn btn-sm btn-icon btn-clear text-gray-500 hover:text-primary-active" href="#">
                  <i class="ki-filled ki-copy">
                  </i>
                 </a>
                </div>
               </td>
               <td>
                8,500
               </td>
               <td>
                <div class="flex items-center gap-2.5">
                 <div class="switch switch-sm">
                  <input checked="" name="param" type="checkbox" value="1"/>
                 </div>
                </div>
               </td>
               <td>
                <a class="btn btn-sm btn-icon btn-icon-lg btn-clear btn-light" href="#">
                 <i class="ki-filled ki-notepad-edit">
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
        <div class="card pb-2.5">
         <div class="card-header" id="webhooks">
          <h3 class="card-title">
           Webhooks
          </h3>
         </div>
         <div class="card-body grid gap-5">
          <p class="text-2sm font-medium text-gray-700">
           Set up Webhooks to trigger actions on external services in real-time. Stay informed on updates and changes to
           <br/>
           ensure seamless integration.
          </p>
          <div class="flex items-center flex-wrap lg:flex-nowrap gap-2.5">
           <label class="form-label max-w-56">
            Webhook URL
           </label>
           <div class="grow">
            <input class="input" placeholder="Enter URL" type="text" value=""/>
           </div>
          </div>
          <div class="flex items-center flex-wrap lg:flex-nowrap gap-2.5">
           <label class="form-label max-w-56">
            Webhook Name
           </label>
           <div class="grow">
            <input class="input" placeholder="" type="text" value="CostaRicaHook"/>
           </div>
          </div>
          <div class="flex items-center flex-wrap lg:flex-nowrap gap-2.5">
           <label class="form-label max-w-56">
            Event Type
           </label>
           <div class="grow">
            <select class="select">
             <option>
              All Events
             </option>
             <option>
              Push Webhooks
             </option>
             <option>
              Pipe Webhook
             </option>
             <option>
              Plugin Webhooks
             </option>
            </select>
           </div>
          </div>
          <div class="flex items-center flex-wrap lg:flex-nowrap gap-2.5 mb-2.5">
           <label class="form-label max-w-56">
            Custom Headers
           </label>
           <div class="grow">
            <label class="switch">
             <span class="switch-label">
              Use Custom Header
             </span>
             <input checked="" type="checkbox" value="1"/>
            </label>
           </div>
          </div>
          <div class="flex justify-end">
           <button class="btn btn-primary">
            Save Changes
           </button>
          </div>
         </div>
        </div>
        <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           FAQ
          </h3>
         </div>
         <div class="card-body py-3">
          <div data-accordion="true" data-accordion-expand-all="true">
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_1_content">
             <span class="text-base text-gray-900 font-medium">
              How is pricing determined for each plan ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_1_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision. 
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision.
           Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_2_content">
             <span class="text-base text-gray-900 font-medium">
              What payment methods are accepted for subscriptions ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_2_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_3_content">
             <span class="text-base text-gray-900 font-medium">
              Are there any hidden fees in the pricing ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_3_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_4_content">
             <span class="text-base text-gray-900 font-medium">
              Is there a discount for annual subscriptions ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_4_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_5_content">
             <span class="text-base text-gray-900 font-medium">
              Do you offer refunds on subscription cancellations ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_5_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
           <div class="accordion-item [&amp;:not(:last-child)]:border-b border-b-gray-200" data-accordion-item="true">
            <button class="accordion-toggle py-4" data-accordion-toggle="#faq_6_content">
             <span class="text-base text-gray-900 font-medium">
              Can I add extra features to my current plan ?
             </span>
             <i class="ki-filled ki-plus text-gray-600 text-sm accordion-active:hidden block">
             </i>
             <i class="ki-filled ki-minus text-gray-600 text-sm accordion-active:block hidden">
             </i>
            </button>
            <div class="accordion-content hidden" id="faq_6_content">
             <div class="text-gray-700 text-md pb-4">
              Metronic embraces flexible licensing options that empower you to choose the perfect fit for your project's needs and budget. 
           Understanding the factors influencing each plan's pricing helps you make an informed decision
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="card">
         <div class="card-body px-10 py-7.5 lg:pr-12.5">
          <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
           <div class="flex flex-col items-start gap-3">
            <h2 class="text-1.5xl font-semibold text-gray-900">
             Contact Support
            </h2>
            <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
             Need assistance? Contact our support team for prompt, personalized help your queries &amp; concerns.
            </p>
           </div>
           <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/31.svg"/>
           <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/31-dark.svg"/>
          </div>
         </div>
         <div class="card-footer justify-center">
          <a class="btn btn-link" href="">
           Contact Support
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="col-span-1">
       <div class="flex flex-col gap-5 lg:gap-7.5">
        <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           Project API keys
          </h3>
         </div>
         <div class="card-body flex flex-col gap-2.5">
          <p class="text-2sm text-gray-700">
           Activate 'Do Not Disturb' to silence all notifications and focus 
           without interruptions during specified hours or tasks.
          </p>
          <div>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
         </div>
         <div class="card-footer justify-center">
          <a class="btn btn-light btn-sm">
           <i class="ki-filled ki-note-2 text-gray-300">
           </i>
           Client Docs
          </a>
         </div>
        </div>
        <div class="card">
         <div class="card-body py-10 flex flex-col gap-5 lg:gap-7.5">
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
             <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
              </path>
              <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
              </path>
             </svg>
             <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
              <i class="ki-filled ki-cloud-add text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Streamlined Alerts Setup: Custom Notification Preferences
           </a>
           <p class="text-sm text-gray-700">
            Easily integrate and manage your APIs with our suite of configuration tools.
                                                    Gain access to extensive instructions, expert support, and in-depth documentation 
                                                   to keep your API interactions efficient and up-to-date..
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
             <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
              </path>
              <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
              </path>
             </svg>
             <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
              <i class="ki-filled ki-icon text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Enhancing Connectivity: Tools for API Expansion
           </a>
           <p class="text-sm text-gray-700">
            Leverage the full potential of your APIs with our advanced expansion tools. We provide 
                                                   all the necessary resources for easy setup, information exchange, and maintaining 
                                                   high-performance API connectivity.
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
          <div class="flex flex-col items-start gap-2.5">
           <div class="mb-2.5">
            <div class="relative size-[50px] shrink-0">
             <svg class="w-full h-full stroke-brand-clarity fill-brand-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
              <path d="M16 2.4641C19.7128 0.320509 24.2872 0.320508 28 2.4641L37.6506 8.0359C41.3634 10.1795 43.6506 14.141 43.6506 
           18.4282V29.5718C43.6506 33.859 41.3634 37.8205 37.6506 39.9641L28 45.5359C24.2872 47.6795 19.7128 47.6795 16 45.5359L6.34937 
           39.9641C2.63655 37.8205 0.349365 33.859 0.349365 29.5718V18.4282C0.349365 14.141 2.63655 10.1795 6.34937 8.0359L16 2.4641Z" fill="">
              </path>
              <path d="M16.25 2.89711C19.8081 0.842838 24.1919 0.842837 27.75 2.89711L37.4006 8.46891C40.9587 10.5232 43.1506 14.3196 43.1506 
           18.4282V29.5718C43.1506 33.6804 40.9587 37.4768 37.4006 39.5311L27.75 45.1029C24.1919 47.1572 19.8081 47.1572 16.25 45.1029L6.59937 
           39.5311C3.04125 37.4768 0.849365 33.6803 0.849365 29.5718V18.4282C0.849365 14.3196 3.04125 10.5232 6.59937 8.46891L16.25 2.89711Z" stroke="">
              </path>
             </svg>
             <div class="absolute leading-none left-2/4 top-2/4 -translate-y-2/4 -translate-x-2/4">
              <i class="ki-filled ki-subtitle text-1.5xl ps-px text-brand">
              </i>
             </div>
            </div>
           </div>
           <a class="text-base font-semibold text-gray-900 hover:text-primary" href="#">
            Organizing Team Data: Efficient Roster Solutions
           </a>
           <p class="text-sm text-gray-700">
            Organize your API data more with our detailed interface solutions. From quick setup
                                                    guides to management, our tools are designed to streamline every step of your API data organization.
           </p>
           <a class="btn btn-link flex-none" href="#">
            Learn more
           </a>
          </div>
          <span class="hidden [&amp;:not(:last-child)]:block [&amp;:not(:last-child)]:border-b border-b-gray-200">
          </span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- end: grid -->
    </div>
    <!-- end: container -->
   </main>

@endsection