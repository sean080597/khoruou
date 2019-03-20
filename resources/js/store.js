export default{
    state:{
        welcomeMessage: 'Welcome to my vue App',
        carts:{
            ls_prod: [],
            cartCount: 0,
            cartTotal: 0
        },
        user_info: {},
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
        getUserInfo(state){
            return state.user_info
        },
    },
    mutations:{
        ADD_TO_CART(state, prod) {
            // console.log(prod.MaRuou + ' - '+ prod.TenRuou);
            let found = state.carts.ls_prod.find(item => item.id == prod.MaRuou);
            if (found) {
                found.quantity++;
                found.totalPrice = found.quantity * found.price
            } else {
                state.carts.ls_prod.push({
                    id: prod.MaRuou,
                    name: prod.TenRuou,
                    image: prod.AnhRuou,
                    price: prod.DonGia,
                    quantity: 1,
                    totalPrice: prod.DonGia
                });
            }
            state.carts.cartCount++;

            //calc total of order
            let total = 0;
            for (let item of state.carts.ls_prod) {
                total += item.totalPrice;
            }
            state.carts.cartTotal = total
        },
        SET_CARTS(state){
            let localStored = JSON.parse(localStorage.getItem('khoruou_carts'))
            if(localStored != null){
                state.carts.ls_prod = localStored.carts
                state.carts.cartCount = localStored.cartcount
                state.carts.cartTotal = localStored.totalOrder
            }
        },
        DELETE_CARTS(state){
            state.carts = {
                ls_prod: [],
                cartCount: 0,
                cartTotal: 0
            }
        },
        UPDATE_CARTS(state, payload){
            state.carts = payload
        },
        UPDATE_LOCALSTORAGE(state){
            localStorage.setItem('khoruou_carts',
                JSON.stringify({
                    carts: state.carts.ls_prod,
                    cartcount: state.carts.cartCount,
                    totalOrder: state.carts.cartTotal
                })
            )
        },
        DELETE_LOCALSTORAGE(){
            localStorage.removeItem('khoruou_carts')
        },
        SET_USER_INFO(state){
            // let localStored = JSON.parse(localStorage.getItem('khoruou_userinfo'))
            // if(localStored != null){
            //     state.user_info = localStored
            // }
        }
    },
    actions:{
        add_to_carts: async (context, prod) => {
            await context.commit('ADD_TO_CART', prod)
            context.commit('UPDATE_LOCALSTORAGE')
        },
        update_carts: async (context, carts) => {
            await context.commit('UPDATE_CARTS', carts)
            context.commit('UPDATE_LOCALSTORAGE')
        },
        delete_carts: async (context) => {
            await context.commit('DELETE_CARTS')
            context.commit('DELETE_LOCALSTORAGE')
        },
    }
}