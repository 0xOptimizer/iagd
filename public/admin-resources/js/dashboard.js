$(function () {
    const pieChart = () => {
        let ctx = $("#pieChart");

        const data = {
            labels: ["Red", "Blue", "Yellow"],
            datasets: [
                {
                    label: "My First Dataset",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(255, 99, 132)",
                        "rgb(54, 162, 235)",
                        "rgb(255, 205, 86)",
                    ],
                    hoverOffset: 4,
                },
            ],
        };

        const config = {
            type: "doughnut",
            data: data,
            options : {
                responsive : true,
                maintainAspectRatio : false
            }
        };

        const myChart = new Chart(ctx, config);
    };

    pieChart();

    const barChart = () => {
        const ctx = $("#barChart");

        const labels = ['JAN','JAN','JAN','JAN','JAN','JAN','JAN'];
        const data = {
            labels: labels,
            datasets: [
                {
                    label: "My First Dataset",
                    data: [65, 59, 80, 81, 56, 55, 40],
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.2)",
                        "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)",
                        "rgba(75, 192, 192, 0.2)",
                        "rgba(54, 162, 235, 0.2)",
                        "rgba(153, 102, 255, 0.2)",
                        "rgba(201, 203, 207, 0.2)",
                    ],
                    borderColor: [
                        "rgb(255, 99, 132)",
                        "rgb(255, 159, 64)",
                        "rgb(255, 205, 86)",
                        "rgb(75, 192, 192)",
                        "rgb(54, 162, 235)",
                        "rgb(153, 102, 255)",
                        "rgb(201, 203, 207)",
                    ],
                    borderWidth: 1,
                },
            ],
        };

        const config = {
            type: "bar",
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                responsive : true,
                maintainAspectRatio : false
            },
        };

        const barChart = new Chart(ctx, config);
    };

    barChart();
});
