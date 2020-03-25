---
layout: post
title: How to make a HTML Skeleton Snippet in Textmate
date: 2011-07-21 03:02
comments: true
categories: []
---
<p>I reformatted my Mac in anticipation for Lion on my Mac and forgot to backup my snippets. One of my favorites and most often used is my html skeleton (beginhtml) snippet (I took the name from Jeremy Wray of Nettus during a CodeIgnitor tutorial a while back).</p>
<br />
<br /><p><strong>Step 1. </strong> Copy the code below</p><div  style=" padding-left:15px;color:grey;"><i>
<div style="width:500px;">
<br /><blockquote>
<br /><pre style='color:#000000;background:#ffffff;'><span style='color:#004a43; '>&lt;!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"</span>
<br /><span style='color:#004a43; '>&#xa0;&#xa0;&#xa0;"</span><span style='color:#5555dd; '>http://www.w3.org/TR/html4/loose.dtd</span><span style='color:#004a43; '>"></span>
<br />
<br /><span style='color:#a65700; '>&lt;</span><span style='color:#800000; font-weight:bold; '>html</span><span style='color:#274796; '> </span><span style='color:#074726; '>lang</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"en"</span><span style='color:#a65700; '>></span>
<br /><span style='color:#a65700; '>&lt;</span><span style='color:#800000; font-weight:bold; '>head</span><span style='color:#a65700; '>></span>
<br />    <span style='color:#a65700; '>&lt;</span><span style='color:#800000; font-weight:bold; '>meta</span><span style='color:#274796; '> </span><span style='color:#074726; '>http-equiv</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"Content-Type"</span><span style='color:#274796; '> </span><span style='color:#074726; '>content</span><span style='color:#808030; '>=</span><span style='color:#0000e6; '>"text/html; charset=utf-8"</span><span style='color:#a65700; '>></span>
<br />    <span style='color:#a65700; '>&lt;</span><span style='color:#800000; font-weight:bold; '>title</span><span style='color:#a65700; '>></span>${<span style='color:#008c00; '>1</span>:$}<span style='color:#a65700; '>&lt;/</span><span style='color:#800000; font-weight:bold; '>title</span><span style='color:#a65700; '>></span>
<br />    $<span style='color:#008c00; '>0</span>
<br /><span style='color:#a65700; '>&lt;/</span><span style='color:#800000; font-weight:bold; '>head</span><span style='color:#a65700; '>></span>
<br /><span style='color:#a65700; '>&lt;</span><span style='color:#800000; font-weight:bold; '>body</span><span style='color:#a65700; '>></span>
<br />
<br /><span style='color:#a65700; '>&lt;/</span><span style='color:#800000; font-weight:bold; '>body</span><span style='color:#a65700; '>></span>
<br /><span style='color:#a65700; '>&lt;/</span><span style='color:#800000; font-weight:bold; '>html</span><span style='color:#a65700; '>></span>
<br /></pre></blockquote>
<br /></i>
<br /></div>
<br /><p><strong>Step 2.</strong> In Textmate select bundles &gt; bundle editor &gt; edit snippets. Click on the + sign in the lower-left hand corner. Paste the code from above. Double Click on the currently highlighted snipped (it should be untitled and name it beginhtml (or whatever you want). Make sure that under activation it says "Tab Trigger".</p>
<br /><p><strong>Step 3.</strong> Click on the close button, open a new textmate file (make sure it's in Html editing mode). type in "beginhtml" and then tab.</p>
<br /><p>So that's pretty much it. Enjoy</p></div>
