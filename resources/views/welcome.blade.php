<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $webdata->description }}">
    <meta name="keywords" content="She's Safe, Safely, Safety for girls">
    <link rel="shortcut icon" href="{{ asset('assets/images/she-safe-logo.png') }}" type="image/x-icon"/>
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}"/>
    <script defer src="{{ asset('assets/js/alpine.min.js') }}"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

@include('layouts.header')

@include('site.hero')

@include('site.cta')

@include('site.cards')

@include('site.map-section')

@include('site.contact')

@include('layouts.footer')

<!-- Add this script to the bottom of your HTML body or in your script file -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const donateButton = document.querySelector('.donate-button');
        const modal = document.getElementById('exampleModal');
        const closeButton = document.querySelector('.close-button');

        // Function to show the modal
        const showModal = () => {
            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', 'false');
        };

        // Function to hide the modal
        const hideModal = () => {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
        };

        // Event listener for the Donate button
        donateButton.addEventListener('click', showModal);

        // Event listener for the Close button
        closeButton.addEventListener('click', hideModal);

        // Close the modal if the user clicks outside the modal
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                hideModal();
            }
        });
    });
</script>
<script>
    setTimeout(function() {
        document.getElementById('successAlert').style.display = 'none';
    }, 5000);
</script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>
