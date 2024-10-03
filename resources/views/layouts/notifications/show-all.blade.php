<div class="grow" id="notifications_tab_all">
<div class="flex flex-col">
<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header" data-scrollable-max-height="auto" data-scrollable-offset="200px">
<div class="flex flex-col gap-5 pt-3 pb-4 divider-y divider-gray-200">

    {{-- <div class="border-b border-b-gray-200">
    </div>
    <div class="flex grow gap-2.5 px-5">
    <div class="relative shrink-0 mt-0.5">
    <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-5.png"/>
    <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
    </span>
    </div>
    <div class="flex flex-col gap-3.5">
    <div class="flex flex-col gap-1">
    <div class="text-2sm font-medium mb-px">
        <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
        Leslie Alexander
        </a>
        <span class="text-gray-700">
        added new tags to
        </span>
        <a class="hover:text-primary-active text-primary" href="#">
        Web Redesign 2024
        </a>
    </div>
    <span class="flex items-center text-2xs font-medium text-gray-500">
        53 mins ago
        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
        </span>
        ACME
    </span>
    </div>
    <div class="flex flex-wrap gap-2.5">
    <span class="badge badge-sm badge-info badge-outline">
        Client-Request
    </span>
    <span class="badge badge-sm badge-warning badge-outline">
        Figma
    </span>
    <span class="badge badge-sm badge-light badge-outline">
        Redesign
    </span>
    </div>
    </div>
    </div>
    <div class="border-b border-b-gray-200">
    </div>
    <div class="flex grow gap-2.5 px-5" id="notification_request_3">
    <div class="relative shrink-0 mt-0.5">
    <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-27.png"/>
    <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
    </span>
    </div>
    <div class="flex flex-col gap-3.5">
    <div class="flex flex-col gap-1">
    <div class="text-2sm font-medium mb-px">
        <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
        Guy Hawkins
        </a>
        <span class="text-gray-700">
        requested access to
        </span>
        <a class="hover:text-primary-active text-primary" href="#">
        AirSpace
        </a>
        <span class="text-gray-700">
        project
        </span>
    </div>
    <span class="flex items-center text-2xs font-medium text-gray-500">
        14 hours ago
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
     --}}
    {{-- <div class="border-b border-b-gray-200">
    </div>
    <div class="flex grow gap-2.5 px-5">
    <div class="relative shrink-0 mt-0.5">
    <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-1.png"/>
    <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
    </span>
    </div>
    <div class="flex flex-col gap-3.5 grow">
    <div class="flex flex-col gap-1">
    <div class="text-2sm font-medium mb-px">
        <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
        Jane Perez
        </a>
        <span class="text-gray-700">
        invites you to review a file.
        </span>
    </div>
    <span class="flex items-center text-2xs font-medium text-gray-500">
        3 hours ago
        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
        </span>
        742kb
    </span>
    </div>
    <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
    <img class="h-5" src="{{ env('APP_URL') }}/public/assets/media/file-types/pdf.svg"/>
    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
        Launch_nov24.pptx
    </a>
    <span class="font-medium text-gray-500 text-2xs">
        Edited 39 mins ago
    </span>
    </div>
    </div>
    </div> 
    <div class="border-b border-b-gray-200">
    </div>--}}
    <div class="flex grow gap-2.5 px-5">
    <div class="relative shrink-0 mt-0.5">
    <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-11.png"/>
    <span class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
    </span>
    </div>
    <div class="flex flex-col gap-1">
    <div class="text-2sm font-medium mb-px">
    <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
        MicroPos Easy Tax
    </a>
    <span class="text-gray-700">
        Welcome {{ auth()->user()->fname }}
    </span>
    <a class="hover:text-primary-active text-primary" href="#">
        to MicroPos
    </a>
    </div>
    <span class="flex items-center text-2xs font-medium text-gray-500">
    {{-- 1 hour ago --}}
    {{-- <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
    </span> --}}
    {{-- Welcome --}}
    </span>
    </div>
    </div>

{{--     
    <div class="border-b border-b-gray-200">
    </div>
    <div class="flex grow gap-2.5 px-5">
    <div class="relative shrink-0 mt-0.5">
    <img alt="" class="rounded-full size-8" src="{{ env('APP_URL') }}/public/assets/media/avatars/300-14.png"/>
    <span class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
    </span>
    </div>
    <div class="flex flex-col gap-3.5 grow">
    <div class="flex flex-col gap-1">
    <div class="text-2sm font-medium mb-px">
        <a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
        Jane Perez
        </a>
        <span class="text-gray-700">
        wants to view your design project
        </span>
    </div>
    <span class="flex items-center text-2xs font-medium text-gray-500">
        3 day ago
        <span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
        </span>
        Metronic Launcher mockups
    </span>
    </div>
    <div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
    <div class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-light rounded border border-gray-200">
        <img class="h-5" src="{{ env('APP_URL') }}/public/assets/media/file-types/figma.svg"/>
    </div>
    <a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
        Launcher-UIkit.fig
    </a>
    <span class="font-medium text-gray-500 text-2xs">
        Edited 2 mins ago
    </span>
    </div>
    </div>
    </div> --}}
</div>
</div>
<div class="border-b border-b-gray-200">
</div>
{{-- <div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_all_footer">
<button class="btn btn-sm btn-light justify-center">
    Archive all
</button>
<button class="btn btn-sm btn-light justify-center">
    Mark all as read
</button>
</div> --}}
</div>
</div>