function darken_screen(yesno) {
  if (yesno == true) {
    document.querySelector('.screen-darken').classList.add('active');
  }
  else if (yesno == false) {
    document.querySelector('.screen-darken').classList.remove('active');
  }
}
function close_offcanvas() {
  darken_screen(false);
  document.querySelector('.mobile-offcanvas.show').classList.remove('show');
  document.body.classList.remove('offcanvas-active');
  document.getElementById('logo-oculto').style.display = "none";
  document.getElementById('logo-vista').style.display = "";
  document.getElementById('navbar_main').style.backgroundColor = "";
}
function show_offcanvas(offcanvas_id) {
  darken_screen(true);
  document.getElementById(offcanvas_id).classList.add('show');
  document.body.classList.add('offcanvas-active');
  document.getElementById('logo-oculto').style.display = "";
  document.getElementById('logo-vista').style.display = "none";
  document.getElementById('navbar_main').style.backgroundColor = "#FFFFFF";
}
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('[data-trigger]').forEach(function (everyelement) {
    let offcanvas_id = everyelement.getAttribute('data-trigger');
    everyelement.addEventListener('click', function (e) {
      e.preventDefault();
      show_offcanvas(offcanvas_id);
    });
  });
  document.querySelectorAll('.btn-close').forEach(function (everybutton) {
    everybutton.addEventListener('click', function (e) {
      close_offcanvas();
    });
  });
  document.querySelector('.screen-darken').addEventListener('click', function (event) {
    close_offcanvas();
  });
});
function buscarTerapeuta() {
  var input, filter, ul, li, a, i, txtValue, txtValue2;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByClassName("show");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("p")[0];
    esp = li[i].getElementsByClassName("nombre-terapeuta")[0];
    txtValue = a.textContent || a.innerText;
    txtValue2 = esp.textContent || esp.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
function buscarMisPacientes() {
  var input, filter, ul, li, a, i, txtValue, txtValue2;
  input = document.getElementById("inputBusquedaMisPacientes");
  filter = input.value.toUpperCase();
  ul = document.getElementById("listadoMisPacientes");
  li = ul.getElementsByClassName("show");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("p")[0];
    esp = li[i].getElementsByClassName("nombre-mi-paciente")[0];
    txtValue = a.textContent || a.innerText;
    txtValue2 = esp.textContent || esp.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
function buscarPaciente() {
  var input, filter, ul, li, a, i, txtValue, txtValue2;
  input = document.getElementById("inputBusquedaPacientes");
  filter = input.value.toUpperCase();
  ul = document.getElementById("listadoPacientes");
  li = ul.getElementsByClassName("show");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("p")[0];
    esp = li[i].getElementsByClassName("nombre-paciente")[0];
    txtValue = a.textContent || a.innerText;
    txtValue2 = esp.textContent || esp.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
var loadFile = function (event) {
  var image = document.getElementById("output");
  image.src = URL.createObjectURL(event.target.files[0]);
}
function checkImgPerfil() {
  if ($("#foto_tera").val() == "") {
    Swal.fire('Sin foto de perfil', '', 'question');
    $("#foto_tera").focus();
  }
}
function checkImgPerfilPas() {
  if ($("#foto_paciente").val() == "") {
    Swal.fire('Sin foto de perfil', '', 'question');
    $("#foto_paciente").focus();
  }
}
function checkImgCategoria() {
  if ($("#foto_categoria").val() == "") {
    Swal.fire('Sin foto de categoría', '', 'question');
    $("#foto_categoria").focus();
  }
}
function capitalizeWords(str, id) {
  var splitStr = str.toLowerCase().split(' ');
  for (var i = 0; i < splitStr.length; i++) {
    splitStr[i] = splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
  }
  joinedStr = splitStr.join(' ');
  id = "#" + id;
  $(id).val(joinedStr);
}
function tituloActivo(x) {
  var active = "border-bottom: 4px solid var(--complementario);";
  for (let i = 1; i < 6; i++) {
    th_i = document.getElementById("th-ejercicios_" + i);
    row_i = document.getElementById("row-categoria-ejercicio-" + i);
    th_i.style = "";
    row_i.style = "display:none";
  }
  th = document.getElementById("th-ejercicios_" + x);
  row_i = document.getElementById("row-categoria-ejercicio-" + x);
  th.style = active;
  row_i.style = "";
}
function subTituloActivo(x, y) {
  y.forEach(element => {
    row_y = document.getElementById("row-ejercicio-" + element);
    row_y.style = "display:none";
  });
  if (x != 0) {
    for (let i = 1; i < 6; i++) {
      th_i = document.getElementById("th-ejercicios_" + i);
      row_i = document.getElementById("row-categoria-ejercicio-" + i);
      th_i.style = "";
      row_i.style = "display:none";
    }
    row_x = document.getElementById("row-ejercicio-" + x);
    row_x.style = "";
  }
}
function mostrarEjercicio(id, root) {
  url = "?mdl=" + root + "&id=" + id;
  window.location.replace("index.php" + url)
}
function mostrarInfografia(url) {
  container = document.getElementById("containerInfografia");
  url = atob(url);
  container.innerHTML = url;
}
function deleteUserSpot(id_exce) {
  Swal.fire({
    icon: 'warning',
    title: '¿Estas seguro que quieres desasignar este material de este paciente?',
    showDenyButton: false,
    showCancelButton: true,
    confirmButtonText: '<i class="fa fa-eraser"></i> Desasignar',
    cancelButtonText: '<i class="fa fa-window-close"></i> Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.assign("controller/crud/deleteUserAdjunto?id=" + id_exce)
    }
  });
}
$(document).ready(function () {
  $('form').on('blur', 'input, textarea', function () {
    $(this).val((i, value) => value.trim());
  });
  $('#telefono_tera').mask('0000000000');
  $('#telefono_paciente').mask('0000000000');
  $('#curp_paciente').keyup(function () {
    $(this).val($(this).val().toUpperCase());
  }).mask('SSSS000000SSSAAAAA');
  $('#categoria_doc').on('change', function () {
    var categoria = $(this).val();
    if (categoria) {
      $.ajax({
        type: 'POST',
        url: 'controller/crud/ajaxDataCategoria.php',
        data: 'categoria=' + categoria,
        success: function (html) {
          $('#dependencia_doc').html(html);
        }
      });
    } else {
      $('#dependencia_doc').html('<option hidden value="">Selecciona la categoria</option>');
    }
  });
  $('#dependencia_doc').on('change', function () {
    var categoria = $(this).val();
    if (categoria) {
      $.ajax({
        type: 'POST',
        url: 'controller/crud/ajaxDataAdjunto.php',
        data: 'categoria=' + categoria,
        success: function (html) {
          $('#adj_view').html(html);
        }
      });
    } else {
      $('#adj_view').html('<h3>Selecciona una categoria y sección</h3>');
    }
  });
  var Base64 = {
    // private property
    _keyStr: "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
    // public method for encoding
    encode: function (input) {
      var output = "";
      var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
      var i = 0;
      input = Base64._utf8_encode(input);
      while (i < input.length) {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);
        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;
        if (isNaN(chr2)) {
          enc3 = enc4 = 64;
        } else if (isNaN(chr3)) {
          enc4 = 64;
        }
        output = output +
          this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
          this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
      }
      return output;
    },
    // public method for decoding
    decode: function (input) {
      var output = "";
      var chr1, chr2, chr3;
      var enc1, enc2, enc3, enc4;
      var i = 0;
      input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
      while (i < input.length) {
        enc1 = this._keyStr.indexOf(input.charAt(i++));
        enc2 = this._keyStr.indexOf(input.charAt(i++));
        enc3 = this._keyStr.indexOf(input.charAt(i++));
        enc4 = this._keyStr.indexOf(input.charAt(i++));
        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;
        output = output + String.fromCharCode(chr1);
        if (enc3 != 64) {
          output = output + String.fromCharCode(chr2);
        }
        if (enc4 != 64) {
          output = output + String.fromCharCode(chr3);
        }
      }
      output = Base64._utf8_decode(output);
      return output;
    },
    // private method for UTF-8 encoding
    _utf8_encode: function (string) {
      string = string.replace(/\r\n/g, "\n");
      var utftext = "";
      for (var n = 0; n < string.length; n++) {
        var c = string.charCodeAt(n);
        if (c < 128) {
          utftext += String.fromCharCode(c);
        }
        else if ((c > 127) && (c < 2048)) {
          utftext += String.fromCharCode((c >> 6) | 192);
          utftext += String.fromCharCode((c & 63) | 128);
        }
        else {
          utftext += String.fromCharCode((c >> 12) | 224);
          utftext += String.fromCharCode(((c >> 6) & 63) | 128);
          utftext += String.fromCharCode((c & 63) | 128);
        }
      }
      return utftext;
    },
    // private method for UTF-8 decoding
    _utf8_decode: function (utftext) {
      var string = "";
      var i = 0;
      var c = c1 = c2 = 0;
      while (i < utftext.length) {
        c = utftext.charCodeAt(i);
        if (c < 128) {
          string += String.fromCharCode(c);
          i++;
        }
        else if ((c > 191) && (c < 224)) {
          c2 = utftext.charCodeAt(i + 1);
          string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
          i += 2;
        }
        else {
          c2 = utftext.charCodeAt(i + 1);
          c3 = utftext.charCodeAt(i + 2);
          string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
          i += 3;
        }
      }
      return string;
    }
  }
  const modalVerAdjuntoList = document.getElementById('modalMostrarAdjunto')
  modalVerAdjuntoList.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const titulo = Base64.decode(button.getAttribute('data-bs-titulo'))
    const iframe = Base64.decode(button.getAttribute('data-bs-content'))
    const modalTitle = modalVerAdjuntoList.querySelector('#modalMostrarAdjuntoLabel')
    const modalBodyInput = modalVerAdjuntoList.querySelector('#iframeModaAdjunto')
    modalTitle.textContent = titulo
    modalBodyInput.src = iframe
  });
  const modalVerAdjuntoListComplete = document.getElementById('modalMostrarAdjuntoCompleto')
  modalVerAdjuntoListComplete.addEventListener('show.bs.modal', event => {
    const button = event.relatedTarget
    const titulo = Base64.decode(button.getAttribute('data-bs-titulo'))
    const iframe = Base64.decode(button.getAttribute('data-bs-content'))
    const desc = Base64.decode(button.getAttribute('data-bs-desc'))
    const modalTitle = modalVerAdjuntoListComplete.querySelector('#modalMostrarAdjuntoCompletoLabel')
    const modalBodyInput = modalVerAdjuntoListComplete.querySelector('#iframeModaAdjuntoCompleto')
    const modalDesc = modalVerAdjuntoListComplete.querySelector('#modalAdjuntoComletoDesc')
    modalTitle.textContent = titulo
    modalBodyInput.src = iframe
    modalDesc.textContent = desc
  });
  $('.btn_delete_pas').on('click', function () {
    var id = atob($(this).data('bs-id'));
    nm = atob($(this).data('bs-nm'));
    tu = atob($(this).data('bs-tu'));
    Swal.fire({
      title: '¿Deseas eliminar a?',
      text: '"' + nm + '"',
      icon: 'question',
      showCancelButton: true,
      confirmButtonText: 'Eliminar',
      cancelButtonText: 'Cancelar',
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: 'POST',
          url: 'controller/crud/ajaxDeleteUser.php',
          data: 'id=' + id + '&tu=' + tu,
          success: function (response) {
            if (response == "success") {
              Swal.fire('Usuario eliminado', '', 'success').then((result) => { window.location.reload() });
            } else {
              Swal.fire('Error', response, 'warning');
            }
          }
        });
      }
    });
  });
});
