<template>
    <div>
        <div class="row align-items-center"  v-if="!dataFilled">
            <div class="col" style="padding: 2.2rem;font-size: .8rem;">
                <div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline m-alert--air alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="m-alert__icon">
                        <i class="flaticon-exclamation-1"></i>
                    </div>
                    <div class="m-alert__text">
                        <strong>No data to display!</strong><br> Once the data is available it will be displayed here.
                    </div>
                </div>
            </div>
        </div>

        <div class="m-widget12 m-widget12--chart-bottom m--margin-top-10" style="min-height: 300px">
            <div class="m-widget12__chart m-portlet-fit--sides" style="position: absolute; margin: 0;">
                <line-chart :chart-data="chartData" :options="chartOptions" style="height: 300px"></line-chart>
            </div>
        </div>
    </div>

</template>

<script>
    import LineChart from '../../charts.js-lib/LineChart'

    export default {
        components: {
            LineChart
        },
        data() {
            return {
                echo: null,
                dataFilled: false,
                chartData:{},
                chartOptions: {
                    title: {
                        display: false,
                    },
                    tooltips: {
                        mode: 'nearest',
                        intersect: false,
                        position: 'nearest',
                        xPadding: 10,
                        yPadding: 10,
                        caretPadding: 10
                    },
                    legend: {
                        display: false
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    aspectRatio: 2,
                    scales: {
                        xAxes: [{
                            display: false,
                            gridLines: false
                        }],
                        yAxes: [{
                            display: false,
                            gridLines: false,
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    elements: {
                        line: {
                            tension: 0,
                            borderWidth: 0
                        },
                        point: {
                            pointStyle: 'circle',
                            radius: 0,
                            borderWidth: 0
                        }
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 10,
                            bottom: 0
                        }
                    }
                }
            }
        },
        mounted() {
            Echo.channel('newIncidentChannel')
                .listen('.newIncidentEvent', (e) => {
                    this.fillData()
                });
            this.fillData()
        },
        methods: {
            fillData() {
                Vue.axios.get('charts/incidents').then((response) => {
                    let labelsData = [],
                        datasetsData = [],
                        colors = [];
                    let data = response.data.data, start = response.data.start, end = response.data.end;
                    data.forEach(function(i,v){
                        i.data > 0 ? labelsData.push(i.label):'';
                        i.data > 0 ? datasetsData.push(i.data):'';
                        i.data > 0 ? colors.push(i.color):'';
                    });

                    this.chartData = {
                        labels: labelsData,
                        datasets: [
                            {
                                backgroundColor: 'rgb(0, 197, 220)',
                                data: datasetsData,
                                borderWidth: 1
                            }
                        ]
                    }
                    this.dataFilled = !!this.chartData.datasets[0].data.length;
                });
            },
            getRandomInt() {
                return Math.floor(Math.random() * (40 - 5 + 1)) + 5
            }
        }
    }
</script>

<style>
    .small {
        max-width: 600px;
        margin: 10px auto;
    }
</style>
