<div id="container"></div>

<script type='text/javascript'>
    jwplayer('container').setup({
        playlist: "/perutvonline/playlist.xml",
        primary:"flash",
        autostart: true,
        repeat: "always",
        height:"323",
        width:"586"
    });

    jwplayer().onReady(function() {
        var seconds = new Date().getMinutes()*60 + new Date().getSeconds();
        var playlist = this.getPlaylist();
        var offset = 0;
        for (var index=0; index < playlist.length; index++) {
            var duration = Math.round(playlist[index]['duration']);
            if(offset + duration > seconds) {
                this.playlistItem(index);
                this.play();
                break;
            } else {
                offset += duration;
            }
        }
    });
</script>