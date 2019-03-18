<template>
    <div>
        <ul class="treeview-menu" v-for="(phanloai) in ds_loai" :key="phanloai.MaLoai">
            <li><router-link class="treeview-item" :to="'/SPTheoLoai/'+phanloai.MaLoai"><i class="icon fa fa-circle-o"></i> {{phanloai.TenLoai}}</router-link></li>
          </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            ds_loai:{}
        }
    },
    methods: {
        loadPL(){
            axios.get('/api/phanloai').then((data)=>{
                this.ds_loai=data.data
            })
        }
    },
    created() {
        this.loadPL();
    },
}
</script>