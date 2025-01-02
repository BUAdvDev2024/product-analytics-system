import ApexCharts from "apexcharts";

// piChart.js
const pie = (data) => {
  console.log(data);
  const chartOptions = {
    series: data.data, // Use the dynamic data
    chart: {
      type: "donut",
      width: 380,
    },
    colors: data.colours || ["#3C50E0", "#6577F3", "#8FD0EF", "#0FADCF"],
    labels: data.labels || ["Desktop", "Tablet", "Mobile", "Unknown"],
    legend: {
      show: false,
      position: "bottom",
    },

    plotOptions: {
      pie: {
        donut: {
          size: "65%",
          background: "transparent",
        },
      },
    },

    dataLabels: {
      enabled: false,
    },
    responsive: [
      {
        breakpoint: 640,
        options: {
          chart: {
            width: 200,
          },
        },
      },
    ],
  };

  const chartSelector = document.querySelectorAll("#"+data.id);

  if (chartSelector.length) {
    const chart = new ApexCharts(
      document.querySelector("#"+data.id),
      chartOptions
    );
    chart.render();
  }
};

export default pie;
