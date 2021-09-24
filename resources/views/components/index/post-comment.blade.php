<div class="flex">
    <div class="w-10 h-10 rounded-full relative flex-shrink-0">
        <img src="{{ $comment->author->prof_image }}" alt="" class="absolute h-full rounded-full w-full">
    </div>
    <div>
        <div class="text-gray-700 py-2 px-3 rounded-md bg-gray-100 relative lg:ml-5 ml-2 lg:mr-12 dark:bg-gray-800 dark:text-gray-100">
            <p class="leading-6">{{ $comment->content }}</p>
            <div class="absolute w-3 h-3 top-3 -left-1 bg-gray-100 transform rotate-45 dark:bg-gray-800"></div>
        </div>
        <div class="text-xs flex items-center space-x-3 mt-2 ml-5">
            <span>{{ $comment->author->full_name }} - {{ $comment->created_at->diffForHumans() }} </span>
            @if ($comment->author->id === auth()->id())
                <form method="post" action="{{ route('comment.destroy',$comment->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600">
                        Delete <ion-icon name="trash-outline"></ion-icon>
                    </button>
                </form>
            @endif
        </div>
    </div>
</div>