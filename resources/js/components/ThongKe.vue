<template>
    <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Line Chart</h3>
            <!--div class="embed-responsive embed-responsive-16by9"-->
            <div>
              <line-chart :chart-data="urlData" :height="100" :options="{responsive: true, maintainAspectRatio: true}"></line-chart>
            </div>
          </div>
        </div>
    </div>
</template>
<script>
import LineChart from '../charts/lineChart.js'
export default {
    components: {
        LineChart
    },
    data() {
        return {
            urlData: {}
        }
    },
    methods: {
        update(){
            axios.get('/api/ThongKe').then((response) => {
                this.urlData = response.data
            });
        }
    },
    mounted() {
        this.update()
    },
}
</script>