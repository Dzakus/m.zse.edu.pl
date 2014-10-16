<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ URL::route('root') }}"><i class="fa fa-home"></i>&nbsp;Strona Główna</a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i>&nbsp;Aktualności</a>

           <!--  <h2><i class="fa fa-book"></i>Aktualności</h2> -->
            <ul class="dropdown-menu" role="menu">
                @foreach($kategorie as $k)
                <li>
                    <a href="{{ URL::route('category', $k->id) }}">{{ $k->name }}</a>
                </li>
                @endforeach
            </ul>
        </li>
        <li>
            <a href="{{ URL::route('substitutes') }}"><i class="fa fa-list"></i>&nbsp;Zastępstwa</a>
        </li>
        <li>
            <a href="{{ URL::route('plan') }}"><i class="fa fa-table"></i>&nbsp;Plan Lekcji</a>
        </li>
        </li>
        <li>
            <a href="{{ URL::route('canteen') }}"><i class="fa fa-cutlery"></i>&nbsp;Kantyna</a>
        </li>
    </ul>
  </div>
</nav>