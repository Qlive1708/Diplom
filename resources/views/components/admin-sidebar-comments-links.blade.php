<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComment" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-comment fa-cog"></i><span>&nbsp;Комментарий</span>
    </a>
    <div id="collapseComment" class="collapse {{ (request()->is('admin/comment*')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Комментарии</h6>
            <a class="collapse-item {{ (request()->is('admin/comment/pending')) ? 'active' : '' }}"
               href="{{ route('pending.comment') }}">В обработке
                <?php
                $pcomment = \App\Model\Comment::where('status','pending')->count();
                ?>
                @if($pcomment > 0)
                    <span style="background-color:red; color: white; border-radius: 50%; padding: 2px 8px  ">{{ $pcomment }}</span>
                @endif
            </a>
            <a class="collapse-item {{ (request()->is('admin/comment/approved')) ? 'active' : '' }}" href="{{ route('approved.comment') }}">Опубликованые</a>
        </div>
    </div>
</li>
