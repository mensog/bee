import {clean} from "../app";

$('body').on('click', '.add-to-cart:not(.loading)', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const quantity = $(this).data('quantity');
    const fromPage = $(this).data('page');
    const action = 'add';
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
        data: JSON.stringify(data),
        contentType: 'application/json',
        beforeSend: () => {
            $(this).addClass('loading')
        },
        success: data => {
            if (data['count'] !== '') {
                $('#cartCounter').html(data['count'])
            }
            if (fromPage === 'product') {
                const productQty = $('#productQty')
                productQty.replaceWith(data['html'])
            }
            $(this).removeClass('loading')
        },
        error: e => {
            console.log(e)
        }
    });
})
