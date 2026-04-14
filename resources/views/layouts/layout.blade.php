<!DOCTYPE html>
<html>

<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 

<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/sidenav.css') }}">
<link rel="stylesheet" href="{{ asset('css/tarjeta.css') }}">
<link rel="stylesheet" href="{{ asset('css/estructraycontent.css') }}">


</head>

<body>

<div class="main">

 <x-header /> 
<div class="content">

@yield('contenido')

</div>

<x-footer />

</div>

</body>

<script>
document.addEventListener("DOMContentLoaded", function () {

    let slides = document.querySelectorAll('.slide');
    let index = 0;

    function showSlide() {
        slides.forEach(s => s.classList.remove('active'));
        if(slides.length > 0){
            slides[index].classList.add('active');
            index = (index + 1) % slides.length;
        }
    }

    setInterval(showSlide, 4000);
    showSlide();

});
</script>
<script>
function scrollSidebar(){
    const sidebar = document.querySelector('.sidenav');
    sidebar.scrollBy({
        top: 200,
        behavior: 'smooth'
    });
}
</script>
</html>