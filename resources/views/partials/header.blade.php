<header>
        <div class="logo">
            <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png" alt="La Molisana">
        </div>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class= "link {{ (url()->current() == route('home')) ? 'rosso' : '' }}">Home</a></li>
                <li><a href="{{route('prodotti')}}" class= "link {{ (url()->current() == route('prodotti')) ? 'rosso' : '' }}">Prodotti</a></li>
                <li><a href="{{route('contatti')}}" class= "link {{ (url()->current() == route('contatti')) ? 'rosso' : '' }}">Contatti</a></li>
            </ul>
        </nav>
</header>
