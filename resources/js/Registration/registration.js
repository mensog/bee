import is from '../../../node_modules/is_js/is'

let isValid = [];

$('.registration #email').on('keyup', function () {
    if (is.email($(this).val())) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
        if (!isValid.includes($(this).attr('id'))) {
            isValid.push($(this).attr('id'))
        }
    } else {
        $(this).addClass('is-invalid')
        removeA(isValid, $(this).attr('id'))
    }
})

$('.registration #password').on('keyup', function () {
    if ($(this).val().length >= 8) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
        if (!isValid.includes($(this).attr('id'))) {
            isValid.push($(this).attr('id'))
        }
    } else {
        $(this).addClass('is-invalid')
        removeA(isValid, $(this).attr('id'))
    }
})

$('.registration #password-confirm').on('keyup', function () {
    let password = $('#password').val()
    if ($(this).val() === password) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
        if (!isValid.includes($(this).attr('id'))) {
            isValid.push($(this).attr('id'))
        }
    } else {
        $(this).addClass('is-invalid')
        removeA(isValid, $(this).attr('id'))
    }
})

$('.registration input').on('change', function () {
    checkRegistrationForm()
})

const checkRegistrationForm = () => {
    let nameVal = $('.registration #name').val().trim()
    let surNameVal = $('.registration #surname').val().trim()
    let dataAgree = $('.registration #personal-data-agreement').is(":checked")

    if (isValid.length === 3 && nameVal !== '' && surNameVal !== '' && dataAgree) {
        $('.registration button[type=submit]').prop('disabled', false)
    } else {
        $('.registration button[type=submit]').prop('disabled', true)
    }
}

const removeA = arr => {
    let what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax = arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
