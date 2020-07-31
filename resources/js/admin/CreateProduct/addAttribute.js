jQuery($ => {
    $('#createAttr button[type="submit"]').on('click', function () {
        const name = $('#createAttr #attrName').val();
        const value = $('#createAttr #attrVal').val();

        if (name !== '') {
            createAttr(name, value)

            clearFields('#createAttr')
        }
    })

    const createAttr = (name, value) => {
        const attrsContainer = $('#attrsContainer')

        let dirty = 'dirty';
        if (value === '') {
            dirty = ''
        }
        const attrTemplate =
            '                                    <div class="col-lg-6">\n' +
            '                                        <div class="form-group">\n' +
            '                                            <div class="input-group attr-field">\n' +
            '                                                <div class="input-group-content">\n' +
            '                                                    <input type="text"\n' +
            '                                                           name="' + name + '"\n' +
            '                                                           value="' + value + '"\n' +
            '                                                           class="form-control ' + dirty + '"\n' +
            '                                                           id="' + name + '">\n' +
            '                                                    <label\n' +
            '                                                        for="' + name + '">' + name + '</label>\n' +
            '                                                </div>\n' +
            '                                                <div class="input-group-btn">\n' +
            '                                                    <button class="btn delete-attr btn-flat btn-danger btn-default"\n' +
            '                                                            type="button">\n' +
            '                                                        <i class="fa fa-trash"></i>\n' +
            '                                                    </button>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </div>\n' +
            '                                    </div>\n'

        attrsContainer.append(attrTemplate);

    }

    $(document).on('click', '.delete-attr', function () {
        $(this).parents('.col-lg-6').remove()
    })

    const clearFields = (parent) => {
        if ($(`${parent} input`).length > 1) {
            $(`${parent} input`).each((index, item) => {
                $(item).removeClass('dirty')
                $(item).val('');
            })
        } else {
            $(`${parent} input`).val();
        }
    }
})
