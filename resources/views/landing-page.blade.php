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


    @include('layouts.landing_page.includes.modal_form_question')
    @include('layouts.landing_page.assets.script')
</body>

</html>
