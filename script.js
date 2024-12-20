const navbar = document.querySelector(".navbar");
const navbarOffsetTop = navbar.offsetTop
const sections = document.querySelectorAll("section");
const navbarLinks = document.querySelectorAll(".navbar-link")
const progress = document.querySelector
('.progress-bars-wrapper');
const progressBarPercents = [95,95,85,90,82,96,94,85];


window.addEventListener("scroll", () =>{
    mainFn();
});

const mainFn = () =>{
    if (window.scrollY >= navbarOffsetTop){
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky")
    }

sections.forEach((section, i) =>{
    if(window.scrollY >= section.offsetTop - 10){
        navbarLinks.forEach(navbarLink =>{
            navbarLink.classList.remove('change');
        });
        navbarLinks[i].classList.add
        ("change");
    }
 });

 if (window.scrollY + window.innerHeight >= progress.offsetTop) {
    document.querySelectorAll(".progress-percent").forEach((el, i) => {
      el.style.width = `${progressBarPercents[i]}%`;
      el.previousElementSibling.firstElementChild.textContent =
        progressBarPercents[i];
    });
  }
};

mainFn();

//window.addEventListener('resize', () =>{
    //window.location.reload();
//})
