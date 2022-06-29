document.write('<div class="cuenta"><span class="contador">');

if (localStorage.pagecount) {
    localStorage.pagecount = Number(localStorage.pagecount) + 1;
} else {
    localStorage.pagecount = 1;
}
document.write("Has visitado mi página: " + localStorage.pagecount + " veces. ");


if (sessionStorage.pagecount) {
    sessionStorage.pagecount = Number(sessionStorage.pagecount) + 1;
} else {
    sessionStorage.pagecount = 1;
}

document.write("En esta sesión, has visitado mi página: " + sessionStorage.pagecount + " veces.");

document.write('</span></div>');