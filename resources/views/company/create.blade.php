@extends('layouts.main')
@section('content')

<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <form action="{{ route('companies.store') }}" method="POST" class=" w-full">
     @csrf
     <div class="flex">
      <div class="w-full container-fixed px-2 overflow-hidden" id="modal_settings_content">
       <div class="modal-header p-0 border-0">
        <!-- begin: container -->
        <div class="container-fixed">
         <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
          <div class="flex items-center justify-between flex-wrap grow gap-5">
           <div class="flex flex-col justify-center gap-2">
            <h1 class="text-xl font-semibold leading-none text-gray-900">
             Add a New Company
            </h1>
           </div>
      
          </div>
         </div>
        </div>
       </div>
       
       
       <div class="modal-body scrollable-y py-0 mb-5 pl-6 pr-3 mr-3" id="modal_settings_body">
        <div class="flex grow gap-5 lg:gap-7.5">
         <div class="flex flex-col items-stretch grow gap-5 lg:gap-7.5">

        {{-- Step 1  --}}
          <div class="card pb-2.5 wizard-step" id="step-1">
           <div class="card-header" id="basic_settings">
            <h3 class="card-title">
            </h3>
            <div class="flex items-center gap-2">
             <label class="switch switch-sm">
              <span class="switch-label">
               Public Profile
              </span>
              <input checked="" name="check" type="checkbox" value="1"/>
             </label>
            </div>
           </div>
           <div class="card-body grid gap-5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Company Logo
             </label>
             <div class="flex items-center justify-between flex-wrap grow gap-2.5">
              <span class="text-2sm font-medium text-gray-600">
               150x150px JPEG, PNG Image
              </span>
              <div class="image-input size-16" data-image-input="true">
               <input accept=".png, .jpg, .jpeg" name="avatar" type="file">
                <input name="avatar_remove" type="hidden">
                 <div class="btn btn-icon btn-icon-xs btn-light shadow-default absolute z-1 size-5 -top-0.5 -right-0.5 rounded-full" data-image-input-remove="" data-tooltip="#image_input_tooltip" data-tooltip-trigger="hover">
                  <i class="ki-filled ki-cross">
                  </i>
                 </div>
                 <span class="tooltip" id="image_input_tooltip">
                  Click to remove or revert
                 </span>
                 <div class="image-input-placeholder rounded-full border-2 border-success image-input-empty:border-gray-300" style="background-image:url(/static/metronic-tailwind-html/dist/assets/media/avatars/blank.png)">
                  <div class="image-input-preview rounded-full" style="background-image:url(/static/metronic-tailwind-html/dist/assets/media/avatars/300-2.png)">
                  </div>
                  <div class="flex items-center justify-center cursor-pointer h-5 left-0 right-0 bottom-0 bg-dark-clarity absolute">
                   <svg class="fill-light opacity-80" height="12" viewbox="0 0 14 12" width="14" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.6665 2.64585H11.2232C11.0873 2.64749 10.9538 2.61053 10.8382 2.53928C10.7225 2.46803 10.6295 2.36541 10.5698 2.24335L10.0448 1.19918C9.91266 0.931853 9.70808 0.707007 9.45438 0.550249C9.20068 0.393491 8.90806 0.311121 8.60984 0.312517H5.38984C5.09162 0.311121 4.799 0.393491 4.5453 0.550249C4.2916 0.707007 4.08701 0.931853 3.95484 1.19918L3.42984 2.24335C3.37021 2.36541 3.27716 2.46803 3.1615 2.53928C3.04584 2.61053 2.91234 2.64749 2.7765 2.64585H2.33317C1.90772 2.64585 1.49969 2.81486 1.19885 3.1157C0.898014 3.41654 0.729004 3.82457 0.729004 4.25002V10.0834C0.729004 10.5088 0.898014 10.9168 1.19885 11.2177C1.49969 11.5185 1.90772 11.6875 2.33317 11.6875H11.6665C12.092 11.6875 12.5 11.5185 12.8008 11.2177C13.1017 10.9168 13.2707 10.5088 13.2707 10.0834V4.25002C13.2707 3.82457 13.1017 3.41654 12.8008 3.1157C12.5 2.81486 12.092 2.64585 11.6665 2.64585ZM6.99984 9.64585C6.39413 9.64585 5.80203 9.46624 5.2984 9.12973C4.79478 8.79321 4.40225 8.31492 4.17046 7.75532C3.93866 7.19572 3.87802 6.57995 3.99618 5.98589C4.11435 5.39182 4.40602 4.84613 4.83432 4.41784C5.26262 3.98954 5.80831 3.69786 6.40237 3.5797C6.99644 3.46153 7.61221 3.52218 8.1718 3.75397C8.7314 3.98576 9.2097 4.37829 9.54621 4.88192C9.88272 5.38554 10.0623 5.97765 10.0623 6.58335C10.0608 7.3951 9.73765 8.17317 9.16365 8.74716C8.58965 9.32116 7.81159 9.64431 6.99984 9.64585Z" fill="">
                    </path>
                    <path d="M7 8.77087C8.20812 8.77087 9.1875 7.7915 9.1875 6.58337C9.1875 5.37525 8.20812 4.39587 7 4.39587C5.79188 4.39587 4.8125 5.37525 4.8125 6.58337C4.8125 7.7915 5.79188 8.77087 7 8.77087Z" fill="">
                    </path>
                   </svg>
                  </div>
                 </div>
                </input>
               </input>
              </div>
             </div>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Company Name
             </label>
             <input class="input" name="name" type="text" value=""/>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Company TPIN
             </label>
             <input class="input" type="text" name="tpin" value=""/>
            </div>
       
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Company Email
             </label>
             <input class="input" type="text" name="email" value=""/>
            </div>
            <div class="flex justify-end">
                <button type="button"class="btn btn-primary" id="next-1">Next</button>
            </div>
           </div>
          </div>

          {{-- Step 2 --}}
          <div class="card wizard-step" id="step-2" style="display: none;">
            <div class="card-header" id="advanced_settings_appearance">
             <h3 class="card-title">
              Company Category
             </h3>
            </div>
            <div class="card-body lg:py-7.5">
             <div class="mb-5">
              <h3 class="text-md font-semibold text-gray-900">
               Choose a category
              </h3>
              <span class="text-2sm font-medium text-gray-700">
               Select a suitable option to depict your compnay type
              </span>
             </div>
             <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-7.5">
              <div>
               <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('{{ asset("public/assets/img/sole.webp") }}')">
                <input checked="" class="appearance-none" name="type" type="radio" value="sole-trader"/>
                <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                </i>
               </label>
               <span class="text-sm font-semibold text-gray-900">
                Sole Trader
               </span>
              </div>
              <div>
               <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('{{ asset('public/assets/img/public.jpg') }}')">
                <input class="appearance-none" name="type" type="radio" value="public-limited"/>
                <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                </i>
               </label>
               <span class="text-sm font-semibold text-gray-900">
                Public Company Limited
               </span>
              </div>
              <div>
               <label class="flex items-end border bg-no-repeat bg-cover border-gray-300 rounded-xl has-[:checked]:border-success has-[:checked]:border-3 [&amp;_.checked]:has-[:checked]:flex h-[170px] mb-0.5" style="background-image: url('{{ asset("public/assets/img/private.png") }}')">
                <input class="appearance-none" name="type" type="radio" value="private-limited"/>
                <i class="ki-solid ki-check-circle checked ml-5 mb-5 text-xl text-success leading-none hidden">
                </i>
               </label>
               <span class="text-sm font-semibold text-gray-900">
                Private Company Limited
               </span>
              </div>
             </div>
             <div class="border-t border-gray-200 mt-7 mb-8">
             </div>
             <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5 mb-8">
              <label class="form-label max-w-48">
               Allow Restrictions
              </label>
              <div class="flex items-center gap-7.5 grow">
               <label class="switch">
                <span class="switch-label">
                 Yes
                </span>
                <input checked="" name="restrict" type="checkbox" value="1"/>
               </label>
               <span class="form-info">
                Allow background restrictions
               </span>
              </div>
             </div>
             <div class="flex justify-between">
                <button type="button"class="btn btn-secondary" id="prev-2">
                 Previous 
                </button>
                <button type="button"class="btn btn-primary" id="next-2">
                 Next 
                </button>
             </div>
            </div>
           </div>
          
        {{-- Step 3 --}}
          <div class="card wizard-step" id="step-3" style="display: none;">
           <div class="card-header" id="auth_password">
            <h3 class="card-title">
             Contact Information
            </h3>
           </div>
           <div class="card-body grid gap-5">
            <div class="w-full">
             <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="form-label max-w-56">
               Company Phone Number
              </label>
              <input class="input" name="phone" placeholder="000 000 0000" type="text" value="">
              </input>
             </div>
            </div>
            <div class="w-full">
             <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="form-label max-w-56">
               Company Phone Number 2
              </label>
              <input class="input" name="phone2" placeholder="000 000 0000" type="text" value="">
              </input>
             </div>
            </div>
            <div class="w-full">
             <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="form-label max-w-56">
                Contact Person Phone Number 
              </label>
              <input class="input" name="contact_phone" placeholder="000 000 0000" type="text" value="">
              </input>
             </div>
            </div>
            <div class="w-full">
             <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <label class="form-label max-w-56">
                Contact Person Phone Number 2
              </label>
              <input class="input" name="contact_phone2" placeholder="000 000 0000" type="text" value="">
              </input>
             </div>
            </div>
            <div class="flex justify-between pt-2.5">
                <button type="button"class="btn btn-secondary" id="prev-3">
                 Previous
                </button>
                <button type="button"class="btn btn-primary" id="next-3">
                 Next
                </button>
            </div>
           </div>
          </div>

          {{-- Step 4 --}}
          <div class="card wizard-step" id="step-4" style="display: none;">
           <div class="card-header" id="advanced_settings_address">
            <h3 class="card-title">
             Company Address Information
            </h3>
           </div>
           <div class="card-body grid gap-5 lg:py-7.5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label flex items-center gap-1 max-w-56">
              Address
             </label>
             <input class="input" name="address" type="text" value="">
             </input>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label flex items-center gap-1 max-w-56">
              Address2
             </label>
             <input class="input" name="address2" type="text" value="">
             </input>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label flex items-center gap-1 max-w-56">
              Address3
             </label>
             <input class="input" name="address3" type="text" value="Avinguda Imaginària, 789">
             </input>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Country
             </label>
             <div class="grow">
              <select class="select" name="country">
               <option value="1">
                Zambia
               </option>
              </select>
             </div>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              State/Province
             </label>
             <input class="input" name="province" placeholder="" type="text" value="">
             </input>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              City
             </label>
             <input class="input" type="text" name="city" value="">
             </input>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Postcode
             </label>
             <input class="input" type="text" value="08012">
             </input>
            </div>
            <div class="flex justify-between pt-2.5">
                <button type="button"class="btn btn-secondary" id="prev-4">
                 Previous
                </button>
                <button type="button"class="btn btn-primary" id="next-4">
                 Next
                </button>
            </div>
           </div>
          </div>
          <style>
           .user-access-bg {
                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5.png');
            }
            .dark .user-access-bg {
                background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/2600x1200/bg-5-dark.png');
            }
          </style>


          {{-- Step 5 --}}
          <div class="card wizard-step" id="step-5" style="display: none;">
           <div class="card-header" id="external_services_integrations">
            <h3 class="card-title">
             Integrations 
            </h3>
           </div>
           <div class="card-body grid gap-5 lg:gap-7.5 lg:py-7.5 py-5">
            <div class="grid gap-5">
             <div class="flex items-center justify-between flex-wrap border border-gray-200 rounded-xl gap-2 p-3.5">
              <div class="flex items-center flex-wrap gap-3.5">
               <img alt="" class="size-8 shrink-0" src="{{ asset('public/assets/media/brand-logos/jira.svg') }}"/>
               <div class="flex flex-col">
                <div class="flex items-center gap-1.5">
                 <a class="text-sm font-semibold text-gray-900 hover:text-primary-active" href="#">
                  Smart ZRA 
                 </a>
                </div>
                <span class="text-2sm font-medium text-gray-600">
                 Streamline tax management, simplify productivity.
                </span>
               </div>
              </div>
              <div class="flex items-center gap-2 lg:gap-5">
               <label class="switch switch-sm">
                <input type="checkbox" value="2"/>
               </label>
               <div class="btn btn-sm btn-icon btn-clear btn-light">
                <i class="ki-filled ki-setting-2">
                </i>
               </div>
              </div>
             </div>
            </div>
            <div class="flex justify-between">
                <button type="button"class="btn btn-secondary" id="prev-5">
                    Previous
                </button>
                <button type="submit" class="btn btn-primary">
                    Finish
                </button>
            </div>
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
   <script>
    // Wizard navigation logic
    // Next Links
    document.getElementById('next-1').addEventListener('click', function() {
      showStep(2);
    });
    
    document.getElementById('next-2').addEventListener('click', function() {
      showStep(3);
    });
    
    document.getElementById('next-3').addEventListener('click', function() {
      showStep(4);
    });
    
    document.getElementById('next-4').addEventListener('click', function() {
      showStep(5);
    });
    
    // Previous Links
    document.getElementById('prev-2').addEventListener('click', function() {
      showStep(1);
    });
    
    document.getElementById('prev-3').addEventListener('click', function() {
      showStep(2);
    });
    
    document.getElementById('prev-4').addEventListener('click', function() {
      showStep(3);
    });
    
    document.getElementById('prev-5').addEventListener('click', function() {
      showStep(4);
    });
    
    function showStep(step) {
      // Hide all steps
      document.querySelectorAll('.wizard-step').forEach(function(stepElement) {
        stepElement.style.display = 'none';
      });
      
      // Show the current step
      document.getElementById('step-' + step).style.display = 'block';
    }
    
    </script>
    
    <style>
    /* Smooth transitions between steps */
    .wizard-step {
      transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    }
    </style>
@endsection