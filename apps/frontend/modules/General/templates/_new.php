<script>
    function live()
    {
    
        jwplayer("container").remove();
            
        jwplayer("container").setup({
        modes: [
        { type: "flash", src: "/js/jwplayer/player.swf" },
        { type: "html5" }

        ],        
            autostart: true,
            volume: 80,
            file: "perutvonline.sdp",
            height:"323",
            provider: "rtmp",
            streamer: "rtmp://883286553.p.cdnstreaming.net/live-883286553",
            width:"586",
            skin: "/skins/glow/glow.zip",
        });
            
    }
</script>

<?php if ($video <> null): ?>
    <div class="ban7txt">
        <a href="#"><img src="/images/frontend/new.gif" height="18" /></a>&nbsp;&nbsp;
        <b><?php echo link_to_function($video->getTitleEs(), 'live()'); ?></b>
    </div>

<?php endif; ?>