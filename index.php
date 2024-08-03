<!-- Player editado por <prince>Guilherme Pessoa & vinicius_HP</prince> © 2017 
Skype: Guilherme.locutor1 ~ Raidcall: djprinceapril -->

<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Rádio Ihabi by Prince</title>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/tipped.css">
    <link rel="stylesheet" type="text/css" href="css/redes-sociais.css">
    <style type="text/css">
        a:link, a:visited {
            text-decoration: none;
            color: #FFF;
        }
    </style>
</head>
<body>

<div style="display: none">
<script type="text/javascript">
        {
    
        }
        function auto(){
            document.getElementById('player2').volume = 100;
        }
</script>
<body onload="auto()">
<audio id="player2" controls autoplay src="https://sonicpanel.oficialserver.com/8342/;"></audio>

<script type="text/javascript">
	var stream = document.getElementById("player2");

	function getVolume() {
	    alert(stream.volume);
	}
	  
	function SetVolumeLower() {
	    stream.volume -= 0.10;
	}
	  
	function SetVolumeHigher() {
	    stream.volume += 0.10;
	}
	function UpdateAudio(){
	    var update = document.getElementById('player2'); player2.src='http://167.114.53.24:9974/;'; player2.load();
	}
</script>

</div>

<div id="area_player">

    <div id="player" class="draggable ui-widget-content" style="left: 45%">
        <div class="player_min">
            <div class="guy"></div>
            <div class="txt">Rádio iHabi</div>
            <div class="handle"></div>
            <div class="open o-c tip" title="Maximizar"></div>
        </div>

        <div class="player">
                
            <div class="plus tip" title="Aumentar Volume" style="cursor:pointer" onclick="SetVolumeHigher()"></div>

            <div class="min tip" title="Diminuir Volume" style="cursor:pointer" onclick="SetVolumeLower()"></div>
            
            <a id="playerButton" data-enable="1">
                <div class="play pause tip" title="Iniciar/Parar Rádio" style="cursor:pointer"></div>
            </a>

            <a href="js/pedido.php"
            onclick="window.open(this.href,'targetWindow',
                                   'toolbar=no, location=no, status=no, menubar=no, scrollbars=yes, resizable=no, width=450, height=200');
                                   return false;">
                <div class="orders tip" title="Fazer Pedido" style="cursor:pointer"></div> 
            </a>
            
                <a onclick="UpdateAudio()">
                <div class="update tip" title="Atualizar Rádio" style="cursor:pointer"></div>
            </a>

            <div class="separa"></div>

            <div class="info locutor">
                <a <span class="locutorver">...</span></a>
            </div>
            
            <div class="info room">
                <a <span class="programaver">...</span></a>
            </div>
            
            <div class="info listeners">
                <a <span class="unicosver">...</a> Ouvintes</span></a>
            </div>
            
            <div class="info music">
                <a <span class="musicaver">...</span></a>
            </div>
            
            <div class="close o-c tip" title="Minimizar"></div>

            <a href="https://twitter.com/" target="_blank"><div class="twitter tip" title="Twitter da Rádio"></div></a>
            <a href="http://radiohabblive.com/" target="_blank"><div class="site tip" title="Site da Rádio"></div></a>

            <div class="handle"></div>
            <div class="dev tip" title="Edited by: Guilherme Pessoa (Prince)"></div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script src="js/tipped.js"></script>
<script src="js/player1.js"></script>
<script src="js/principal.js"></script>
<script type="text/javascript">
    $(document).ready(function ()
    {
        $(document).on("click", "#playerButton", function ()
        {
            if ($("#playerButton").attr('data-enable') == 0)
            {
                document.getElementById('player2').muted = false;
                $("#playerButton").attr('data-enable', '1');
            }
            else
            {
                document.getElementById('player2').muted = true;
                $("#playerButton").attr('data-enable', '0');
            }
        });
    });
</script>

<div style="display: none;">
</div>
</body>
</html>

<!-- Player editado por <prince>Guilherme Pessoa</prince> © 2017 
Skype: Guilherme.locutor1 ~ Raidcall: djprinceapril -->

