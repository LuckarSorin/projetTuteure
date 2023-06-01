<!DOCTYPE html>
<html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <body>

        <canvas id="myChartpiece" style="width:50%;max-width:600px"></canvas>

        <script>
            var xValues = ["Cuisine", "Salon", "Salle de bain", "buandrie", "chambres", ""];
            var yValues = [55, 49, 44, 24, 20, 0];
            var barColors = ["red", "green","blue","orange","brown", "white"];

            new Chart("myChartpiece", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                legend: {display: false},
                title: {
                display: true,
                text: "Consommation par pièces"
                }
            }
            });
        </script>

        <canvas id="myChartsource" style="width:50%;max-width:600px"></canvas>

        <script>
            var xValues = ["chauffage", "éléctroménagers", "Chauffe-eau", "appareils éléctronique", "prises éléctriques"];
            var yValues = [55, 49, 44, 24, 15];
            var barColors = [
            "#b91d47",
            "#00aba9",
            "#2b5797",
            "#e8c3b9",
            "#1e7145"
            ];

            new Chart("myChartsource", {
            type: "pie",
            data: {
                labels: xValues,
                datasets: [{
                backgroundColor: barColors,
                data: yValues
                }]
            },
            options: {
                title: {
                display: true,
                text: "Part de consommation par type de source"
                }
            }
            });
        </script>

    </body>
</html>
