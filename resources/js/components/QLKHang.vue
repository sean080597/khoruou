<template>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1 class="module-title font-alt">QUẢN LÝ KHÁCH HÀNG</h1>
                </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
                <div class="col-12">
                <table class="table table-striped table-border checkout-table">
                    <tbody>
                    <tr>
                        <th class="hidden-xs">Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Xóa</th>
                    </tr>
                    <tr v-for="(item) in ds_khachhang" :key="item.id">
                        <td><h5 class="product-title font-alt">{{ item.TenKH }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.DiaChi }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.SDT }}</h5></td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    data() {
        return {
            ds_khachhang:{},
        }
    },
    methods: {
        loadKH(){
            axios.get('/api/khachhang').then((data)=>{
                this.ds_khachhang=data.data
            })
        },
    },
    created() {
        this.loadKH();
    },
}
</script>