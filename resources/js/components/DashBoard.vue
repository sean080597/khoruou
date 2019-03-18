<template>
<div>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Trang chủ</h1>
            <!-- <p>Start a beautiful journey here</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" style="margin-bottom:15px"
        v-for="(ruou) in ds_ruou" :key="ruou.MaRuou">
            <div class="card" style="width: 100%">
                <img class="card-img-top" :src="ruou.AnhRuou" alt="Card image cap" style="height:200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ruou.TenRuou}}</h5>
                    <p class="card-text">{{ruou.DonGia}} VNĐ</p>
                    <p class="card-text">Còn {{ruou.SoLuong}} sản phẩm</p>
                    <!--p class="card-text">Rượu bán chó uống</p-->
                    <button class="btn btn-primary" @click=addToCart(ruou)>Thêm vào giỏ</button>
                </div>
            </div>
        </div>

    </div>

</div>
</template>

<script>
export default {
    data() {
        return {
            ds_ruou:{},
        }
    },
    methods: {
        loadSP(){
            axios.get('/api/ruou').then((data)=>{
                this.ds_ruou=data.data
            })
        },
        addToCart(item) {
            this.$store.dispatch('add_to_carts', item)
        }
    },
    created() {
        this.loadSP();
        Fire.$on('Searching',()=>{
            let query = this.$parent.search;
            axios.get('/api/TimKiemRuou?q='+query)
            .then((data)=>{
                this.ds_ruou=data.data
            })
            .catch(()=>{
                alert('Error');
            })
        })
        // this.$store.commit('DELETE_LOCALSTORAGE')
    },
}
</script>