$(document).ready(function () {
    $("[name='view_style']").change(function () {
        var view = $(this).attr('target_class');
        console.log(view)
        $('.' + view).toggle();
    })

    // BEGIN General Tab -------------------------------------------------------
    //  Weekly chart
    $('#showGeneral_week_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/general/weekly-check",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                    createWeeklyChart(res.labels, [res.stress, res.workload, res.energy], res.overall_average, 'Overall', 'overall_chart', 'general_tab_view_chart', true);
                    createWeeklyChart(res.labels, res.stress, res.stress_average, 'Stress', 'stress_chart', 'general_tab_view_chart');
                    createWeeklyChart(res.labels, res.workload, res.workload_average, 'Workload', 'workload_chart', 'general_tab_view_chart');
                    createWeeklyChart(res.labels, res.energy, res.energy_average, 'Energy', 'energy_chart', 'general_tab_view_chart');
                }
            });
        }
    });
    // $("#showGeneral_week_chart").val("07/01/2020 - 09/31/2020");
    // $('#showGeneral_week_chart').change();

    //  Monthly Chart
    $('#showGeneral_month_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/general/monthly-check",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                    createDoughnutChart(res.wellbeing, 'month_overall_chart', 'general_tab_view_chart');
                    createDoughnutChart(res.mood, 'month_mood_chart', 'general_tab_view_chart');
                    createDoughnutChart(res.energy, 'month_energy_chart', 'general_tab_view_chart');
                    createDoughnutChart(res.engagement, 'month_engagement_chart', 'general_tab_view_chart');

                    // Main causes of stress
                    $("#general_tab_view_chart #main_causes_table").html(res.main_causes_table);
                }
            });
        }
    });

    //  Population Risk Distribution
    $('#showGeneral_population_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/general/population-risk-distribution",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                    createDoughnutChart(res.chart, 'population_risk', 'general_tab_view_chart');
                }
            });
        }
    });
    // $('#showGeneral_week_chart').change();

    //  Coaching Report
    $('#showGeneral_coaching_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/general/coaching-report",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                }
            });
        }
    });

    // END General Tab


    //  BEGIN Client Tab -------------------------------------------------------
    //  Weekly chart
    $('#showClient_week_chart').change(function () {
        var date = $(this).val();
        var client_id = $("#corporate_sel").val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/client/weekly-check",
                data: { date: date, client_id: client_id, _token: _token },
                success: function (res) {
                    console.log(res)
                    createWeeklyChart(res.labels, [res.stress, res.workload, res.energy], res.overall_average, 'Overall', 'overall_chart', 'perclient_tab_view_chart', true);
                    createWeeklyChart(res.labels, res.stress, res.stress_average, 'Stress', 'stress_chart', 'perclient_tab_view_chart');
                    createWeeklyChart(res.labels, res.workload, res.workload_average, 'Workload', 'workload_chart', 'perclient_tab_view_chart');
                    createWeeklyChart(res.labels, res.energy, res.energy_average, 'Energy', 'energy_chart', 'perclient_tab_view_chart');
                }
            });
        }
    });

    //  Monthly Chart
    $('#showClient_month_chart').change(function () {
        var date = $(this).val();
        var client_id = $("#corporate_sel").val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/client/monthly-check",
                data: { date: date, client_id: client_id, _token: _token },
                success: function (res) {
                    console.log(res)
                    createDoughnutChart(res.wellbeing, 'month_overall_chart', 'perclient_tab_view_chart');
                    createDoughnutChart(res.mood, 'month_mood_chart', 'perclient_tab_view_chart');
                    createDoughnutChart(res.energy, 'month_energy_chart', 'perclient_tab_view_chart');
                    createDoughnutChart(res.engagement, 'month_engagement_chart', 'perclient_tab_view_chart');

                    // Main causes of stress
                    $("#perclient_tab_view_chart #main_causes_table").html(res.main_causes_table);
                }
            });
        }
    });

    //  Population Risk Distribution
    $('#showClient_population_chart').change(function () {
        var date = $(this).val();
        var client_id = $("#corporate_sel").val();

        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/client/population-risk-distribution",
                data: { date: date, client_id: client_id, _token: _token },
                success: function (res) {
                    console.log(res)
                    createDoughnutChart(res.chart, 'population_risk', 'perclient_tab_view_chart');
                }
            });
        }
    });

    //  Coaching Report
    $('#showClient_coaching_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/client/coaching-report",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                }
            });
        }
    });

    //  END Client Tab


    //  BEGIN USER Tab -------------------------------------------------------
    //  Weekly chart
    $('#showUser_week_chart').change(function () {
        var date = $(this).val();
        var user_id = $("#showPeruser").val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/user/weekly-check",
                data: { date: date, user_id: user_id, _token: _token },
                success: function (res) {
                    console.log(res)
                    createWeeklyChart(res.labels, [res.stress, res.workload, res.energy], res.overall_average, 'Overall', 'overall_chart', 'peruser_tab_view_chart', true);
                    createWeeklyChart(res.labels, res.stress, res.stress_average, 'Stress', 'stress_chart', 'peruser_tab_view_chart');
                    createWeeklyChart(res.labels, res.workload, res.workload_average, 'Workload', 'workload_chart', 'peruser_tab_view_chart');
                    createWeeklyChart(res.labels, res.energy, res.energy_average, 'Energy', 'energy_chart', 'peruser_tab_view_chart');
                }
            });
        }
    });

    //  Monthly Chart
    $('#showUser_month_chart').change(function () {
        var date = $(this).val();
        var user_id = $("#showPeruser").val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/user/monthly-check",
                data: { date: date, user_id: user_id, _token: _token },
                success: function (res) {
                    console.log(res)
                    createDoughnutChart(res.wellbeing, 'month_overall_chart', 'peruser_tab_view_chart');
                    createDoughnutChart(res.mood, 'month_mood_chart', 'peruser_tab_view_chart');
                    createDoughnutChart(res.energy, 'month_energy_chart', 'peruser_tab_view_chart');
                    createDoughnutChart(res.engagement, 'month_engagement_chart', 'peruser_tab_view_chart');

                    // Main causes of stress
                    $("#peruser_tab_view_chart #main_causes_table").html(res.main_causes_table);
                }
            });
        }
    });

    //  Coaching Report
    $('#showUser_coaching_chart').change(function () {
        var date = $(this).val();
        console.log(date);
        if (date != '') {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "/analytics-chart/user/coaching-report",
                data: { date: date, _token: _token },
                success: function (res) {
                    console.log(res)
                }
            });
        }
    });

    //  END USER Tab
})

