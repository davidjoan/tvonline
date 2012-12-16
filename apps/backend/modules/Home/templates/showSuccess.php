<div id="container"></div>

<script type="text/javascript">
jwplayer("container").setup({
modes: [
{ type: "flash", src: "/js/jwplayer5/player.swf" },
{ type: "html5" }

],
autostart: false,
volume: 80,
stretching: "fill",
height:"423",
width:"986",
skin: "/skins/glow/glow.zip",
file: "/perutvonline/playlist.xml",
repeat: "none",
"playlist.position": "right",
"playlist.size": "250",
"viral.onpause": false,
"viral.oncomplete": false,
"viral.allowmenu": false,
'plugins': {
       'metaviewer-1': {
           'position': 'left',
           'size': '200'
       }
    }
});
</script>