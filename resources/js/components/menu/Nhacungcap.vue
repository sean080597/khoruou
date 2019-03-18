<template>
    <div>
          <ul class="treeview-menu" v-for="(nhacungcap) in ds_ncc" :key="nhacungcap.MaNCC">
            <li><router-link class="treeview-item" :to=" '/SPTheoNCC/' + nhacungcap.MaNCC "><i class="icon fa fa-circle-o"></i> {{ nhacungcap.TenNCC }}</router-link></li>
          </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            ds_ncc:{}
        }
    },
    methods: {
        loadNCC(){
            axios.get('/api/nhacungcap').then((data)=>{
                this.ds_ncc=data.data
            })
        }
    },
    created() {
        this.loadNCC();
    },
}
</script>