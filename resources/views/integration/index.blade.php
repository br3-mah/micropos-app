@extends('layouts.main')
@section('content')

    <main class="grow content pt-5" id="content" role="content">
        <!-- begin: container -->
        <div class="container-fixed">
         <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
          <div class="flex flex-col justify-center gap-2">
           <h1 class="text-xl font-semibold leading-none text-gray-900">
            Integrations
           </h1>
           <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
            Enhance Workflows with Advanced Integrations.
           </div>
          </div>
          <div class="flex items-center gap-2.5">
           <a class="btn btn-sm btn-light" href="#">
            Add New Integration
           </a>
          </div>
         </div>
        </div>
        <!-- end: container -->
        <!-- begin: container -->
        <div class="container-fixed">
         <div class="grid gap-5 lg:gap-7.5">
          <!-- begin: cards -->
          <div id="integrations_cards">
           <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-5 lg:gap-7.5">

            {{-- Loop Here --}}
            <div class="card">
             <div class="card-body p-5 lg:p-7.5">
              <div class="flex items-center justify-between mb-3 lg:mb-5">
               <div class="flex items-center justify-center">
                <img alt="" class="h-11 shrink-0" src="{{ asset('public/assets/media/brand-logos/jira.svg') }}"/>
               </div>
               <div class="btn btn-sm btn-icon btn-clear btn-light">
                <i class="ki-filled ki-exit-right-corner">
                </i>
               </div>
              </div>
              <div class="flex flex-col gap-1 lg:gap-2.5">
               <a class="text-base font-semibold text-gray-900 hover:text-primary-active" href="html/demo1/account/billing/basic.html">
                ZRA VDSC 
               </a>
               <span class="text-2sm font-medium text-gray-600">
                ZRA Smart Invoicing Module allows you to easily submit tax returns
               </span>
              </div>
             </div>
             <div class="card-footer justify-between items-center py-3.5">
              <a class="btn btn-light btn-sm">
               <i class="ki-filled ki-mouse-square">
               </i>
               Connect
              </a>
              <div class="flex items-center gap-2.5">
               <div class="switch">
                <input checked="" name="param" type="checkbox" value="1"/>
               </div>
              </div>
             </div>
            </div>
            
            
           </div>
          </div>
          <!-- end: cards -->
          <div class="card">
           <div class="card-body flex flex-col items-center gap-2.5 py-7.5">
            <div class="flex justify-center p-7.5 py-9">
             <img alt="image" class="dark:hidden max-h-[230px]" src="{{ asset('public/assets/media/illustrations/28.svg') }}"/>
             <img alt="image" class="light:hidden max-h-[230px]" src="{{ asset('public/assets/media/illustrations/28-dark.svg') }}"/>
            </div>
            <div class="flex flex-col gap-5 lg:gap-7.5">
             <div class="flex flex-col gap-3 text-center">
              <h2 class="text-1.5xl font-semibold text-gray-900">
               Add New Integration
              </h2>
              <p class="text-sm font-medium text-gray-700">
               Explore New Integration: Expand Your Toolkit with Cutting-Edge,
               <br/>
               User-Friendly Solutions Tailored for Efficient and Innovative Project Management.
              </p>
             </div>
             <div class="flex justify-center mb-5">
              <a class="btn btn-primary" href="html/demo1/network/user-cards/mini-cards.html">
               Start Now
              </a>
             </div>
            </div>
           </div>
          </div>
          
         
         </div>
        </div>
        <!-- end: container -->
       </main>
       @endsection