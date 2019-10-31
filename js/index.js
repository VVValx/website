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
    ajaxCall({search: search}, "inc/callImageSearch.inc.php", ".search-content");
  });

  //loads images according to category selected
  $(".cat-list").click(function(){
    const cat = $(this).html();
    ajaxCall({cat: cat}, "inc/callDisplayImages.inc.php", ".grid-container");
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
      "inc/callValidateForm.inc.php",
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
    ajaxCall({value: value, name: name}, "inc/callValidateInput.inc.php", ele);
  });

  const goTop = document.querySelector(".goTop");
  const topMenu = document.querySelector(".topMenu");
  const topMenuS = document.querySelector(".topMenu.menu-small");
  const search = document.querySelector(".topMenu-search");
  window.addEventListener("scroll", ()=>{
    const el = document.documentElement;
    if(el.scrollTop > 100){
      topMenu.style.position = "fixed";
      topMenu.style.width = "100%";
      topMenu.style.background = "rgba(0, 0, 0, 0.3)";

      topMenuS.style.position = "fixed";
      topMenuS.style.width = "100%";
      topMenuS.style.top = "0";
      topMenuS.style.background = "rgba(0, 0, 0, 0.3)";

      search.style.position = "fixed";
      search.style.top = "68px";
      search.style.background = "rgba(0, 0, 0, 0.3)";
    }else{
      topMenu.style.position = "static";
      topMenu.style.background = "#ECF0F1";

      topMenuS.style.position = "static";
      topMenuS.style.background = "#ECF0F1";

      search.style.position = "static";
      search.style.background = "#ECF0F1";
    }

    el.scrollTop > 650 ? goTop.style.display = " block": goTop.style.display = "none";

  });

  goTop.addEventListener("click", ()=>{
    document.documentElement.scrollTop = 0;
  });



});
