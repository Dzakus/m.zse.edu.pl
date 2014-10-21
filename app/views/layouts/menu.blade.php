<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
  <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::route('root') }}">ZSEiI w Sosnowcu</a>
        </div>
        <div class="navbar-collapse collapse">
    <ul class="nav navbar-nav">
        <li>
            <a href="{{ URL::route('root') }}"><i class="fa fa-home"></i>&nbsp;Strona Główna</a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book"></i>&nbsp;Aktualności<i class="fa fa-chevron-down pull-right" style="
    margin-top: 3px;
"></i></a>

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
        <li>
            <a href="{{ URL::route('organisation') }}"><i class="fa fa-calendar"></i>&nbsp;Organizacja roku</a>
        </li>
        <li>
            <a href="{{ URL::route('matura') }}"><i class="fa fa-graduation-cap"></i>&nbsp;Matura</a>
        </li>
    </ul>
    </div>
  </div>
</nav>