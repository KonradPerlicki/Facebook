<a id="{{ $user->username }}" href="#" uk-toggle="target: body ; cls: story-active" class="preview_open_story">
    <div class="single_story ">
        <img src="{{ Storage::url($user->available_story->image) }}" alt="{{ $user->username }}" class="@if(!$user->viewed_story($user->available_story->id))filter blur-2xl @endif">
        <div class="story-avatar border-4
        @if($user->viewed_story($user->available_story->id))
         border-gray-500
         @else
         border-blue-600
         @endif rounded-full">
            <img src="{{ Storage::url($user->profile_image) }}" alt="">
        </div>
        <div class="story-content"> <h4> {{ $user->first_name }}</h4> </div>
    </div>
</a>