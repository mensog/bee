jQuery($ => {
    let data = {
        name: '',
        storeId: '',
        priceTo: '',
        priceFrom: '',
        q: ''
    }

    let storeIds = []

    data.q = $('[name="q"]').val()

    $('[data-category-name]').on('click',
        function (e) {
            e.preventDefault()
            const value = $(this).data('category-name')
            if (data.name === value) {
                data.name = ''
            } else {
                data.name = $(this).data('category-name')
            }
            productsListRequest(data)
        })

    $('[name="filterStore"]').on('input',
        _.debounce(
            function () {
                const storeId = $(this).data('store')
                if (this.checked) {
                    if (!storeIds.includes(storeId)) {
                        storeIds.push(storeId)
                    }
                } else {
                    let index = storeIds.indexOf(storeId);
                    if (index !== -1) storeIds.splice(index, 1);
                }
                data.storeId = storeIds.toString()
                productsListRequest(data)
            }, 200))

    $('[name="priceCatalog"]').on('input',
        _.debounce(
            function () {
                const value = $(this).val().replace(/\D/g, '')
                $(this).val(value)
                const type = $(this).data('type')
                if (type) {
                    data[type] = value
                    productsListRequest(data)
                }
            }, 200))

    /**
     * Change url in window history
     * @param data : object
     * @param pathname
     */
    function changeUrl(data, pathname) {
        const url = createUrl(data, pathname)
        history.replaceState(data, '', url);
    }

    /**
     * Create url from data
     * @param data : object
     * @param pathname
     * @return {string}
     */
    function createUrl(data, pathname) {
        const keys = Object.keys(data);
        const last = keys[keys.length - 1];
        let str = `${pathname}?`
        Object.entries(data).forEach(([key, val]) => {
            if (val) {
                if (last === key) {
                    str += `${key}=${val}`
                } else if (keys[0] === key && last === key) {
                    str += `${key}=${val}`
                } else {
                    str += `${key}=${val}&`
                }
            }
        });
        return str
    }

    /**
     * clear object
     * @param obj
     * @return {*}
     */
    const clean = obj => {
        Object.keys(obj).forEach(key => (!obj[key] || undefined) && delete obj[key]);
        return obj
    };

    /**
     * Ajax-request to filter products-list
     * @param data
     */
    function productsListRequest(data) {
        const dataNormalized = clean(data)
        const pathname = window.location.pathname
        changeUrl(dataNormalized, pathname)
        if (pathname) {
            const $productsContainer = $('#productsContainer')
            $.ajax({
                type: 'GET',
                url: `/api${pathname}`,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: dataNormalized,
                beforeSend: () => {
                    $productsContainer.addClass('loading')
                },
                success: data => {
                    $productsContainer.replaceWith(data['html'])
                    $productsContainer.removeClass('loading')
                },
                error: e => {
                    console.log(e)
                }
            });
        }
    }
})
