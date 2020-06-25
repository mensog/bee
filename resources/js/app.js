require('./bootstrap');
require('./Product/add-to-cart')
require('./Product/change-cart')
require('./Product/product-change-cart')

export const clean = obj => {
    Object.keys(obj).forEach(key => (obj[key] == null || undefined) && delete obj[key]);
    return obj
};
