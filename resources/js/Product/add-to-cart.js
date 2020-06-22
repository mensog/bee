$('body').on('click', '.add-to-cart:not(.loading)', function (e) {
    e.preventDefault()
    const productId = $(this).data('id');
    const quantity = $(this).data('quantity');
    const action = 'add';
    const data = {
        productId,
        quantity,
        action
    }
    console.log(data)
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
            $(this).removeClass('loading')
            console.log(data);
        },
        error: e => {
            console.log(e)
        }
    });
})
