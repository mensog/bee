jQuery($ => {
    let orderPerDay
    let daysInWeek
    let brand = false
    let pricePerOrder = 225
    let brandMultiplier = 1.2
    let weeksPerMonth = 4.33

    $('#orderPerDay').on('input', function () {
        const value = $(this).val()
        if (value >= 0) {
            orderPerDay = value
        }
        calculate(orderPerDay, daysInWeek, brand, pricePerOrder, brandMultiplier, weeksPerMonth)
    })

    $('#choice-checkbox').on('input', function () {
        brand = this.checked
        calculate(orderPerDay, daysInWeek, brand, pricePerOrder, brandMultiplier, weeksPerMonth)
    })

    $('#daysInWeek').on('input', function () {
        const value = $(this).val()
        if (value >= 0) {
            daysInWeek = value
        }
        calculate(orderPerDay, daysInWeek, brand, pricePerOrder, brandMultiplier, weeksPerMonth)
    })

    const calculate = (orderPerDay, daysInWeek, brand, pricePerOrder, brandMultiplier, weeksPerMonth) => {
        let averagePrice;
        if (orderPerDay && daysInWeek) {
            averagePrice = orderPerDay * daysInWeek * weeksPerMonth * pricePerOrder

            if (brand) {
                averagePrice = averagePrice * brandMultiplier
            }

            $('#incomePrice').text(averagePrice)
            $('#incomeText').addClass('d-none')
        } else {
            const $incomePrice = $('#incomePrice')
            const defaultIncome = $incomePrice.data('income')
            $incomePrice.text(defaultIncome)
            $('#incomeText').removeClass('d-none')
        }
    }
})
