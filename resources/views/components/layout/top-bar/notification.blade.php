<li @if(!$notification->seen) class="border-l-4 border-indigo-500" @endif>
    <a class="cursor-default z-0">
        <div class="drop_avatar" onclick="window.location='{{ route('profile', $notification->from->username) }}'"> 
            <img src="{{ Storage::url($notification->from->profile_image) }}" alt="" class="cursor-pointer">
        </div>
    
        <x-layout.top-bar.notify-icon :type="$notification->type"/>
        <div class="drop_text">
            <p>
                <strong onclick="window.location='{{ route('profile', $notification->from->username) }}'" class="cursor-pointer hover:underline">
                    {{ $notification->from->first_name.' '.$notification->from->last_name }}
                </strong>
                
               <span class="text-link">{{ $notification->content }}</span>
            </p>
            <time> {{ $notification->updated_at->diffForHumans() }} </time>
        </div>
        @if ($notification->type == 'like')
            <form action="{{ route('post.show', $notification->additional_id) }}" class="z-50 my-auto bg-blue-500 hover:bg-blue-600 text-white rounded-md p-1 ml-1">
                <button type="submit">See Post</button>
            </form>
        @elseif ($notification->type == 'friend')
        <div>
            <form method="POST" action="">
                @csrf
                <button type="submit" class="z-50 w-full bg-blue-500 hover:bg-blue-600 text-white rounded-md p-1 ml-1">Accept &check;</button>
            </form>
            <form method="POST" action="">
                @csrf
                <button type="submit" class="z-50 w-full border mt-0.5 border-gray-600 hover:bg-gray-300 rounded-md p-1 ml-1">Decline &#x2715;</button>
            </form>
        </div>
        @endif
    </a>
    
</li>