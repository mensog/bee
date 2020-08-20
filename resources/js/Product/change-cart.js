import {clean} from "../app";

jQuery($ => {
    $('body').on('click', '.change-cart', function (e) {
        e.preventDefault()
        const productId = $(this).data('id');
        const quantity = $(this).data('quantity');
        const action = $(this).data('action');
        const fromPage = $(this).data('page');

        changeCart(productId, action, fromPage, quantity)
    })

    $('body').on('blur', '.cart-qty', function () {
        let quantity = $(this).data('quantity');
        if (Number($(this).val()) !== Number(quantity)) {
            const productId = $(this).data('id');
            const action = $(this).data('action');
            const fromPage = $(this).data('page');
            quantity = $(this).val()

            changeCart(productId, action, fromPage, quantity)
        } else {
            return null
        }
    })

    function changeCart(productId, action, fromPage, quantity) {
        let data = {
            productId, action, fromPage, quantity
        }
        data = clean(data)
        const cart = $('#cart')
        const counter = $('#cartCounter')
        const cartTotal = $('#cartTotal')
        $.ajax({
            type: 'POST',
            url: "/api/cart",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: JSON.stringify(data),
            contentType: 'application/json',
            beforeSend: () => {
                cart.addClass('loading')
            },
            success: data => {
                if (data['count'] === 0) {
                    counter.removeClass('d-xl-block')
                } else {
                    counter.addClass('d-xl-block')
                }
                counter.html(data['count'])
                cartTotal.html(data['cartTotal'])
                cart.replaceWith(data['html'])
                cart.removeClass('loading')
            },
            error: e => {
                console.log(e)
            }
        });
    }
})
