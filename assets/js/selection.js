function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.toggle("collapsed");
}

function addRoom(room, url, imagePath, altText) {
    var container = document.getElementById("room-container");
    var newRoom = document.createElement("a");
    newRoom.className = "room";
    newRoom.href = url;
    newRoom.innerHTML = '<img src="' + imagePath + '" alt="' + altText + '"><button class="delete-button">Moins</button>';
    container.appendChild(newRoom);

    var deleteButton = newRoom.querySelector(".delete-button");
    deleteButton.addEventListener("click", function(event) {
        event.stopPropagation();
        removeRoom(newRoom);
    });
}


// Appel de la fonction addRoom avec les images pour chaque pièce
addRoom('Cuisine', 'vuepiece.php', 'chemin/vers/une/image-cuisine.png', 'Cuisine');
addRoom('Salon', 'vuepiece.php', 'chemin/vers/une/image-salon.png', 'Salon');




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
