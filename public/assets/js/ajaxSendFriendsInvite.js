function remove_friend(id, on_timeline = false)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        'type' : 'DELETE',
        'url':'/remove-friend-invite',
        'data' :{id:id},
        success:function(data){
            if(on_timeline){
                $('.add_friend'+id).html('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg><span> Add Friend </span>')
                $('.add_friend'+id).attr('onclick','add_friend('+id+',true)')
            }else{
                $('.add_friend'+id).html('<ion-icon name="person-add-outline" class="w-5 h-5 pt-1"></ion-icon>')
                $('.add_friend'+id).attr('onclick','add_friend('+id+')')
            }
        }
    })
}

function add_friend(id, on_timeline = false)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        'type' : 'POST',
        'url':'/add-friend-invite',
        'data' :{id:id},
        success:function(){
            $('.add_friend'+id).html('Invite was sent &check;')
            if(on_timeline){
                $('.add_friend'+id).attr('onClick','remove_friend('+id+',true)')
            }else{
                console.log('.add_friend'+id)
                $('.add_friend'+id).attr('onClick','remove_friend('+id+')')
            }
            
        }
    })
}
