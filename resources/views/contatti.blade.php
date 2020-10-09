@include('partials.header')
<header>
    <div class="logo">
        <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="La Molisana">
    </div>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('prodotti')}}">Prodotti</a></li>
            <li><a href="{{route('contatti')}}">Contatti</a></li>
        </ul>
    </nav>
</header>
@include('partials.footer')
