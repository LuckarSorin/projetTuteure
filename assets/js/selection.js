function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("collapsed");
        }

        function addRoom(room, url) {
            var container = document.getElementById("room-container");
            var newRoom = document.createElement("a");
            newRoom.className = "room";
            newRoom.href = url;
            newRoom.innerHTML = room + '<button class="delete-button" onclick="removeRoom(this.parentNode)">Moins</button>';
            container.appendChild(newRoom);
        }

        function removeRoom(room) {
            var container = document.getElementById("room-container");
            container.removeChild(room);
        }
