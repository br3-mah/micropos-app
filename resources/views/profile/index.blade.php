@extends('layouts.main')
@section('content')


{{-- <div class="bg-center bg-cover bg-no-repeat hero-bg"> --}}
<div class="container-fixed">
    <div class="flex flex-col items-center gap-2 lg:gap-3.5 py-4 lg:pt-5 lg:pb-10">
        <img class="rounded-full border-3 border-success size-[100px] shrink-0" src="assets/media/avatars/300-1.png"/>
        <div class="flex items-center gap-1.5">
            <div class="text-lg leading-5 font-semibold text-gray-900">
                {{ auth()->user()->fname.' '.auth()->user()->lname }}
            </div>
            <svg class="text-primary" fill="none" height="16" viewbox="0 0 15 16" width="15" xmlns="http://www.w3.org/2000/svg">
                <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
                </path>
            </svg>
        </div>
        <div class="flex flex-wrap justify-center gap-1 lg:gap-4.5 text-sm">
        <div class="flex gap-1.25 items-center">
        <i class="ki-filled ki-abstract-41 text-gray-500 text-sm">
        </i>
        <span class="text-gray-600">
            Business Aministrator
        </span>
        </div>
        <div class="flex gap-1.25 items-center">
        <i class="ki-filled ki-geolocation text-gray-500 text-sm">
        </i>
        <span class="text-gray-600">
        Lusaka, Zambia
        </span>
        </div>
        <div class="flex gap-1.25 items-center">
        <i class="ki-filled ki-sms text-gray-500 text-sm">
        </i>
        <a class="text-gray-600 hover:text-primary" href="mailto: jenny@kteam.com">
        {{ auth()->user()->email }}
        </a>
        </div>
        </div>
    </div>
