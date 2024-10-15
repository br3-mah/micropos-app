@extends('layouts.main')

@section('content')
<main class="grow content pt-5" id="content" role="content">
    <div class="container-fixed">
        <!-- Page Title and Billing Info -->
        <div class="flex flex-wrap items-center justify-between gap-5 pb-7.5">
            <div class="flex flex-col justify-center gap-2">
                <h1 class="text-xl font-semibold leading-none text-gray-900">Make a Payment</h1>
                <div class="flex items-center gap-2 text-sm font-medium text-gray-600">
                    Choose your payment source and provider
                </div>
            </div>
        </div>
    </div>
    
    <!-- Payment Source and Provider Section -->
    <div class="container-fixed">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:gap-7.5">
            <!-- Left Section: Payment Sources -->
            <div class="col-span-2 lg:col-span-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Payment Methods</h3>
                        <button class="btn btn-light btn-sm" onclick="openAddPaymentModal()">
                            <i class="ki-filled ki-add"></i> Add Payment Method
                        </button>
                    </div>
                    <div class="card-body">
                        <ul class="space-y-4">
                            <!-- Payment Source 1 -->
                            <li class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <i class="ki-filled ki-credit-card text-primary"></i>
                                    <span class="text-sm font-medium">Visa **** 1234</span>
                                </div>
                                <button class="btn btn-sm btn-light" onclick="removePaymentMethod(1)">Remove</button>
                            </li>
                            <!-- Payment Source 2 -->
                            <li class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <i class="ki-filled ki-bank text-primary"></i>
                                    <span class="text-sm font-medium">Mobile Money</span>
                                    <span class="text-xs font-small">{{ auth()->user()->phone ?? '' }}</span>
                                </div>
                                <button class="btn btn-sm btn-light" onclick="removePaymentMethod(2)">Remove</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Section: Payment Providers -->
            <div class="col-span-2 lg:col-span-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Choose Payment Provider</h3>
                    </div>
                    <div class="card-body">
                        <div class="flex flex-col gap-4">
                            <!-- Provider 1 -->
                            <div class="flex items-center gap-3">
                                <input type="radio" name="provider" id="provider1" value="provider1" class="form-radio">
                                <label for="provider1" class="text-sm font-medium">PayPal</label>
                            </div>
                            <!-- Provider 2 -->
                            <div class="flex items-center gap-3">
                                <input type="radio" name="provider" id="provider2" value="provider2" class="form-radio">
                                <label for="provider2" class="text-sm font-medium">Stripe</label>
                            </div>
                            <!-- Provider 3 -->
                            <div class="flex items-center gap-3">
                                <input type="radio" name="provider" id="provider3" value="provider3" class="form-radio">
                                <label for="provider3" class="text-sm font-medium">Square</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submission Section -->
            <div class="col-span-2">
                <div class="card">
                    <div class="card-body">
                        <div class="flex justify-end gap-3">
                            <button class="btn btn-light" onclick="resetForm()">Reset</button>
                            <button class="btn btn-primary" onclick="submitPayment()">Submit Payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Payment Modal -->
    <div id="addPaymentModal" class="hide flex items-center justify-center">
        <div class="modal-overlay"></div>
        <div class="modal-container p-10">
            <div class="modal-content p-10">
                <h3 class="text-lg font-semibold mb-4">Add New Payment Method</h3>
                <form id="addPaymentForm">
                    <div class="flex flex-col gap-4">
                        <div>
                            <label for="paymentType" class="text-sm font-medium">Payment Type</label>
                            <select id="paymentType" class="form-select w-full mt-1">
                                <option value="creditCard">Credit Card</option>
                                <option value="bankAccount">Bank Account</option>
                            </select>
                        </div>
                        <div>
                            <label for="accountDetails" class="text-sm font-medium">Account Details</label>
                            <input type="text" id="accountDetails" class="form-input w-full mt-1" placeholder="Card number or account number">
                        </div>
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="button" class="btn btn-light" onclick="closeAddPaymentModal()">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Payment</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<style>
    .modal {
        position: absolute;
            top: 0;
            bottom: 10;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.75);
            backdrop-filter: blur(8px);
            z-index: -1;
    }
    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }
    .modal-container {
        background-color: white;
        padding: 1rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        max-width: 90%;
        width: 400px;
    }
    .hide {
        display: none;
    }
</style>

<script>
    // Toggle Modal Visibility
    function openAddPaymentModal() {
        document.getElementById('addPaymentModal').classList.remove('hide');
        document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
    }

    function closeAddPaymentModal() {
        document.getElementById('addPaymentModal').classList.add('hide');
        document.body.style.overflow = ''; // Restore scrolling
    }

    // Close modal when clicking outside
    document.querySelector('.modal-overlay').addEventListener('click', closeAddPaymentModal);

    // Prevent closing when clicking inside the modal content
    document.querySelector('.modal-content').addEventListener('click', function(e) {
        e.stopPropagation();
    });

    // Handle form submission
    document.getElementById('addPaymentForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const paymentType = document.getElementById('paymentType').value;
        const accountDetails = document.getElementById('accountDetails').value;

        // Add your form submission logic here
        console.log('New payment method added:', { paymentType, accountDetails });
        closeAddPaymentModal();
    });

    // Submit Payment to the Controller
    function submitPayment() {
        const paymentMethod = document.querySelector('input[name="provider"]:checked')?.value;

        if (!paymentMethod) {
            alert('Please choose a payment provider');
            return;
        }

        // Gather all necessary data and submit via JS (AJAX or Fetch)
        const data = {
            paymentMethod: paymentMethod
        };

        fetch('/submit-payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(result => {
            if (result.success) {
                alert('Payment successful');
            } else {
                alert('Payment failed');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    // Function to remove payment method
    function removePaymentMethod(id) {
        // Add your logic to remove the payment method
        console.log(`Removing payment method with ID: ${id}`);
    }

    // Function to reset the form
    function resetForm() {
        // Reset radio buttons
        document.querySelectorAll('input[name="provider"]').forEach(radio => {
            radio.checked = false;
        });

        // You can add more reset logic here if needed
        console.log('Form reset');
    }
</script>
@endsection
