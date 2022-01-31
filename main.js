function load() {
    const box = document.getElementById('box')
    const final = box.childElementCount
    box.style.gridTemplateColumns = 'repeat('+final+', 200px)';
}