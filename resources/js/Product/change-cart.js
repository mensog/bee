$('.change-cart').on('click', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const quantity = $(this).data('quantity');
    const action = $(this).data('action');
    const fromPage = $(this).data('page');

    changeCart(productId, action, fromPage, quantity)
})

$('.cart-qty').on('blur', function () {
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
    console.log(data)
    const cartBody = $('#cardBody')
    $.ajax({
        type: 'POST',
        url: "/api/cart",
        data: JSON.stringify(data),
        contentType: 'application/json',
        beforeSend: () => {
            cartBody.addClass('loading')
        },
        success: data => {
            if (data['count'] !== '') {
                $('#cartCounter').html(data['count'])
            }
            // cartBody.html(data)
            cartBody.removeClass('loading')
            console.log(data);
        },
        error: e => {
            console.log(e)
        }
    });
}

const clean = obj => {
    Object.keys(obj).forEach(key => (obj[key] == null || undefined) && delete obj[key]);
    return obj
};
