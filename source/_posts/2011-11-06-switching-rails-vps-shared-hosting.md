---
layout: post
title: Switching from a Rails VPS to Shared Hosting
date: 2011-11-06 04:08
comments: true
categories: []
---
<strong>Update: August 10th 2012</strong>
<p>I've joined <a href="http://railsplayground.com/" title="Railsplayground">Railsplayground</a>. I'm real happy so far. Once I get some more time I plan on writing up an article.</p>

<strong>Update: June 27th 2012</strong>

<em>Hosting Rails is part of Jumpline now. I just contact customer support and they no longer offer Ruby on Rails hosting.</em>

For the last year or two (I'm getting old I can't remember crap) I've been doing allot of Ruby on Rails development. When I first got into Ruby on Rails I loved it. It was easy to create a basic CRUD application, the DRY (don't repeat yourself) methodology and above all else the structure of a Rails app. If I were to look at someone else's Rails app I'd immediately know where to look to see how the thing was put together. I can't express how many times I've almost thrown up after looking at other people's Asp.net and PHP code. With all of that said the one thing that urks me is how much of a cluster fuck it is to host a rails app.
<h3>The Shittiest Part of Ruby on Rails is hosting</h3>
I spent allot of money my first month of rails development. Primarily because I had a hard time finding a good host. I didn't feel like becoming a system admin so that I could get a few of my rails apps online. After my long search I decided to go with <a title="Webbynode" href="http://webbynode.com/">Webbynode</a>. Webbynode was by far the easiest way (at the time) to host my rails apps. I've had a few problems with Webbynode for the last couple of months and decided it was time to move onto another host. This time instead of a VPS I decided I wanted to see how the shared hosting offerings were nowaday's.
<h3>Why a Shared Host</h3>
I build allot of Ruby on Rails applications under lock and key. Most of them finished some of them not. I tend to get an idea, build the application, hit a road block then I dump the project for awhile and come back to it later. I needed a host where I have an unlimited amount of domains for my Ruby on Rails applications. Bandwidth isn't a concern because I don't advertise any of my Ruby on Rails applications.
<h3>Shared Hosting isn't that bad anymore</h3>
While Shared hosting was a pain when I first started Rails dev it isn't that bad anymore. I looked around at a few hosts and contacted support to see how fast they responded and decided to go with <del>Hosting Rail</del>s (Hosting Rails is now Jumpline they no longer support Rails hosting). It was $9.95 U.S. on a month to month basis and it's real easy to setup a Rails application.
<h3>The Account Screen</h3>
Once you log into your account you'll be greeted with your account information such as your name, phone number and address. While the login screen is looks old it's simple and to the point which is different than Godaddy's bloated back end system.
<h3>My Products Tab</h3>
Things start to get interesting under the My Products tab. This is pretty much the gateway to your cpanel and administration controls. Under the view details tab is where you can edit ftp information, edit your cpanel password and other administrative features. The control panel link takes you directly to their implementation of cpanel. For those that have worked on a LAMP stack have more than likely used cpanel before. What I found interesting though is the lack of nameserver information anywhere. Luckily your nameserver information was emailed to you once you opened the account. I could have missed it but I'm pretty sure it's not anywhere within their administrative interfaces.
<h3>Initial Setup</h3>
This may sound strange but there was none. My application was already made for me. I logged into FTP and sure enough my basic application was there. All that I had to do was ssh into the server, upload my app and migrate mysql and presto my application was loaded and ready to go.
<h3>Conclusion</h3>
I'm pretty happy with Hosting Rails so far. The setup was painless and I love the fact that I have cpanel for my Rails apps.
