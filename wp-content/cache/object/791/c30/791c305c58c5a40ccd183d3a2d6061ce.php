8ç~\<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"455";s:11:"post_author";s:1:"2";s:9:"post_date";s:19:"2013-05-26 02:55:52";s:13:"post_date_gmt";s:19:"2013-05-26 02:55:52";s:12:"post_content";s:1875:"Ubuntu is my favorite OS. When I run Ubuntu I tend to run it on a Macbook Pro. What drove me completely mad with this setup was how crappy the touchpad worked. Most of the time out of no where the curser would jump all over the screen. I <a href="http://www.chris-reilly.org/blog/technotes/macbook-trackpad-in-ubuntu/">found this hack</a>Â which makes working with Ubuntu a pleasure.

First
<div>
<div>
<table>
<tbody>
<tr>
<td><code>sudo apt-get install xserver-xorg-input-mtrack</code></td>
</tr>
</tbody>
</table>
</div>
</div>
Then
<div>
<div>
<table>
<tbody>
<tr>
<td><code>sudo gedit /etc/X11/xorg.conf</code></td>
</tr>
</tbody>
</table>
</div>
</div>
Add this to the bottom of the file
<pre>Section "InputClass"
	MatchIsTouchpad "on"
	Identifier      "Touchpads"
	Driver          "mtrack"
	Option          "Sensitivity" "0.55"
	Option		"FingerHigh" "12"
	Option		"FingerLow" "1"
	Option          "IgnoreThumb" "true"
	Option          "IgnorePalm" "true"
	Option          "TapButton1" "0"
	Option          "TapButton2" "0"
	Option          "TapButton3" "0"
	Option          "TapButton4" "0"
	Option          "ClickFinger1" "1"
	Option          "ClickFinger2" "3"
	Option          "ClickFinger3" "3"
	Option          "ButtonMoveEmulate" "false"
	Option		"ButtonIntegrated" "true"
	Option          "ClickTime" "25"
	Option          "BottomEdge" "25"
	Option		"SwipeLeftButton" "8"
	Option		"SwipeRightButton" "9"
	Option		"SwipeUpButton" "0"
	Option		"SwipeDownButton" "0"
	Option		"ScrollDistance" "75"
EndSection

And Finally</pre>
<pre>sudo restart lightdm</pre>
<pre>You can tweak the following configuration file above by reading the documentation <a href="https://github.com/BlueDragonX/xf86-input-mtrack/blob/master/README.md">https://github.com/BlueDragonX/xf86-input-mtrack/blob/master/README.md</a></pre>";s:10:"post_title";s:73:"Fix the crappy touchpad behavior when using Ubuntu 13.04 on a Macbook Pro";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:73:"fix-the-crappy-touchpad-behavior-when-using-ubuntu-13-04-on-a-macbook-pro";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-08 02:37:21";s:17:"post_modified_gmt";s:19:"2013-11-08 02:37:21";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:29:"http://bryansiegel.com/?p=455";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}