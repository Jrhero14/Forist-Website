const NavBar = document.querySelector("#navbar");
const Nav2 = document.querySelector("#nav2");
window.onscroll = () => {
     if (window.scrollY > 200) {
          NavBar.classList.add("fixed", "slide-in-from-right");
          Nav2.classList.add("pt-[4.1rem]");
     }

     if (window.scrollY == 0) {
          NavBar.classList.remove("fixed", "slide-in-from-right");
          Nav2.classList.remove("pt-[4.1rem]");
     }
};
