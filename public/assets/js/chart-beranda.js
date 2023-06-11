const ctx = document.getElementById("myChart");
const label_text = [
  "B. Pertambangan dan Penggalian",
  "C. Industri Pengolahan",
  "D. Pengadaan Listrik Gas/Uap Air Panas dan Udara Dingin",
];
new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
      "B",
      "C",
      "D",
      "E",
      "F",
      "G",
      "H",
      "I",
      "J",
      "K",
      "L",
      "M, N",
      "P",
      "Q",
      "R, S"
    ],
    label_text: [
      "B. Pertambangan dan Penggalian",
      "C. Industri Pengolahan",
      "D. Pengadaan Listrik Gas/Uap Air Panas dan Udara Dingin",
      "E. Pengelolaan Air, Pengelolaan Air Limbah, Pengelolaan dan Daur Ulang Sampah, dan Aktivitas Remediasi",
      "F. Konstruksi",
      "G. Perdagangan Besar dan Eceran, Reparasi dan Perawatan Mobil dan Sepeda Motor",
      "H. Pengangkutan dan Pergudangan",
      "I. Penyediaan Akomodasi dan Penyediaan Makan Minum",
      "J. Informasi dan Komunikasi",
      "K. Aktivitas Keuangan dan Asuransi",
      "L. Real Estat",
      "M, N. Jasa Perusahaan",
      "P. Pendidikan",
      "Q. Aktivitas Kesehatan Manusia dan Aktivitas Sosial",
      "R, S. Jasa Lainnya"
    ],
    datasets: [
      {
        label: ["Persentase Jumlah Usaha"],
        // Jumlah
        // data: [
        //   171782, 4383622, 31220, 92858, 253663, 12255194, 1302455, 4447247,
        //   633905, 114645, 392000, 376940, 598785, 212829, 1155111,
        // ],
        
        // persentase jumlah
        data: [
          0.65, 16.59, 0.12, 0.35, 0.96, 46.38, 4.93, 16.83, 2.4, 0.43, 1.48,
          1.43, 2.27, 0.81, 4.37,
        ],
        backgroundColor: [
          "#ff9e3c", "#f09539", "#e18c37", "#d28334", "#c27a32", "#b3712f", "#a4682d", "#95602a", "#865727", "#774e25", "#684522", "#583c20", "#49331d", "#3a2a1b", "#2b2118"
        ],
        borderColor: [
          "#ff9e3c", "#f09539", "#e18c37", "#d28334", "#c27a32", "#b3712f", "#a4682d", "#95602a", "#865727", "#774e25", "#684522", "#583c20", "#49331d", "#3a2a1b", "#2b2118"
        ],
        borderWidth: 1,
      },
    ],
  },
  options: {
    // indexAxis: "y",
    scales: {
      y: {
        beginAtZero: true,
        ticks:{
            font: {
                size: 14,
                family: "'Nunito', sans-serif"
              },
        }
      },
      x: {
        ticks:{
            font: {
                size: 14,
                family: "'Nunito', sans-serif"
              },
        }
      },
    },
    plugins: {
      legend: {
        position: "right",
        onClick: (evt, legendItem, legend) => {
          // console.log(legendItem.text)
          // console.log(legend.chart.data.label_text)
          const index = legend.chart.data.label_text.indexOf(legendItem.text);
          // console.log(index)
          legend.chart.toggleDataVisibility(index);
          legend.chart.update();
        },
        labels: {
          generateLabels: (chart) => {
            // console.log(chart)
            let visibility = [];
            for (let i = 0; i < chart.data.label_text.length; i++) {
              if (chart.getDataVisibility(i) === true) {
                visibility.push(false);
              } else {
                visibility.push(true);
              }
            }
            return chart.data.label_text.map((label_text, index) => ({
              text: label_text,
              strokeStyle: chart.data.datasets[0].borderColor[index],
              fillStyle: chart.data.datasets[0].backgroundColor[index],
              hidden: visibility[index],
            }));
          },
          font: {
            size: 16,
            family: "'Nunito', sans-serif"
          },
        },
    },
    tooltip: {
        titleFont: {
            size: 16,
            family: "'Nunito', sans-serif",
            weight: 800
          },
        bodyFont: {
            size: 14,
            family: "'Nunito', sans-serif",
            weight: 600
          },
    }
    },
  },
});
