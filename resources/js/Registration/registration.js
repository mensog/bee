import is from '../../../node_modules/is_js/is'

let isValid = [];

$('.registration #email, .registration #name, .registration #surname, .registration #password, .registration #password-confirm').on('keyup', function () {
    checkRegistrationForm(false, $(this))
})

$('.registration #personal-data-agreement').on('change', function () {
    checkRegistrationForm(false, $(this))
})

const checkRegistrationForm = (load, $this) => {
    if (load) {
        $('.registration input').each(function () {
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
            case 'email':
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
                let password = $('#password').val().trim()
                if ($this.attr('id') === 'password-confirm') {
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
                    let passwordInput = $('#password-confirm')
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

    if (isValid.length === 6) {
        $('.registration button[type=submit]').prop('disabled', false)
    } else {
        $('.registration button[type=submit]').prop('disabled', true)
    }
}

checkRegistrationForm('start')
