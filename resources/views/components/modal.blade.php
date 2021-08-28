@props(['id','title'])
<div id="{{ $id }}" class="flex-row create-post is-story" uk-modal>
    <div class="m-0 mr-4 uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded-lg p-0 lg:w-5/12 relative shadow-2xl uk-animation-slide-bottom-small">
        <div class="text-center py-3 border-b">
            <h3 class="text-lg font-semibold"> {{ $title }} </h3>
            <button class="uk-modal-close-default bg-gray-100 rounded-full p-2.5 right-2"
                type="button" uk-close
                uk-tooltip="title: Close ; pos: top ;offset:7"></button>
        </div>
        {{ $slot }}
    </div>
</div>