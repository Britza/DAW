const canvas = document.getElementById("canvas");
const context = canvas.getContext("2d");
let isDrawing = false;
let lastX = 0;
let lastY = 0;
let hue = "#000000";

canvas.addEventListener("mousedown", (e) => {
  isDrawing = true;
  lastX = e.offsetX;
  lastY = e.offsetY;
});

canvas.addEventListener("mousemove", (e) => {
  if (isDrawing) {
    context.beginPath();
    context.moveTo(lastX, lastY);
    context.lineTo(e.offsetX, e.offsetY);
    context.strokeStyle = hue;
    context.stroke();
    lastX = e.offsetX;
    lastY = e.offsetY;
  }
});

canvas.addEventListener("mouseup", () => {
  isDrawing = false;
});

canvas.addEventListener("mouseout", () => {
  isDrawing = false;
});

const colorPicker = document.getElementById("color");
colorPicker.addEventListener("input", () => {
  hue = colorPicker.value;
});