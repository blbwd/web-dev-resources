# FFMPEG / Convert Video 

**Convert the video to web friendly strict mode** 
ffmpeg -i oldvideo.mp4 -strict -2 newvideo.mp4 
  
**Compress video / Reduce video file size** 
ffmpeg -i sample.mp4 -s 640x480 -b:v 512k -vcodec mpeg1video -acodec copy sample-new.mp4 
  
**Convert mkv to mp4 video** 
ffmpeg -i inputvideo.mkv -codec copy output.mp4 
  

