<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategory" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-square fa-cog"></i><span>&nbsp;Категория</span>
    </a>
    <div id="collapseCategory" class="collapse {{ (request()->is('admin/category*')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Категории</h6>
            <a class="collapse-item {{ (request()->is('admin/category/create')) ? 'active' : '' }}" href="{{route('category.create')}}">Создать Категорию</a>
            <a class="collapse-item {{ (request()->is('admin/category')) ? 'active' : '' }}" href="{{route('category.index')}}">Посмотреть все Категории</a>
        </div>
    </div>
</li>