function createWeeklyChart(labels, data, average, label, ele_id, wrapper_id, isAll) {
    var datasets = [{
        label: label,
        data: data,
        backgroundColor: 'coral',
        borderColor: 'coral',
        fill: false,
    }];
    if (isAll) {
        let colors = ['coral', 'blue', 'green'];
        let labels = ['Stress', 'Workload', 'Energy'];
        for (let i = 0; i < data.length; i++) {
            const one = data[i];
            datasets[i] = {
                label: labels[i],
                data: one,
                backgroundColor: colors[i],
                borderColor: colors[i],
                fill: false,
            }
        }
    }
    var config = {
        type: 'line',
        data: {
            labels: labels,
            datasets: datasets
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: label
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            scales: {
                xAxes: [{
                    display: true,
                }],
                yAxes: [{
                    display: true,
                }]
            }
        }
    };
    var ele = $("#" + wrapper_id + " #" + ele_id).get(0).getContext('2d');
    // var ele = document.getElementById(ele_id).getContext('2d');
    var ch = new Chart(ele, config);

    $("#" + wrapper_id + " #" + ele_id).next().find('span').html(average);
}

function createDoughnutChart(chart, ele_id, wrapper_id) {
    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: chart.data,
                backgroundColor: chart.backgroundColor,
                label: 'Dataset 1'
            }],
            labels: chart.labels
        },
        options: {
            responsive: true,
            legend: {
                position: 'bottom',
            },
            title: {
                display: false,
                text: chart.title
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };
    var ele = $("#" + wrapper_id + " #" + ele_id).get(0).getContext('2d');
    var ch = new Chart(ele, config);
}


