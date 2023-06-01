/** _____ par source _____ **/

var xValuesSource = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValuesSource = [55, 49, 44, 24, 15];
var barColorsSource = ["red", "green","blue","orange","brown"];

/* --- values --- */

new Chart("SourceValuesChart", {
  type: "bar",
  data: {
    labels: xValuesSource,
    datasets: [{
      backgroundColor: barColorsSource,
      data: yValuesSource
    }]
  },
  options: {}
});

/* --- percent --- */

new Chart("SourcePercentChart", {
    type: "pie",
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
        text: "World Wide Wine Production"
      }
    }
  });


/** _____ par pièces _____ */

var xValuesRoom = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValuesRoom = [55, 49, 44, 24, 15];
var barColorsRoom = ["red", "green","blue","orange","brown"];

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
  options: {}
});

/* --- percent --- */

new Chart("RoomPercentChart", {
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
  });