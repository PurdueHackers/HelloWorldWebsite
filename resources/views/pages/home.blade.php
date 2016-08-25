@extends("app")

@section("content")

<div class="navHome">
	<a href="/join" class="button btn-lg" style="margin-right: 100px;">Sign Up</a>
	<a href="/login" class="button btn-lg">Log In</a>
</div>

<div class="welcome">
	<div class="left">
		<img src="/images/HW/rocket_fade_s.png" alt="rocket" class="rocket">
	</div>
	<div class="right">
		<h1>Hello World</h1>
		<h2>A weekend dedicated to introduce you to a world of technology</h2>
		<a href="/join" class="button btn-lg">Sign Up</a>
	</div>
</div>

<div class="cloud1 cloud">
	<div class="info clearfix"></div>
</div>

<div class="cloud2 cloud ">
	<div class="info clearfix">
		<div class="left">
			<img src="images/HW/logo_final_s.png" alt="hello world" class="logo">
		</div>
		<div class="right">
			<h2>What is Hello World?</h2>
			<p>Hackathons provide a great opportunity to improve your tech skills and meet like-minded peers and companies. Unfortunately many people are nervous to attend their first hackathon.<br><br>
				Hello World is a 24 hour introductory hackathon that introduces you to the format of a hackathon as well as provides a helpful atmosphere for you to create your first real life application at a hackathon.
			</p>
		</div>
	</div>
</div>

{{--
<div class="timeline">
	<h1>Pre-Event Schedule</h1>
	<div class="contain">
		<img src="images/HW/timeline.svg">
		<div class='right'>
			<a class="link-other"href="#">
				<p class='subhead'>September 6th</p>
				TBA
			</a><br><br><br><br><br>
			<a class="link-other"href="#">
				<p class='subhead'>September 7th</p>
				TBA
			</a><br><br><br><br>
			<a class="link-other"href="#">
				<p class='subhead'>September 8th</p>
				TBA
			</a><br><br><br><br>
			<a class="link-other"href="#">
				<p class='subhead'>September 9th</p>
				TBA
			</a>
			<br><br><br><br><br><br><br>
			<a class="link-other"href="#">
				<p class='subhead'>September 10-11th</p>
				Hello World
			</a>
		</div>
	</div>
</div>

--}}

<br><br><br><br><br>

<div class="faq clearfix">
	<h1>FAQ</h1>
	<div class="faq-left clearfix">
		<div class='faq-sec'>
			<p class="subhead">What is a hackathon?</p>
			<p>A hackathon is an event held for hackers to come together and create real life applications. These applications are then judged and can be awarded prizes by companies and judges appointed by the hackathon organizers. But the companies aren’t just
			there to judge, they normally assist people in using their technologies for their hackathon project as well as present tech talks.</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">Who is this event intended for?</p>
			<p>People who have never before participated in a hackathon. Hello World is intended as an introduction to the format of university hackathons.</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">What should I bring to the event?</p>
			<p>You’ll laptop and anything else that you use for coding such as chargers and phones.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">How do I sign up?</p>
			<p>You’ll need to register on this page, but Hello World will be a first come first serve event.</p>
		</div>
	</div>

	<div class="faq-right clearfix">
		<div class="faq-sec">
			<p class="subhead">Are you providing food?</p>
			<p>Hello World will provide lunch and dinner the first day, as well as late night snacks and breakfast and lunch on the second day.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Will there be teams? </p>
			<p> Yes! We highly encourage that you work with a team during Hello World. If you don’t come with a team already decided there will be time before coding officially starts for you to mingle and meet other hackers.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">What are the rules?</p>
			<p>You have to build your project from scratch, and may only code during the 24 hours allotted for coding. Furthermore you should only use resources freely available to everyone at the hackathon. And don’t forget to be polite and respectful of everyone at the event!</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Have another question? Feel free to contact:<br><br>
				<a href="mailto:purduehackers@gmail.com" class="button btn-sm">purduehackers@gmail.com</a>
			</p>
		</div>
	</div>
</div>

<div class="cloud3 cloud">
	<div class="info clearfix">
		<h2>Areas of Focus</h2>
		<p>
			While the mentors of Hello World will assist any project in any way we can, we will be giving major tech talks in these areas: iOS, Android, and web development.
			<br><br>
			Again free feel to focus on whatever interests you, but know that we will have significant resources for helping those interested in those three areas of coding.
		</p>
	</div>
</div>

<div class="cloud4 cloud">
	<div class="info clearfix">
		<h2>Mentors</h2>
		<p>Getting help from mentors can be an essential part of a hackathon. At Hello World, we will offer several mentors who specialize in various technologies to assist you with your project if you need help. Don’t be afraid to ask for assistance! We encourage every team to seek out help from mentors if they’re having trouble understanding a concept or how to implement a certain technology. A hackathon is a great place to learn new things, and we hope that you’ll take advantage of and learn a lot from our amazing mentors!</p>
		<br><br>
		<a class="link-other"href="/join">Sign Up</a>
	</div>
</div>

@stop
