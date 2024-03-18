<header>
    <div id="main">

        <div>
            <img style="width:50%" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" class="logo">
        </div>
        <nav>
            <ul>
                @foreach ($data as $item)
                    <li>{{ $item}}</li>
                @endforeach
            </ul>
        </nav>
        <div class="searchbar">
            <input type="text" name="" id="">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>

    </div>

</header>


