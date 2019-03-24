<template>
<div>
    <section class="module" v-if="!$gate.isNhanVien()">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1 class="module-title font-alt">QUẢN LÝ RƯỢU (QUẢN LÝ)</h1>
                    <button style="margin-left: 30%;font-size: 20px;" class="btn btn-danger" @click="newModal">THÊM RƯỢU MỚI</button>
                </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
                <div class="col-12">
                <table class="table table-striped table-border checkout-table">
                    <tbody>
                    <tr>
                        <th>STT</th>
                        <th>Tên rượu</th>
                        <th>Ảnh rượu</th>
                        <th>Số lượng</th>
                        <th>Mô tả</th>
                        <th>Đơn giá</th>
                        <th>Nhà sản xuất</th>
                        <th>Loại rượu</th>
                        <th>Nhà cung cấp</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                    <tr v-for="(item,index) in ds_qlruou" :key="item.id">
                        <td><h5 class="product-title font-alt">{{ ++index }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.TenRuou }}</h5></td>
                        <td><h5 class="product-title font-alt"><a href="#"><img class="product-img" :src="item.AnhRuou" :alt="item.TenRuou"/></a></h5></td>
                        <td><h5 class="product-title font-alt">{{ item.SoLuong }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.Mota }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.DonGia }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.TenNSX }}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.TenLoai}}</h5></td>
                        <td><h5 class="product-title font-alt">{{ item.TenNCC }}</h5></td>
                        <td class="pr-remove"><a href="#" @click="editModal(item)" title="Edit"><i class="fa fa-pencil"></i></a></td>
                        <td class="pr-remove"><a href="#" @click="removeItem(item.MaRuou)" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="AddRuou" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <form @submit.prevent="editMode ? updateRuou() : createRuou()">
                <!-- Modal content-->
                <div class="modal-content">
                   <div class="modal-header">
                        <h4 v-show="!editMode" class="modal-title">Tạo mới</h4>
                        <h4 v-show="editMode" class="modal-title">Sửa</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <input v-model="form.TenRuou" type="text" name="TenRuou" placeholder="Tên rượu"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <input v-model="form.AnhRuou" type="text" name="AnhRuou" placeholder="Ảnh rượu"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <input v-model="form.SoLuong" type="number" name="SoLuong" placeholder="Số lượng"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <input v-model="form.Mota" type="text" name="Mota" placeholder="Mô tả"
                                class="form-control">
                        </div>

                          <div class="form-group">
                            <input v-model="form.DonGia" type="number" name="DonGia" placeholder="Đơn giá"
                                class="form-control">
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="TenNSX"
                            v-model="form.MaNSX">
                                <option :value='item.MaNSX' v-for="(item) in ds_nsx" :key="item.MaNSX">{{item.TenNSX}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="TenLoai"
                            v-model="form.MaLoai">
                                <option :value='item.MaLoai' v-for="(item) in ds_pl" :key="item.MaLoai">{{item.TenLoai}}</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="TenNCC"
                            v-model="form.MaNCC">
                                <option :value='item.MaNCC'  v-for="(item) in ds_ncc" :key="item.MaNCC">{{item.TenNCC}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button v-show="!editMode" type="submit" class="btn btn-primary">Tạo</button>
                        <button v-show="editMode" type="submit" class="btn btn-success">Sửa</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </form>

        </div>
        </div>
    </section>

    <div class="mb-5" v-else>
        <not-found></not-found>
    </div>
</div>
</template>
<script>
export default {
    data() {
        return {
            ds_qlruou:{},
            editMode: true,
            form:{
                MaRuou:'',
                TenRuou:'',
                AnhRuou:'',
                SoLuong:null,
                Mota:'',
                DonGia:null,
                MaNSX:'',
                MaLoai:'',
                MaNCC:'',
            },
            ds_nsx:{},
            ds_pl:{},
            ds_ncc:{},
        }
    },
    methods: {
        loadQLRuou(){
            if(!this.$gate.isNhanVien()){
                axios.get('/api/QLRuou').then((data)=>{
                    this.ds_qlruou=data.data
                })
            }
        },
        removeItem(ruou_id){
          if(confirm('Bạn có muốn xóa khỏi danh sách khách hàng thân thiết?')){
            axios.delete("/api/ruou/"+ruou_id)
            .then(()=>{
                this.loadQLRuou();
                alert('ban da xoa thanh cong');
            });
          }
        },
        EditItem(index){
          if(confirm('Bạn có muốn sửa rượu không?')){
            this.carts.ds_qlruou.splice(index, 1)
          }
        },
        resetForm(){
            this.form.TenRuou='',
            this.form.AnhRuou='',
            this.form.SoLuong=0,
            this.form.Mota='',
            this.form.DonGia=0,
            this.form.MaNSX='',
            this.form.MaLoai='',
            this.form.MaNCC=''
        },
        fillForm(ruou){
            this.form.TenRuou=ruou.TenRuou,
            this.form.AnhRuou=ruou.AnhRuou,
            this.form.SoLuong=ruou.SoLuong,
            this.form.Mota=ruou.Mota,
            this.form.DonGia=ruou.DonGia,
            this.form.MaNSX=ruou.MaNSX,
            this.form.MaLoai=ruou.MaLoai,
            this.form.MaNCC=ruou.MaNCC
        },
        newModal(){
            this.editMode = false;
            // this.form.reset();
            this.resetForm();
            $('#AddRuou').modal('show');
        },
        editModal(ruou){
            this.editMode = true;
            this.resetForm();
            $('#AddRuou').modal('show');
            this.fillForm(ruou);

            this.form.MaRuou = ruou.MaRuou;
        },
        updateRuou() {
            if(confirm('Bạn có muốn sửa không?')){
            axios.put("/api/ruou/"+this.form.MaRuou,this.form)
            .then(()=>{
                $('#AddRuou').modal('hide')
                this.loadQLRuou();
                alert('ban da sửa thanh cong');
            });
          }
        },
        createRuou(){
            axios.post('/api/ruou',this.form)
            .then(() => {
                $('#AddRuou').modal('hide')
                alert('Đã thêm thành công');
                this.loadQLRuou();
            })
            .catch(() => {
                alert('Đã có lỗi xảy ra');
            })
        },
        chooseRuou(){
            if(!this.$gate.isNhanVien()){
                axios.get('/api/nhasanxuat').then((data)=>{
                    this.ds_nsx=data.data
                }),
                axios.get('/api/phanloai').then((data)=>{
                    this.ds_pl=data.data
                }),
                axios.get('/api/nhacungcap').then((data)=>{
                    this.ds_ncc=data.data
                })
            }
        },
    },
    created() {
        this.loadQLRuou();
        this.chooseRuou();
    },
}
</script>
<style scoped>
    tr th{
        width: 30%;
    }
    img.product-img {
        width: 100%;
        height:20vh;
    }
</style>