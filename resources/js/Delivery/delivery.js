jQuery($ => {
    function updateCartAside(deliveryValue, bonusesToAdd = false) {
        let data = {
            deliveryId: +deliveryValue
        }
        if (bonusesToAdd !== false) {
            data.bonusAmount = +bonusesToAdd
        }
        const $aside = $('.cart-aside')
        $.ajax({
            type: 'POST',
            url: "/api/cart-aside",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: JSON.stringify(data),
            contentType: 'application/json',
            beforeSend: () => {
                $aside.addClass('loading')
            },
            success: data => {
                $aside.replaceWith(data['html'])
            },
            error: e => {
                console.log(e)
                // $aside.removeClass('loading')
            }
        });
    }
    $('body').on('input', '[name="delivery"]',
        _.debounce(function () {
            const deliveryValue = $(this).val()

            if (deliveryValue) {
                updateCartAside(deliveryValue)
            }
        }, 250))
    $('body').on('click', '.add-bonus', function (e) {
        e.preventDefault()
        const deliveryValue = $('[name="delivery"]').val()
        const bonusesToAdd = $('[name="bonusesToAdd"]').val()
        if (deliveryValue) {
            updateCartAside(deliveryValue, bonusesToAdd)
        }
    })
    $('body').on('click', '.remove-bonus', function (e) {
        e.preventDefault()
        const deliveryValue = $('[name="delivery"]').val()
        if (deliveryValue) {
            updateCartAside(deliveryValue, 0)
        }
    })
})
