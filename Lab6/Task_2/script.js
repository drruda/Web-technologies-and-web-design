document.write('<div class="container">');
for (i = 0; i < 6; i++){
    let r = Math.floor(Math.random() * 256);
    let g = Math.floor(Math.random() * 256);
    let b = Math.floor(Math.random() * 256);

    let color = "rgb(" + r + "," + g + "," + b + ")";
    document.write('<div class="block" style="background-color: ' + color + ';">');
    document.write('</div>');
}
document.write('</div>');