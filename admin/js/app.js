function openMenu() {
    document.getElementById("blok_r").classList.toggle('blok_r');
    document.getElementById("m_icon").classList.toggle('m_icon');
}

function closeMenu() {
    document.getElementById("blok_r").classList.remove('blok_r');
    document.getElementById("m_icon").classList.remove('m_icon');
}

function edit() {
    document.getElementById("tab").classList.toggle('tab_active');
    document.getElementById("menu").classList.toggle('tab_active');
}

function editt() {
    document.getElementById("tabb").classList.toggle('tab_active2');
    document.getElementById("menu").classList.toggle('tab_active');
}
