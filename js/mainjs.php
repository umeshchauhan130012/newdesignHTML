<script>
document.addEventListener('DOMContentLoaded', function() {
const bodySelector = document.body;
const hamburgerSelectors = document.querySelectorAll('.idl24by7-trigger, .idl24by7-trigger2');
const menutarget = document.querySelector('.idl24by7-slide-menuwrap');
const closeButton = document.querySelector('.idl24by7-slide-icon');
hamburgerSelectors.forEach(function(hamburger) {
hamburger.addEventListener('click', function(event) {
event.stopPropagation();
bodySelector.classList.toggle('idl24by7-menu-open');
});
});
menutarget.addEventListener('click', function(event) {
event.stopPropagation();
});
closeButton.addEventListener('click', function() {
bodySelector.classList.remove('idl24by7-menu-open');
});
bodySelector.addEventListener('click', function() {
bodySelector.classList.remove('idl24by7-menu-open');
});
});
const idlvideoRightNav = document.querySelector('#idl24by7-rel-rightbutton');
const idlvideoGetLeftNav = document.querySelector('#idl24by7-rel-leftbutton');
if(idlvideoRightNav){
idlvideoRightNav.addEventListener("click", function(idlrelevent) {
const idlreltConent = document.querySelector('#idl24by7-rel-sliderwrapmain');
idlreltConent.scrollLeft += 300;
idlrelevent.preventDefault();
});
}
if(idlvideoGetLeftNav){
idlvideoGetLeftNav.addEventListener("click", function(idlrelevent) {
const idlreltConent = document.querySelector('#idl24by7-rel-sliderwrapmain');
idlreltConent.scrollLeft -= 300;
idlrelevent.preventDefault();
});
}
const tagrightBtn = document.querySelector('#idl24by7-tagright-button');
const tagleftBtn = document.querySelector('#idl24by7-tagleft-button');
if(tagrightBtn){
tagrightBtn.addEventListener("click", function(event) {
const conent = document.querySelector('#idl24by7-scroll-tag');
conent.scrollLeft += 300;
event.preventDefault();
});
}
if(tagleftBtn) {
tagleftBtn.addEventListener("click", function(event) {
const conent = document.querySelector('#idl24by7-scroll-tag');
conent.scrollLeft -= 300;
event.preventDefault();
});
}
const followUsWidget = document.querySelectorAll('.idl24by7-follow-tool');
if(followUsWidget) {
followUsWidget.forEach(widget => {
widget.addEventListener('click', (event) => {
event.stopPropagation();
followUsWidget.forEach(w => {
if (w !== widget) {
w.classList.remove('idl24by7-active');
}
});
widget.classList.toggle('idl24by7-active');
});
});
document.body.addEventListener('click', () => {
followUsWidget.forEach(widget => {
widget.classList.remove('idl24by7-active');
});
});
}
document.addEventListener('scroll', function() {
const idl24by7_header = document.querySelector('.idl24by7-mainheader');
const idl24by7_headerTop = idl24by7_header.getBoundingClientRect().top;
if (idl24by7_headerTop === 0) {
document.body.classList.add('idl24by7-sticky');
} else {
document.body.classList.remove('idl24by7-sticky');
}
});
var prevScrollpos = window.pageYOffset;
document.addEventListener('scroll', function() {
var currentScrollPos = window.pageYOffset;
if (prevScrollpos > currentScrollPos) {
document.body.classList.add('idl24by7-follow-back');
} else {
document.body.classList.remove('idl24by7-follow-back');
document.body.classList.remove('idl24by7-follow');
}
prevScrollpos = currentScrollPos;
});
document.addEventListener('DOMContentLoaded', function() {
const searchbodySelector = document.body;
const searchSelector = document.querySelector('.idl24by7-search-open');
const searchWrapper = document.querySelector('.idl24by7-search-wrapper');
const searchInput = document.querySelector('.idl24by7-search-input');
searchSelector.addEventListener('click', function(event) {
event.stopPropagation();
searchbodySelector.classList.toggle('idl24by7-searchActive');
searchInput.focus();
});
searchWrapper.addEventListener('click', function(event) {
event.stopPropagation();
});
searchbodySelector.addEventListener('click', function() {
searchbodySelector.classList.remove('idl24by7-searchActive');
});
});
document.addEventListener('DOMContentLoaded', function() {
const targetNative = document.querySelector('.idl24by7-share-fixed');
if(targetNative){
targetNative.addEventListener("click", function() {
if (typeof navigator.share === 'undefined') {
log("No share API available!");
} else {
navigator.share({
title: 'Title',
url: 'http://localhost/front-indiadaily24x7/static/storypage.php',
text: 'Shared with Native Share API'
})      
}
});
}
});
document.addEventListener('DOMContentLoaded', function() {
var slide = 0,
flipslides = document.querySelectorAll('#idl24by7-flip-js > a'),
numSlides = flipslides.length;
if (numSlides > 0) {
var flipCurrentSlide = function() {
var itemToShow = Math.abs(slide % numSlides);
[].forEach.call(flipslides, function(el) {
el.classList.remove('active');
});
flipslides[itemToShow].classList.add('active');
},
next = function() {
slide++;
flipCurrentSlide();
},
autonext = setInterval(function() {
next();
}, 4000);
flipCurrentSlide();
}
});
function togglefun() {
var element = document.getElementById("idl24by7-clickscrollid");
element.classList.toggle("idl24by7-scrollactive");
}

