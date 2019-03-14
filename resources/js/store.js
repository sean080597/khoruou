export default{
    state:{
        welcomeMessage: 'Welcome to my vue App',
        carts: [],
        cartCount: 0,
    },
    getters:{
        welcome(state){
            return state.welcomeMessage
        },
        getCartCount(state){
            return state.cartCount
        },
    },
    mutations:{
        ADD_TO_CART(state, prod) {
            // console.log(prod.MaRuou + ' - '+ prod.TenRuou);
            let found = state.carts.find(item => item.id == prod.MaRuou);
            console.log('Found: '+found+ ' - '+prod.MaRuou);
            if (found) {
                found.quantity++;
                found.totalPrice = found.quantity * found.price
            } else {
                state.carts.push({
                    id: prod.MaRuou,
                    name: prod.TenRuou,
                    image: prod.AnhRuou,
                    price: prod.DonGia,
                    quantity: 1,
                    totalPrice: prod.DonGia
                });
            }
            state.cartCount++;
            //clear localStorage & set again
            // localStorage.removeItem('khoruou_carts')
            localStorage.setItem('khoruou_carts',
                JSON.stringify({
                    carts: state.carts,
                    cartcount: state.cartCount
                })
            )
        },
        SET_CARTS(state){
            let localStored = JSON.parse(localStorage.getItem('khoruou_carts'))
            state.carts = localStored.carts
            state.cartCount = localStored.cartcount
        }
    },
    actions:{}
}