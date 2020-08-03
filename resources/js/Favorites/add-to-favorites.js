import {clean} from "../app";

$('body').on('click', '.add-to-favorites:not(.loading)', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const action = $(this).data('action');
    const fromPage = $(this).data('page');
    const counter = $('#favoritesCounter')
    const favorites = $('#favorites')
    let data = {
        productId,
        fromPage,
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
            if (fromPage === 'favorites') {
                favorites.addClass('loading')
            } else {
                $(this).addClass('loading')
            }
        },
        success: data => {
            if (data['count'] === 0) {
                counter.removeClass('d-xl-block')
            } else {
                counter.addClass('d-xl-block')
            }
            counter.html(data['count'])

            if (fromPage === 'favorites') {
                $('#favorites').replaceWith(data['html'])
                favorites.removeClass('loading')
            } else {
                if (action === 'add') {
                    $(this).data('action', 'remove')
                    $(this).text('В избранном')
                } else {
                    $(this).data('action', 'add')
                    $(this).text('В избранное')
                }
                $(this).removeClass('loading')
            }
        },
        error: e => {
            console.log(e)
        }
    });
})
