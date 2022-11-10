@extends('layouts.app')

@section('title')
    Olxforex | Calender
@endsection

@section('content')
<div id="calender">

        <!-- main sec -->
    <section id="main">
        <div class="container pb-5 pt-5">
            <div id="economic-calendar-342120">
                <script type="text/javascript" src="https://www.cashbackforex.com/Content/remote/remote-calendar-widget.js"></script>
                <script type="text/javascript"> RemoteCalendar({"Lang":"en","DefaultTime": "today","DefaultTheme": "plain","Url":"https://www.cashbackforex.com", "SubPath":"economic-calendar","IsShowEmbedButton":true,"ContainerId":"economic-calendar-342120"});</script>
            </div>
        </div>
    </section>

      <!-- ads -->
      <section id="ads">
        <div class="container">
            <img src="{{asset("asset/img/3.png")}}">
        </div>
    </section>

</div>
@endsection

@section('script')
<script src="{{ asset('asset/js/main.min.js') }}"></script>
<script src="{{ asset('asset/js/calender.js') }}"></script>
@endsection