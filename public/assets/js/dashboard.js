var optionsEurope = {
    series: [
        {
            name: "series1",
            data: [310, 800, 600, 430, 540, 340, 605, 805, 430, 540, 340, 605],
        },
    ],
    chart: {
        height: 80,
        type: "area",
        toolbar: {
            show: false,
        },
    },
    colors: ["#5350e9"],
    stroke: {
        width: 2,
    },
    grid: {
        show: false,
    },
    dataLabels: {
        enabled: false,
    },
    xaxis: {
        type: "datetime",
        categories: [
            "2018-09-19T00:00:00.000Z",
            "2018-09-19T01:30:00.000Z",
            "2018-09-19T02:30:00.000Z",
            "2018-09-19T03:30:00.000Z",
            "2018-09-19T04:30:00.000Z",
            "2018-09-19T05:30:00.000Z",
            "2018-09-19T06:30:00.000Z",
            "2018-09-19T07:30:00.000Z",
            "2018-09-19T08:30:00.000Z",
            "2018-09-19T09:30:00.000Z",
            "2018-09-19T10:30:00.000Z",
            "2018-09-19T11:30:00.000Z",
        ],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
        labels: {
            show: false,
        },
    },
    show: false,
    yaxis: {
        labels: {
            show: false,
        },
    },
    tooltip: {
        x: {
            format: "dd/MM/yy HH:mm",
        },
    },
};

let optionsAmerica = {
    ...optionsEurope,
    colors: ["#008b75"],
};
let optionsIndia = {
    ...optionsEurope,
    colors: ["#ffc434"],
};
let optionsIndonesia = {
    ...optionsEurope,
    colors: ["#dc3545"],
};

var chartProfileVisit = new ApexCharts(
    document.querySelector("#chart-insidentil"),
    optionYear
);
var chartVisitorsProfile = new ApexCharts(
    document.getElementById("chart-pengajuan"),
    optionsTinjau
);
var chartEurope = new ApexCharts(
    document.querySelector("#chart-europe"),
    optionsEurope
);
var chartAmerica = new ApexCharts(
    document.querySelector("#chart-america"),
    optionsAmerica
);
var chartIndia = new ApexCharts(
    document.querySelector("#chart-india"),
    optionsIndia
);
var chartIndonesia = new ApexCharts(
    document.querySelector("#chart-indonesia"),
    optionsIndonesia
);

chartIndonesia.render();
chartAmerica.render();
chartIndia.render();
chartEurope.render();
chartProfileVisit.render();
chartVisitorsProfile.render();