</div>
{{-- </div> --}}
<div class="container-fixed">
    <div class="flex flex-nowrap items-center lg:items-end justify-between border-b border-b-gray-200 dark:border-b-coal-100 gap-6 mb-5 lg:mb-10">
     
     <div class="flex items-center lg:pb-4 gap-2.5">
      <button class="btn btn-sm btn-primary">
       <i class="ki-filled ki-users">
       </i>
       Edit My Profile
      </button>
      <button class="btn btn-sm btn-icon btn-light">
       <i class="ki-filled ki-messages">
       </i>
      </button>
      <div class="dropdown" data-dropdown="true" data-dropdown-placement="bottom-end" data-dropdown-trigger="click">
       <button class="dropdown-toggle btn btn-sm btn-icon btn-light">
        <i class="ki-filled ki-dots-vertical">
        </i>
       </button>
       <div class="dropdown-content menu-default w-full max-w-[220px]">
        <div class="menu-item" data-dropdown-dismiss="true">
         <button class="menu-link" data-modal-toggle="#share_profile_modal">
          <span class="menu-icon">
           <i class="ki-filled ki-coffee">
           </i>
          </span>
          <span class="menu-title">
           Share Profile
          </span>
         </button>
        </div>
        {{-- <div class="menu-item" data-dropdown-dismiss="true">
         <a class="menu-link" data-modal-toggle="#give_award_modal" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-award">
           </i>
          </span>
          <span class="menu-title">
           Give Award
          </span>
         </a>
        </div>
        <div class="menu-item" data-dropdown-dismiss="true">
         <button class="menu-link">
          <span class="menu-icon">
           <i class="ki-filled ki-chart-line">
           </i>
          </span>
          <span class="menu-title">
           Stay Updated
          </span>
          <label class="switch switch-sm">
           <input name="check" type="checkbox" value="1">
           </input>
          </label>
         </button>
        </div>
        <div class="menu-item" data-dropdown-dismiss="true">
         <button class="menu-link" data-modal-toggle="#report_user_modal">
          <span class="menu-icon">
           <i class="ki-filled ki-information-2">
           </i>
          </span>
          <span class="menu-title">
           Report User
          </span>
         </button>
        </div> --}}
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- end: container -->
   <!-- begin: container -->
   <div class="container-fixed">
    <!-- begin: grid -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-5 lg:gap-7.5">
     <div class="col-span-1">
      <div class="grid gap-5 lg:gap-7.5">
       <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          Compliance Performance Badges
         </h3>
        </div>
        <div class="card-body pb-7.5">
         <div class="flex items-center flex-wrap gap-3 lg:gap-4">
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-primary-clarity fill-primary-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
            <i class="ki-filled ki-abstract-39 text-1.5xl ps-px text-primary">
            </i>
           </div>
          </div>
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
            <i class="ki-filled ki-abstract-44 text-1.5xl ps-px text-brand">
            </i>
           </div>
          </div>
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-success-clarity fill-success-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
            <i class="ki-filled ki-abstract-25 text-1.5xl ps-px text-success">
            </i>
           </div>
          </div>
          <div class="relative size-[50px] shrink-0">
           <svg class="w-full h-full stroke-info-clarity fill-info-light" fill="none" height="48" viewbox="0 0 44 48" width="44" xmlns="http://www.w3.org/2000/svg">
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
            <i class="ki-filled ki-delivery-24 text-1.5xl ps-px text-info">
            </i>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          About
         </h3>
        </div>
        <div class="card-body pt-4 pb-3">
         <table class="table-auto">
          <tbody>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             Age
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
             {{ auth()->user()->dob }}
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             City
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
              {{ auth()->user()->city ?? 'Not Available' }}
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             State/Province:
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
              {{ auth()->user()->provnice ?? 'Not Available' }}
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             Country:
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
              {{ auth()->user()->country ?? 'Not Available' }}
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             Postcode:
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
             10101 ZM
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             Phone:
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
              {{ auth()->user()->phone ?? 'Not Available' }}
            </td>
           </tr>
           <tr>
            <td class="text-sm font-medium text-gray-500 pb-3.5 pe-3">
             Email:
            </td>
            <td class="text-sm font-medium text-gray-800 pb-3.5">
             <a class="text-gray-800 hover:text-primary-active" href="#">
              {{ auth()->user()->email }}
             </a>
            </td>
           </tr>
          </tbody>
         </table>
        </div>
       </div>




      {{-- <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          Work Experience
         </h3>
        </div>
        <div class="card-body">
         <div class="grid gap-y-5">
          <div class="flex align-start gap-3.5">
           <img alt="" class="h-9" src="assets/media/brand-logos/jira.svg"/>
           <div class="flex flex-col gap-1">
            <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active" href="#">
             Esprito Studios
            </a>
            <span class="text-sm font-medium text-gray-800">
             Senior Project Manager
            </span>
            <span class="text-xs font-medium text-gray-500 leading-none">
             2019 - Present
            </span>
           </div>
          </div>
          <div class="text-gray-600 font-semibold text-sm leading-none">
           Previous Jobs
          </div>
          <div class="flex align-start gap-3.5">
           <img alt="" class="h-9" src="assets/media/brand-logos/paccion.svg"/>
           <div class="flex flex-col gap-1">
            <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active" href="#">
             Pesto Plus
            </a>
            <span class="text-sm font-medium text-gray-800">
             CRM Product Lead
            </span>
            <span class="text-xs font-medium text-gray-500 leading-none">
             2012 - 2019
            </span>
           </div>
          </div>
          <div class="flex align-start gap-3.5">
           <img alt="" class="h-9" src="assets/media/brand-logos/perrier.svg"/>
           <div class="flex flex-col gap-1">
            <a class="text-sm font-semibold text-primary leading-none hover:text-primary-active" href="#">
             Perrier Technologies
            </a>
            <span class="text-sm font-medium text-gray-800">
             UX Research
            </span>
            <span class="text-xs font-medium text-gray-500 leading-none">
             2010 - 2012
            </span>
           </div>
          </div>
         </div>
        </div>
        <div class="card-footer justify-center">
         <a class="btn btn-link" href="html/demo1/public-profile/works.html">
          Open to Work
         </a>
        </div>
       </div> --}}



       {{-- <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          Skills
         </h3>
        </div>
        <div class="card-body">
         <div class="flex flex-wrap gap-2.5 mb-2">
          <span class="badge badge-sm badge-gray-200">
           Web Design
          </span>
          <span class="badge badge-sm badge-gray-200">
           Code Review
          </span>
          <span class="badge badge-sm badge-gray-200">
           Figma
          </span>
          <span class="badge badge-sm badge-gray-200">
           Product Development
          </span>
          <span class="badge badge-sm badge-gray-200">
           Webflow
          </span>
          <span class="badge badge-sm badge-gray-200">
           AICommunity Badges
          </span>
          <span class="badge badge-sm badge-gray-200">
           noCode
          </span>
          <span class="badge badge-sm badge-gray-200">
           Management
          </span>
         </div>
        </div>
       </div> --}}




       <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          Recent Uploads
         </h3>
         <div class="menu" data-menu="true">
          <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
           <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
           <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
            <div class="menu-item">
             <a class="menu-link" href="html/demo1/account/activity.html">
              <span class="menu-icon">
               <i class="ki-filled ki-cloud-change">
               </i>
              </span>
              <span class="menu-title">
               Activity
              </span>
             </a>
            </div>
            <div class="menu-item">
             <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
              <span class="menu-icon">
               <i class="ki-filled ki-share">
               </i>
              </span>
              <span class="menu-title">
               Share
              </span>
             </a>
            </div>
            <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
             <div class="menu-link">
              <span class="menu-icon">
               <i class="ki-filled ki-notification-status">
               </i>
              </span>
              <span class="menu-title">
               Notifications
              </span>
              <span class="menu-arrow">
               <i class="ki-filled ki-right text-3xs">
               </i>
              </span>
             </div>
             <div class="menu-dropdown menu-default w-full max-w-[175px]">
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-sms">
                 </i>
                </span>
                <span class="menu-title">
                 Email
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-message-notify">
                 </i>
                </span>
                <span class="menu-title">
                 SMS
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-icon">
                 <i class="ki-filled ki-notification-status">
                 </i>
                </span>
                <span class="menu-title">
                 Push
                </span>
               </a>
              </div>
             </div>
            </div>
            <div class="menu-item">
             <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
              <span class="menu-icon">
               <i class="ki-filled ki-dislike">
               </i>
              </span>
              <span class="menu-title">
               Report
              </span>
             </a>
            </div>
            <div class="menu-separator">
            </div>
            <div class="menu-item">
             <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
              <span class="menu-icon">
               <i class="ki-filled ki-setting-3">
               </i>
              </span>
              <span class="menu-title">
               Settings
              </span>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="card-body">
         <div class="grid gap-2.5 lg:gap-5">
          {{-- <div class="flex items-center gap-3">
           <div class="flex items-center grow gap-2.5">
            <img src="assets/media/file-types/pdf.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Project-pitch.pdf
             </span>
             <span class="text-xs font-normal text-gray-600">
              4.7 MB 26 Sep 2024 3:20 PM
             </span>
            </div>
           </div>
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
                 <i class="ki-filled ki-document">
                 </i>
                </span>
                <span class="menu-title">
                 Details
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
                <span class="menu-icon">
                 <i class="ki-filled ki-share">
                 </i>
                </span>
                <span class="menu-title">
                 Share
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
             </div>
            </div>
           </div>
          </div> --}}
          
          
          <p class="text-muted ">None</p>
         </div>
        </div>
        {{-- <div class="card-footer justify-center">
         <a class="btn btn-link" href="html/demo1/account/integrations.html">
          All Files
         </a>
        </div> --}}
       </div>
      </div>
     </div>


     <div class="col-span-2">
      <div class="flex flex-col gap-5 lg:gap-7.5">
       <div class="flex flex-col gap-5 lg:gap-7.5">
        <div class="card">
         <div class="card-body px-10 py-7.5 lg:pr-12.5">
          <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
           <div class="flex flex-col gap-3">
            <h2 class="text-1.5xl font-semibold text-gray-900">
             Unlock Creative
             <br/>
             Partnerships on Our Blog
            </h2>
            <p class="text-sm text-gray-700 leading-5.5">
             Explore exciting collaboration opportunities with our blog.
                  We're open to partnerships, guest posts, and more. 
                  Join us to share your insights and grow your audience.
            </p>
           </div>
           <img alt="image" class="dark:hidden max-h-[160px]" src="{{ asset('public/assets/media/illustrations/1.svg') }}"/>
           <img alt="image" class="light:hidden max-h-[160px]" src="assets/media/illustrations/1-dark.svg"/>
          </div>
         </div>
         {{-- <div class="card-footer justify-center">
          <a class="btn btn-link" href="html/demo1/network/get-started.html">
           Get Started
          </a>
         </div> --}}
        </div>
        <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           Tax Compliance Trend
          </h3>
          <div class="menu" data-menu="true">
           <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
            <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
               <span class="menu-icon">
                <i class="ki-filled ki-setting-3">
                </i>
               </span>
               <span class="menu-title">
                Settings
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/members/import-members.html">
               <span class="menu-icon">
                <i class="ki-filled ki-some-files">
                </i>
               </span>
               <span class="menu-title">
                Import
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/activity.html">
               <span class="menu-icon">
                <i class="ki-filled ki-cloud-change">
                </i>
               </span>
               <span class="menu-title">
                Activity
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-dislike">
                </i>
               </span>
               <span class="menu-title">
                Report
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="px-3 py-1">
          <div id="media_uploads_chart">
          </div>
         </div>
        </div>
       </div>
       <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
        
        {{-- <div class="card">
         <div class="card-header gap-2">
          <h3 class="card-title">
           Contributors
          </h3>
          <div class="menu" data-menu="true">
           <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
            <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/activity.html">
               <span class="menu-icon">
                <i class="ki-filled ki-cloud-change">
                </i>
               </span>
               <span class="menu-title">
                Activity
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" data-modal-toggle="#share_profile_modal" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-share">
                </i>
               </span>
               <span class="menu-title">
                Share
               </span>
              </a>
             </div>
             <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
              <div class="menu-link">
               <span class="menu-icon">
                <i class="ki-filled ki-notification-status">
                </i>
               </span>
               <span class="menu-title">
                Notifications
               </span>
               <span class="menu-arrow">
                <i class="ki-filled ki-right text-3xs">
                </i>
               </span>
              </div>
              <div class="menu-dropdown menu-default w-full max-w-[175px]">
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-sms">
                  </i>
                 </span>
                 <span class="menu-title">
                  Email
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-message-notify">
                  </i>
                 </span>
                 <span class="menu-title">
                  SMS
                 </span>
                </a>
               </div>
               <div class="menu-item">
                <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                 <span class="menu-icon">
                  <i class="ki-filled ki-notification-status">
                  </i>
                 </span>
                 <span class="menu-title">
                  Push
                 </span>
                </a>
               </div>
              </div>
             </div>
             <div class="menu-item">
              <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-dislike">
                </i>
               </span>
               <span class="menu-title">
                Report
               </span>
              </a>
             </div>
             <div class="menu-separator">
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
               <span class="menu-icon">
                <i class="ki-filled ki-setting-3">
                </i>
               </span>
               <span class="menu-title">
                Settings
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="card-body">
          <div class="flex flex-col gap-2 lg:gap-5">
           <div class="flex items-center gap-2">
            <div class="flex items-center grow gap-2.5">
             <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-3.png"/>
             <div class="flex flex-col">
              <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
               Tyler Hero
              </a>
              <span class="text-xs font-semibold text-gray-600">
               6 contributors
              </span>
             </div>
            </div>
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
           <div class="flex items-center gap-2">
            <div class="flex items-center grow gap-2.5">
             <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-1.png"/>
             <div class="flex flex-col">
              <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
               Esther Howard
              </a>
              <span class="text-xs font-semibold text-gray-600">
               29 contributors
              </span>
             </div>
            </div>
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
           <div class="flex items-center gap-2">
            <div class="flex items-center grow gap-2.5">
             <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-14.png"/>
             <div class="flex flex-col">
              <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
               Cody Fisher
              </a>
              <span class="text-xs font-semibold text-gray-600">
               34 contributors
              </span>
             </div>
            </div>
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
           <div class="flex items-center gap-2">
            <div class="flex items-center grow gap-2.5">
             <img alt="" class="rounded-full size-9 shrink-0" src="assets/media/avatars/300-7.png"/>
             <div class="flex flex-col">
              <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
               Arlene McCoy
              </a>
              <span class="text-xs font-semibold text-gray-600">
               1 contributors
              </span>
             </div>
            </div>
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="card-footer justify-center">
          <a class="btn btn-link" href="html/demo1/public-profile/network.html">
           All Contributors
          </a>
         </div>
        </div> --}}


        {{-- <div class="card">
         <div class="card-header">
          <h3 class="card-title">
           Assistance
          </h3>
          <div class="menu" data-menu="true">
           <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
            <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
            <div class="menu-dropdown menu-default w-full max-w-[200px]" data-menu-dismiss="true">
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/home/settings-enterprise.html">
               <span class="menu-icon">
                <i class="ki-filled ki-setting-3">
                </i>
               </span>
               <span class="menu-title">
                Settings
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/members/import-members.html">
               <span class="menu-icon">
                <i class="ki-filled ki-some-files">
                </i>
               </span>
               <span class="menu-title">
                Import
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/activity.html">
               <span class="menu-icon">
                <i class="ki-filled ki-cloud-change">
                </i>
               </span>
               <span class="menu-title">
                Activity
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" data-modal-toggle="#report_user_modal" href="#">
               <span class="menu-icon">
                <i class="ki-filled ki-dislike">
                </i>
               </span>
               <span class="menu-title">
                Report
               </span>
              </a>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="card-body flex justify-center items-center px-3 py-1">
          <div id="contributions_chart">
          </div>
         </div>
        </div> --}}
       </div>



       {{-- <div class="card">
        <div class="card-header">
         <h3 class="card-title">
          Projects
         </h3>
         <div class="menu" data-menu="true">
          <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
           <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
           <div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
            <div class="menu-item">
             <a class="menu-link" href="html/demo1/account/home/settings-plain.html">
              <span class="menu-icon">
               <i class="ki-filled ki-add-files">
               </i>
              </span>
              <span class="menu-title">
               Add
              </span>
             </a>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="html/demo1/account/members/import-members.html">
              <span class="menu-icon">
               <i class="ki-filled ki-file-down">
               </i>
              </span>
              <span class="menu-title">
               Import
              </span>
             </a>
            </div>
            <div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
             <div class="menu-link">
              <span class="menu-icon">
               <i class="ki-filled ki-file-up">
               </i>
              </span>
              <span class="menu-title">
               Export
              </span>
              <span class="menu-arrow">
               <i class="ki-filled ki-right text-3xs">
               </i>
              </span>
             </div>
             <div class="menu-dropdown menu-default w-full max-w-[125px]">
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-title">
                 PDF
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-title">
                 CVS
                </span>
               </a>
              </div>
              <div class="menu-item">
               <a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
                <span class="menu-title">
                 Excel
                </span>
               </a>
              </div>
             </div>
            </div>
            <div class="menu-item">
             <a class="menu-link" href="html/demo1/account/security/privacy-settings.html">
              <span class="menu-icon">
               <i class="ki-filled ki-setting-3">
               </i>
              </span>
              <span class="menu-title">
               Settings
              </span>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="card-table scrollable-x-auto">
         <table class="table text-right">
          <thead>
           <tr>
            <th class="text-left min-w-52">
             Project Name
            </th>
            <th class="min-w-40">
             Progress
            </th>
            <th class="min-w-32">
             People
            </th>
            <th class="min-w-32">
             Due Date
            </th>
            <th class="w-[30px]">
            </th>
           </tr>
          </thead>
          <tbody>
           <tr>
            <td class="text-left">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
              Acme software development
             </a>
            </td>
            <td>
             <div class="progress progress-primary">
              <div class="progress-bar" style="width: 60%">
              </div>
             </div>
            </td>
            <td>
             <div class="flex justify-end shrink-0">
              <div class="flex -space-x-2">
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-4.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
               </div>
               <div class="flex">
                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                 +3
                </span>
               </div>
              </div>
             </div>
            </td>
            <td class="text-sm font-medium text-gray-700">
             24 Aug, 2024
            </td>
            <td class="text-left">
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
           <tr>
            <td class="text-left">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
              Strategic Partnership Deal
             </a>
            </td>
            <td>
             <div class="progress">
              <div class="progress-bar" style="width: 100%">
              </div>
             </div>
            </td>
            <td>
             <div class="flex justify-end shrink-0">
              <div class="flex -space-x-2">
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-1.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
               </div>
               <div class="flex">
                <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-danger-inverse ring-danger-light bg-danger">
                 M
                </span>
               </div>
              </div>
             </div>
            </td>
            <td class="text-sm font-medium text-gray-700">
             10 Sep, 2024
            </td>
            <td class="text-left">
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
           <tr>
            <td class="text-left">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
              Client Onboarding
             </a>
            </td>
            <td>
             <div class="progress progress-primary">
              <div class="progress-bar" style="width: 20%">
              </div>
             </div>
            </td>
            <td>
             <div class="flex justify-end shrink-0">
              <div class="flex -space-x-2">
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-20.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-7.png"/>
               </div>
              </div>
             </div>
            </td>
            <td class="text-sm font-medium text-gray-700">
             19 Sep, 2024
            </td>
            <td class="text-left">
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
           <tr>
            <td class="text-left">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
              Widget Supply Agreement
             </a>
            </td>
            <td>
             <div class="progress progress-success">
              <div class="progress-bar" style="width: 100%">
              </div>
             </div>
            </td>
            <td>
             <div class="flex justify-end shrink-0">
              <div class="flex -space-x-2">
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-6.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-23.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-12.png"/>
               </div>
               <div class="flex">
                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-primary-inverse ring-primary-light bg-primary">
                 +1
                </span>
               </div>
              </div>
             </div>
            </td>
            <td class="text-sm font-medium text-gray-700">
             5 May, 2024
            </td>
            <td class="text-left">
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
           <tr>
            <td class="text-left">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary" href="#">
              Project X Redesign
             </a>
            </td>
            <td>
             <div class="progress progress-primary">
              <div class="progress-bar" style="width: 80%">
              </div>
             </div>
            </td>
            <td>
             <div class="flex justify-end shrink-0">
              <div class="flex -space-x-2">
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-2.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-15.png"/>
               </div>
               <div class="flex">
                <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="assets/media/avatars/300-18.png"/>
               </div>
               <div class="flex">
                <span class="relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse ring-success-light bg-success">
                 +2
                </span>
               </div>
              </div>
             </div>
            </td>
            <td class="text-sm font-medium text-gray-700">
             1 Feb, 2025
            </td>
            <td class="text-left">
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
        <div class="card-footer justify-center">
         <a class="btn btn-link" href="html/demo1/public-profile/projects/3-columns.html">
          All Projects
         </a>
        </div>
       </div> --}}
      </div>
     </div>
    </div>
    <!-- end: grid -->
   </div>

   @endsection