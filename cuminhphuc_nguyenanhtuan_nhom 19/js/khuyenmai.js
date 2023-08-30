let images = [];
let index = 0;
let sohinh = 20;

for (let i = 0; i < sohinh; i++) {
    images[i] = new Image();
    images[i].src = "anh/" + i + ".jpg";
}



function next() {
    index++;
    if (index >= images.length) index = 0;
    updateImage();
}

function prev() {
    index--;
    if (index < 0) index = images.length - 1;
    updateImage();
}

function updateImage() {
    let anh = document.getElementById("anh");
    anh.src = images[index].src;

    let counter = document.getElementById("image-counter");
    counter.textContent = (index + 1) + "/" + images.length;
}