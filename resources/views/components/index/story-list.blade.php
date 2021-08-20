@props(['user'])
<a href="#">
    <div class="story-media">
        <img src="assets/images/avatars/avatar-1.jpg" alt="">
    </div>
    <div class="story-text">
        <div class="story-username"> {{ $user }}</div>
        <p> <span class="story-count"> New </span> <span class="story-time"> 4Mn ago</span> </p>
    </div>
</a>