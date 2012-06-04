<?php
/**
 * VideoHelper.
 *
 * @package    symfony
 * @subpackage helper
 * @author     Tomasz Ducin <tomasz.ducin@gmail.com>
 */

/**
 * Returns the path to a video asset.
 *
 * @param string $source   asset name
 * @param bool   $absolute return absolute path ?
 *
 * @return string file path to the video file
 */
function video_path($source, $absolute = false)
{
  return _compute_public_path($source, sfConfig::get('sf_web_video_dir_name', 'sfVideoPlugin'), 'flv', $absolute);
}

?>
