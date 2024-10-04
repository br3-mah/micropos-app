<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.0.0
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">
 <head><base href="../../">
  <title>
   Welcome || MicroPOS
  </title>
  <meta charset="utf-8"/>
  <meta content="follow, index" name="robots"/>
  <link href="https://keenthemes.com/metronic" rel="canonical"/>
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="@keenthemes" name="twitter:site"/>
  <meta content="@keenthemes" name="twitter:creator"/>
  <meta content="summary_large_image" name="twitter:card"/>
  <meta content="Metronic - Tailwind CSS " name="twitter:title"/>
  <meta content="" name="twitter:description"/>
  <meta content="/static/metronic-tailwind-html/dist/assets/media/app/og-image.png" name="twitter:image"/>
  <meta content="https://keenthemes.com/metronic" property="og:url"/>
  <meta content="en_US" property="og:locale"/>
  <meta content="website" property="og:type"/>
  <meta content="@keenthemes" property="og:site_name"/>
  <meta content="Metronic - Tailwind CSS " property="og:title"/>
  <meta content="" property="og:description"/>
  <meta content="/static/metronic-tailwind-html/dist/assets/media/app/og-image.png" property="og:image"/>
  <link href="{{ env('APP_URL') }}/public/assets/img/fav.jpeg" rel="apple-touch-icon" sizes="180x180"/>
  <link href="{{ env('APP_URL') }}/public/assets/img/fav.jpeg" rel="icon" sizes="32x32" type="image/png"/>
  <link href="{{ env('APP_URL') }}/public/assets/img/fav.jpeg" rel="icon" sizes="16x16" type="image/png"/>
  <link href="{{ env('APP_URL') }}/public/assets/img/fav.jpeg" rel="shortcut icon"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
  <link href="{{ env('APP_URL') }}/public/assets/vendors/apexcharts/apexcharts.css" rel="stylesheet"/>
  <link href="{{ env('APP_URL') }}/public/assets/vendors/keenicons/styles.bundle.css" rel="stylesheet"/>
  <link href="{{ env('APP_URL') }}/public/assets/css/styles.css" rel="stylesheet"/>
  <!-- Include Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <!-- Include Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 </head>
 <body class="flex h-full demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
  <!--begin::Theme mode setup on page load-->
  <script>
   const defaultThemeMode = 'light'; // light|dark|system
		let themeMode;

		if ( document.documentElement ) {
			if ( localStorage.getItem('theme')) {
					themeMode = localStorage.getItem('theme');
			} else if ( document.documentElement.hasAttribute('data-theme-mode')) {
				themeMode = document.documentElement.getAttribute('data-theme-mode');
			} else {
				themeMode = defaultThemeMode;
			}

			if (themeMode === 'system') {
				themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
			}

			document.documentElement.classList.add(themeMode);
		}
  </script>
  <!--end::Theme mode setup on page load-->
  <!--begin::Page layout-->
  <div class="flex grow">
   <div class="sidebar dark:bg-coal-600 bg-light border-r border-r-gray-200 dark:border-r-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false" id="sidebar">
    <div class="sidebar-header hidden lg:flex items-center relative justify-between px-3 lg:px-6 shrink-0" id="sidebar_header">
     <a class="dark:hidden" href="{{ route('home') }}">
      <img width="220" class="default-logo min-h-[22px] max-w-none" src="{{ env('APP_URL') }}/public/assets/img/1.png"/>
      <img class="small-logo min-h-[22px] max-w-none" src="{{ env('APP_URL') }}/public/assets/img/fav.jpeg"/>
     </a>
     <a class="hidden dark:block" href="{{ route('home') }}">
      <img width="220" class="default-logo min-h-[22px] max-w-none" src="{{ env('APP_URL') }}/public/assets/img/1.png"/>
      <img class="small-logo min-h-[22px] max-w-none" src="{{ env('APP_URL') }}/public/assets/img/fav.jpeg"/>
     </a>
     <button class="btn btn-icon btn-icon-md size-[30px] rounded-lg border border-gray-200 dark:border-gray-300 bg-light text-gray-500 hover:text-gray-700 toggle absolute left-full top-2/4 -translate-x-2/4 -translate-y-2/4" data-toggle="body" data-toggle-class="sidebar-collapse" id="sidebar_toggle">
      <i class="ki-filled ki-black-left-line toggle-active:rotate-180 transition-all duration-300">
      </i>
     </button>
    </div>


    <div class="sidebar-content flex grow shrink-0 py-5 pr-2" id="sidebar_content">
     <div class="scrollable-y-hover grow shrink-0 flex pl-2 lg:pl-5 pr-1 lg:pr-3" data-scrollable="true" data-scrollable-dependencies="#sidebar_header" data-scrollable-height="auto" data-scrollable-offset="0px" data-scrollable-wrappers="#sidebar_content" id="sidebar_scrollable">
      <div class="menu flex flex-col grow gap-0.5" data-menu="true" data-menu-accordion-expand-all="false" id="sidebar_menu">
       
        <div class="menu-item" data-menu-item-toggle="accordion">
            <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
                <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
                    <i class="ki-filled ki-element-11 text-lg"></i>
                </span>
                <a href="{{ route('home') }}" class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
                    Dashboard
                </a>
                {{-- <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
                    <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
                    </i>
                    <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
                    </i>
                </span> --}}
            </div>
        
            {{-- <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
                <div class="menu-item">
                    <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1.html" tabindex="0">
                        <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
                        </span>
                        <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                            Add a Company
                        </span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/dashboards/dark-sidebar.html" tabindex="0">
                        <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
                        </span>
                        <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
                            Add a Business
                        </span>
                    </a>
                </div>
            </div> --}}
       </div>

       {{-- <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
            Companies
        </span>
       </div> --}}

       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-profile-circle text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          Companies
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
          <a href="{{ route('companies.create') }}" class="menu-link border border-transparent gap-[14px] pl-[10px] pr-[10px] py-[8px] grow cursor-pointer" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium mr-1 text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Add a Company
           </span>
          </a>
         
         </div>
         
         <div class="menu-item">
          <a href="{{ route('companies.index') }}"  class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/public-profile/works.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            My List of Companies
           </span>
          </a>
         </div>
         
         {{-- <div class="menu-item">
          <a class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/public-profile/works.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Works
           </span>
          </a>
         </div> --}}
         
        </div>
       </div>

       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-setting-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
          My ZRA Integration 
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         

         <div class="menu-item">
          <a  href="{{ route('integrations.index') }}" class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Integrations
           </span>
          </a>
         </div>
         
         <div class="menu-item">
          <a href="{{ route('api-keys.index') }}" class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/api-keys.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            API Keys
           </span>
          </a>
         </div>
         
        </div>
       </div>


       {{-- <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
            Notifications
         </span>
        
        </div>
       </div> --}}

       
       {{-- <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
         Tools
        </span>
       </div> --}}

       <div class="menu-item" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
        <div class="menu-link flex items-center grow cursor-pointer border border-transparent gap-[10px] pl-[10px] pr-[10px] py-[6px]" tabindex="0">
         <span class="menu-icon items-start text-gray-500 dark:text-gray-400 w-[20px]">
          <i class="ki-filled ki-setting-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700 menu-item-active:text-primary menu-link-hover:!text-primary">
            Subscription Management
         </span>
         <span class="menu-arrow text-gray-400 w-[20px] shrink-0 justify-end ml-1 mr-[-10px]">
          <i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
          </i>
          <i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
          </i>
         </span>
        </div>
        <div class="menu-accordion gap-0.5 pl-[10px] relative before:absolute before:left-[20px] before:top-0 before:bottom-0 before:border-l before:border-gray-200">
         

         <div class="menu-item">
          <a href="{{ route('billing.index') }}" class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/integrations.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Current Subscription
           </span>
          </a>
         </div>
         <div class="menu-item">
          <a href="{{ route('billing.history') }}" class="menu-link gap-[14px] pl-[10px] pr-[10px] py-[8px] border border-transparent items-center grow menu-item-active:bg-secondary-active dark:menu-item-active:bg-coal-300 dark:menu-item-active:border-gray-100 menu-item-active:rounded-lg hover:bg-secondary-active dark:hover:bg-coal-300 dark:hover:border-gray-100 hover:rounded-lg" href="html/demo1/account/notifications.html" tabindex="0">
           <span class="menu-bullet flex w-[6px] relative before:absolute before:top-0 before:size-[6px] before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2 menu-item-active:before:bg-primary menu-item-hover:before:bg-primary">
           </span>
           <span class="menu-title text-2sm font-medium text-gray-700 menu-item-active:text-primary menu-item-active:font-semibold menu-link-hover:!text-primary">
            Billing History
           </span>
          </a>
         </div>
         
         
        </div>
       </div>

       <div class="menu-item">
        <a href="{{ route('users.index') }}" class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href="" tabindex="0">
         <span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
          <i class="ki-filled ki-users text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700">
          User Management
         </span>
        
        </a>
       </div>
       {{-- <div class="menu-item">
        <a href="{{ route('projects.index') }}" class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href="" tabindex="0">
         <span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
          <i class="ki-filled ki-questionnaire-tablet text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700">
          Projects
         </span>

        </a>
       </div> --}}

