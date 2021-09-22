<a id="{{ $user->username }}" href="#" class="story-list">
    <div class="story-media border-4 @if($user->viewed_story($user->available_story->id))
        border-gray-500
        @else
        border-blue-600
        @endif">
        <img src="{{ $user->prof_image }}" alt="">
    </div>
    <div class="story-text">
        <div class="story-username"> {{ $user->fullname}}</div>
        <p>
            @if(!$user->viewed_story($user->available_story->id))
                <span class="text-blue-600"> New </span>
            @endif 
            <span class="story-time"> {{ $user->available_story->expires_at->addHours(-24)->diffForHumans() }}</span> </p>
    </div>
</a>