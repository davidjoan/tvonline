<?php if($type == 'W' or $video_id == ''): ?>
<?php 
if($video_id == '')
{
  $video_str = sfConfig::get('app_video_stream');
}
else
{
  $vasx = explode(".",$video->getVideo());
  $asx = $vasx[0];
  $asx = $asx.".asx";  
  $video_str = sfConfig::get('app_video_asx').$asx;
} ?>
<?php if(sfConfig::get('app_video') == true): ?>
 <object 
	classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,5,715" 
        type="application/x-oleobject" width="320" height="309" align="bottom"
        standby="Loading Microsoft&reg; Windows&reg; Media Player components..." id="MPlay1">
                            <param name="FileName" value="<?php echo $video_str; ?>">
                            <param name="ShowDisplay" value="0">
                            <param name="ShowStatusBar" value="1">
                            <param name="StatusBar" value="0">
                            <param name="AnimationAtStart" value="0">
                            <param name="ShowAudioControls" value="1">
                            <param name="ShowPositionControls" value="1">
                            <param name="ShowControls" value="1">
                            <param name="AutoSize" value="0">
                            <param name="AutoStart" value="1">
                            <param name="AutoRewind" value="1">
                            <embed src="<?php echo $video_str; ?>" width="320" height="309"
                                        autostart=1 align="bottom" type="video/x-ms-asf-plugin"
                                        pluginspage="http://www.microsoft.com/windows/mediaplayer/download/default.asp"
                                        filename="<?php echo $video_str; ?>"
                                        showstatusbar=0
					showdisplay=0
					autosize=1
					showcontrols=0
                                        autorewind=1 statusbar="True" animationatstart="True" showaudiocontrols="True" showpositioncontrols="1"> </embed>
                          </object>
<?php endif; ?>
<?php elseif($video->getType() == 'U' or $video->getType() == 'V'): ?>
<?php echo $video->getVideo(); ?>
<?php endif; ?>
