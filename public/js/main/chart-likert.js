function chartLikert (elementId, yValue) {
    const chartOptions = {
        series: [
            {
                name: "Total",
                data: yValue,
            },
        ],
        colors: ["#3056D3"],
        chart: {
            type: "bar",
            height: 335,
            stacked: true,
            toolbar: {
                show: false,
            },
            zoom: {
                enabled: false,
            },
        },

        responsive: [
            {
                breakpoint: 1536,
                options: {
                    plotOptions: {
                        bar: {
                            borderRadius: 0,
                            columnWidth: "25%",
                        },
                    },
                },
            },
        ],
        plotOptions: {
            bar: {
                horizontal: false,
                borderRadius: 0,
                columnWidth: "25%",
                borderRadiusApplication: "end",
                borderRadiusWhenStacked: "last",
            },
        },
        dataLabels: {
            enabled: false,
        },

        xaxis: {
            categories: ["1", "2", "3", "4", "5"],
        },
        legend: {
            position: "top",
            horizontalAlign: "left",
            fontFamily: "Satoshi",
            fontWeight: 500,
            fontSize: "14px",

            markers: {
                radius: 99,
            },
        },
        fill: {
            opacity: 1,
        },
    };

    const chartSelector = document.querySelectorAll(elementId);

    if (chartSelector.length) {
        const chart = new ApexCharts(
            document.querySelector(elementId),
            chartOptions
        );
        chart.render();
    }
};
