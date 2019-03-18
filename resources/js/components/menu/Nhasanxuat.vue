<template>
    <div>
        <ul class="treeview-menu" v-for="(nhasanxuat) in ds_nhasanxuat" :key="nhasanxuat.MaNSX">
            <li><router-link class="treeview-item" :to="'/SPTheoNSX/'+nhasanxuat.MaNSX"><i class="icon fa fa-circle-o"></i> {{nhasanxuat.TenNSX}}</router-link></li>
        </ul>
    </div>
</template>
<script>
export default {
    data() {
        return {
            ds_nhasanxuat:{}
        }
    },
    methods: {
        loadNSX(){
            axios.get('/api/nhasanxuat').then((data)=>{
                this.ds_nhasanxuat=data.data
            })
        }
    },
    created() {
        this.loadNSX();
    },
}
</script>