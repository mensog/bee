jQuery($ => {
    $('body').on('input', '[name="delivery"]',
        _.debounce(function () {
            const deliveryValue = $(this).val()

            if (deliveryValue) {
                let data = {
                    deliveryId: +deliveryValue
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
        }, 250))
})
