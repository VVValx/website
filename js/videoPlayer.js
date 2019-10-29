const video = document.querySelector("#homeVideo");
const playPauseIcon = document.querySelector(".fas.fa-pause");
const undo = document.querySelector(".fas.fa-undo");
const redo = document.querySelector(".fas.fa-redo");
const innerBar = document.querySelector(".inner-bar");
const bar = document.querySelector(".bar");
const fullScreen = document.querySelector(".fa-compress");
const videoContainer = document.querySelector(".banner-player");

bar.addEventListener("click", barPosition);
videoContainer.addEventListener("timeupdate", updateBar);
playPauseIcon.addEventListener("click", playPause);
undo.addEventListener("click", ()=>{video.currentTime -= 5});
redo.addEventListener("click", ()=>{video.currentTime += 5});
fullScreen.addEventListener("click", setFullScreen);

function playPause(){
  if(!video.paused){
    video.pause();
    playPauseIcon.className = "fas fa-play";
  }else{
    video.play();
    playPauseIcon.className = "fas fa-pause";
  }
}


function updateBar(){
  pos = (video.currentTime/video.duration)*100;
  innerBar.style.width = pos+'%';
}

function barPosition(e){
  posX = e.clientX - bar.offsetLeft;
  posPercent = (posX/bar.clientWidth) * 100;
  innerBar.style.width = posPercent+'%';
  video.currentTime =  (posX * video.duration)/bar.clientWidth;
}

function setFullScreen(){
  if(videoContainer.fullscreenElement){
    videoContainer.exitFullscreen();
  }else{
    videoContainer.requestFullscreen();
  }
}