$('.add-to-cart').on('click', function () {

    const id = $(this).data('id');
    const quantity = $(this).data('quantity');

    $.ajax({
        type: 'POST',
        url: "",
        data: {id: id, quantity: quantity},
        beforeSend: () => {
            $(this).addClass('loading')
        },
        success: data => {
            $(this).removeClass('loading')
            console.log(data.success);
        },
        error: e => {
            console.log(e)
        }
    });
})
