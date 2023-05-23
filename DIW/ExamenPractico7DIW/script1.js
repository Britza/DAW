const audio = document.getElementById("audio");
const video = document.getElementById("video");
const playAudioButton = document.getElementById("play-audio");
const pauseAudioButton = document.getElementById("pause-audio");
const playVideoButton = document.getElementById("play-video");
const pauseVideoButton = document.getElementById("pause-video");

playAudioButton.addEventListener("click", () => {
  audio.play();
});

pauseAudioButton.addEventListener("click", () => {
  audio.pause();
});

playVideoButton.addEventListener("click", () => {
  video.play();
});

pauseVideoButton.addEventListener("click", () => {
  video.pause();
});