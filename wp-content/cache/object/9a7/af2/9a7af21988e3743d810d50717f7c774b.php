fè~\<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"297";s:11:"post_author";s:1:"2";s:9:"post_date";s:19:"2013-01-11 05:00:45";s:13:"post_date_gmt";s:19:"2013-01-11 05:00:45";s:12:"post_content";s:826:"How about that for a title:-) Anyway I'm back on Windows and needed the git bash to open Sublime Text 2 and login to mysql (under Xampp) from the git bash. Since I couldn't find any info online on how to do this I decided to write a short post on how you can accomplish this yourself. First off if you have git and the git bash you need to either create or edit your .bash_profile. If it's a new install of the git bash then you'll need to create this file within your favorite text editor. In that file copy and paste my code


alias subl="/c/Program\ Files/Sublime\ Text\ 2/sublime_text.exe"
function mysql(){
	cd /c/xampp/mysql/bin/;
	mysql.exe -u root -p;
}

and presto chango you can login to mysql from your git bash by typing in "mysql" or you can open up a directory in sublime text 2 by typing "subl . &amp;"";s:10:"post_title";s:64:"Run Sublime Text 2 and login to mysql with git bash on Windows 7";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:66:"run-sublime-text-2-and-login-to-mysql-with-git-bash-with-windows-7";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2013-11-08 02:37:22";s:17:"post_modified_gmt";s:19:"2013-11-08 02:37:22";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:29:"http://bryansiegel.com/?p=297";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}