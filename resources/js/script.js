


const navbar = document.getElementById("navbar");


window.addEventListener("scroll", () => {

  const scrollPos = window.scrollY;

 
  if (scrollPos > 100) {
   
    navbar.classList.add("scrolled");
  } else {
   
    navbar.classList.remove("scrolled");
  }
});

const views = document.querySelectorAll('.view');
const icons = document.querySelectorAll('.icon');

views.forEach((view, index) => {
  view.addEventListener('mouseenter', () => {
    // Do something when the mouse enters the element
    icons[index].style.display = "block";
    view.style.filter = "blur(4px)";
    view.style.transitionProperty = "all";
    view.style.transitionDuration = "500ms";
    view.style.transitionTimingFunction = "ease-in-out";
    icons[index].style.transitionProperty = "all";
    icons[index].style.transitionDuration = "700ms";
    icons[index].style.transitionTimingFunction = "ease-in-out";
  });

  view.addEventListener('mouseleave', () => {
    // Do something when the mouse leaves the element
    icons[index].style.display = "none";
    view.style.filter = "none";
  });
});

let opens = document.querySelectorAll(".openFavorite"); 
let favorites = document.querySelectorAll(".favorite"); 

for (let i = 0; i < opens.length; i++) {
  opens[i].addEventListener("click", function() {
    favorites[i].classList.toggle("hidden");
  });
}



const boxes = document.querySelectorAll('.box');
let categoryDivCreated = false;

function filterBoxes(category) {
  let hasCategory = false; // flag to check if any boxes have the category
  for (let i = 0; i < boxes.length; i++) {
    const box = boxes[i];
    if (!box.classList.contains(category)) {
      box.classList.add('hidden');
    } else {
      box.classList.remove('hidden');
      hasCategory = true;
      break; // set the flag to true if a box has the category
    }
  }
  if (!hasCategory && !categoryDivCreated) { // if no boxes have the category, add a new div with the picture
const newBox = document.createElement('div'); // create a new div
    newBox.classList.add('box', category);


    // create an img element and set its src attribute to the picture you want to use
    const newImg = document.createElement('img');
    newImg.src = '/images/notFolders.jpg';
    newImg.style.width = "45%";

  
   
    
  
    newBox.appendChild(newImg);
    newBox.style.display = 'flex'; 
    newBox.style.justifyContent = 'center';

    boxes[0].parentNode.appendChild(newBox);
    categoryDivCreated = true; // append the new div to the parent of the other boxes
  }
}



  const buttons = document.querySelectorAll('.filter-button');
  for (let i = 0; i < buttons.length; i++) {
    const button = buttons[i];
    const category = button.dataset.category;
    button.addEventListener('click', () => filterBoxes(category));
  }






  document.addEventListener("DOMContentLoaded", function() {
  let pop = document.querySelector("#container-pop");
  let openClik = document.querySelector("#open");

  // toggle popup visibility when clicking the open button
  openClik.addEventListener("click", function() {
    pop.classList.remove("hidden");
  });

  // close popup when clicking outside
  document.addEventListener("click", function(event) {
    // if (!pop.contains(event.target) && !openClik.contains(event.target)) {
    //   pop.classList.add("hidden");
    // }
  });
});


  let card = document.querySelector(".card"); //declearing profile card element
let displayPicture = document.querySelector(".display-picture"); //declearing profile picture

displayPicture.addEventListener("click", function() { //on click on profile picture toggle hidden class from css
card.classList.toggle("hidden")})




  function toggleView() {
    const parentDiv = document.querySelector('#scroll');
    parentDiv.classList.toggle('overflow-x-scroll', 'hide-scroll-bar');
    const childDiv = document.querySelector('#grid');
    childDiv.classList.toggle('grid-flow-col-dense');
    
    childDiv.style.display = 'grid';
    childDiv.style.gridTemplateColumns = 'repeat(3, 350px)';
    childDiv.style.gridGap = '1rem';
  
  }
    

document.getElementById("view-grid").addEventListener("click", toggleView);










// console.log();

// window.addEventListener('scroll', () => {
// console.log();

// })



// window.addEventListener('scroll', function() {
//   console.log('The current scroll position is: ' + window.scrollY + ' pixels.');
// });

// let view = document.querySelector('.view');

// window.addEventListener('scroll', function() {
//   if (window.pageYOffset >= 656) {
//     if (view.classList.contains('w-0')) {
//       view.classList.replace('w-0', 'w-full');

//     }
//   }
// });


// let divVisible = false;
// const myDiv = document.getElementById('my-div');

// document.addEventListener('keydown', function(event) {
//   if (event.ctrlKey && event.key === 'k') {
//     divVisible = !divVisible;
//     myDiv.style.display = divVisible ? 'block' : 'none';
//   }
// });


const myButton = document.querySelector("#open");
const popup = document.querySelector("#popup-container");


myButton.addEventListener("click", () => {
 console.log('djcnldcj');

});






const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
    $(".dashboard-nav-dropdown-toggle").click(function () {
        $(this).closest(".dashboard-nav-dropdown")
            .toggleClass("show")
            .find(".dashboard-nav-dropdown")
            .removeClass("show");
        $(this).parent()
            .siblings()
            .removeClass("show");
    });
    $(".menu-toggle").click(function () {
        if (mobileScreen.matches) {
            $(".dashboard-nav").toggleClass("mobile-show");
        } else {
            $(".dashboard").toggleClass("dashboard-compact");
        }
    });
});


