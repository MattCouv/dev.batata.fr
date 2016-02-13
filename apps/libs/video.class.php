<?php 
	/**
	* 
	*/
	class Video
	{
		private $video_url;
		private $video_id;
		function __construct($video_url)
		{
			$this->video_url = $video_url;
		}
		function get_videoID()
		{
			$this->video_id = str_replace('https://www.youtube.com/watch?v=', '', $this->video_url);
			return $this->video_id;
		}
	}

 ?>