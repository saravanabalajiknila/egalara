@extends('layouts.main') 
@section('title', 'overview')
@section('content')
    <section id="page-content" class="container-fluid">
    <div class="body-content animated fadeIn">
        <div class="panel rounded shadow no-overflow" style="padding: 25px;">

            <blockquote style="text-align: justify;font-size: 18px">
                <b style="font-size: 22px"> Awards and Achievement </b>
                <hr>
                <p>Live Sensor Security is Singapore’s leading security and private investigations agency, with decades of experience in Criminal and Commercial investigation, Intelligence Operations, as well as Security Manpower Planning &amp; Management. Following are few noteworthy points to be mentioned about our achievements </p>

                <ul>
                    <li>Partnership with Security Industry Institute (SII) to conduct In House Classes for Security Courses approved by Skills Future Singapore (SSG).</li>
                    <li>Approved Security Agency by POLWELL for In House Assessment</li>
                    <li>Nominated Security Agency to be featured in National Television (Security Services in Singapore)</li>
                </ul>
                <hr>
                <b style="font-size: 22px">Global Capability, Local Solutions</b>
                <hr>
                <p>Live Sensor has successfully fulfilled client work for both corporations and individuals from Asia, Europe, &amp; America. With offices in Singapore, Malaysia and Indonesia, we are equipped with the necessary contacts and resources for your security and investigation requirements anywhere in the world.</p>
            </blockquote>
       

        </div>
    </div>
</section>

    @push('script')
        <script src="{{ asset('plugins/flot-charts/jquery.flot.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('js/chart-flot.js')}}"></script>
    @endpush
@endsection
