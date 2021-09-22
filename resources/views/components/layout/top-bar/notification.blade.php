<li @if(!$notification->seen) class="border-l-4 border-indigo-500" @endif>
    <a class="cursor-default z-0">
        <div class="drop_avatar" onclick="window.location='{{ route('profile', $notification->from->username) }}'"> 
            <img src="{{ $notification->from->prof_image }}" alt="" class="cursor-pointer">
        </div>
        <x-layout.top-bar.notify-icon :type="$notification->type"/>
        <div class="drop_text">
            <p>
                <strong onclick="window.location='{{ route('profile', $notification->from->username) }}'" class="cursor-pointer hover:underline">
                    {{ $notification->from->fullname }}
                </strong>
                
               {{ $notification->content }}
            </p>
            <time> {{ $notification->updated_at->diffForHumans() }} </time>
        </div>
        @if ($notification->type == 'like')
            <form action="{{ route('post.show', $notification->additional_id) }}" class="z-50 my-auto bg-blue-500 hover:bg-blue-600 text-white rounded-md p-1 ml-1">
                <button type="submit">See Post</button>
            </form>
        @elseif ($notification->type == 'friend')
            @if($notification->additional_id==2)
                <div class="my-auto">
                    <button class="z-50 bg-blue-600 cursor-default text-white rounded-md p-1 ml-1">Accepted &check;</button>
                </div>
            @elseif($notification->additional_id==1)
                <div class="my-auto">
                    <button class="z-50 bg-gray-200 border border-gray-600 cursor-default rounded-md p-1 ml-1">Declined &#x2715;</button>            
                </div>
            @else
            <div id="form{{ $notification->id }}">
                <button onclick="friend_accept({{ $notification->from->id.','.$notification->id }})" 
                    class="z-50 w-full bg-blue-500 hover:bg-blue-600 text-white rounded-md p-1 ml-1">Accept &check;</button>
                <br>
                <button onclick="friend_decline({{ $notification->from->id.','.$notification->id }})"
                class="z-50 w-full border mt-0.5 border-gray-600 hover:bg-gray-300 rounded-md p-1 ml-1">Decline &#x2715;</button>
            </div>
            @endif
        @endif
    </a>
    
</li>