<template>
    <div class="row">

        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12" style="margin-bottom:15px"
        v-for="(ruou) in SP_loai" :key="ruou.MaRuou">
            <div class="card" style="width: 100%">
                <img class="card-img-top" :src="ruou.AnhRuou" alt="Card image cap" style="height:200px;">
                <div class="card-body">
                    <h5 class="card-title">{{ruou.TenRuou}}</h5>
                    <p class="card-text">{{ruou.DonGia}} VNĐ</p>
                    <p class="card-text">Còn {{ruou.SoLuong}} sản phẩm</p>
                    <!--p class="card-text">Rượu bán chó uống</p-->
                    <a href="#" class="btn btn-primary"  @click=addToCart(ruou)>Thêm vào giỏ</a>
                </div>
            </div>
        </div>

    </div>
</template>
<script>
export default {
    data() {
        return {
            MaLoai: this.$route.params.MaLoai,
            SP_loai: {}
        }
    },
    methods: {
        LoadSPTheoLoai(){
            axios.get('/api/SPTheoLoai/'+this.MaLoai).then(
                data=>{
                    this.SP_loai=data.data
                }
            )
        },
         addToCart(item) {
            this.$store.dispatch('add_to_carts', item)
        }
    },
    created() {
        this.LoadSPTheoLoai();
        Fire.$on('Searching',()=>{
            let query = this.$parent.search;
            axios.get('/api/TimKiemRuou?q='+query+'&loai='+this.MaLoai)
            .then((data)=>{
                this.SP_loai=data.data
            })
            .catch(()=>{
                alert('Error');
            })
        })
    },
}
</script>