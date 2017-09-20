<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
       aria-expanded="false">
        Panel Admin <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li class="dropdown-header">Forum</li>
        <li><a href="{{route('admin.postsCats.create') }}">Nouvelle catégorie</a></li>
        <li class="dropdown-header">Users</li>
        <li><a href="{{route('admin.users.index') }}">Utilisateurs</a></li>
    </ul>
</li>