  <style type="text/css">
      .modalContainer {
            display: none; 
            position: fixed; 
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }

        .modalContainer .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid lightgray;
            border-top: 10px solid #58abb7;
            width: 60%;
        }

        .modalContainer .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .modalContainer .close:hover,
        .modalContainer .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
  </style>






<button id="btnModal">mute</button> 
<button id="btnModal">DOWNLOAD</button> 
<button id="btnModal">WELL</button> 
<button id="btnModal">UNITS</button> 
<button id="btnModal">GRAPH</button> 
<button id="btnModal">SET</button> 
<button id="btnModal">PAUSE</button> 
<button id="btnModal">CIRCULATION</button> 
<button id="btnModal">HIDRACULICS</button> 
<button id="btnModal">VOLUNE/SOUND</button> 
<button id="btnModal">UPDATE</button> 
<button id="btnModal">MSS</button>
<button id="btnModal">INFO</button> 



<div id="tvesModal" class="modalContainer">
 <div class="modal-content">
 <span class="close">×</span> <h2>Mute/silenciar </h2>
 <p>cosas de mute</p></div>
 </div> 
 <script type="text/javascript">
     if(document.getElementById("btnModal")){
            var modal = document.getElementById("tvesModal");
            var btn = document.getElementById("btnModal");
            var span = document.getElementsByClassName("close")[0];
            var body = document.getElementsByTagName("body")[0];

            btn.onclick = function() {
                modal.style.display = "block";

                body.style.position = "static";
                body.style.height = "100%";
                body.style.overflow = "hidden";
            }

            span.onclick = function() {
                modal.style.display = "none";

                body.style.position = "inherit";
                body.style.height = "auto";
                body.style.overflow = "visible";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";

                    body.style.position = "inherit";
                    body.style.height = "auto";
                    body.style.overflow = "visible";
                }
            }
        }
 </script>