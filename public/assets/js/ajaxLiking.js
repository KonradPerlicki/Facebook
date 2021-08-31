    function like(id, author_id)
    {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            'type' : 'POST',
            'url':'/like',
            'dataType':'json',
            'data' :{id:id, author_id:author_id},
            success:function(data){ // showing 3 latest users who liked current post
                var images = []
                $('#like'+id).html(data.txt);//change text like/unlike

                if(data.filled){//adding like
                    $('#like-icon'+id).toggleClass('text-blue-500') //add class
                    if(data.all_likes.length >= 1){
                        $('#has-likes'+id).html('<span id="who-likes'+id+'"></span><span id="likes'+id+'"></span>')
                        $('#who-likes'+id).html('Liked by <strong id="last-liker'+id+'">'+data.last_user.first_name + ' ' + data.last_user.last_name+'</strong>')
                    }
                    for(i=0;i<data.all_likes.length-1;i++){
                        src = data.all_likes[i].user.profile_image
                        alt = data.all_likes[i].user.username
                        images.push('<img src="/storage/'+src.replace('public/','')+'" alt="'+alt+'" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    }
                    last_user = data.last_user.profile_image
                    images.push('<img src="/storage/'+last_user.replace('public/','')+'" alt="" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    
                    if(images.length > 3) images.shift() //maximum 3 images - remove latest user who liked
                    
                    $('#last-liker'+id).html(data.last_user.first_name + ' ' + data.last_user.last_name)
                    if(data.all_likes.length >= 2){
                        $('#likes'+id).html(' and <strong> '+data.likes+' '+data.other+'</strong>')
                    }
                }
                else{//removing like
                    $('#like-icon'+id).toggleClass('text-blue-500') //remove class
                    if(data.last_user == 'zero'){
                        $('#likers-images'+id).html('')
                        $('#has-likes'+id).html('No one has liked yet')
                    }
                    for(i=0;i<data.all_likes.length;i++){
                        alt = data.all_likes[i].user.username
                        src = data.all_likes[i].user.profile_image
                        images.push('<img src="/storage/'+src.replace('public/','')+'" alt="'+alt+'" class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">')
                    }
                    $('#last-liker'+id).html(data.all_likes[images.length-1].user.first_name + ' ' +data.all_likes[images.length-1].user.last_name) //index 2 because it is third and last element from array
                    if(data.likes == 0){
                        $('#likes'+id).remove()
                    }
                }
                $('#likers-images'+id).html(images)
            },
        })
    }
