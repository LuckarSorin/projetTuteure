function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("collapsed");
}

function addRoom(room, imagePath, altText, href) {
    var container = document.getElementById("room-container");
    var newRoom = document.createElement("div");
    newRoom.className = "room";
    newRoom.innerHTML = '<a class="imagepiece" href="'+ href +'"><img class="imagepiece" src="' + imagePath + '" alt="' + altText + '"></a><button class="delete-button">Moins</button>';
    container.appendChild(newRoom);

    var deleteButton = newRoom.querySelector(".delete-button");
    deleteButton.addEventListener("click", function(event) {
        event.stopPropagation();
        removeRoom(newRoom);
    });
}

function removeRoom(room) {
    var container = document.getElementById("room-container");
    container.removeChild(room);
}

function addEquipment(equipment) {
    var container = document.getElementById("room-container");
    var room = document.createElement("div");
    room.className = "room";
    room.innerHTML = equipment + '<button class="delete-button">Moins</button>';
    container.appendChild(room);

    var deleteButton = room.querySelector(".delete-button");
    deleteButton.addEventListener("click", function(event) {
        event.stopPropagation();
        removeEquipment(room);
    });
}

function removeEquipment(room) {
    var container = document.getElementById("room-container");
    container.removeChild(room);
}
