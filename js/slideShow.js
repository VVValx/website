const banner = document.querySelectorAll(".banner-slide");
const time = 3000;
let index = 0;

function hideImgs(){
  banner.forEach(b=>{
    b.style.display = "none";
  })
}

export function slider(){
  hideImgs();

  banner[index].style.display = "block";
  index == banner.length - 1 ? index = 0 : index++;
  setTimeout(slider, time);
}
