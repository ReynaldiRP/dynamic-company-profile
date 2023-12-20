<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layouts.landing_page.assets.style')
</head>

<body>
    <div>
        @include('layouts.landing_page.includes.nav')
    </div>

    <header class="masthead">
        @include('layouts.landing_page.includes.masthead')
    </header>

    <section class="page-section" id="about">
        @include('layouts.landing_page.includes.company_history')
    </section>

    <section class="page-section bg-light " id="excellence">
        @include('layouts.landing_page.includes.company_excellences')
    </section>

    <section class="page-section" id="service">
        @include('layouts.landing_page.includes.company_services')
    </section>

    <section class="page-section bg-light " id="portfolio">
        @include('layouts.landing_page.includes.company_portofolio')
    </section>

    <section class="page-section" id="faq">
        @include('layouts.landing_page.includes.company_faq')
    </section>

    <section class="page-section bg-light " id="team">
        @include('layouts.landing_page.includes.company_team')
    </section>


    <footer class="footer py-4">
        @include('layouts.landing_page.includes.footer')
    </footer>

    @include('layouts.landing_page.assets.script')


    @include('layouts.landing_page.includes.modal_form_question')
    @include('layouts.landing_page.includes.modal_detail_portofolio')
</body>

</html>
