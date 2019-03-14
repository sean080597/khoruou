<template>
   <div>
        <i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Giỏ hàng</span> <span class="badge">{{ getCartCount }}</span>
   </div>
</template>
<script>
export default {
    data() {
        return {
            
        }
    },
    computed: {
        getCartCount(){
            return this.$store.getters.getCartCount
        }
    },
    created() {
        //set cartcount to vuex
        this.$store.commit('SET_CARTS');
    },
}
</script>
<style scoped>
.badge{
    border: 1px solid;
}
</style>
