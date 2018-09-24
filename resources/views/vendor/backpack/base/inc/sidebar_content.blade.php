<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>


@can('season-crud')
<li><a href="{{ backpack_url('season') }}"><i class="fa fa-calendar"></i> <span>Temporada</span></a></li>
@endcan
@can('club-crud')
<li><a href="{{ backpack_url('club') }}"><i class="fa fa-tag"></i> <span>Clubes</span></a></li>
@endcan
@can('categories-crud')
<li><a href="{{ backpack_url('category') }}"><i class="fa fa-files-o"></i> <span>Categorias</span></a></li>
@endcan
@can('team-crud')
<li><a href="{{ backpack_url('team') }}"><i class="fa fa-dribbble"></i> <span>Equipos</span></a></li>
@endcan


<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin') . '/setting') }}'><i class='fa fa-cog'></i> <span>Settings</span></a></li>

<!-- Users, Roles Permissions -->

@can('permission-manager')
<li class="treeview">
    <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
@endcan

<li><a href='{{ backpack_url('workout') }}'><i class='fa fa-tag'></i> <span>Entrenamiento/Sesion</span></a></li>
<li><a href='{{ backpack_url('exercise') }}'><i class='fa fa-file'></i> <span>Ejercicios</span></a></li>
<li><a href='{{ backpack_url('category_exercise') }}'><i class='fa fa-file'></i> <span>categorias de Ejercicios</span></a></li>