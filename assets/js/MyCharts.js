/** _____ par source _____ **/

var xValuesSource = ["Chauffage", "Éléctroménagers", "Chauffe-eau", "Appareils éléctronique", "Prises éléctriques"];
var yValuesSource = [55, 49, 44, 24, 15];
var barColorsSource = ["#b91d47","#00aba9","#2b5797","#e8c3b9","#1e7145"];

/* --- values --- */

/*new Chart("SourceValuesChart", {
  type: "bar",
  data: {
    labels: xValuesSource,
    datasets: [{
      backgroundColor: barColorsSource,
      data: yValuesSource
    }]
  },
  options: {}
});*/


/* --- percent --- */

new Chart("SourcePercentChart", {
  type: "doughnut",
  data: {
    labels: xValuesSource,
    datasets: [{
    backgroundColor: barColorsSource,
    data: yValuesSource
    }]
  },
  options: {
    title: {
    display: true,
    text: "Part de consommation par type de source"
    }
  }
});



/** _____ par pièces _____ */

var xValuesRoom = ["Cuisine", "Salon", "Salle de bain", "Buandrie", "Chambres", ""];
var yValuesRoom = [55, 49, 44, 24, 20, 0];
var barColorsRoom = ["red", "green","blue","orange","brown", "white"];

/* --- values --- */

new Chart("RoomValuesChart", {
  type: "horizontalBar",
  data: {
    labels: xValuesRoom,
    datasets: [{
    backgroundColor: barColorsRoom,
    data: yValuesRoom
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


/* --- percent --- */

/*new Chart("RoomPercentChart", {
  type: "doughnut",
  data: {
    labels: xValuesRoom,
    datasets: [{
      backgroundColor: barColorsRoom,
      data: yValuesRoom
    }]
  },
  options: {
    title: {
      display: true,
      text: "World Wide Wine Production"
    }
  }
});*/
