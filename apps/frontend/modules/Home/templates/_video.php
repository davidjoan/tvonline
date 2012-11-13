<div id="container"></div>

<script type="text/javascript">
jwplayer("container").setup({
modes: [
{ type: "flash", src: "/js/jwplayer/player.swf" },
{ type: "html5" }

],
autostart: true,
controlbar: "none",
volume: 80,
stretching: "fill",
height:"323",
width:"586",
skin: "/skins/glow/glow.zip",
file: "/perutvonline/playlist.xml",
repeat: "always",
"viral.onpause": false,
"viral.oncomplete": false,
"viral.allowmenu": false,
    events: {
        onPause: function(event) {
          jwplayer("container").play();}
    }
});

    jwplayer().onReady(function() {
        var seconds = new Date().getMinutes()*60 + new Date().getSeconds();
        var playlist = this.getPlaylist();
        var offset = 0;
        //this.stop();
        for (var index=0; index < playlist.length; index++) {
            var duration = Math.round(playlist[index]['duration']);
            if(offset + duration > seconds) {
                this.playlistItem(index);
                //window.document['container'].sendEvent('SEEK', Math.round(seconds-offset));


                //jwplayer().seek(Math.round(seconds-offset));
                //this.start(seconds-offset);
                this.play();
                break;
            } else {
                offset += duration;
            }
        }
    });
</script>