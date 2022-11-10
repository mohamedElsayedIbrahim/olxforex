@extends('layouts.app')

@section('title')
    Olxforex | currency change
@endsection

@section('content')
<div id="currency">

<section id="currencySec">
    <div class="container">
        <form class="form g-3 needs-validation" novalidate >
            <h1>Calculate currency exchange</h1>
            <div class="row">
                <div class="form-group col-xl-5 col-sm-12">
                    <label for="From">From currency</label>
                    <select id="From" class="currency form-control" required>
                        <option selected disabled value="">select currency</option>
                    </select>
                </div>

                <div class="form-group arrow col-xl-2 col-sm-12">
                    <i id="changeCurrency" class="fa-solid fa-arrow-right-arrow-left"></i>
                </div>

                <div class="form-group col-xl-5 col-sm-12">
                    <label for="To">To currency</label>
                    <select id="To" required class="currency form-control">
                        <option selected disabled value="">select currency</option>
                    </select>
                </div>
            </div>

            <div class="form-group ">
                <label for="number">currency Amount</label>
                <input type="number" required class="form-control" id="number" placeholder="currency Amount">
            </div>

            <div class="form-group ">
                <label for="ans">Result Amount</label>
                <input type="number" class="form-control" id="ans" placeholder="Result Amount" disabled>
            </div>


        </form>
        <button type="button" class="btn centerAnimation" id="btn">Convert</button>
    </div>
</section>
</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
<script src="{{ asset('asset/js/currency.js') }}"></script>
@endsection