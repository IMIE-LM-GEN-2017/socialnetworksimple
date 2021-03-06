        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
       aria-expanded="false">
        {{ Auth::user()->username }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li><a href="{{route('user.profile')}}">Mon profil</a></li>
        <li class="dropdown-header">Forum</li>
        <li><a href="{{route('user.posts.index')}}">Mes posts</a></li>
        <li><a href="{{route('user.posts.create')}}">Nouveau post</a></li>
        <li class="dropdown-header">Articles</li>
        <li><a href="{{route('user.articles.index')}}">Mes articles</a></li>
        <li><a href="{{route('user.articles.create')}}">Nouvel article</a></li>
        <li class="dropdown-header">Évènements</li>
        <li><a href="{{route('_user.events.index')}}">Mes évènements</a></li>
        <li><a href="{{route('_user.events.create')}}">Nouvel évènement</a></li>
        <li class="dropdown-header">Autres</li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>