@include('modals.index')
<script src="../../assets/js/vendor-all.min.js"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/pcoded.min.js"></script>
    <script src="../../assets/js/main.js"></script>
    @if(request()->url=="dashboard")
    <script src="../../assets/js/highchart.js"></script>
    <!-- <script src="https://code.highcharts.com/highcharts.js"></script> -->
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
   
    <script>
        alert(1)
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            exporting: {
                enabled: false
            },
            credits: {
                enabled: false
            },

            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Mar 21',
                    'Apr 21',
                    'May 21',
                    'Jun 21',
                    'Jul 21',
                    'Aug 21',
                ],
                title: {
                    text: "Period",
                    color: "black",
                },
                crosshair: true
            },
            yAxis: {
                gridLineDashStyle: 'longdash',
                // min: 0,
                // title: {
                //     align: 'high',
                //     offset: 1,
                //     text: 'Value',
                //     rotation: 0,
                //     y: -5,
                // }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Registered Users',
                color: "#4472C4",
                data: [40, 37, 42, 20, 45, 28]

            }, {
                name: 'Unique Visitors',
                color: "#ED7D31",
                data: [18, 12, 38, 28, 5, 12]

            }]
        });
    </script>
    <script>
        Highcharts.chart('second_coloumn_chart', {
            chart: {
                type: 'column'
            },
            exporting: {
                enabled: false
            },
            credits: {
                enabled: false
            },

            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: [
                    'Mar 21',
                    'Apr 21',
                    'May 21',
                    'Jun 21',
                    'Jul 21',
                    'Aug 21',
                ],
                title: {
                    text: "Period",
                    color: "black",
                },
                crosshair: true
            },
            yAxis: {
                gridLineDashStyle: 'longdash',
                // min: 0,
                // title: {
                //     align: 'high',
                //     offset: 1,
                //     text: 'Value',
                //     rotation: 0,
                //     y: -5,
                // }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Mobile',
                color: "#44C477",
                data: [40, 37, 42, 20, 45, 28]

            }, {
                name: 'Computer',
                color: "#4A90CB",
                data: [18, 12, 38, 28, 5, 12]

            }]
        });
    </script>
    <script>
        Highcharts.chart('area_container', {
            chart: {
                type: 'area'
            },
            accessibility: {

            },
            credits: {
                enabled: false,
            },
            exporting: {
                enabled: false,
            },
            title: {
                // text: 'US and USSR nuclear stockpiles'
            },
            subtitle: {
                // text: 'Sources: <a href="https://thebulletin.org/2006/july/global-nuclear-stockpiles-1945-2006">' +
                //     'thebulletin.org</a> &amp; <a href="https://www.armscontrol.org/factsheets/Nuclearweaponswhohaswhat">' +
                //     'armscontrol.org</a>'
            },
            xAxis: {
                title: {
                    text: "Period",
                    color: "black",
                },
                categories: [
                    'Mar 21',
                    'Apr 21',
                    'May 21',
                    'Jun 21',
                    'Jul 21',
                    'Aug 21',
                ],
                allowDecimals: false,
                // labels: {
                // formatter: function() {
                //     return this.value; // clean, unformatted number for year
                // }
                // },
                accessibility: {
                    // rangeDescription: 'Range: 1940 to 2017.'
                }
            },
            yAxis: {
                gridLineDashStyle: 'longdash',
                // title: {
                // text: 'Nuclear weapon states'
                // },
                // labels: {
                //     formatter: function() {
                //         return this.value / 1000 + 'k';
                //     }
                // }
            },
            tooltip: {
                // pointFormat: '{series.name} had stockpiled <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
            },
            plotOptions: {
                area: {
                    marker: {
                        enabled: true,
                        symbol: 'circle',
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Registered Users',
                color: "#BF1F2B",
                data: [2.1, 1, 2, 3, 3.4, 4.6],
            }, {
                name: 'Unique Visitors',
                color: "#4A90CB",
                data: [1.6, 0.2, 1, 2.2, 2.8, 4],
            }]
        });
    </script>
    @else
    @endif