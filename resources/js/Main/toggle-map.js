jQuery($ => {
    $('.main-map-toggle').on('click', function () {

        const dataMap = $(this).data('map')

        if ($(this).hasClass('active')) {
            $(this).removeClass('active')
            $(`#${dataMap}`).removeClass('active')
        } else {
            $(this).addClass('active')
            $(`#${dataMap}`).addClass('active')
        }
    })
})
