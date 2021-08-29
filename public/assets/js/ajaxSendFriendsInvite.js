function remove_friend(id)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        'type' : 'POST',
        'url':'/remove-friend',
        'data' :{id:id},
        success:function(data){
            $('#add_friend'+id).html('<ion-icon name="person-add-outline" class="w-5 h-5 pt-1"></ion-icon>')
            $('#add_friend'+id).attr('onclick','add_friend('+id+')')
        }

    })
}

function add_friend(id)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        'type' : 'POST',
        'url':'/add-friend',
        'data' :{id:id},
        success:function(data){
            $('#add_friend'+id).html('Sent &check;')
            $('#add_friend'+id).attr('onClick','remove_friend('+id+')')
        }
    })
}
