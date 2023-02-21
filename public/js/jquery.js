$(function() {
    // ajax template
    $('#ajax').on('click', function() {
        admins_id = $('#filter').attr("admins_id");
        route = `/reserves`;
        week_data = $('#filter').val();
        $.ajax({
            headers: {
                // トークン
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type:'GET',
            // ルーティング
            url:route,
            data: { 'admins_id': admins_id, 'week_data': week_data, },
        }).done(function (results){
            // 成功したときのコールバック
        }).fail(function(jqXHR, textStatus, errorThrown){
            // 失敗したときのコールバック
        }).always(function() {
            // 成否に関わらず実行されるコールバック
        });
    })
});
