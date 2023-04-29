<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Caveat:wght@400;500&family=Hanalei&family=Kavoon&family=Lato:wght@100;300;400;700&family=Lobster+Two:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,100;1,500&family=Satisfy&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=ABeeZee&family=Caveat:wght@400;500&family=Hanalei&family=Kavoon&family=Lato:wght@100;300;400;700&family=Lobster+Two:ital@0;1&family=Roboto:ital,wght@0,100;0,300;0,500;0,900;1,100;1,500&family=Satisfy&family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@livewireStyles
@vite(['resources/css/style.css', 'resources/js/script.js'])
</head>
<body>
    <div class="container">
       
        @livewire($component, ['id' => $productId])
    </div>
    @livewireScripts
</body>
</html>