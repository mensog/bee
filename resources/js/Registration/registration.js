import is from 'is_js'
import IMask from 'imask/dist/imask.min'

const element = document.getElementById('phone');

const checkout = document.getElementById('checkout')

let mask

if (document.body.contains(checkout)) {
    const maskOptions = {
        mask: '+{90} (551) 273-79-71'
    };
    mask = IMask(element, maskOptions);

    const checkout = document.getElementById('checkout')

    let checkoutFormObject = document.forms['checkout']

    let checkoutFormElement = checkoutFormObject.elements["phone"];

    checkout.onsubmit = () => {
        checkoutFormElement.value = mask.unmaskedValue
    }
}

let isValid = [];

$('.registration #email, .registration #name, .registration #surname, .registration #password, .registration #password-confirm').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'registration')
})

$('.reset-password #email, .reset-password #password, .reset-password #password-confirm').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'reset-password')
})

$('.edit-data #name, .edit-data #surname').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'edit-data')
})

$('.change-email #email, .change-email #password').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'change-email', 'password')
})

$('.change-password #password, .change-password #newPassword, .change-password #newPasswordConfirmation').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'change-password', 'password')
})

$('.checkout #email, .checkout #name-n-surname, .checkout #phone, .checkout #address').on('keyup', function () {
    checkRegistrationForm(false, $(this), 'checkout')
})

$('.registration #personal-data-agreement').on('change', function () {
    checkRegistrationForm(false, $(this), 'registration')
})

