export default{
    state:{
        welcomeMessage: 'Welcome to my vue App',
        carts:{
            ls_prod: [],
            cartCount: 0,
            cartTotal: 0
        },
    },
    getters:{
        welcome(state){
            return state.welcomeMessage
        },
        getCarts(state){
            return state.carts
        },
        getCartCount(state){
            return state.carts.cartCount
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

            //calc total of order
            let total = 0;
            for (let item of state.carts) {
                total += item.totalPrice;
            }
            //clear localStorage & set again
            // localStorage.removeItem('khoruou_carts')
            localStorage.setItem('khoruou_carts',
                JSON.stringify({
                    carts: state.carts,
                    cartcount: state.cartCount,
                    totalOrder: total.toFixed(2)
                })
            )
        },
        SET_CARTS(state){
            let localStored = JSON.parse(localStorage.getItem('khoruou_carts'))
            if(localStored != null){
                state.carts.ls_prod = localStored.carts
                state.carts.cartCount = localStored.cartcount
                state.carts.cartTotal = localStored.totalOrder
            }
        }
    },
    actions:{}
}