import {clean} from "../app";

$('body').on('click', '.add-to-favorites:not(.loading)', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const action = $(this).data('action');
    const page = $(this).data('page');
    const counter = $('#favoritesCounter')
    let data = {
        productId,
        action
    }
    data = clean(data)
    $.ajax({
        type: 'POST',
        url: "/api/favorites",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: JSON.stringify(data),
        contentType: 'application/json',
        beforeSend: () => {
            $(this).addClass('loading')
        },
        success: data => {
            if (data['count'] === 0) {
                counter.removeClass('d-xl-block')
            } else {
                counter.addClass('d-xl-block')
            }
            counter.html(data['count'])

            if (action === 'add') {
                $(this).data('action', 'remove')
                if (page !== 'favorites') {
                    $(this).html('<i class="ec heart mr-1 font-size-15"></i> Из избранного')
                } else {
                    $(this).html('<i class="ec heart mr-1 font-size-15"></i>')
                }
            } else {
                $(this).data('action', 'add')
                if (page !== 'favorites') {
                    $(this).html('<i class="ec ec-favorites mr-1 font-size-15"></i> В избранное')
                } else {
                    $(this).html('<i class="ec ec-favorites mr-1 font-size-15"></i>')
                }
            }
            $(this).removeClass('loading')
        },
        error: e => {
            console.log(e)
        }
    });
})
