<template>
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <h1 class="module-title font-alt">Check out</h1>
                </div>
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
                <div class="col-12">
                <table class="table table-striped table-border checkout-table">
                    <tbody>
                    <tr>
                        <th class="hidden-xs">Hình ảnh</th>
                        <th>Tên sản phẩm</th>
                        <th class="hidden-xs">Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                        <th>Xóa</th>
                    </tr>
                    <tr v-for="(item, index) in carts.ls_prod" :key="item.id">
                        <td class="hidden-xs"><a href="#"><img class="product-img" :src="item.image" :alt="item.name"/></a></td>
                        <td><h5 class="product-title font-alt">{{ item.name }}</h5></td>
                        <td class="hidden-xs"><h5 class="product-title font-alt">{{ item.price | formatMoney }}</h5></td>
                        <td><input class="form-control" type="number" name="" max="50" min="1"
                        onkeydown="javascript: return event.keyCode == 69 || event.keyCode == 189 ? false : true"
                        v-model.number="carts.ls_prod[index].quantity"
                        @input="updateCart(item)"></td>
                        <td><h5 class="product-title font-alt">{{ item.totalPrice | formatMoney }}</h5></td>
                        <td class="pr-remove"><a href="#" @click="removeItem(index)" title="Remove"><i class="fa fa-times"></i></a></td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <input class="form-control" type="text" id="" name="" placeholder="Coupon code"/>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <button class="btn btn-round btn-g" type="submit">Apply</button>
                    </div>
                </div>
                <div class="col-3 offset-3">
                    <div class="form-group">
                        <button class="btn btn-block btn-round btn-d pull-right" type="submit">Update Cart</button>
                    </div>
                </div>
            </div> -->
            <hr class="divider-w">
            <div class="row mt-5">
                <div class="col-5 offset-7">
                    <div>
                        <h4 class="font-alt">Tổng hóa đơn</h4>
                        <table class="table table-striped table-border checkout-table">
                            <tbody>
                                <tr>
                                    <th>Tổng tiền :</th>
                                    <td>{{ carts.cartTotal | formatMoney }}</td>
                                </tr>
                                <tr>
                                    <th>Tiền vận chuyển :</th>
                                    <td>{{ 30000 | formatMoney }}</td>
                                </tr>
                                <tr>
                                    <th>Thành tiền :</th>
                                    <td>{{ carts.cartTotal + 30000 | formatMoney }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-lg btn-block btn-round btn-d" type="submit" @click="printPage">Xác nhận hóa đơn</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
          carts: {},
          cur_user: {},
          isCartDeleted: false
        }
    },
    methods: {
        updateCart(prod){
          prod.totalPrice = prod.price * prod.quantity;
          //calc total of order
          this.updateCarts()
        },
        removeItem(index){
          if(confirm('Bạn có muốn xóa khỏi giỏ hàng?')){
            this.carts.ls_prod.splice(index, 1)
            //calc total of order
            this.updateCarts()
            this.$store.commit('DELETE_ITEM', index)
            if(this.carts.cartCount < 1){
              this.$router.push('/')
            }
          }
        },
        updateCarts(){
          let total = 0;
          let cart_count = 0;
          for (let item of this.carts.ls_prod) {
              total += item.totalPrice;
              cart_count += item.quantity;
          }
          this.carts.cartTotal = total
          this.carts.cartCount = cart_count
        },
        printPage(){
          if(confirm('Xác nhận hóa đơn này?')){
            axios.post('/api/hoadon', {'carts': this.carts, 'user_id': this.cur_user.id})
            .then((data)=>{
              if(data.data.isSuccess){
                window.print()
                this.$store.dispatch('delete_carts')

                this.isCartDeleted = true
                this.$router.push('/')
              }
            })
            .catch(()=>{
              alert('Error')
            })
          }
        }
    },
    mounted() {
      this.carts = this.$store.getters.getCarts
      if(this.carts.cartCount < 1){
        this.$router.push('/')
      }else{
        axios.get('/getLoggedUser').then((data) => {
          this.cur_user = data.data
        })
      }
    },
    destroyed() {
      if(!this.isCartDeleted) this.$store.dispatch('update_carts', this.carts)
    },
}
</script>

<style scoped>
.product-img{
    width: 100%;
}
.module{
  position: relative;
  padding: 50px 0;
  background-repeat: no-repeat;
  background-position: 50% 50%;
  background-size: cover;
  background-color: #fff;
}
.module-title {
  position: relative;
  letter-spacing: 4px;
  text-align: center;
  font-weight: 400;
  font-size: 30px;
  color: #111;
  margin: 0 0 70px;
}
.font-alt {
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.product-title {
  margin: 0 0 20px;
  color: #111;
}
/* Sections dividers */
.divider-w {
  border-top: 1px solid #eaeaea;
  margin: 0;
}
/* table */
.checkout-table {
  border: 1px solid #e5e5e5;
}

.checkout-table > tbody > tr > td,
.checkout-table > tbody > tr > th,
.checkout-table > tfoot > tr > td,
.checkout-table > tfoot > tr > th,
.checkout-table > thead > tr > td,
.checkout-table > thead > tr > th {
  padding: 12px;
}

.checkout-table tr td,
.checkout-table tr th {
  font-family: "Roboto Condensed", sans-serif;
  border: 1px solid #e5e5e5;
}

.checkout-table tbody tr td:first-child,
.checkout-table tbody tr th:first-child {
  max-width: 70px;
}
/* button */
.btn.btn-round {
  border-radius: 2px;
  font: 400 16px "Open Sans", sans-serif;
}
.btn.btn-d {
  background: rgba(17, 17, 17, 0.8);
  color: #fff;
}

.btn.btn-d:hover,
.btn.btn-d:focus {
  background: #111111;
}

h1, h2, h3, h4, h5, h6 {
  line-height: 1.4;
  font-weight: 400;
}

.price-table h4 {
  color: #111;
  margin: 0;
}
</style>