{{--        
       <div class="menu-item pt-2.25 pb-px">
        <span class="menu-heading uppercase pl-[10px] pr-[10px] text-2sm font-semibold text-gray-500">
         General Settings
        </span>
       </div> --}}


       <div class="menu-item">
        <a href="{{ route('audit.index') }}" class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href="" tabindex="0">
         <span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
          <i class="ki-filled ki-some-files text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700">
            Audit Log
         </span>
         
        </a>
       </div>
       <div class="menu-item">
        <a href="{{ route('support.index') }}" class="menu-label gap-[10px] pl-[10px] pr-[10px] py-[6px] border border-transparent" href="" tabindex="0">
         <span class="menu-icon items-start w-[20px] text-gray-500 dark:text-gray-400">
          <i class="ki-filled ki-note-2 text-lg">
          </i>
         </span>
         <span class="menu-title text-sm font-semibold text-gray-700">
            Support 
         </span>
        
        </a>
       </div>
      </div>
     </div>
    </div>
   </div>
   <div class="wrapper flex grow flex-col">
    <header class="header fixed top-0 z-10 left-0 right-0 flex items-stretch shrink-0 bg-[#fefefe] dark:bg-coal-500" data-sticky="true" data-sticky-class="shadow-sm dark:border-b dark:border-b-coal-100" data-sticky-name="header" id="header">
     <!-- begin: container -->
     <div class="container-fixed flex justify-between items-stretch lg:gap-4" id="header_container">
      <div class="flex gap-1 lg:hidden items-center -ml-1">
       <a class="shrink-0" href="html/demo1.html">
        <img class="max-h-[25px] w-full" src="{{ env('APP_URL') }}/public/assets/img/fav.jpeg"/>
       </a>
       <div class="flex items-center">
        <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
         <i class="ki-filled ki-menu">
         </i>
        </button>
        <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#megamenu_wrapper">
         <i class="ki-filled ki-burger-menu-2">
         </i>
        </button>
       </div>
      </div>

        <div class="flex items-stretch" id="megamenu_container">
            {{-- @include('layouts.megamenu.mega') --}}
        </div>
      <div class="flex items-center gap-2 lg:gap-3.5">
        <style>
            .toggle-container {
                --primary-color: #3498db;
                --secondary-color: #e74c3c;
                --background-color: #f5f7fa;
                --switch-bg-color: #ffffff;
                --text-color: #2c3e50;
                --shadow-color: rgba(0, 0, 0, 0.1);
                
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
                display: inline-flex;
                align-items: center;
                background-color: var(--background-color);
                padding: 0.5rem 1rem;
                border-radius: 1rem;
                box-shadow: 0 0.25rem 0.5rem var(--shadow-color);
                transition: all 0.3s ease;
            }
        
            .toggle-switch {
                position: relative;
                width: 3.5rem;
                height: 2rem;
                margin-right: 0.5rem;
            }
        
            .toggle-switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }
        
            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: var(--switch-bg-color);
                transition: 0.4s;
                border-radius: 1rem;
                box-shadow: inset 0 0.125rem 0.25rem var(--shadow-color);
            }
        
            .slider:before {
                position: absolute;
                content: "";
                height: 1.5rem;
                width: 1.5rem;
                left: 0.25rem;
                bottom: 0.25rem;
                background-color: var(--secondary-color);
                transition: 0.4s;
                border-radius: 50%;
            }
        
            input:checked + .slider:before {
                transform: translateX(1.5rem);
                background-color: var(--primary-color);
            }
        
            .mode-display {
                font-size: 0.875rem;
                font-weight: 600;
                color: var(--text-color);
                transition: all 0.3s ease;
            }
        
            .icon {
                display: inline-block;
                width: 1rem;
                height: 1rem;
                margin-right: 0.25rem;
                vertical-align: middle;
            }
        
            .icon-production {
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%23e74c3c"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>') no-repeat center center / contain;
            }
        
            .icon-sandbox {
                background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="%233498db"><path d="M15 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6s2.69-6 6-6 6 2.69 6 6-2.69 6-6 6zM3 12c0-2.61 1.67-4.83 4-5.65V4.26C3.55 5.15 1 8.27 1 12s2.55 6.85 6 7.74v-2.09c-2.33-.82-4-3.04-4-5.65z"/></svg>') no-repeat center center / contain;
            }
        </style>
        
        <div class="toggle-container" role="region" aria-label="Environment Mode Selection">
            <label class="toggle-switch" for="modeToggle">
                <input type="checkbox" id="modeToggle" role="switch" aria-checked="false" aria-label="Toggle between Production and Sandbox modes">
                <span class="slider"></span>
            </label>
            <div class="mode-display" id="modeDisplay" aria-live="polite">
                <i class="icon icon-production"></i>Production
            </div>
        </div>
        
        <script>
            (function() {
                const toggle = document.getElementById('modeToggle');
                const modeDisplay = document.getElementById('modeDisplay');
                const toggleContainer = document.querySelector('.toggle-container');
        
                function updateMode() {
                    const isProduction = !toggle.checked;
                    const mode = isProduction ? 'Production' : 'Sandbox';
                    const icon = isProduction ? 'icon-production' : 'icon-sandbox';
                    const color = isProduction ? 'var(--secondary-color)' : 'var(--primary-color)';
                    
                    modeDisplay.innerHTML = `<i class="icon ${icon}"></i>${mode}`;
                    modeDisplay.style.color = color;
                    toggle.setAttribute('aria-checked', toggle.checked);
                    
                    // Animate the container
                    toggleContainer.style.transform = 'scale(1.05)';
                    setTimeout(() => { toggleContainer.style.transform = 'scale(1)'; }, 200);
        
                    // Custom event for external scripts
                    toggleContainer.dispatchEvent(new CustomEvent('modeChange', { 
                        detail: { mode: mode.toLowerCase() } 
                    }));
                }
        
                toggle.addEventListener('change', updateMode);
        
                // Keyboard accessibility
                toggle.addEventListener('keydown', function(e) {
                    if (e.key === ' ' || e.key === 'Enter') {
                        e.preventDefault();
                        this.checked = !this.checked;
                        updateMode();
                    }
                });
        
                // Initialize
                updateMode();
            })();
        </script>

       <button class="btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary text-gray-500" data-modal-toggle="#search_modal">
        <i class="ki-filled ki-magnifier">
        </i>
       </button>
       
    
       
       <div class="dropdown" data-dropdown="true" data-dropdown-offset="70px, 10px" data-dropdown-placement="bottom-end" data-dropdown-trigger="click|lg:click">
        <button class="dropdown-toggle btn btn-icon btn-icon-lg relative cursor-pointer size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
         <i class="ki-filled ki-notification-on">
         </i>
         <span class="badge badge-dot badge-success size-[5px] absolute top-0.5 right-0.5 transform translate-y-1/2">
         </span>
        </button>
        
        <div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
         <div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5" id="notifications_header">
          Notifications
          <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-dropdown-dismiss="true">
           <i class="ki-filled ki-cross">
           </i>
          </button>
         </div>
         <div class="border-b border-b-gray-200">
         </div>
         @include('layouts.notifications.show-all')
         <div class="grow hidden" id="notifications_tab_inbox">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2.5 px-5" id="notification_request_13">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-25.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Samuel Lee
                 </a>
                 <span class="text-gray-700">
                  requested to add user to
                 </span>
                 <a class="hover:text-primary-active text-primary font-semibold" href="#">
                  TechSynergy
                 </a>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 22 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row justify-between gap-1.5 px-2.5 py-2 rounded-lg bg-light-active">
                <div class="flex flex-col">
                 <a class="hover:text-primary-active font-medium text-gray-900 text-xs" href="#">
                  Ronald Richards
                 </a>
                 <a class="hover:text-primary-active text-gray-500 font-medium text-3xs" href="#">
                  ronald.richards@gmail.com
                 </a>
                </div>
                <a class="hover:text-primary-active text-gray-700 font-medium text-xs" href="#">
                 Go to profile
                </a>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_13">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_13">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex items-center grow gap-2.5 px-5">
              <div class="flex items-center justify-center size-8 bg-success-light rounded-full border border-success-clarity">
               <i class="ki-filled ki-check text-lg text-success">
               </i>
              </div>
              <div class="flex flex-col gap-1">
               <span class="text-2sm font-medium text-gray-700">
                You have succesfully verified your account
               </span>
               <span class="font-medium text-gray-500 text-2xs">
                2 days ago
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-34.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Ava Peterson
                 </a>
                 <span class="text-gray-700">
                  uploaded attachment
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 ACME
                </span>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="{{ env('APP_URL') }}/public/assets/media/file-types/xls.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   Redesign-2024.xls
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   2.6 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-29.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Ethan Parker
                 </a>
                 <span class="text-gray-700">
                  created a new tasks to
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Site Sculpt
                 </a>
                 <span class="text-gray-700">
                  project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Web Designer
                </span>
               </div>
               <div class="card shadow-none p-3.5 gap-3.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-between flex-wrap gap-2.5">
                 <div class="flex flex-col gap-1">
                  <span class="font-medium text-gray-900 text-xs">
                   Location history is erased after Logging In
                  </span>
                  <span class="font-medium text-gray-500 text-3xs">
                   Due Date: 15 May, 2024
                  </span>
                 </div>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png"/>
                  </div>
                 </div>
                </div>
                <div class="flex items-center gap-2.5">
                 <span class="badge badge-sm badge-success badge-outline">
                  Improvement
                 </span>
                 <span class="badge badge-sm badge-danger badge-outline">
                  Bug
                 </span>
                </div>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-30.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Benjamin Harris
                 </a>
                 <span class="text-gray-700">
                  requested to upgrade plan
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Marketing
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-24.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Isaac Morgan
                </a>
                <span class="text-gray-700">
                 mentioned you in
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 Data Transmission
                </a>
                topic
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                6 days ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Dev Team
               </span>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_inbox_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
         <div class="grow hidden" id="notifications_tab_team">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-15.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3 grow" id="notification_request_10">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Nova Hawthorne
                 </a>
                 <span class="text-gray-700">
                  sent you an meeting invation
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 2 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="card shadow-none p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-between flex-wrap gap-2.5">
                 <div class="flex items-center gap-2.5">
                  <div class="border border-brand-clarity rounded-lg">
                   <div class="flex items-center justify-center border-b border-b-brand-clarity bg-brand-light rounded-t-lg">
                    <span class="text-3xs text-brand fw-medium p-1.5">
                     Apr
                    </span>
                   </div>
                   <div class="flex items-center justify-center size-9">
                    <span class="fw-semibold text-gray-900 text-md tracking-tight">
                     12
                    </span>
                   </div>
                  </div>
                  <div class="flex flex-col gap-1.5">
                   <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                    Peparation For Release
                   </a>
                   <span class="font-medium text-gray-600 text-2xs">
                    9:00 PM - 10:00 PM
                   </span>
                  </div>
                 </div>
                 <div class="flex -space-x-2">
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-4.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
                  </div>
                  <div class="flex">
                   <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png"/>
                  </div>
                  <div class="flex">
                   <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                    +3
                   </span>
                  </div>
                 </div>
                </div>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_10">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_10">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-6.png"/>
               <span class="size-1.5 badge badge-circle absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Adrian Vale
                </a>
                <span class="text-gray-700">
                 change the due date of
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 Marketing
                </a>
                to 13 May
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                2 days ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Marketing
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-12.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5 grow">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Skylar Frost
                 </a>
                 <span class="text-gray-700">
                  uploaded 2 attachments
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Web Design
                </span>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="{{ env('APP_URL') }}/public/assets/media/file-types/word.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   Landing-page.docx
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   1.9 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
               <div class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center gap-1.5">
                 <img class="h-6" src="{{ env('APP_URL') }}/public/assets/media/file-types/svg.svg"/>
                 <div class="flex flex-col gap-0.5">
                  <a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
                   New-icon.svg
                  </a>
                  <span class="font-medium text-gray-500 text-2xs">
                   2.3 MB
                  </span>
                 </div>
                </div>
                <button class="btn btn-icon btn-xs btn-clear btn-light">
                 <svg fill="none" height="14" viewbox="0 0 14 14" width="14" xmlns="http://www.w3.org/2000/svg">
                  <path clip-rule="evenodd" d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                  <path clip-rule="evenodd" d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z" fill="#99A1B7" fill-rule="evenodd">
                  </path>
                 </svg>
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-21.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Selene Silverleaf
                 </a>
                 <span class="text-gray-700">
                  commented on
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  SiteSculpt
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Manager
                </span>
               </div>
               <div class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
                <div class="text-2sm font-semibold text-gray-600 mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  @Cody
                 </a>
                 <span class="text-gray-700 font-medium">
                  This design  is simply stunning! From layout to color, it's a work of art!
                 </span>
                </div>
                <label class="input input-sm">
                 <input placeholder="Reply" type="text" value="">
                  <button class="btn btn-icon">
                   <i class="ki-filled ki-picture">
                   </i>
                  </button>
                 </input>
                </label>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-13.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Thalia Fox
                 </a>
                 <span class="text-gray-700">
                  has invited you to join
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Design Research
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_team_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
         <div class="grow hidden" id="notifications_tab_following">
          <div class="flex flex-col">
           <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
            <div class="flex flex-col gap-5 pt-3 pb-4">
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Jane Perez
                 </a>
                 <span class="text-gray-700">
                  added 2 new works to
                 </span>
                 <a class="hover:text-primary-active text-primary font-semibold" href="#">
                  Inspirations 2024
                 </a>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 23 hours ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Craftwork Design
                </span>
               </div>
               <div class="flex items-center gap-2.5">
                <div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                 <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24" style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x600/6.jpg')">
                 </div>
                 <div class="px-2.5 pb-2">
                  <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5" href="#">
                   Geometric Patterns
                  </a>
                  <div class="text-2xs font-medium text-gray-500">
                   Token ID:
                   <span class="text-2xs font-medium text-gray-700">
                    81023
                   </span>
                  </div>
                 </div>
                </div>
                <div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
                 <div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24" style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x600/1.jpg')">
                 </div>
                 <div class="px-2.5 pb-2">
                  <a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5" href="#">
                   Artistic Expressions
                  </a>
                  <div class="text-2xs font-medium text-gray-500">
                   Token ID:
                   <span class="text-2xs font-medium text-gray-700">
                    67890
                   </span>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-19.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow" id="notification_request_17">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Natalie Wood
                 </a>
                 <span class="text-gray-700">
                  wants to edit marketing project
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 1 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Designer
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
                <div class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-white rounded border border-gray-200">
                 <img class="h-5" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/jira.svg"/>
                </div>
                <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
                 User-feedback.jira
                </a>
                <span class="font-medium text-gray-500 text-2xs">
                 Edited 1 hour ago
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_17">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_17">
                 Accept
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-17.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Aaron Foster
                 </a>
                 <span class="text-gray-700">
                  requested to view
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Larsen Ltd
                </span>
               </div>
               <div class="card shadow-none flex items-center flex-row gap-1.5 px-2.5 py-1.5 rounded-lg bg-light-active">
                <i class="ki-filled ki-user-tick text-success text-base">
                </i>
                <span class="font-medium text-success text-2sm">
                 You allowed Aaron to view
                </span>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-34.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-1">
               <div class="text-2sm font-medium mb-px">
                <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                 Chloe Morgan
                </a>
                <span class="text-gray-700">
                 posted a new article
                </span>
                <a class="hover:text-primary-active text-primary" href="#">
                 User Experience
                </a>
               </div>
               <span class="flex items-center text-2xs font-medium text-gray-500">
                1 day ago
                <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                </span>
                Nexus
               </span>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-9.png"/>
               <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-2.5 grow">
               <div class="flex flex-col gap-1 mb-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Gabriel Bennett
                 </a>
                 <span class="text-gray-700">
                  started connect you
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 3 day ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Development
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-sm btn-light">
                 <i class="ki-filled ki-check-circle">
                 </i>
                 Connected
                </button>
                <button class="btn btn-dark btn-sm">
                 Go to profile
                </button>
               </div>
              </div>
             </div>
             <div class="border-b border-b-gray-200">
             </div>
             <div class="flex grow gap-2.5 px-5" id="notification_request_3">
              <div class="relative shrink-0 mt-0.5">
               <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-13.png"/>
               <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
               </span>
              </div>
              <div class="flex flex-col gap-3.5">
               <div class="flex flex-col gap-1">
                <div class="text-2sm font-medium mb-px">
                 <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
                  Thalia Fox
                 </a>
                 <span class="text-gray-700">
                  has invited you to join
                 </span>
                 <a class="hover:text-primary-active text-primary" href="#">
                  Design Research
                 </a>
                 <span class="text-gray-700">
                 </span>
                </div>
                <span class="flex items-center text-2xs font-medium text-gray-500">
                 4 days ago
                 <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
                 </span>
                 Dev Team
                </span>
               </div>
               <div class="flex flex-wrap gap-2.5">
                <button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
                 Decline
                </button>
                <button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
                 Accept
                </button>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div class="border-b border-b-gray-200">
           </div>
           <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_following_footer">
            <button class="btn btn-sm btn-light justify-center">
             Archive all
            </button>
            <button class="btn btn-sm btn-light justify-center">
             Mark all as read
            </button>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="menu" data-menu="true">
        <div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
         <div class="menu-toggle btn btn-icon rounded-full">
          <img alt="" class="size-9 rounded-full border-2 border-success shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png">
          </img>
         </div>
         <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
          <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
           <div class="flex items-center gap-2">
            <img alt="" class="size-9 rounded-full border-2 border-success" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png">
             <div class="flex flex-col gap-1.5">
              <span class="text-sm text-gray-800 font-semibold leading-none">
               {{ auth()->user()->fname.' '.auth()->user()->lname }}
              </span>
              <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none" href="html/demo1/account/home/get-started.html">
               {{ auth()->user()->email }}
              </a>
             </div>
            </img>
           </div>
           {{-- <span class="badge badge-xs badge-primary badge-outline">
            Pro
           </span> --}}
          </div>
          <div class="menu-separator">
          </div>
          <div class="flex flex-col" data-menu-dismiss="true">
           {{-- <div class="menu-item">
            <a class="menu-link" href="html/demo1/public-profile/profiles/default.html">
             <span class="menu-icon">
              <i class="ki-filled ki-badge">
              </i>
             </span>
             <span class="menu-title">
              Company Profile
             </span>
            </a>
           </div> --}}
           <div class="menu-item">
            <a class="menu-link" href="{{ route('profile') }}">
             <span class="menu-icon">
              <i class="ki-filled ki-profile-circle">
              </i>
             </span>
             <span class="menu-title">
              My Profile
             </span>
            </a>
           </div>
           <div class="menu-item" data-menu-item-offset="-50px, 0" data-menu-item-placement="left-start" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
            <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-setting-2">
              </i>
             </span>
             <span class="menu-title">
              My Account
             </span>
             <span class="menu-arrow">
              <i class="ki-filled ki-right text-3xs">
              </i>
             </span>
            </div>

            <div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
             <div class="menu-item">
              <a class="menu-link" href="{{ route('billing.index') }}">
               <span class="menu-icon">
                <i class="ki-filled ki-icon">
                </i>
               </span>
               <span class="menu-title">
                Billing
               </span>
               <span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
                <i class="ki-filled ki-information-2 text-md text-gray-500">
                </i>
                <span class="tooltip" data-tooltip-content="true">
                 Payment and subscription info
                </span>
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/security/overview.html">
               <span class="menu-icon">
                <i class="ki-filled ki-medal-star">
                </i>
               </span>
               <span class="menu-title">
                Security
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/members/teams.html">
               <span class="menu-icon">
                <i class="ki-filled ki-setting">
                </i>
               </span>
               <span class="menu-title">
                Members &amp; Roles
               </span>
              </a>
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/integrations.html">
               <span class="menu-icon">
                <i class="ki-filled ki-switch">
                </i>
               </span>
               <span class="menu-title">
                Integrations
               </span>
              </a>
             </div>
             <div class="menu-separator">
             </div>
             <div class="menu-item">
              <a class="menu-link" href="html/demo1/account/security/overview.html">
               <span class="menu-icon">
                <i class="ki-filled ki-shield-tick">
                </i>
               </span>
               <span class="menu-title">
                Notifications
               </span>
               <label class="switch switch-sm">
                <input checked="" name="check" type="checkbox" value="1">
                </input>
               </label>
              </a>
             </div>
            </div>
           </div>
          </div>
          <div class="menu-separator">
          </div>
          <div class="flex flex-col">
           <div class="menu-item mb-0.5">
            <div class="menu-link">
             <span class="menu-icon">
              <i class="ki-filled ki-moon">
              </i>
             </span>
             <span class="menu-title">
              Dark Mode
             </span>
             <label class="switch switch-sm">
              <input data-theme-state="dark" data-theme-toggle="true" name="check" type="checkbox" value="1">
              </input>
             </label>
            </div>
           </div>
           <div class="menu-item px-4 py-1.5">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-light justify-center">
                        Log out
                    </button>
                </form>
            </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!-- end: container -->
    </header>


    @yield('content')
    <footer class="footer">
     <!-- begin: container -->
     <div class="container-fixed">
      <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
       <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
        <span class="text-gray-500">
         2024©
        </span>
        <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
         Micropos Easy Tax
        </a>
       </div>
       <nav class="flex order-1 md:order-2 gap-4 font-normal text-2sm text-gray-600">
        <a class="hover:text-primary" href="###">
         Docs
        </a>
        <a class="hover:text-primary" href="###">
         Purchase
        </a>
        <a class="hover:text-primary" href="###">
         FAQ
        </a>
        <a class="hover:text-primary" href="###">
         Support
        </a>
        <a class="hover:text-primary" href="###">
         License
        </a>
       </nav>
      </div>
     </div>
     <!-- end: container -->
    </footer>
   </div>
  </div>
  <div class="modal" data-modal="true" id="search_modal">
   <div class="modal-content max-w-[600px] top-[15%]">
    <div class="modal-header py-4 px-5">
     <i class="ki-filled ki-magnifier text-gray-700 text-xl">
     </i>
     <input class="input px-0 border-none bg-transparent shadow-none ml-2.5" name="query" placeholder="Tap to start search" type="text" value=""/>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body p-0 pb-5">
     <div class="tabs justify-between px-5 mb-2.5" data-tabs="true">
      <div class="flex items-center gap-5">
       <button class="tab py-5 active" data-tab-toggle="#search_modal_mixed">
        Mixed
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_settings">
        Settings
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_integrations">
        Integrations
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_users">
        Users
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_docs">
        Docs
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_empty">
        Empty
       </button>
       <button class="tab py-5" data-tab-toggle="#search_modal_no-results">
        No Results
       </button>
      </div>
      <div class="menu -mt-px" data-menu="true">
       <div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
        <button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
         <i class="ki-filled ki-setting-2">
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
            View
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
            Export
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
            <i class="ki-filled ki-trash">
            </i>
           </span>
           <span class="menu-title">
            Delete
           </span>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="300px">
      <div class="" id="search_modal_mixed">
       <div class="flex flex-col gap-2.5">
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Settings
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-badge">
             </i>
            </span>
            <span class="menu-title">
             Public Profile
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-setting-2">
             </i>
            </span>
            <span class="menu-title">
             My Account
            </span>
           </a>
          </div>
          <div class="menu-item">
           <a class="menu-link" href="#">
            <span class="menu-icon">
             <i class="ki-filled ki-message-programming">
             </i>
            </span>
            <span class="menu-title">
             Devs Forum
            </span>
           </a>
          </div>
         </div>
        </div>
        <div class="border-b border-b-gray-200">
        </div>
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Integrations
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="menu-item">
           <div class="menu-link flex items-center jistify-between gap-2">
            <div class="flex items-center grow gap-2">
             <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
              <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/jira.svg"/>
             </div>
             <div class="flex flex-col gap-0.5">
              <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
               Jira
              </a>
              <span class="text-2xs font-medium text-gray-600">
               Project management
              </span>
             </div>
            </div>
            <div class="flex justify-end shrink-0">
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-4.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png"/>
              </div>
              <div class="flex">
               <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
                +3
               </span>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="menu-item">
           <div class="menu-link flex items-center jistify-between gap-2">
            <div class="flex items-center grow gap-2">
             <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
              <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/inferno.svg"/>
             </div>
             <div class="flex flex-col gap-0.5">
              <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
               Inferno
              </a>
              <span class="text-2xs font-medium text-gray-600">
               Real-time photo sharing app
              </span>
             </div>
            </div>
            <div class="flex justify-end shrink-0">
             <div class="flex -space-x-2">
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-14.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-12.png"/>
              </div>
              <div class="flex">
               <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-9.png"/>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="border-b border-b-gray-200">
        </div>
        <div>
         <div class="text-xs text-gray-600 font-medium pt-2.5 pb-1.5 pl-5">
          Users
         </div>
         <div class="menu menu-default p-0 flex-col">
          <div class="grid gap-1">
           <div class="menu-item">
            <div class="menu-link flex justify-between gap-2">
             <div class="flex items-center gap-2.5">
              <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
              <div class="flex flex-col">
               <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                Tyler Hero
               </a>
               <span class="text-2sm font-normal text-gray-500">
                tyler.hero@gmail.com connections
               </span>
              </div>
             </div>
             <div class="flex items-center gap-2.5">
              <div class="badge badge-pill badge-outline badge-success gap-1.5">
               <span class="badge badge-dot badge-success size-1.5">
               </span>
               In Office
              </div>
              <button class="btn btn-icon btn-light btn-clear btn-sm">
               <i class="ki-filled ki-dots-vertical">
               </i>
              </button>
             </div>
            </div>
           </div>
           <div class="menu-item">
            <div class="menu-link flex justify-between gap-2">
             <div class="flex items-center gap-2.5">
              <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
              <div class="flex flex-col">
               <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
                Esther Howard
               </a>
               <span class="text-2sm font-normal text-gray-500">
                esther.howard@gmail.com connections
               </span>
              </div>
             </div>
             <div class="flex items-center gap-2.5">
              <div class="badge badge-pill badge-outline badge-danger gap-1.5">
               <span class="badge badge-dot badge-danger size-1.5">
               </span>
               On Leave
              </div>
              <button class="btn btn-icon btn-light btn-clear btn-sm">
               <i class="ki-filled ki-dots-vertical">
               </i>
              </button>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_settings">
       <div class="menu menu-default p-0 flex-col">
        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pb-1.5">
         Shortcuts
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-home-2">
           </i>
          </span>
          <span class="menu-title">
           Go to Dashboard
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-badge">
           </i>
          </span>
          <span class="menu-title">
           Public Profile
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-profile-circle">
           </i>
          </span>
          <span class="menu-title">
           My Profile
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-setting-2">
           </i>
          </span>
          <span class="menu-title">
           My Account
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-message-programming">
           </i>
          </span>
          <span class="menu-title">
           Devs Forum
          </span>
         </a>
        </div>
        <div class="text-xs text-gray-600 font-medium pt-2.5 pl-5 pt-2.5 pb-1.5">
         Actions
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-user">
           </i>
          </span>
          <span class="menu-title">
           Create User
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-user-edit">
           </i>
          </span>
          <span class="menu-title">
           Create Team
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-subtitle">
           </i>
          </span>
          <span class="menu-title">
           Change Plan
          </span>
         </a>
        </div>
        <div class="menu-item">
         <a class="menu-link" href="#">
          <span class="menu-icon">
           <i class="ki-filled ki-setting">
           </i>
          </span>
          <span class="menu-title">
           Setup Branding
          </span>
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_integrations">
       <div class="menu menu-default p-0 flex-col">
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/jira.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Jira
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Project management
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-4.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png"/>
            </div>
            <div class="flex">
             <span class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
              +3
             </span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/inferno.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Inferno
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Real-time photo sharing app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-14.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-12.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-9.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/evernote.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Evernote
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Notes management app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-6.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-8.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/gitlab.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Gitlab
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Notes management app
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-18.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-17.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item">
         <div class="menu-link flex items-center jistify-between gap-2">
          <div class="flex items-center grow gap-2">
           <div class="flex items-center justify-center size-10 shrink-0 rounded-full border border-gray-200 bg-gray-100">
            <img alt="" class="size-6 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/brand-logos/google-webdev.svg"/>
           </div>
           <div class="flex flex-col gap-0.5">
            <a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
             Google webdev
            </a>
            <span class="text-2xs font-medium text-gray-600">
             Building web expierences
            </span>
           </div>
          </div>
          <div class="flex justify-end shrink-0">
           <div class="flex -space-x-2">
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-14.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-20.png"/>
            </div>
            <div class="flex">
             <img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-21.png"/>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="menu-item px-4 pt-2">
         <a class="btn btn-sm btn-light justify-center" href="#">
          Go to Apps
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_users">
       <div class="menu menu-default p-0 flex-col">
        <div class="grid gap-1">
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Tyler Hero
             </a>
             <span class="text-2sm font-normal text-gray-500">
              tyler.hero@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-success gap-1.5">
             <span class="badge badge-dot badge-success size-1.5">
             </span>
             In Office
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Esther Howard
             </a>
             <span class="text-2sm font-normal text-gray-500">
              esther.howard@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-danger gap-1.5">
             <span class="badge badge-dot badge-danger size-1.5">
             </span>
             On Leave
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-11.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Jacob Jones
             </a>
             <span class="text-2sm font-normal text-gray-500">
              jacob.jones@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-primary gap-1.5">
             <span class="badge badge-dot badge-primary size-1.5">
             </span>
             Remote
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-5.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              TLeslie Alexander
             </a>
             <span class="text-2sm font-normal text-gray-500">
              leslie.alexander@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-success gap-1.5">
             <span class="badge badge-dot badge-success size-1.5">
             </span>
             In Office
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex justify-between gap-2">
           <div class="flex items-center gap-2.5">
            <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-2.png"/>
            <div class="flex flex-col">
             <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
              Cody Fisher
             </a>
             <span class="text-2sm font-normal text-gray-500">
              cody.fisher@gmail.com connections
             </span>
            </div>
           </div>
           <div class="flex items-center gap-2.5">
            <div class="badge badge-pill badge-outline badge-primary gap-1.5">
             <span class="badge badge-dot badge-primary size-1.5">
             </span>
             Remote
            </div>
            <button class="btn btn-icon btn-light btn-clear btn-sm">
             <i class="ki-filled ki-dots-vertical">
             </i>
            </button>
           </div>
          </div>
         </div>
         <div class="menu-item px-4 pt-2">
          <a class="btn btn-sm btn-light justify-center" href="#">
           Go to Users
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_docs">
       <div class="menu menu-default p-0 flex-col">
        <div class="grid">
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="{{ env('APP_URL') }}/public/assets/media/file-types/pdf.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Project-pitch.pdf
             </span>
             <span class="text-xs font-medium text-gray-500">
              4.7 MB 26 Sep 2024 3:20 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="{{ env('APP_URL') }}/public/assets/media/file-types/doc.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Report-v1.docx
             </span>
             <span class="text-xs font-medium text-gray-500">
              2.3 MB 1 Oct 2024 12:00 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="{{ env('APP_URL') }}/public/assets/media/file-types/javascript.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Framework-App.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.8 MB 17 Oct 2024 6:46 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="{{ env('APP_URL') }}/public/assets/media/file-types/ai.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              Framework-App.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.8 MB 17 Oct 2024 6:46 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item">
          <div class="menu-link flex items-center">
           <div class="flex items-center grow gap-2.5">
            <img src="{{ env('APP_URL') }}/public/assets/media/file-types/php.svg"/>
            <div class="flex flex-col">
             <span class="text-sm font-semibold text-gray-900 cursor-pointer hover:text-primary mb-px">
              appController.js
             </span>
             <span class="text-xs font-medium text-gray-500">
              0.1 MB 21 Nov 2024 3:20 PM
             </span>
            </div>
           </div>
           <button class="btn btn-icon btn-light btn-clear btn-sm">
            <i class="ki-filled ki-dots-vertical">
            </i>
           </button>
          </div>
         </div>
         <div class="menu-item px-4 pt-2.5">
          <a class="btn btn-sm btn-light justify-center" href="#">
           Go to Users
          </a>
         </div>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_empty">
       <div class="flex flex-col text-center py-9 gap-5">
        <div class="flex justify-center">
         <img alt="image" class="dark:hidden max-h-[113px]" src="{{ env('APP_URL') }}/public/assets/media/illustrations/33.svg"/>
         <img alt="image" class="light:hidden max-h-[113px]" src="{{ env('APP_URL') }}/public/assets/media/illustrations/33-dark.svg"/>
        </div>
        <div class="flex flex-col gap-1.5">
         <h3 class="text-base font-semibold text-gray-900 text-center">
          Looking for something..
         </h3>
         <span class="text-2sm font-medium text-center text-gray-600">
          Initiate your digital experience with
          <br/>
          our intuitive dashboard
         </span>
        </div>
        <div class="flex justify-center">
         <a class="btn btn-sm btn-light flex justify-center" href="#">
          View Projects
         </a>
        </div>
       </div>
      </div>
      <div class="hidden" id="search_modal_no-results">
       <div class="flex flex-col text-center py-9 gap-5">
        <div class="flex justify-center">
         <img alt="image" class="dark:hidden max-h-[113px]" src="{{ env('APP_URL') }}/public/assets/media/illustrations/33.svg"/>
         <img alt="image" class="light:hidden max-h-[113px]" src="{{ env('APP_URL') }}/public/assets/media/illustrations/33-dark.svg"/>
        </div>
        <div class="flex flex-col gap-1.5">
         <h3 class="text-base font-semibold text-gray-900 text-center">
          No Results Found
         </h3>
         <span class="text-2sm font-medium text-center text-gray-600">
          Refine your query to discover relevant items
         </span>
        </div>
        <div class="flex justify-center">
         <a class="btn btn-sm btn-light flex justify-center" href="#">
          View Projects
         </a>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" data-modal-disable-scroll="false" id="share_profile_modal">
   <div class="modal-content max-w-[500px] top-5 lg:top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Share Profile
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body grid gap-5 px-0 py-5">
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share read-only link
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <label class="input">
       <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
        <button class="btn btn-icon">
         <i class="ki-filled ki-copy">
         </i>
        </button>
       </input>
      </label>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share via email
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <div class="flex flex-center gap-2.5">
       <label class="input">
        <input type="text" value="miles.turner@gmail.com">
        </input>
       </label>
       <button class="btn btn-primary">
        Share
       </button>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="1000px">
      <div class="flex flex-col px-5 gap-3">
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Tyler Hero
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           tyler.hero@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option selected="">
          Owner
         </option>
         <option>
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Esther Howard
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           esther.howard@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option selected="">
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-11.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Jacob Jones
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           jacob.jones@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option>
          Editor
         </option>
         <option selected="">
          Viewer
         </option>
        </select>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-4">
      <label class="text-gray-900 font-semibold text-2sm">
       Settings
      </label>
      <div class="flex flex-center justify-between flex-wrap gap-2">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-user text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone at
         <a class="text-xs font-medium link mx-1" href="#">
          KeenThemes
         </a>
         can view
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Change Access
       </button>
      </div>
      <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-icon text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone with link can edit
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Set Password
       </button>
      </div>
      <button class="btn btn-primary justify-center">
       Done
      </button>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" id="give_award_modal">
   <div class="modal-content max-w-[500px] top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Give Award
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-black-left">
      </i>
     </button>
    </div>
    <div class="modal-body grid gap-5 px-0 py-5">
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share read-only link
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <label class="input">
       <input type="text" value="https://metronic.com/profiles/x7g2vA3kZ5">
        <button class="btn btn-icon">
         <i class="ki-filled ki-copy">
         </i>
        </button>
       </input>
      </label>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-2.5">
      <div class="flex flex-center gap-1">
       <label class="text-gray-900 font-semibold text-2sm">
        Share via email
       </label>
       <i class="ki-filled ki-information-2 text-gray-500 text-2sm">
       </i>
      </div>
      <div class="flex flex-center gap-2.5">
       <label class="input">
        <input type="text" value="miles.turner@gmail.com">
        </input>
       </label>
       <button class="btn btn-primary">
        Share
       </button>
      </div>
     </div>
     <div class="scrollable-y-auto" data-scrollable="true" data-scrollable-max-height="auto" data-scrollable-offset="1000px">
      <div class="flex flex-col px-5 gap-3">
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-3.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Tyler Hero
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           tyler.hero@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option selected="">
          Owner
         </option>
         <option>
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Esther Howard
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           esther.howard@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option selected="">
          Editor
         </option>
         <option>
          Viewer
         </option>
        </select>
       </div>
       <div class="flex items-center flex-wrap gap-2">
        <div class="flex items-center grow gap-2.5">
         <img alt="" class="rounded-full size-9 shrink-0" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-11.png"/>
         <div class="flex flex-col">
          <a class="text-sm font-semibold text-gray-900 hover:text-primary-active mb-px" href="#">
           Jacob Jones
          </a>
          <a class="hover:text-primary-active text-2sm font-medium text-gray-600" href="#">
           jacob.jones@gmail.com
          </a>
         </div>
        </div>
        <select class="select select-sm max-w-24">
         <option>
          Owner
         </option>
         <option>
          Editor
         </option>
         <option selected="">
          Viewer
         </option>
        </select>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col px-5 gap-4">
      <label class="text-gray-900 font-semibold text-2sm">
       Settings
      </label>
      <div class="flex flex-center justify-between flex-wrap gap-2">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-user text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone at
         <a class="text-xs font-medium link mx-1" href="#">
          KeenThemes
         </a>
         can view
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Change Access
       </button>
      </div>
      <div class="flex flex-center justify-between flex-wrap gap-2 mb-1">
       <div class="flex flex-center gap-1.5">
        <i class="ki-filled ki-icon text-gray-500">
        </i>
        <div class="flex flex-center text-gray-700 font-medium text-xs">
         Anyone with link can edit
        </div>
       </div>
       <button class="btn btn-sm btn-link">
        Set Password
       </button>
      </div>
      <button class="btn btn-primary justify-center">
       Done
      </button>
     </div>
    </div>
   </div>
  </div>
  <div class="modal" data-modal="true" id="report_user_modal">
   <div class="modal-content max-w-[500px] top-[15%]">
    <div class="modal-header pr-2.5">
     <h3 class="modal-title">
      Report User
     </h3>
     <button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-modal-dismiss="true">
      <i class="ki-filled ki-cross">
      </i>
     </button>
    </div>
    <div class="modal-body p-0">
     <div class="p-5">
      <div class="grid place-items-center gap-1">
       <div class="flex justify-center items-center rounded-full">
        <img class="rounded-full max-h-[55px] max-w-full" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
       </div>
       <div class="flex items-center justify-center gap-1">
        <a class="hover:text-primary-active text-2sm leading-5 font-semibold text-gray-900" href="#">
         Jenny Klabber
        </a>
        <svg class="text-primary" fill="none" height="13" viewbox="0 0 15 16" width="13" xmlns="http://www.w3.org/2000/svg">
         <path d="M14.5425 6.89749L13.5 5.83999C13.4273 5.76877 13.3699 5.6835 13.3312 5.58937C13.2925 5.49525 13.2734 5.39424 13.275 5.29249V3.79249C13.274 3.58699 13.2324 3.38371 13.1527 3.19432C13.0729 3.00494 12.9565 2.83318 12.8101 2.68892C12.6638 2.54466 12.4904 2.43073 12.2998 2.35369C12.1093 2.27665 11.9055 2.23801 11.7 2.23999H10.2C10.0982 2.24159 9.99722 2.22247 9.9031 2.18378C9.80898 2.1451 9.72371 2.08767 9.65249 2.01499L8.60249 0.957487C8.30998 0.665289 7.91344 0.50116 7.49999 0.50116C7.08654 0.50116 6.68999 0.665289 6.39749 0.957487L5.33999 1.99999C5.26876 2.07267 5.1835 2.1301 5.08937 2.16879C4.99525 2.20747 4.89424 2.22659 4.79249 2.22499H3.29249C3.08699 2.22597 2.88371 2.26754 2.69432 2.34731C2.50494 2.42709 2.33318 2.54349 2.18892 2.68985C2.04466 2.8362 1.93073 3.00961 1.85369 3.20013C1.77665 3.39064 1.73801 3.5945 1.73999 3.79999V5.29999C1.74159 5.40174 1.72247 5.50275 1.68378 5.59687C1.6451 5.691 1.58767 5.77627 1.51499 5.84749L0.457487 6.89749C0.165289 7.19 0.00115967 7.58654 0.00115967 7.99999C0.00115967 8.41344 0.165289 8.80998 0.457487 9.10249L1.49999 10.16C1.57267 10.2312 1.6301 10.3165 1.66878 10.4106C1.70747 10.5047 1.72659 10.6057 1.72499 10.7075V12.2075C1.72597 12.413 1.76754 12.6163 1.84731 12.8056C1.92709 12.995 2.04349 13.1668 2.18985 13.3111C2.3362 13.4553 2.50961 13.5692 2.70013 13.6463C2.89064 13.7233 3.0945 13.762 3.29999 13.76H4.79999C4.90174 13.7584 5.00275 13.7775 5.09687 13.8162C5.191 13.8549 5.27627 13.9123 5.34749 13.985L6.40499 15.0425C6.69749 15.3347 7.09404 15.4988 7.50749 15.4988C7.92094 15.4988 8.31748 15.3347 8.60999 15.0425L9.65999 14C9.73121 13.9273 9.81647 13.8699 9.9106 13.8312C10.0047 13.7925 10.1057 13.7734 10.2075 13.775H11.7075C12.1212 13.775 12.518 13.6106 12.8106 13.3181C13.1031 13.0255 13.2675 12.6287 13.2675 12.215V10.715C13.2659 10.6132 13.285 10.5122 13.3237 10.4181C13.3624 10.324 13.4198 10.2387 13.4925 10.1675L14.55 9.10999C14.6953 8.96452 14.8104 8.79176 14.8887 8.60164C14.9671 8.41152 15.007 8.20779 15.0063 8.00218C15.0056 7.79656 14.9643 7.59311 14.8847 7.40353C14.8051 7.21394 14.6888 7.04197 14.5425 6.89749ZM10.635 6.64999L6.95249 10.25C6.90055 10.3026 6.83864 10.3443 6.77038 10.3726C6.70212 10.4009 6.62889 10.4153 6.55499 10.415C6.48062 10.4139 6.40719 10.3982 6.33896 10.3685C6.27073 10.3389 6.20905 10.2961 6.15749 10.2425L4.37999 8.44249C4.32532 8.39044 4.28169 8.32793 4.25169 8.25867C4.22169 8.18941 4.20593 8.11482 4.20536 8.03934C4.20479 7.96387 4.21941 7.88905 4.24836 7.81934C4.27731 7.74964 4.31999 7.68647 4.37387 7.63361C4.42774 7.58074 4.4917 7.53926 4.56194 7.51163C4.63218 7.484 4.70726 7.47079 4.78271 7.47278C4.85816 7.47478 4.93244 7.49194 5.00112 7.52324C5.0698 7.55454 5.13148 7.59935 5.18249 7.65499L6.56249 9.05749L9.84749 5.84749C9.95296 5.74215 10.0959 5.68298 10.245 5.68298C10.394 5.68298 10.537 5.74215 10.6425 5.84749C10.6953 5.90034 10.737 5.96318 10.7653 6.03234C10.7935 6.1015 10.8077 6.1756 10.807 6.25031C10.8063 6.32502 10.7908 6.39884 10.7612 6.46746C10.7317 6.53608 10.6888 6.59813 10.635 6.64999Z" fill="currentColor">
         </path>
        </svg>
       </div>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex flex-col gap-5 p-5">
      <div class="text-2sm text-gray-900 font-semibold">
       Let us know why you’re reporing this person
      </div>
      <div class="flex flex-col gap-3.5">
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="1">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Impersonation
          </div>
          <div class="text-2sm font-medium text-gray-600">
           It looks like this profile might be impersonating someone else
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="2">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Spammy
          </div>
          <div class="text-2sm font-medium text-gray-600">
           This person profile, comments or posts contain misleading text
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="3">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Off bumble behavior
          </div>
          <div class="text-2sm font-medium text-gray-600">
           This person has engaged in behavior that is abusive, bullying
          </div>
         </div>
        </input>
       </label>
       <label class="form-label flex items-center gap-2.5">
        <input checked="" class="radio radio-sm" name="report-option" type="radio" value="4">
         <div class="flex flex-col gap-0.5">
          <div class="text-sm font-semibold text-gray-900">
           Something else
          </div>
          <div class="text-2sm font-medium text-gray-600">
           None of the reasons listed above are suitable
          </div>
         </div>
        </input>
       </label>
      </div>
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="text-2sm font-medium text-center text-gray-800 p-5">
      Don't worry, your report is completely anonymous; the person you're
      <br/>
      reporting will not be informed that you've submitted it
     </div>
     <div class="border-b border-b-gray-200">
     </div>
     <div class="flex items-center gap-2.5 justify-end p-5" id="report_user_modal">
      <button class="btn btn-sm btn-primary">
       Report this person
      </button>
      <button class="btn btn-sm btn-light" data-modal-dismiss="true">
       Cancel
      </button>
     </div>
    </div>
   </div>
  </div>
  <!--end::Page layout-->
  <!--begin::Page scripts-->
  <script src="{{ env('APP_URL') }}/public/assets/js/core.bundle.js">
  </script>
  <script src="{{ env('APP_URL') }}/public/assets/vendors/apexcharts/apexcharts.min.js">
  </script>
  <script src="{{ env('APP_URL') }}/public/assets/js/widgets/general.js">
  </script>
  <script src="{{ env('APP_URL') }}/public/assets/js/layouts/demo1.js">
  </script>
  <!--end::Page scripts-->
 </body>
</html>
