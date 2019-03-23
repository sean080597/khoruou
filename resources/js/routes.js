export const routes = [
    { path: '/', component: require('./components/Dashboard.vue').default },
    { path: '/checkout', component: require('./components/Checkout.vue').default },
    { path: '/SPTheoLoai/:MaLoai', component: require('./components/SPTheoLoai.vue').default },
    { path: '/SPTheoNCC/:MaNCC', component: require('./components/SPTheoNCC.vue').default },
    { path: '/SPTheoNSX/:MaNSX', component: require('./components/SPTheoNSX.vue').default },
<<<<<<< HEAD
    { path: '/QLyAdmin', component: require('./components/QLyAdmin.vue').default },
    { path: '/ThongKe', component: require('./components/ThongKe.vue').default },
=======
    { path: '/khachhang', component: require('./components/QLKHang.vue').default },

>>>>>>> eeb771003cc9379300bfe43272a01aac324e75d5
];