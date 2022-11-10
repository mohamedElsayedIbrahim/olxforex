@extends('layouts.app')

@section('title')
    Olxforex | Local Depositor HFM
@endsection

@section('content')
<div id="corporate">
      
    
       <!-- main sec -->
       <section id="main">
        <div class="container mt-5">
            <div class="row d-flex justify-content-center align-items-center formX">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 formX">
                    <div class="card text-black-50" style="border-radius: 1rem;">
                        <div class="card-body pt-2 pb-2 ps-4 pe-4 ">
                            <div class="mb-md-5 mt-md-4 ">
                                @include('snnipt.validate')
                                @include('snnipt.session')
                                <form method="POST" action="{{ route('corporate.store') }}"
                                    class="needs-validation d-flex justify-content-center align-items-center"
                                    novalidate>
                                    @csrf
                                    <div class="row">
                                        <div class="form-outline form-white mb-3 col-12">
                                            <label for="typeNameX">Your Name</label>
                                            <input type="text" id="typeNameX" class="form-control form-control-lg "
                                                placeholder="Your Name" maxlength="50" minlength="3" name="customerName" required>
                                            <div class="invalid-tooltip">Make sure to write Your Name</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <label for="typeAccNumX">Your Account Number</label>
                                            <input type="number" id="typeAccNumX" class="form-control form-control-lg "
                                                placeholder="Your Account Number" maxlength="16" minlength="16" name="customerAccountNumber" required>
                                            <div class="invalid-tooltip">Make sure to write Your Account Number</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <label for="typePhoneX">Your Account Phone Number</label>
                                            <input type="number" id="typePhoneX" maxlength="11" class="form-control form-control-lg "
                                                placeholder="Your Account Phone Number" name="customerPhoneNumber"
                                                required>
                                            <div class="invalid-tooltip">Make sure to write Your Phone Number</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <label for="typeAmountX">The Amount</label>
                                            <input type="number" id="typeAmountX" class="form-control form-control-lg "
                                                placeholder="Your Amount" name="customerAmount" required>
                                            <div class="invalid-tooltip">Make sure to write Your Amount</div>
                                        </div>
                                        <div class="form-outline form-white mb-3 col-12">
                                            <label for="typeAmountX">Select The Type</label>
                                            <select class="form-control form-control-lg" name="customerServiceType" required>
                                                <option value="" disabled selected>Select The Type</option>
                                                <option value="deposit">deposit</option>
                                                <option value="withdraw">withdraw</option>
                                            </select>
                                            <div class="invalid-tooltip">Make sure to Select The Type</div>
                                        </div>


                                        <div>
                                            <button value="signup"
                                                class="mouse-cursor-gradient-tracking  px-5 mt-3 text-center"
                                                type="submit">submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="{{asset('asset/img/undraw_booking_re_gw4j.svg')}}" style="width: 100%;">
                </div>

            </div>
        </div>
    </section>


</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
@endsection