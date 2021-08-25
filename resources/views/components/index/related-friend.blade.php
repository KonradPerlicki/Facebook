@props(['user'])
<div class="flex items-center space-x-4 rounded-md -mx-2 p-2 hover:bg-gray-50">
    <a href="timeline-group.html" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
        <img src="assets/images/group/group-3.jpg" class="absolute w-full h-full inset-0 " alt="">
    </a>
    <div class="flex-1">
        <a href="timeline-page.html" class="text-sm font-semibold capitalize">{{$user}}</a>
        <div class="text-xs text-gray-500 mt-0.5"> <b>12 mutual</b> friends</div>
    </div>
    <a href="timeline-page.html" class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white">
      <ion-icon name="person-add-outline"></ion-icon>
    </a>
</div>
<div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small" class="uk-drop uk-drop-left-center" style="left: 1348.38px; top: 211px;">
    <div class="contact-list-box">
        <div class="contact-avatar">
            <img src="assets/images/avatars/avatar-2.jpg" alt="">
        </div>
        <div class="contact-username">   Dennis Han</div>
        <p> 
            <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with 
            <strong> Stella Johnson </strong> and <strong> 14 Others</strong>
        </p>
        <div class="contact-list-box-btns">
            <button type="button" class="button primary flex-1 block mr-2">
                <i class="uil-envelope mr-1"></i> Send message</button>
            <button type="button" href="#" class="button secondary button-icon mr-2">
                <i class="uil-list-ul"> </i> </button>
            <button type="button" a="" href="#" class="button secondary button-icon"> 
                <i class="uil-ellipsis-h"> </i> 
            </button>
        </div>
    </div>
</div>