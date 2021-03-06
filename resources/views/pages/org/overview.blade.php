@extends('layouts.main') 
@section('title', 'overview')
@section('content')
    <section id="page-content" class="container-fluid">
    <div class="body-content animated fadeIn">
        <div class="panel rounded shadow no-overflow" style="padding: 25px;">
            <blockquote style="text-align: justify;">
                <b style="font-size: 22px"> Security Guard Company | Security Guard Agency </b>
                <hr>
                <p style="font-size: 18px">
                    Established since 2005 by a group of former police officers and specialist professionals, Live Sensor has grown into Singapore’s leading security and private investigations agency. With a skilled team that is equipped with decades of experience and expertise in Criminal &amp; Commercial Investigation, Intelligence Operations and Security Manpower Planning &amp; Management, we are the trusted provider of business and home security solutions by clients in Singapore and Asia.
                    Having attained the ISO 9001 and OHSAS 18001 certifications, which are licensed by the Police Licensing Regulatory Department (PLRD) of the Singapore Police Force, you can rest assured that our knowledge, skills, methods and results are up to par, and that your assignments are completed efficiently and cost-effectively.
                </p>
            </blockquote>

            <blockquote style="text-align: justify; font-size: 18px;">  
                <i class="ulhead"  style="font-weight: bold!important;
    font-family: 'Montserrat';
    font-style: normal;
    font-size: 18px;">Our international client works include:</i>
                <ul><li>Security Services</li>
                    <li>Close Protection Services</li>
                    <li>Security Equipment</li>
                    <li>Business Intelligence Gathering</li>
                    <li>Technical Surveillance Counter Measures or Debugging</li>
                    <li>Cyber Forensic Investigations</li>
                    <li>Maritime Security Services</li>
                    <li>Gurkha Services</li>
                    <li>Specialist Training Services</li>
                    <li>Security Consulting</li>
                </ul>
            </blockquote>

            <blockquote style="text-align: justify;">
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
