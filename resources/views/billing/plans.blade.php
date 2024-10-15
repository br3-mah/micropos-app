@extends('layouts.main')

@section('content')
<main class="grow content pt-5" id="content" role="content">
    <!-- begin: container -->
    <div class="container-fixed">
        <div class="flex flex-wrap items-center lg:items-end justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900">Plans</h1>
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                    Central Hub for Personal Customization
                </div>
            </div>
            <div class="flex items-center gap-2.5">
                <a class="btn btn-sm btn-light" href="#">
                    View Billing
                </a>
            </div>
        </div>
    </div>
    <!-- end: container -->

    <!-- begin: container -->
    <div class="container-fixed">
        <div class="grid gap-5 lg:gap-7.5">
            <div class="scrollable-x-auto pt-3 -mt-3">
                <table class="table table-fixed min-w-[1000px] table-border-b table-border-r table-rounded card-rounded [&_tr:nth-of-type(2)>td]:table-border-t [&_tr:nth-of-type(2)>td:first-child]:card-rounded-tl">
                    <tr>
                        <td class="!border-b-0 align-bottom !p-5 !pt-7.5 !pb-6">
                            {{-- Annual (yes/no) Switch option --}}
                            <label class="switch switch-sm">
                                <input checked="" id="annualSwitch" class="order-1" name="check" type="checkbox" value="1">
                                <div class="switch-label order-2">
                                    <span class="text-gray-800 text-2sm font-semibold">
                                        Annual Billing
                                    </span>
                                </div>
                            </label>
                        </td>

                        <!-- Current Plans -->
                        @foreach($plans as $plan)
                        <td class="!border-b-0 table-border-l table-border-t card-rounded-tl bg-light-active dark:bg-coal-100 !p-5 relative">
                            <span class="absolute badge badge-sm badge-outline badge-success absolutes top-0 left-1/2 -translate-x-1/2 -translate-y-1/2">
                                {{ $plan->name }}
                            </span>
                            <h3 class="text-lg text-gray-900 font-semibold pb-2">
                                {{ $plan->name }}
                            </h3>
                            <div class="text-gray-600 text-2sm font-medium">
                                {{ $plan->description }}
                            </div>
                            <div class="py-4">
                                <h4 class="text-2xl text-gray-900 font-semibold leading-none">
                                    ${{ number_format($plan->amount, 2) }} <!-- Show plan amount -->
                                </h4>
                            </div>
                            <div>
                                <a href="javascript:void(0);" onclick="activatePlan({{ $plan->id }}, getAnnualSwitchValue())" class="btn btn-primary btn-sm flex justify-center w-full">
                                    Activate Now
                                </a>
                            </div>

                            <!-- List of features -->
                            @forelse($plan->features as $feature)
                                <div class="text-gray-700 text-2sm my-2 font-medium">
                                    {{ $feature->name }}
                                </div>
                            @empty
                                <div class="text-gray-600 text-2sm my-2 font-medium">
                                    No features available for this plan.
                                </div>
                            @endforelse
                        </td>
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- end: container -->
</main>

<script>
    // Function to get the value of the annual switch
    function getAnnualSwitchValue() {
        var annualSwitch = document.getElementById('annualSwitch');
        return annualSwitch.checked ? 'yes' : 'no';
    }

    // Function to activate the plan
    function activatePlan(planId, annualSwitch) {
        var url = "{{ route('subscription.payments', [':planId', ':isAnnual']) }}"; // Adjust the route with placeholders
        url = url.replace(':planId', planId) // Replace with the actual plan ID
                .replace(':isAnnual', annualSwitch); // Replace with the annual switch value ('yes' or 'no')

        // Redirect or perform any action needed with the plan ID and annual switch value
        window.location.href = url;
    }

</script>
@endsection
