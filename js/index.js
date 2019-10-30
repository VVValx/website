import { ajaxCall } from "./ajax.js";
import { slider } from "./slideshow.js";
$(document).ready(function(){
  //toggles home on small screens
  $(".topMenu-list.bars").click(function(){
    $(".menu-s-body").animate({width: 'toggle'}, "slow");
  });

  //close mobile list
  $(".fa.fa-times").click(function(){
    $(".menu-s-body").animate({width: 'toggle'});
  })

  //show Search
  $(".search-icon").click(function(){
    $(".topMenu-search").slideToggle();
  })

  //search
  $(".menu-search input").keyup(function(){
    const search = $(this).val();
    ajaxCall({search: search}, "inc/ImageSearch.inc.php", ".search-content");
  });

  //loads images according to category selected
  $(".cat-list").click(function(){
    const cat = $(this).html();
    ajaxCall({cat: cat}, "inc/DisplayImages.inc.php", ".grid-container");
  });


  //Creating Account
  $("#register").click(function(e){
    e.preventDefault();
    const username = $("#username").val();
    const password = $("#password").val();
    const repassword = $("#repassword").val();
    const email = $("#email").val();
    ajaxCall(
      {
        username: username,
        password: password,
        repassword: repassword,
        email:email
      },
      "inc/ValidateForm.inc.php",
      ".form-error"
    );
  });

  //validate input while typing
  $("input").keyup(function(e){
    const {value, name} = e.target;
    let ele;
    switch(name){
      case "username":
        ele = ".username";
      break;

      case "password":
        ele = ".password";
      break;

      case "repassword":
        ele = ".repassword";
      break;

      case "email":
        ele = ".email";
      break;
      default:
        ele = ".submit-error";
    }
    ajaxCall({value: value, name: name}, "inc/ValidateInput.inc.php", ele);
  });

  const goTop = document.querySelector(".goTop");
  const topMenu = document.querySelector(".topMenu");
  const topMenuS = document.querySelector(".topMenu.menu-small");
  window.addEventListener("scroll", ()=>{
    const el = document.documentElement;
    console.log(el.scrollTop);
    if(el.scrollTop > 650){
      goTop.style.display = " block";

      topMenu.style.position = "fixed";
      topMenu.style.width = "100%";
      topMenu.style.background = "0 0 4px 4px rgba(0, 0, 0, 0.3)";

      topMenuS.style.position = "fixed";
      topMenuS.style.width = "100%";
      
    }else{
      goTop.style.display = "none";
      topMenu.style.position = "static";
    }
  });

  goTop.addEventListener("click", ()=>{
    document.documentElement.scrollTop = 0;
  });



});
