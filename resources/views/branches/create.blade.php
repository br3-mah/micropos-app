@extends('layouts.main')
@section('content')

<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <form action="{{ route('branch.store') }}" method="POST" class=" w-full">
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
             Add a New Branch
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
        
           </div>
           <div class="card-body grid gap-5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Branch Name
             </label>
             <input class="input" name="name" type="text" value=""/>
            </div>
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Branch Code
             </label>
             <input class="input" type="text" name="code" value=""/>
            </div>
       
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
             <label class="form-label max-w-56">
              Branch Email
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
                <button type="button"class="btn btn-secondary" id="prev-2">
                 Previous
                </button>
                <button type="button"class="btn btn-primary" id="next-2">
                 Next
                </button>
            </div>
           </div>
          </div>

          {{-- Step 4 --}}
          <div class="card wizard-step" id="step-3" style="display: none;">
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
                <button type="button"class="btn btn-secondary" id="prev-3">
                 Previous
                </button>
                <button type="button"class="btn btn-primary" id="next-3">
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
          <div class="card wizard-step" id="step-4" style="display: none;">
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
                <button type="button"class="btn btn-secondary" id="prev-4">
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