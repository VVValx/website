const goTop = document.querySelector(".goTop");
window.addEventListener("scroll", showGoTop());
function showGoTop(){
  console.log(document.documentElement.scrollTop);
}
