@props(['name'])
<a href="#create-post" uk-toggle="target: body ; cls: story-active">
    <div class="single_story">
        <img src="assets/images/avatars/avatar-lg-1.jpg" alt="">
        <div class="story-avatar">{{-- TODO: user image --}}<img src="assets/images/avatars/avatar-1.jpg" alt=""></div>
        <div class="story-content"> <h4> {{ $name }}</h4> </div>
    </div>
</a>