jQuery(($) => {
    $('a[data-target="#deleteModal"]').on('click', function () {
        const dataAction = $(this).data('action');
        let dataText = $(this).data('text');

        if (typeof dataText === "undefined" || dataText === '') {
            dataText = 'позицию'
        }
        console.log(dataAction)
        console.log(dataText)
        const deleteModalText = $('#deleteModalFormText')
        const deleteModal = $('#deleteModal');

        deleteModal.attr('action', dataAction)
        deleteModalText.text(dataText)
    })
})
