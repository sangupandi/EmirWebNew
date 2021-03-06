<?php
include_once("Widgets/Post.php");

class Data {

	public static function getOtherPosts(){
		$other = array(
		Post::getPostModel('New web site design',mktime(0,0,0,12,27,2011),'I\'ve been working hard to get this new design out. <p>COPYRIGHT (C) 2008 SITENAME.COM. ALL RIGHTS RESERVED. DESIGN BY CSS TEMPLATES.</p>', null, null,null, 'Images/Redesign/thumbnail.png')
		);
		uasort($other, 'Post::cmp');
		return $other;
	}

	public static function getBlogPosts(){
		$blogs = array(
		
		

		Post::getPostModel('The power and structure of push: A second screen solution.', mktime(0,0,0,01,05,2014) ,'<a href="http://en.wikipedia.org/wiki/Second_screen">Second screen</a> has been a buzzword for quite some time and rightfully so. Getting our tech gadgets to work as one has always been a desire. With the adoption of phones as the dominant personal computer over the last few years, we\'ve naturally wanted to connect everything to them.', "SecondScreen.php",null,null, 'Images/SecondScreen/thumbnail.png'),
		Post::getPostModel('My Google Glass Interview on "The Lang & O\'Leary Exchange".', mktime(0,0,0,07,19,2013) ,'Toronto technology firm Xtreme Labs got its hands on Google\'s latest invention: a hands-free wearable computer that looks like glasses.', "http://www.cbc.ca/player/News/TV+Shows/Lang+%26+O%27Leary+Exchange/ID/2397482913/",null,null, 'Images/GoogleGlass/thumbnail.png'),
		Post::getPostModel('Clicks and Glass: Four Things to Consider When Developing Apps for Google Glass.', mktime(0,0,0,07,05,2013) ,'You\'ve seen the reviews, the keynotes, the videos and the endless debates on whether this sci-fi tech-like innovation is a solution, a problem, or just an unfinished idea. Yet, we all can agree that Google\'s Project Glass, deemed to be the next hot personal computing device after iPhone\'s big break in 2007 and lauded to be at the forefront of technology for years to come, has the attention of the entire world. Consumers and professionals of all kinds are gawking at the ability to connect to the digital world with literally the blink of an eye.
Yet, Google Glass is still out of reach for most.', "GoogleGlass.php",null,null, 'Images/GoogleGlassClick/thumbnail.png'),
		Post::getPostModel('IBM\'S predictions on upcoming computer innovations.', mktime(0,0,0,12,19,2012) ,'Computers are about to become a lot more human if IBM\'s annual "5 in 5" predictions are to be believed. The technology company\'s researchers have predicted that within five years computers will smell, hear and offer a touch experience that mimics real-world textures.', "http://www.marketingmag.ca/news/media-news/ibms-predictions-on-upcoming-computer-innovations-68595",null,null, 'Images/IBM/thumbnail.png'),
		Post::getPostModel('Practical Android Design', mktime(0,0,0,06,19,2013) ,'I have received many mocks for Android applications that were beautiful but did not translate appropriately to devices. The mocking/design process tends to happen separately or before the development process and reconciling the two can become a timely process. Designs also set expectations and imply flows that do not always translate to the development paradigms Android enforces. Here are a few concrete steps that will help you minimize some of the churn.', "AndroidDesign.php",null,null, 'Images/AndroidDesign/thumbnail.png'),
		Post::getPostModel('Google TV: The Full Monty', mktime(0,0,0,05,02,2012) ,'Some time has passed since my <a href="GoogleTV.php">initial investigation</a> of Google TV.
		While this is still relevant, a lot is happening. <a href="http://en.wikipedia.org/wiki/Original_equipment_manufacturer">OEM</a>s are starting to
		show their support with different Google TV implementations and Google has also kept their partners busy
		with newer operating system releases.', "GoogleTV2.php",null,null, 'Images/GoogleTV/thumbnail2.png'),
		// 		Post::getPostModel('AAAGHHH -Blew it on 5 wolves.....', mktime(0,0,0,12,26,2011) ,'I went hunting in <a href="http://maps.google.ca/maps?q=wawa+ontario&um=1&ie=UTF-8&hq=&hnear=0x4d470a56353969c7:0x633c8d94fc5a0f15,Wawa,+ON&gl=ca&ei=JWf7TtvhDI_bggeZmLWCAg&sa=X&oi=geocode_result&ct=title&resnum=1&ved=0CDMQ8gEwAA">Wawa Ontario</a> here is the story written by charlie about our experiences.', "Wolves.php",null,null),
		Post::getPostModel('Java Threads: An Inconvenient Truth', mktime(0,0,0,03,10,2012) ,'With the traditional c model one could <a href="http://linux.die.net/man/2/fork">fork()</a>. This would create a child and parent, the child would copy the parent\'s memory space and they would communicate through sockets, which were essentially files. <a href="http://linux.die.net/man/2/vfork">vfork()</a> would allow them to share the same memory space, but one at a time. Then there are also <a href="http://linux.die.net/man/3/exec">exec()</a> and <a href="http://linux.die.net/man/2/clone">clone()</a> that would similarly launch processes and allow for communication between them. Accurate communication proved to be very difficult, so eventually <a href="http://en.wikipedia.org/wiki/POSIX">POSIX</a> threads came to be. They brought <a href="http://en.wikipedia.org/wiki/Mutual_exclusion">mutex locks</a> and <a href="http://en.wikipedia.org/wiki/Semaphore_(programming)">semaphores</a> to help with communication (locking). These are all very low end principles and implementing them takes a lot of care and consideration.', "JavaThreads.php",null,null, 'Images/JavaThreads/thumbnail.png'),
		Post::getPostModel('Google TV Review', mktime(0,0,0,12,27,2011) ,'Google TV is a multimedia centre that takes in an HDMI feed and overlays it with the Android operating system. It attempts to connect to and communicate with a settop box (cable box) through the connecting HDMI cable. It reads channel information and controls the box by changing channels. Some Google TV devices, such as the Logitech Revue, have the ability to control your television as well. By integrating Google TV into a home theatre system, you have the ability to host native android applications and experience Chrome through your television. To interact with the device, users are given a keyboard and mouse in one controller. The controller is a standard keyboard which has had the arrow keys and numerical pad replaced with a digital arrow pad and a laptop-styled touch-pad mouse.', "GoogleTV.php",null,null, 'Images/GoogleTV/thumbnail.png'),
		Post::getPostModel('Android Tutorial', mktime(0,0,0,12,22,2011) ,'Android is a framework that provides java programmers the ability
				to control different aspects of smart devices. This interaction
				happens through the Android SDK (Software Development Kit). Learn how to make an end to end experience with this tutorial.', "AndroidTutorial.php",null,null, 'Images/AndroidTutorial/thumbnail.png')

		);
		uasort($blogs, 'Post::cmp');
		return $blogs;
	}

	public static function getProjectPosts(){
		$projects = array(
		Post::getPostModel('Device Wall: A second screen experiment.',mktime(0,0,0,16,01,2014),'Recently <a href="http://pivotallabs.com/">Pivotal Labs</a> decided to push mobile devices to the limit by connecting multiple devices to one other in order to have them behave as one. Through the use of image recognition, optical character recognition, persistent low cost connections and a whole lot of ingenuity Pivotal Labs was able to put together an innovative and unique experience. Below, we have collected all the accounts of the key individuals involved in bringing to life this piece of innovation and technology.',
		 "DeviceWall.php", null, "https://github.com/EmirWeb/DeviveWallSuite", 'Images/DeviceWall/thumbnail.png'),
		
		Post::getPostModel('Android Device Screen Sizes',mktime(0,0,0,6,12,2013),'This page is a compliment to the <a href="#">Screen Size</a> Android
application. The <a href="https://github.com/EmirWeb/ScreenSize">client code</a> can be found on github as
well as the <a href="https://github.com/EmirWeb/ScreenSizeServer">server code</a> that receives and displays the
data. You can also use the following <a href="#">api call</a> to pull
the full set of data down.', "ScreenDeviceStatistics.php", null, "https://github.com/EmirWeb/ScreenSizeServer", 'Images/ScreenSizes/thumbnail.png'),
		Post::getPostModel('Twitter Reader',mktime(0,0,0,12,22,2011),'Twitter Reader was built as a part of the <a href="AndroidTutorial.php">Android Tutorial</a>. It searches twitter for key words using the <a href="https://dev.twitter.com/docs/api/1/get/search">Twitter search API</a>.', "TwitterReader.php", "https://market.android.com/details?id=emirweb.twitterreader&feature=search_result#?t=W251bGwsMSwyLDEsImVtaXJ3ZWIudHdpdHRlcnJlYWRlciJd", "https://github.com/EmirWeb/Twitter-Reader", 'Images/TwitterReader/thumbnail.png'),
		Post::getPostModel('Little Droid Physics',mktime(0,0,0,12,25,2011),'The idea behind droid physics was to offer a simple physics
					environment that would aid early high school students to understand
					some of the properties of physics. In particular, acceleration,
					projectile motion and Friction.', "LittleDroidPhysics.php", "https://market.android.com/details?id=com.maker&feature=search_result#?t=W251bGwsMSwxLDEsImNvbS5tYWtlciJd", "https://github.com/EmirWeb/little_physics", 'Images/LittleDroidPhysics/thumbnail.png'),
		Post::getPostModel('Canada TV',mktime(0,0,0,12,25,2011),'See the results of my initial work with Google TV. This Application allows Google TV users in Canada to access their TV schedules.', "CanadaTV.php",
		"https://market.android.com/details?id=canada.tv","https://github.com/EmirWeb/Canada-TV", 'Images/CanadaTV/thumbnail.png'),
		Post::getPostModel('Little Droid Creator',mktime(0,0,0,12,25,2011),'Little Droid Creator was designed to showcase the dynamic engine
					on which it runs. This document will first describe at a high level
					what the game offers then we will dig down into the technical
					aspects of the program and talk about how it offers the high level
					aspects', "LittleDroidCreator.php","https://market.android.com/details?id=com.littledroid","https://github.com/EmirWeb/little_physics", 'Images/LittleDroidCreator/thumbnail.png'),
		Post::getPostModel('Star Fighter (JavaScript)',mktime(0,0,0,12,1,2010),'StarFighter (JavaScript) available online for first time. This game was designed to show case the web development knowledge I had acquired while working with <a href="http://www.visibli.com"  target="_blank">Visibli</a>. One of the things to note is the async loop class. It demostrates how scope and threading works in JavaScript.', "StarFighter.php",null,null, 'Images/StarFighter/thumbnail.png')
		);
		uasort($projects, 'Post::cmp');

		return $projects;
	}

	public static function getAllPosts(){
		$blogs = self::getBlogPosts();
		$projects = self::getProjectPosts();
		$others = self::getOtherPosts();
		$posts = array();

		foreach ($projects as $project) {
			array_push($posts, $project);
		}

		foreach ($blogs as $blog) {
			array_push($posts, $blog);
		}

		foreach ($others as $other) {
			array_push($posts, $other);
		}

		uasort($posts, 'Post::cmp');

		return $posts;
	}

}
