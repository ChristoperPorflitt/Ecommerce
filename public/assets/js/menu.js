function openMenu() {
    let menu = document.getElementById("menu");

    if(menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
    } else {
        menu.classList.add('hidden');
    }
}

function toggleDropdown() {
    const dropdown = document.getElementById("dropdown-session");
    dropdown.classList.toggle("hidden");
    dropdown.classList.toggle("block");
}

// Opcional: Cierra el dropdown si haces clic fuera
window.addEventListener('click', function(e) {
    const dropdown = document.getElementById("dropdown-session");
    const button = e.target.closest('button');
    const isDropdownButton = button && button.onclick === toggleDropdown;
    
    if (!e.target.closest('#dropdown-session') && !isDropdownButton) {
        dropdown.classList.add('hidden');
        dropdown.classList.remove('block');
    }
});