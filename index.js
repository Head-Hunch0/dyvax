let form1 = document.querySelector(".form_1");
let form2 = document.querySelector(".form_2");
let form3 = document.querySelector(".form_3");
let form4 = document.querySelector(".form_4");

let newbtn = document.querySelector("#new");
let existingbtn = document.querySelector("#existing");
let form2btn = document.querySelector("#form2");
let form3btn = document.querySelector("#form3");
let form4btn = document.querySelector("#form4");
let form2btnback = document.querySelector("#form2back");
let form3btnback = document.querySelector("#form3back");
let form4btnback = document.querySelector("#form4back");

let form2progress = document.querySelector(".form_2_progressbar");
let form3progress = document.querySelector(".form_3_progressbar");
let form4progress = document.querySelector(".form_4_progressbar");

let modal = document.querySelector(".modal_wrapper");
let shadow = document.querySelector(".shadow");

existingbtn.addEventListener("click", function (e) {
  e.preventDefault();
  try {
    form1.style.display = "none";
    form3.style.display = "block";
    form2progress.classList.add("active");
    form3progress.classList.add("active");
  } catch (e) {
    console.log(e);
  }
});
newbtn.addEventListener("click", function (e) {
  e.preventDefault();
  try {
    form1.style.display = "none";
    form2.style.display = "block";
    form2progress.classList.add("active");
  } catch (e) {
    console.log(e);
  }
});
// form2btn.addEventListener('click', function () {
//     try {
//         form2.style.display = "none";
//         form3.style.display = "block";
//         form3progress.classList.add("active");
//     } catch (e) {
//         console.log(e)
//     }
// })
form2btnback.addEventListener("click", function (e) {
  // e.preventDefault();
  try {
    form2.style.display = "none";
    form1.style.display = "block";
    form2progress.classList.remove("active");
    form3progress.classList.remove("active");
  } catch (e) {
    console.log(e);
  }
});
form3btn.addEventListener("click", function (e) {
  // e.preventDefault();
  modal.classList.add("active");
  setTimeout(() => {
    modal.classList.remove("active");
  }, 3000);
});
form3btnback.addEventListener("click", function (e) {
  // e.preventDefault();
  try {
    form1.style.display = "block";
    form3.style.display = "none";
    form2.style.display = "none";
    form3progress.classList.remove("active");
    form2progress.classList.remove("active");
  } catch (e) {
    console.log(e);
  }
});

// form4btn.addEventListener('click', function () {
//     modal.classList.add('active');
//     setTimeout(() => {
//         modal.classList.remove("active")
//     }, 3000);
// })

function togglePaymentFields() {
  var dropdown = document.getElementById("payment_type");
  var selectedOption = dropdown.options[dropdown.selectedIndex].value;
  var tillNumberFields = document.getElementById("tillNumberFields");
  var paybillFields = document.getElementById("paybillFields");

  if (selectedOption === "1") {
    tillNumberFields.style.display = "block";
    paybillFields.style.display = "none";
  } else if (selectedOption === "2") {
    tillNumberFields.style.display = "none";
    paybillFields.style.display = "block";
  } else {
    tillNumberFields.style.display = "none";
    paybillFields.style.display = "none";
  }
}
