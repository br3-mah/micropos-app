@extends('layouts.main')
@section('content')
<main class="grow content pt-5" id="content" role="content">

    <!-- end: container -->
    <!-- begin: container -->
    <div class="container-fixed">
     <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
      <div class="flex flex-col justify-center gap-2">
       <h1 class="text-xl font-semibold leading-none text-gray-900">
        Support Center
       </h1>
       <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
        Central Hub for Customer Support
       </div>
      </div>
      <div class="flex items-center gap-2.5">
       <a class="btn btn-sm btn-light" href="#">
        Import CSV
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
      <div class="grid lg:grid-cols-2 gap-5 lg:gap-7.5">
       <div class="card">
        <div class="card-body px-10 py-7.5 lg:pr-12.5">
         <div class="flex flex-wrap md:flex-nowrap items-center gap-6 md:gap-10">
          <div class="flex flex-col items-start gap-3">
           <h2 class="text-1.5xl font-semibold text-gray-900">
            Questions ?
           </h2>
           <p class="text-sm font-medium text-gray-700 leading-5.5 mb-2.5">
            Visit our Help Center for detailed assistance on billing, payments, and subscriptions.
           </p>
          </div>
          <img alt="image" class="dark:hidden max-h-[150px]" src="assets/media/illustrations/29.svg"/>
          <img alt="image" class="light:hidden max-h-[150px]" src="assets/media/illustrations/29-dark.svg"/>
         </div>
        </div>
        <div class="card-footer justify-center">
         <a class="btn btn-link" href="">
          Go to Help Center
         </a>
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
     </iv>
    </div>
    <!-- end: container -->
   </main>
@endsection