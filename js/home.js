/*THEME*/
const body = document.getElementsByTagName('body')[0]
const icon = document.getElementById('theme-icon')
const redes = document.getElementById('redes-sociais')
const profImg = document.getElementById('prof-img')

icon.addEventListener("click", toggleTheme)

function toggleTheme(_event){
    body.classList.toggle('dark')
    const isDark = body.classList.contains('dark')
    localStorage.setItem('theme',  isDark)
    if(isDark){
        icon.src = "./images/sun.svg"
        profImg.src = "./images/prof-white.png"
        redes.innerHTML = `<ul>
            <li><a href="https://www.instagram.com/alexmartins16_" target="_blank"><img src="./images/instagram-white.svg"></a></li>
            <li><a href="https://www.linkedin.com/in/alex-martins-475834228/" target="_blank"><img src="./images/linkedin-white.svg"></a></li>
            <li><a href="https://github.com/TheAnswer16" target="_blank"><img src="./images/github-white.svg"></a></li>
        </ul>`
    }else{
        icon.src = "./images/moon.svg"
        profImg.src = "./images/prof.png"
        redes.innerHTML = `<ul>
            <li><a href="https://www.instagram.com/alexmartins16_" target="_blank"><img src="./images/instagram.svg"></a></li>
            <li><a href="https://www.linkedin.com/in/alex-martins-475834228/" target="_blank"><img src="./images/linked.svg"></a></li>
            <li><a href="https://github.com/TheAnswer16" target="_blank"><img src="./images/github.svg"></a></li>
        </ul>`
    }
}

if(localStorage.getItem("theme") === "true")
    toggleTheme(0)
