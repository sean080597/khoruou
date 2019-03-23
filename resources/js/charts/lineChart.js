import { Line, mixins } from 'vue-chartjs'
import accounting from 'accounting'

export default {
  extends: Line,
  mixins: [mixins.reactiveProp],
  props: ['chartData', 'currency'],
  computed: {
    options () {
      return {
        responsive: true,
        maintainAspectRatios: true,
        scales: {
          yAxes: [{
            ticks: {
              callback: (value, index, values) => {
                return `${accounting.formatMoney(value, "", 0, ",", ".")} ${this.currency}`;
              },
            },
          }],
        },
        tooltips: {
          enabled: true,
          callbacks: {
            label: ((tooltipItems, data) => {
              // console.log(tooltipItems)
              return accounting.formatMoney(tooltipItems.yLabel, "", 0, ",", ".") + ' ' + this.currency
            })
          }
        }
      }
    }
  },
  mounted () {
    // this.chartData is created in the mixin.
    // If you want to pass options please create a local options object
    this.renderChart(this.chartData, this.options)
  }
}