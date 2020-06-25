import {clean} from "../app";

$('body').on('blur', '.product-qty', function () {
    changeQty()
})

$('body').on('click', '.btn-plus', function () {
    changeQty('plus')
})

$('body').on('click', '.btn-minus', function () {
    changeQty('minus')
})

const changeQty = type => {
    const productQty = $('#productQty')
    let data;
    const input = $('.product-qty');
    const productId = input.data('id');
    const action = input.data('action');
    const fromPage = input.data('page');
    let quantity = input.val();
    if (type) {
        if (type === 'minus') {
            if (quantity > 0) {
                quantity--
            }
        }
        if (type === 'plus') {
            if (quantity >= 0) {
                quantity++
            }
        }
        input.val(quantity)
    } else {
        quantity = input.data('quantity');
        if (Number(input.val()) !== Number(quantity)) {
            quantity = input.val()
        }
    }
    data = {
        productId, action, fromPage, quantity
    }
    data = clean(data)
    $.ajax({
        type: 'POST',
        url: "/api/cart",
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: data => {
            if (data['count'] !== '') {
                $('#cartCounter').html(data['count'])
            }
            if (quantity === 0) {
                productQty.replaceWith(data['html'])
            }
        },
        error: e => {
            console.log(e)
        }
    });
}
