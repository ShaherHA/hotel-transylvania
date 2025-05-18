import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const newRoomBtn = document.getElementById("new-room-btn")
const roomDialog = document.getElementById("room-dialog")
let dialogOpen = false
newRoomBtn.addEventListener("click", () => {
    if (dialogOpen) {
        roomDialog.close()
        dialogOpen = false
    } else {
        roomDialog.showModal()
        dialogOpen = true
    }
})