const checkRegistrationForm = (load, $this, page, ignoreID) => {
    if (load) {
        $(`.${page} input`).each(function () {
            switch ($(this).attr('type')) {
                case 'text':
                    if ($(this).val().trim() !== '') {
                        $(this).removeClass('is-invalid')
                        $(this).addClass('is-valid')
                        if (!isValid.includes($(this).attr('id'))) {
                            isValid.push($(this).attr('id'))
                        }
                    } else {
                        $(this).removeClass('is-valid')
                        if (!load)
                            $(this).addClass('is-invalid')
                        let index = isValid.indexOf($(this).attr('id'));
                        if (index !== -1) isValid.splice(index, 1);
                    }
                    break
                case 'email':
                    if (page === 'checkout') {
                        if (is.email($(this).val())) {
                            $(this).removeClass('is-invalid')
                            $(this).addClass('is-valid')
                            if (!isValid.includes($(this).attr('id'))) {
                                isValid.push($(this).attr('id'))
                            }
                        } else {
                            $(this).removeClass('is-valid')
                            if (!load)
                                $(this).addClass('is-invalid')
                            let index = isValid.indexOf($(this).attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    }

                    if (page === 'change-email') {
                        if (!$(this).hasClass('is-invalid')) {
                            if (is.email($(this).val())) {
                                $(this).removeClass('is-invalid')
                                $(this).addClass('is-valid')
                                if (!isValid.includes($(this).attr('id'))) {
                                    isValid.push($(this).attr('id'))
                                }
                            } else {
                                $(this).removeClass('is-valid')
                                if (!load)
                                    $(this).addClass('is-invalid')
                                let index = isValid.indexOf($(this).attr('id'));
                                if (index !== -1) isValid.splice(index, 1);
                            }
                        }
                    }
                    break
                case 'password':

                    if ($(this).attr('id') === 'password-confirm') {
                        let password = $('#password').val()
                        if ($(this).val() === password && $(this).val().length >= 8) {
                            $(this).removeClass('is-invalid')
                            $(this).addClass('is-valid')
                            if (!isValid.includes($(this).attr('id'))) {
                                isValid.push($(this).attr('id'))
                            }
                        } else {
                            $(this).removeClass('is-valid')
                            if (!load)
                                $(this).addClass('is-invalid')
                            let index = isValid.indexOf($(this).attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    } else {
                        if ($(this).val().length >= 8) {
                            $(this).removeClass('is-invalid')
                            $(this).addClass('is-valid')
                            if (!isValid.includes($(this).attr('id'))) {
                                isValid.push($(this).attr('id'))
                            }
                        } else {
                            $(this).removeClass('is-valid')
                            if (!load)
                                $(this).addClass('is-invalid')
                            let index = isValid.indexOf($(this).attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    }
                    break
                case 'checkbox':
                    if ($(this).is(":checked")) {
                        if (!isValid.includes($(this).attr('id'))) {
                            isValid.push($(this).attr('id'))
                        } else {
                            let index = isValid.indexOf($(this).attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    }
                    break
            }
        })
    } else {
        switch ($this.attr('type')) {
            case 'text':
                if ($this.val().trim() !== '') {
                    $this.removeClass('is-invalid')
                    $this.addClass('is-valid')
                    if (!isValid.includes($this.attr('id'))) {
                        isValid.push($this.attr('id'))
                    }
                } else {
                    $this.removeClass('is-valid')
                    if (!load)
                        $this.addClass('is-invalid')
                    let index = isValid.indexOf($this.attr('id'));
                    if (index !== -1) isValid.splice(index, 1);
                }
                break
            case 'phone':
                if (mask.unmaskedValue.length === 11) {
                    $this.removeClass('is-invalid')
                    $this.addClass('is-valid')
                    if (!isValid.includes($this.attr('id'))) {
                        isValid.push($this.attr('id'))
                    }
                } else {
                    $this.removeClass('is-valid')
                    if (!load)
                        $this.addClass('is-invalid')
                    let index = isValid.indexOf($this.attr('id'));
                    if (index !== -1) isValid.splice(index, 1);
                }
                break
            case 'email':
                $this.next('.invalid-feedback').remove()
                if (is.email($this.val())) {
                    $this.removeClass('is-invalid')
                    $this.addClass('is-valid')
                    if (!isValid.includes($this.attr('id'))) {
                        isValid.push($this.attr('id'))
                    }
                } else {
                    $this.removeClass('is-valid')
                    if (!load)
                        $this.addClass('is-invalid')
                    let index = isValid.indexOf($this.attr('id'));
                    if (index !== -1) isValid.splice(index, 1);
                }
                break
            case 'password':
                if ($this.attr('id') !== ignoreID) {
                    let password = $('#password').val().trim()
                    if ($this.attr('id') === 'password-confirm' || $this.attr('id') === 'newPasswordConfirmation') {
                        if ($this.attr('id') === 'newPasswordConfirmation') {
                            password = $('#newPassword').val().trim()
                        }
                        if ($this.val().length >= 8 && $this.val() === password) {
                            $this.removeClass('is-invalid')
                            $this.addClass('is-valid')
                            if (!isValid.includes($this.attr('id'))) {
                                isValid.push($this.attr('id'))
                            }
                        } else {
                            $this.removeClass('is-valid')
                            if (!load)
                                $this.addClass('is-invalid')
                            let index = isValid.indexOf($this.attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    } else {
                        let passwordInput
                        if ($this.attr('id') === 'newPassword') {
                            passwordInput = $('#newPasswordConfirmation')
                        } else {
                            passwordInput = $('#password-confirm')
                        }

                        if (passwordInput.length) {
                            password = passwordInput.val().trim()
                            if ($this.val() !== password) {
                                passwordInput.removeClass('is-valid')
                                passwordInput.addClass('is-invalid')
                                let index = isValid.indexOf(passwordInput.attr('id'));
                                if (index !== -1) isValid.splice(index, 1);
                            } else {
                                passwordInput.addClass('is-valid')
                                passwordInput.removeClass('is-invalid')
                                if (!isValid.includes(passwordInput.attr('id'))) {
                                    isValid.push(passwordInput.attr('id'))
                                }
                            }
                            if (password === '') {
                                passwordInput.removeClass('is-valid')
                                passwordInput.removeClass('is-invalid')
                                let index = isValid.indexOf(passwordInput.attr('id'));
                                if (index !== -1) isValid.splice(index, 1);
                            }
                        }

                        if ($this.val().length >= 8) {
                            $this.removeClass('is-invalid')
                            $this.addClass('is-valid')
                            if (!isValid.includes($this.attr('id'))) {
                                isValid.push($this.attr('id'))
                            }

                        } else {
                            $this.removeClass('is-valid')
                            if (!load)
                                $this.addClass('is-invalid')
                            let index = isValid.indexOf($this.attr('id'));
                            if (index !== -1) isValid.splice(index, 1);
                        }
                    }
                } else {
                    if ($this.val().trim() !== '') {
                        $this.removeClass('is-invalid')
                        if (!isValid.includes($this.attr('id'))) {
                            isValid.push($this.attr('id'))
                        }
                    } else {
                        let index = isValid.indexOf($this.attr('id'));
                        if (index !== -1) isValid.splice(index, 1);
                    }
                }
                break
            case 'checkbox':
                if ($this.is(":checked")) {
                    if (!isValid.includes($this.attr('id'))) {
                        isValid.push($this.attr('id'))
                    } else {
                        let index = isValid.indexOf($this.attr('id'));
                        if (index !== -1) isValid.splice(index, 1);
                    }
                }
                break
        }
    }

    let num = $(`.${page} input:visible`).length;

    if (isValid.length === num) {
        $(`.${page} button[type=submit]`).prop('disabled', false)
    } else {
        $(`.${page} button[type=submit]`).prop('disabled', true)
    }
}

checkRegistrationForm('start', false, 'registration')
checkRegistrationForm('start', false, 'change-email')
checkRegistrationForm('start', false, 'checkout')
checkRegistrationForm('start', false, 'edit-data')

