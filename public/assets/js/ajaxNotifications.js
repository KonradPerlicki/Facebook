function mark_as_read(id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "mark-as-read",
        type: "POST",
        data: { id: id },
        success: function () {
            $("#notifications").remove();
        },
    });
}

function friend_accept(user_id, div_id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "friend-accept",
        type: "POST",
        data: { user_id: user_id },
        success: function () {
            $("#form" + div_id).html(
                '<button class="z-50 bg-blue-600 cursor-default text-white rounded-md p-1 ml-1">Accepted &check;</button>'
            );
            $("#form" + div_id).addClass("my-auto");
        },
    });
}

function friend_decline(user_id, div_id) {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    $.ajax({
        url: "friend-decline",
        type: "POST",
        data: { user_id: user_id },
        success: function () {
            $("#form" + div_id).html(
                '<button class="z-50 bg-gray-300 border border-gray-600 cursor-default rounded-md p-1 ml-1">Declined &#x2715;</button>'
            );
            $("#form" + div_id).addClass("my-auto");
        },
    });
}