var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
var color = Chart.helpers.color;
var barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }, {
        label: 'Dataset 2',
        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }]

};

window.onload = function () {
    var ctx = document.getElementById('coaching_report_chart').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: 'Chart.js Bar Chart'
            }
        }
    });

};

function generatePDF_1(id) {
    console.log(id)
    var doc = new jsPDF();
    var elementHTML = $('#' + id).html();
    var specialElementHandlers = {
        '#elementH': function (element, renderer) {
            return true;
        }
    };
    doc.fromHTML(elementHTML, 15, 15, {
        'width': 170,
        'elementHandlers': specialElementHandlers
    });

    // Save the PDF
    doc.save('sample-document.pdf');
}

// function generatePDF(id) {
//     id = "general_tab_view_table"
//     $('body').scrollTop(0);
//     var filename = 'ThisIsYourPDFFilename.pdf';
//     var cache_width = $('#' + id).width();
//     var a0 = [2383.94, 3370.39];
//     var a4 = [595.28, 841.89];

//     // $('#' + id).width((a4[0] * 1.33333) - 80).css('max-width', 'none');
//     html2canvas($('#' + id).get(0), { allowTaint: true, imageTimeout: 2000, }).then(function (canvas) {
//     // html2canvas(document.querySelector('#' + id), {
//     //     imageTimeout: 2000,
//     // }).then(canvas => {
//         console.log(id, canvas)
//         let pdf = new jsPDF(
//             {
//                 unit: 'px',
//                 format: 'a4'
//             }
//         );
//         pdf.addImage(canvas.toDataURL('image/png'), 'JPEG', 20, 20);
//         pdf.save(filename);
//         // $('#' + id).width(cache_width);
//     });
// }
function generatePDF(selfbtn, id) {
    // id = "general_tab_view_table"
    var element = $('#' + id)
    $('.pdf-generating').show()
    $(selfbtn).hide();
    element.css({ 'position': 'absolute', 'left': '0px', 'top': '0px' });
    $('#' + id + " .card").css('width', '99%');

    $('body').scrollTop(0);
    var HTML_Width = element.width();
    var HTML_Height = element.height();
    var top_left_margin = 15;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

    console.log('HTML_Width, HTML_Height, top_left_margin, PDF_Width, PDF_Height, canvas_image_width, canvas_image_height', HTML_Width, HTML_Height, top_left_margin, PDF_Width, PDF_Height, canvas_image_width, canvas_image_height)

    html2canvas(element.get(0), { allowTaint: true }).then(function (canvas) {
        console.log(canvas.height + "  " + canvas.width);
        var imgData = canvas.toDataURL("image/png");

        var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
        // pdf.setFillColor(245);
        // pdf.rect(0, 0, 210, 700, "F");

        pdf.addImage(imgData, 'JPEG', top_left_margin, top_left_margin, canvas_image_width, canvas_image_height);

        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(PDF_Width, PDF_Height);
            pdf.addImage(imgData, 'JPEG', top_left_margin, -(PDF_Height * i), canvas_image_width, canvas_image_height);
            // pdf.addImage(imgData, 'JPEG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4), canvas_image_width, canvas_image_height);
        }

        pdf.save("HTML-Document.pdf");

        element.css({ 'position': 'unset', 'left': 'unset', 'top': 'unset' });
        $('#' + id + " .card").css('width', '100%');
        $('.pdf-generating').hide()
        $(selfbtn).show();
    });
};
