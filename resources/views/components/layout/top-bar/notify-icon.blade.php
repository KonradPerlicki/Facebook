@if($type == 'friend')
<span class="drop_icon bg-blue-400">
    <ion-icon name="person-outline"></ion-icon>
</span>
@elseif ($type == 'like')
<span class="drop_icon bg-purple-400">
    <i class="icon-feather-thumbs-up"></i>
</span>
@elseif($type == 'accepted')
<span class="drop_icon bg-green-400">
    <ion-icon name="people"></ion-icon>
</span>
@elseif($type == 'rejected')
<span class="drop_icon bg-red-400">
    <ion-icon name="people"></ion-icon>
</span>
@elseif($type == 'unfriend')
<span class="drop_icon bg-gray-800">
    <ion-icon name="trash-outline"></ion-icon>
</span>
@endif