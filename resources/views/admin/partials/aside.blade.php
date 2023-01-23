<nav class="">
    <ul class="p-0 mt-3">
        <li class="ft-nav-link mt-2">
            <a href="{{route('admin.home')}}" class="text-dark"><i class="fa-solid fa-table-columns"></i> Dashboard</a>
        </li>
        <li class="ft-nav-link mt-2">
            <a href="{{ route('admin.projects.index') }}" class="text-dark"><i class="fa-solid fa-diagram-project"></i></i> Progetti</a>
        </li>
        <li class="ft-nav-link mt-2">
            <a href="{{route('admin.projects.create')}}" class="text-dark"><i class="fa-solid fa-pencil"></i>Nuovo Progetto</a>
        </li>
    </ul>
</nav>
