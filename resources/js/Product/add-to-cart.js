import {clean} from "../app";

$('body').on('click', '.add-to-cart:not(.loading)', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const quantity = $(this).data('quantity');
    const fromPage = $(this).data('page');
    const action = 'add';
    const counter = $('#cartCounter')
    let data = {
        productId,
        fromPage,
        quantity,
        action
    }
    data = clean(data)
    $.ajax({
        type: 'POST',
        url: "/api/cart",
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
            if (fromPage === 'product') {
                const productQty = $('#productQty')
                productQty.replaceWith(data['html'])
            } else {
                $(this).removeClass('add-to-cart')
                $(this).children('i').removeClass('ec-add-to-cart').addClass('ec-shopping-bag')
            }
            $(this).removeClass('loading')
        },
        error: e => {
            console.log(e)
        }
    });
})
