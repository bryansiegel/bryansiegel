��~\<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"894";s:11:"post_author";s:1:"2";s:9:"post_date";s:19:"2016-06-18 18:31:12";s:13:"post_date_gmt";s:19:"2016-06-18 18:31:12";s:12:"post_content";s:12147:"If this is your first time here check out my post for <a href="http://bryansiegel.com/2014/12/living-in-appleland/">living in Appleland</a>. It highlights my personal decisions for choosing Apple products for my personal life. But what about Apple in the Enterprise? Or Apple in the small business? First let me explain the very existence of this post. My job title is "Director of Technology". My job is to create and source technology solutions for my job. While searching for solutions for our business problems I didn't see one Apple provided solution. One common scenario I've see over the years is Executives tend to use Apple products while everyone else uses Windows. Those companies tend to use cloud based apps through the browser that are either on prem, in the cloud or a combination of both. But as a person responsible for my companies technical solutions the choices are astounding. If you've ever worked with an IT vendor before then you understand my pain. There is no one solution to rule them all which is where this post comes into play.

<strong>I'm not going to dumb down this article. Nor am I going to explain what an ERP is. This post is aimed toward a dream I have with like minded people that are in the tech industry. So if you're not technical this post isn't for you. If you hate Apple don't read this. If you want to nitpick every little thing I say go away. This post is a brain fart. It's only an idea relax. I don't make money posting blog articles. I don't have comments. This post is nothing but me shooting at the hip. A lightbulb of an idea that I had that would be fucking awesome. </strong>

I'm going to break up this post in sections because in order for Apple to get into the Enterprise they need to accomplish/aquire a few things first.
<h3>Apple's Cloud Solution</h3>
But did you know that iCloud isn't fully hosted by Apple? iCloud is hosted by Amazon and Google's Cloud services. The first thing Apple needs to do is fully host their own cloud solution.
<h3>iCloud Drive For Business</h3>
iCloud is really good for personal use but where is their business solution? I imagine iCloud Drive for business being a full file system in the cloud that masks the ssd based file system (if turned on). Where storage is managed in an iCloud dashboard or by the server in Apps (more on this later).
<h3>iCloud Drive For Business on MacOS Server</h3>
I'll get into what I would like OS X (or MacOS) server to be but in order to fully get my point across I need explain how iCloud business would integrate with server. So I explained how the whole filesystem would be iCloud enabled but there needs to be a way to manage it. That's where OS X (MacOS) server comes into play. You would get some control over iCloud Drive for business on the users machine (so that server isn't required) but for the Enterprisy/small business world server gives you the tools that business's need. Say for example someone is getting fired in a week. You want to give them access to their files but you don't want them to destroy/copy their files. The server admin/department admin can change their iCloud business settings on the fly without touching the users computer. Or another scenario is having a snap shot of the file system. So for example you have a customer service department. That department has a lot of turn around for whatever reason. There's basic documents they need such as passwords/training material or whatever basic documents a new hire would need. With server you can snapshot a filesystem and easily add that snapshot to a users account (more on user accounts later). Or say for example someone is getting fired. You can easily roll back to an earlier snapshot.
<h3>Apple's MacOS Server</h3>
I have zero experience nor have I ever installed OS X server. I've read a few pages about what it does so by no means does this section come from any insight. This is merely my idea. With that out of the way let me lay the ground work for what MacOS server should be.
<h3>Device, Computer and Cluster Management</h3>
Whether you're a company with 5 or 5,000 you need to manage computers and devices (devices are phones, tablets, scanners, watches, you get the idea). This is a no brainer, but one thing that business's need is computer/device monitoring. I know you may cringe but it's really important that a business knows what their employees are using with their devices. I'm not talking about a key logger. I'm talking about user intelligence.
<h3>App Store For Server</h3>
The sub heading kinda explains itself. An App store for server. I envision an App store for server that extends or enhances the functionality of your Servers capabilities. Where you can tailor your Enterprise system to your business needs.
<h3>ERP</h3>
Implementing an ERP is an IT professionals nightmare. There is never one size fits all and an ERP is essential for any business of scale to run efficiently. Microsoft has one (I literally threw up a little in my mouth) where you have to source an IT vendor in order to install it. Yeah there's no ISO to play around with it you have to call a sales person to demo it for you. Oh yeah and it sucks balls. Dynamics is like documentation of the old days where you needed to be a scientist to understand what the fuck is going on. Microsoft Dynamics is the essential money pit of old school Enterprise. It looked like a UI nightmare where a person who loves to work harder and not smarter would implement. Okay so you get the point. Microsoft Dynamics sucks. Then there's the countless other solutions out there. To make a long story short choosing the most important piece of software your company is a headache. This IMPO would be the crowning jewel of Apple in the Enterprise if they get it right. So here is my idea of an Apple based ERP.

Their ERP system would be build on Swift in a modular design. Each module would expose itself to the ui through an interface. That way we can have Apple ERP Apps from the MacOS Server Appstore. The ERP system would have a Rest Api to speak directly into the system (the system would need the ability to extend it hence giving rise to the Swift Enterprise developer). Instead of creating their own from scratch Apple needs to buy odoo but instead of using Python they need to use Swift. I could go on and on about features but Odoo or you can just go to their website <a href="https://www.odoo.com">https://www.odoo.com</a> (warning get ready to have your mind blown). I believe my fantasy Apple ERP system would include out of the box functionality.
<h3>Department Management</h3>
This is a direct Sharepoint/Alfresco idea. I like <a href="https://www.alfresco.com/products/community/download">Alfresco</a> more so I'll use them as a template to this idea. A little bit of backstory is that Alfresco is a document management/business process web application on crack. One thing I love about their system is this idea of <a href="http://docs.alfresco.com/4.1/concepts/sites-intro.html">sites</a>. Sites in a sense is a website based upon the master template. Sites also have this concept of (I'm calling it plugins) plugins. Where I can add say a wiki to a site that's only visible to that site. Each site has 3 basic permissions.
<ul>
 	<li>Anyone can see it and do stuff.</li>
 	<li> You have to be invited but you can still see it. Only invited members can do stuff.</li>
 	<li>You can't see it. Once invited you can do stuff.</li>
