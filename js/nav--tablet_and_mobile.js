// Vanilla JS Implementation of jQuery in Kevin Powell's YouTube Video
// GRMA https://stackoverflow.com/questions/53539461/how-do-i-use-vanilla-javascript-to-write-a-toggle-function-i-wrote-in-jquery //

const elementClicked = document.querySelector("#nav--tablet_and_mobile--hamburger");
const elementYouWantToShow = document.querySelector("#nav--tablet_and_mobile--nav_links_container");
const elementYouWantToHide1 = document.querySelector("#nav--tablet_and_mobile--hide_everything_but_nav_links");
// const elementToMakeClickable = document.querySelector(".candy_cane-nav");

// Open Mobile Nav Menu When Candy Cane Icon Is Clicked

elementClicked.addEventListener("click", ()=>{
  elementYouWantToShow.classList.toggle("nav_links_container--open");
  console.log("Hamburger clicked.");
  elementYouWantToHide1.classList.toggle("nav--tablet_and_mobile--hide_everything_but_nav_links--hidden");
  console.log("Hide/unhide webpage div toggled.");
});

// Close Mobile Nav Menu When Any Link Within It Is Clicked 
// GRMA https://flaviocopes.com/how-to-add-event-listener-multiple-elements-javascript/

document.querySelectorAll(".mobile_nav_link").forEach(item => {
  item.addEventListener('click', event => {
      console.log("Mobile nav link clicked.");
    elementYouWantToShow.classList.toggle("nav_links_container--open");
    elementYouWantToHide1.classList.toggle("nav--tablet_and_mobile--hide_everything_but_nav_links--hidden");
    console.log("Candy cane toggle hide/unhide toggled.")
  })
})