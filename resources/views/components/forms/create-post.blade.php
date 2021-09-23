<div class="card lg:mx-0 p-4" uk-toggle="target: #create-post-modal">
    <div class="flex space-x-3">
        <img src="{{ $user->prof_image }}" class="w-10 h-10 rounded-full">
        <input placeholder="{{ __('index.create_post_placeholder') }}" class="bg-gray-100 hover:bg-gray-200 flex-1 h-10 px-6 rounded-full">
    </div>
    <div class="grid grid-flow-col pt-3 -mx-1 -mb-1 font-semibold text-sm">
        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer justify-center"> 
          <svg class="bg-blue-100 h-9 mr-2 p-1.5 rounded-full text-blue-600 w-9 -my-0.5 " data-tippy-placement="top" title="Tooltip" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
          {{ __('index.photo') }}
        </div>
        <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer justify-center"> 
            <svg class="text-red-600 h-9 p-1.5 mr-2 rounded-full bg-red-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                </path>
            </svg>           
            {{ __('index.video') }}
        </div>
        {{-- <div class="hover:bg-gray-100 flex items-center p-1.5 rounded-md cursor-pointer"> 
          <svg class="bg-red-100 h-9 mr-2 p-1.5 rounded-full text-red-600 w-9 -my-0.5 hidden lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        Feeling
        </div>--}}
    </div>
</div>
{{-- START: Create Post --}}
<div id="create-post-modal" class=" flex-row create-post is-story" uk-modal>
    <div class="m-0 mr-4 uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">
        <div class="text-center py-3 border-b">
            <h3 class="text-lg font-semibold"> Create Post </h3>
            <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 right-2" type="button" uk-close
                uk-tooltip="title: Close ; pos: bottom ;offset:7"></button>
        </div>
        <form id="create-post" method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-1 items-start space-x-4 p-5">
                <img src="{{ $user->prof_image }}"
                    class="bg-gray-200 border border-white rounded-full w-11 h-11">
                <div class="flex-1 pt-2">
                    <textarea id="content" name="content" class="uk-textare rounded-xl border-0 text-black shadow-none focus:shadow-none text-xl font-medium resize-none"
                        rows="5" placeholder="{{ __('index.create_post_placeholder') }}">{{ old('content') }}</textarea>
                </div>
            </div>
            <div class="p-4 space-x-4 w-full">
                <div class="flex bg-gray-50 border border-purple-100 rounded-2xl p-2 shadow-sm items-center">
                    <div class="ml-1"> Add to your post </div>
                    <div class="flex flex-1 items-center justify-end space-x-2">
                        <input name="image" type="file" hidden id="image" accept="image/*">
                        <label class="mb-0" for="image">
                            <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </label>
                        <input name="video" type="file" hidden id="video" accept="video/mp4,video/x-m4v,video/*">
                        <label class="mb-0" for="video">
                            <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                                </path>
                            </svg>
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-right w-full border-t p-3">
                <div>
                    <button type="submit" class="bg-blue-600 h-9 rounded-md text-white px-5 font-medium">
                        Share </button>
                </div>
            </div>
        </div>
    </form>
{{--  
    <div class="m-0 mr-4 w-40">
        <div class="m-0 mr-4 uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">
            <div class="text-center py-3 border-b">       
                <h3 class="text-lg font-semibold flex items-center"> <svg class="text-green-600 m-3 h-9 p-1.5 rounded-full bg-green-100 w-9" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                    </path>
                </svg>Tag a friend! </h3>
            </div>
                <div class="flex items-center w-full justify-between border-t p-3">
                    <select name="who_can_see" class="selectpicker mt-2 story">
                        <option value="2">Every one</option>
                        <option value="1">Only my friends and their friends</option>
                        <option value="0">Only me</option>
                    </select>
                </div>
            </div>
    </div>--}}
</div>
<script>
    $('#create-post').submit(function(e){
        if($('#content').val()=='' && $('#image').val()=='' && $('#video').val()==''){
            alert('You can\'t create a post without any content')
            e.preventDefault()
        }
    });
</script>
{{-- END: Create Post --}}