</ul>
I think Apple should use the concept of sites to create departments. Each department can have it's own plugin. Or screw the word plugin. Let's use the word App (see where the App store for server comes into play). Say the Apple provided CRM app sucks you can use a third party that plugs directly into server along with the permissions/rights to show/hide for a particular site.
<h3>Workflows</h3>
One thing that made Alfresco so great is <a href="http://docs.alfresco.com/4.2/concepts/wf-whatis-workflow.html">their workflow system</a>. Imagine a scenario where you have a new product. Your design team has to create the email, the sales team has to be notified and your web person must add the item to your website. How do you control the flow of that? Workflows. Alfresco has this great <a href="http://www.bataon.com/blogs/amandaluniz/easy-workflows-activiti-kickstart">drag and drop system</a> (even though you have to use eclipse to make it happen). Imagine within Xcode I can drag and drop business workflows and make those workflows accessible to only particular sites (which Alfresco doesn't do, workflows are accessible to everyone).
<h3>Setup</h3>
This section of my idea is where Apple can shine. In order for MacOS to work for small business this shit has to be stupid easy. I imagine a startup screen that will setup your MacOS server based upon the type of business that you are. The real money maker of this is a service where Apple creates the server for you.That's option 2. Custom development is moved to an Apple Implementation specialist.

So you've followed me this far. I still have more to go.
<h3>Swift Enterprise Development</h3>
You like that huh? I like the sound of an Apple based (open source) language career path. Through iTunes U Apple will train you and certify you. Not for free of course but affordable. One thing is that Apple could provide companies some type of kick back on services/cost that hire Jr. Swift Enterprise Developers that are certified (one idea to keep the quality high and provide a path for Jr's).
<h3>Swift is great for Apps but what about the web</h3>
<a href="http://rubyonrails.org">Ruby on Rails</a> (for me) changed how us web developers created websites. I think Apple could extend that idea by having a Appstore for web applications. One thing Rails did great was this idea of gems. So basically one line in your terminal (and other stuff I'm trying to simplify the idea) and you have a complete authentication system. All Website Apps (or whatever they're called) will be built around the Appstore model. This way Web developers would have a source of revenue. One thing that sucked about Ruby's gem system is that a gem wouldn't be updated. Because gems are Opensource. Don't get me wrong I love Opensource but the thing is open source a lot of the time is done in a developers spare time. People need money to survive. Let me see a show of hands of someone that would love to make money on their open source project. Or even work on it full time. Or even better how about making a million dollars doing it. Appstore Apps are doing it. Why not the web? How about an ecommerce website App. Blog App. Or screw it how about a Facebook clone website. All with integration into MacOS server. The person that should build this web framework should be <a href="http://taylorotwell.com">Taylor Otwell</a> the creator of Laravel. Why him? Taylor was a .Net guy that created by far the best framework of any language I've ever used. His approach to creating a high quality framework that's easy to grasp would be perfect for Apple. He did it in PHP. He can do it in Swift. I'm talking about a modular next gen framework written entirely in Swift. If you don't want to use the Web Appstore you don't have to. But if you do it will integrate with  MacOS server which gives you your ERP system that can be extended through Apps as well. Written in Swift. From website to Apps for Enterprise and mobile Apple could introduce two more additional streams of revenue. Why Apple? Because Apple has disrupted existing markets before. Web and Business need some love too.

Look I know this is just a pipe dream. Apple may even be working on this already. Maybe they have it and decided it was a stupid ass idea. No matter what the case modern web development is in shambles. If anything please save me from Javascript Web Frameworks. Bring me back to the good old days of drag and drop development. I miss you Asp.net web forms. Just kidding.

Please ignore my numerous spelling errors and grammar mistakes. I do this shit for fun and it's Saturday. I'll fix that crap later.

&nbsp;

&nbsp;

&nbsp;";s:10:"post_title";s:22:"Apple's Next Big Thing";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:21:"apples-next-big-thing";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-06-18 18:36:34";s:17:"post_modified_gmt";s:19:"2016-06-18 18:36:34";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:29:"http://bryansiegel.com/?p=894";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}