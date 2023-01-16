document.addEventListener("keydown", function(event) {
    if (event.keyCode != 123) {
        return false;
    }
    var player = document.createElement("audio");
    player.style = "display:none";
    player.volume = 1;
    document.body.appendChild(player);
    player.src = "../urusai/urusai-1.ogg";
    player.play();
    player.addEventListener("ended",function(){
		player.src = "../urusai/urusai-2.ogg";
		player.play();
    })
})
//Credit to: https://api.ifdream.net/project/hh/dontpressf12.js
