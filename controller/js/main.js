function darken_screen(yesno){
  if( yesno == true ){
    document.querySelector('.screen-darken').classList.add('active');
  }
  else if(yesno == false){
    document.querySelector('.screen-darken').classList.remove('active');
  }
}
function close_offcanvas(){
  darken_screen(false);
  document.querySelector('.mobile-offcanvas.show').classList.remove('show');
  document.body.classList.remove('offcanvas-active');
  document.getElementById('logo-oculto').style.display="none";
  document.getElementById('logo-vista').style.display="";
  document.getElementById('navbar_main').style.backgroundColor="";
}
function show_offcanvas(offcanvas_id){
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add('show');
  document.body.classList.add('offcanvas-active');
  document.getElementById('logo-oculto').style.display="";
  document.getElementById('logo-vista').style.display="none";
  document.getElementById('navbar_main').style.backgroundColor="#FFFFFF";
}
document.addEventListener("DOMContentLoaded", function(){ 
  document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
    let offcanvas_id = everyelement.getAttribute('data-trigger');
    everyelement.addEventListener('click', function (e) {
      e.preventDefault();
          show_offcanvas(offcanvas_id);
    });
  });
  document.querySelectorAll('.btn-close').forEach(function(everybutton){
    everybutton.addEventListener('click', function (e) { 
          close_offcanvas();
      });
  });
  document.querySelector('.screen-darken').addEventListener('click', function(event){
    close_offcanvas();
  });
});
function buscarTerapeuta(){
  var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("a");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
