@if($type == 'friend')
<span class="drop_icon bg-blue-400">
    <ion-icon name="person-outline"></ion-icon>
</span>
@elseif ($type == 'like')
<span class="drop_icon bg-purple-400">
    <i class="icon-feather-thumbs-up"></i>
</span>
@endif