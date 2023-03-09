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
$(document).ready(function(){
  $('#table_personal').dataTable( {
    dom: 'Bfrtip',
    scrollY:450,
    scrollX:true,
    lengthMenu:true,
    buttons: {
            buttons: [{
                    extend: 'excel',
                    text: '<i class="far fa-file-excel"></i> CSV',
                    className: 'btn bg-success text-white'
                },{
                    extend: 'pdf',
                    orientation: 'landscape',
                    pageSize: 'LEGAL',
                    text: '<i class="far fa-file-pdf"></i> PDF',
                    className: 'btn bg-danger text-white'
                },{
                  text:'<i class="far fa-file-excel"></i> CSV',
                  className: 'btn bg-success text-white',
                  action: function ( e, dt, node, config ) {
                    alert( 'Button activated' );
                  }
                }
            ]
        },
    language: {
        "lengthMenu": "Mostrar _MENU_ registros",
        "zeroRecords": "Cargando...",
        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sSearch": "Buscar:",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "sProcessing": "Procesando...",
    },
    orderCellsTop: true,
    fixedHeader: true,
    "orderClasses": false,
    "ajax": "controller/js/json/list_per.php",
    deferRender: true,
      columns: [
        { data: 'id_terapeuta' },
        { data: 'area' },
        { data: 'cargo' },
        { data: 'n_empleado' },
        { data: 'email' },
        { data: 'tel'}
      ],
    });
  });
