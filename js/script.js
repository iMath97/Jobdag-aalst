document.addEventListener('DOMContentLoaded', (event) => {
    activeAnchor();
    toggleAdmin();
    scrollTop();
    showProfiles();
});

/* color the nav btn of the matching active page */
var a = document.getElementsByClassName("a");
var loc = location.href;

function activeAnchor(){
    window.addEventListener('load', function(){
        for (var x = 0; x< a.length; x++){
            if (loc == a[x]){
                a[x].style = "color: #00d7e6;";
            } 
        }
        if(loc != a[1] && loc != a[2] && loc != a[3]){
            a[0].style =  "color: #00d7e6;";
        }
    });
}

/* show/hide admin input fields and btn */
let adminBtn = document.getElementById('admin');
let loginForm = document.getElementById('login');

function toggleAdmin(){
    adminBtn.addEventListener('dblclick', function(){
        loginForm.style.display = "block";
    });
    adminBtn.addEventListener('click', function(){
        loginForm.style.display = "none";
    });
}

/* show/hide btn to go back up top on scroll */
let topBtn = document.getElementById('top');
let changeBtnImg = document.getElementById('changeImg');

function scrollTop(){
    document.addEventListener('scroll', function(){
        if(scrollY > 150){
            topBtn.style.display = "block";
            topBtn.addEventListener('mouseover', function(){
                changeBtnImg.src = "./img/up-hover.png";
            });
            topBtn.addEventListener('mouseout', function(){
                changeBtnImg.src = "./img/up.png";
            });
        }else{
            topBtn.style.display = "none";
        }
    })
}

/* generate random card position of students, credits to Peter Ginneberge */
"use strict";

const cursisten = [
    {
        name: "Andreas Roelandt",
        imgUrl: "./img/profielfotos/andreas.jpg",
        profileUrl: "https://www.linkedin.com/in/andreas-roelandt/"
    },
    {
        name: "Bjorn Vanzeebroeck",
        imgUrl: "./img/profielfotos/bjorn.jpg",
        profileUrl: "https://www.linkedin.com/in/bjorn-vanzeebroeck"
    },
    {
        name: "Dirk De Roo",
        imgUrl: "./img/profielfotos/dirk.jpg",
        profileUrl: "https://www.linkedin.com/in/dirk-de-roo/"
    },
    {
        name: "Felicien Nezzi",
        imgUrl: "./img/profielfotos/felicien.jpg",
        profileUrl: "https://www.linkedin.com/in/feliciennezzi/"
    },
    {
        name: "Frederick Cosyn",
        imgUrl: "./img/profielfotos/frederick.jpg",
        profileUrl: "https://www.linkedin.com/in/frederick-cosyn/"
    },
    {
        name: "Glenn Himschoot",
        imgUrl: "./img/profielfotos/glenn.jpg",
        profileUrl: "https://www.linkedin.com/in/glenn-himschoot-518380192/"
    },
    {
        name: "Hans Van Gheel",
        imgUrl: "./img/profielfotos/hans.jpg",
        profileUrl: "https://www.linkedin.com/in/hansvangheel"
    },
    {
        name: "Kristof Roelands",
        imgUrl: "./img/profielfotos/kristof.jpg",
        profileUrl: "https://www.linkedin.com/in/kstfroelands"
    },
    {
        name: "Mathias Camus",
        imgUrl: "./img/profielfotos/mathias.jpg",
        profileUrl: "https://www.linkedin.com/in/mathias-camus/"
    },
    {
        name: "Matthew Bracke",
        imgUrl: "./img/profielfotos/matthew.jpg",
        profileUrl: ""
    },
    {
        name: "Peter Ginneberge",
        imgUrl: "./img/profielfotos/peter.jpg",
        profileUrl: "https://www.linkedin.com/in/pginneberge/"
    },
    {
        name: "Simon De Beugher",
        imgUrl: "./img/profielfotos/simon.jpg",
        profileUrl: "https://www.linkedin.com/in/simon-de-beugher-b741b3166/"
    },
    {
        name: "Thi Nguyen",
        imgUrl: "./img/profielfotos/thi.jpg",
        profileUrl: ""
    },
    {
        name: "Wietse De Meerleer",
        imgUrl: "./img/profielfotos/wietse.jpg",
        profileUrl: "https://be.linkedin.com/in/wietsedemeerleer"
    },
    {
        name: "Adel Al-Rafiq",
        imgUrl: "./img/profielfotos/adel.jpg",
        profileUrl: "https://www.linkedin.com/in/adel-alrafiq/"
    },
    {
        name: "Olivier Brusseel",
        imgUrl: "./img/profielfotos/olivier.jpg",
        profileUrl: "https://be.linkedin.com/in/olivierbrusseel"
    },
    {
        name: "Mathias Boeckaert",
        imgUrl: "./img/profielfotos/mathiasB.jpg",
        profileUrl: "https://www.linkedin.com/in/matthiasboeckaert/"
    },
    {
        name: "Jana Verlinde",
        imgUrl: "./img/profielfotos/jana.jpg",
        profileUrl: "https://www.linkedin.com/in/jana-verlinde/"
    }
]


/**
 * 
 */
function showProfiles() {
    const grid = document.body.querySelector('.grid');

    shuffle(cursisten);

    while (grid.firstChild) {
        grid.removeChild(grid.firstChild);
    }

    const tmp = document.body.querySelector('[name="tmp-card"]');
    cursisten.forEach(cursist => {
        const clone = tmp.content.cloneNode(true);
        if (cursist.imgUrl && cursist.imgUrl !== "") {
            clone.querySelector('img').src = cursist.imgUrl;
            clone.querySelector('p').innerText = cursist.name;
        }
        grid.append(clone);

        if (cursist.profileUrl && cursist.profileUrl !== "") {
            const domCard = grid.querySelector('.card:last-child');
            domCard.classList.add('card-profile');
            domCard.addEventListener('click', (event) => {
                window.open(cursist.profileUrl, '_blank');
            })
        }
    });
}

/**
 * 
 * @param {*} arr 
 */
function shuffle(arr) {
    let m = arr.length, t, i;
    while (m) {
        i = Math.floor(Math.random() * m--);
        t = arr[m];
        arr[m] = arr[i];
        arr[i] = t;
    }
}