import {clean} from "../app";

let timeout;

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

    if (timeout !== undefined) {
        clearTimeout(timeout);
        timeout = undefined;
    }

    timeout = setTimeout(() => {
        sendRequest(productId, action, fromPage, quantity)
    }, 500)
}

const sendRequest = (productId, action, fromPage, quantity) => {
    let data = {
        productId, action, fromPage, quantity
    }
    const productQty = $('#productQty')
    const counter = $('#cartCounter')
    data = clean(data)
    $.ajax({
        type: 'POST',
        url: "/api/cart",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: JSON.stringify(data),
        contentType: 'application/json',
        success: data => {
            if (data['count'] === 0) {
                counter.removeClass('d-xl-block')
            } else {
                counter.addClass('d-xl-block')
            }
            counter.html(data['count'])
            if (Number(quantity) === 0) {
                productQty.replaceWith(data['html'])
            }
        },
        error: e => {
            console.log(e)
        }
    });
}
