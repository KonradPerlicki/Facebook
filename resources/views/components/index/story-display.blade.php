<li class="relative">
    <div uk-lightbox>
        <a href="{{ Storage::url($user->available_story->image) }}" data-caption="Added {{ $user->available_story->expires_at->addHours(-24)->diffForHumans() }}">
            <img src="{{ Storage::url($user->available_story->image) }}" class="story-slider-image" alt="{{ $user->username }}">
        </a>
    </div>
</li>