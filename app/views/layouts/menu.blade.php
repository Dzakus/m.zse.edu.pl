<nav id="my-menu">
<!--     <h2><i class="fa fa-inverse fa-reorder"></i>&nbsp;</h2> -->
    <ul>
        <li>
            <a href="{{ URL::route('root') }}"><i class="fa fa-home"></i>&nbsp;Strona Główna</a>
        </li>
        <li>
            <a><i class="fa fa-book"></i>&nbsp;Aktualności</a>

           <!--  <h2><i class="fa fa-book"></i>Aktualności</h2> -->
            <ul>
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
    </ul>
</nav>