let currentIndexIns = 0;
const slidesMobSec = document.querySelectorAll('.idl24by7-slide-secondry');
if (slidesMobSec.length > 0) {
const totalSlidesIns = slidesMobSec.length;
const wrapwidth = document.querySelector('.idl24by7-carousel-Secondry').clientWidth;
for (var j = 0; j < slidesMobSec.length; j++) {
slidesMobSec[j].style.width = `${wrapwidth}px`;
slidesMobSec[j].style.minWidth = `${wrapwidth}px`;
}
function showSlideIns(index) {
const slideWidthIns = slidesMobSec[0].clientWidth;
const offsetIns = -slideWidthIns * index;
document.querySelector('.idl24by7-carousel-Container').style.transform = `translateX(${offsetIns}px)`;
}
function autoSlide() {
currentIndexIns = (currentIndexIns === totalSlidesIns - 1) ? 0 : (currentIndexIns + 1);
showSlideIns(currentIndexIns);
}
function nextSlideSide() {
currentIndexIns = (currentIndexIns + 1) % slidesMobSec.length;
showSlideIns(currentIndexIns);
}
function prevSlideSide() {
currentIndexIns = (currentIndexIns - 1 + slidesMobSec.length) % slidesMobSec.length;
showSlideIns(currentIndexIns);
}
const nextButtonnx = document.getElementById('idl24by7-nextrit');
const prevButtonpv = document.getElementById('idl24by7-prevlft');
if (nextButtonnx) {
nextButtonnx.addEventListener('click', nextSlideSide);
}
if (prevButtonpv) {
prevButtonpv.addEventListener('click', prevSlideSide);
}
function startAutoSlide() {
slideInterval = setInterval(autoSlide, 5000);
}
function stopAutoSlide() {
clearInterval(slideInterval);
}

const carouselButtons = document.querySelectorAll('.idl24by7-slider-button');
carouselButtons.forEach(button => {
button.addEventListener('mouseenter', stopAutoSlide);
button.addEventListener('mouseleave', startAutoSlide);
});

startAutoSlide();
}


const hometab = document.querySelector('.idl24by7-home-tab');
if (hometab) {
const tabButtons = hometab.querySelectorAll('.idl24by7-home-tablemuclick');
const tabPanels = Array.from(hometab.querySelectorAll('.idl24by7-home-tabcontentitem'));
function tabClickHandler(e) {
    tabPanels.forEach(panel => {
        panel.classList.remove('active');
    });
    tabButtons.forEach(clickbutton => {
        clickbutton.classList.remove('active');
    });
    e.currentTarget.classList.add('active');
    const { id } = e.currentTarget;
    const currentTab = tabPanels.find(
        panel => panel.getAttribute('data-id') === id
    );
    currentTab.classList.add('active');
}
tabButtons.forEach(clickbutton => {
    clickbutton.addEventListener('click', tabClickHandler);
});
}

const tagpgtab = document.querySelector('.idl24by7-tagpg-tab');
if (tagpgtab) {
const tagtabButtons = tagpgtab.querySelectorAll('.idl24by7-tagpg-tablemuclick');
const tagtabPanels = Array.from(tagpgtab.querySelectorAll('.idl24by7-tagpg-tabcontentitem'));
function tabClickHandler(e) {
    tagtabPanels.forEach(tagpanel => {
        tagpanel.classList.remove('active');
    });
    tagtabButtons.forEach(tagclickbutton => {
        tagclickbutton.classList.remove('active');
    });
    e.currentTarget.classList.add('active');
    const { id } = e.currentTarget;
    const tagcurrentTab = tagtabPanels.find(
        panel => panel.getAttribute('data-id') === id
    );
    tagcurrentTab.classList.add('active');
}
tagtabButtons.forEach(tagclickbutton => {
    tagclickbutton.addEventListener('click', tabClickHandler);
});
}


function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
}
window.addEventListener('DOMContentLoaded', (event) => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
});
document.querySelectorAll('.idl24by7-darkmodelight').forEach(function(element) {
    element.addEventListener('click', function() {
    const currentTheme = document.documentElement.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    setTheme(newTheme);
    localStorage.setItem('theme', newTheme);
});
});


</script>



