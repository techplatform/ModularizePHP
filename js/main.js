function toggleMenu() {
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 

const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  speed: 2000,
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
  // And if we need scrollbar
  autoplay: {
    delay: 5000,
  },
});

// "use strict";

// var test = document.querySelectorAll("ul#primaryNav li a");
// console.log(test);

// var activePage = "cruises.php";

// var i;
// for (i=0; i<test.length; i++) {
//   var myPage = test[i].getAttribute("href");
//   console.log(myPage);

//   if(activePage === myPage) {
//     alert("wow"+ myPage);
//   }

// }
// var activePage = "cruises.php";
// var i;
// for (i=0; i<test.length; i++) {
//   var myPage = test[i].getAttribute("href");
//   console.log(myPage);

//   if(activePage === myPage) {
//     alert("wow"+ myPage);
//   }

// }
// // var activePage2 = "agent1.php";

// // var i;
// // for (i=0; i<test.length; i++) {
// //   var myPage2 = test[i].getAttribute("href");
// //   console.log(myPage2);

// //   if (activePage2 === myPage2) {
// //     test[i].parentNode.className="active";

// //     test[i].parentNode.parentNode.className="parent";
// //   }
// //   else {
// //     test[i].parentNode.className="";
// //   }

// // }