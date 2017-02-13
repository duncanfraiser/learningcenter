@extends('layouts.template')
@section('content')      
    <div class="col-md-11 pagedata" style=" background-color: #4cae4c;">
      @if(\Auth::Check())
        <a href="{{url('/news/create')}}"><button class="btn-danger adminbtn">Edit</button></a>
      @endif
       <h2>Curriculum</h2>
			<p>
			St. Paul Learning Center has nine classrooms:  Infant Room, Older Infant Room, Creeper Room, Toddler Room, Young Two Room, Older Two Room, Young Three Room, Older Three Room, and the Pre-school Room. Our philosophy is to teach the whole child. 
			</p>

			<h3>Infant Room/Older Infant Room</h3>
			<p>
				We help the infants develop by using activities to progress in eight key areas – communication, gross motor, fine motor, intellectual, discovery, social, self-help, and pretend. We use Beautiful Beginnings Curriculum.
			</p>
			<p>
				We offer a variety of toys, books, games, and objects to explore. Caregivers sing, read, and talk with the infants in addition to providing basic care and play. Children also spend time outside.  Television is not allowed in these rooms.
			</p>

			<h3>Creeper Room</h3>
			<p>
				Children in the Creeper Room continue to discover and learn about the world around them and focus on the seven areas of development begun in the Infant Room.  Activities to build communication, gross motor, fine motor, intellectual, discovery, social, and self-help skills are utilized. Children enjoy playing on the playground several times a day. They transition from cribs to sleeping on mats. Learning Biblical characters through songs, reciting nursery rhymes, responding to commands, enjoying books, and problem solving are a few examples of the activities the creepers do. Television time is limited and used only in conjunction with the theme for the day.   
			</p>

			<h3>Toddler Room</h3>
			<p>
				Toddlers are terrific!  In the Toddler Room children discover their world through communication, gross motor, fine motor, intellectual, discovery, social, self-help, and we add pretend activities.  They continue to enjoy playing outside on the playground.  Listening to books, doing puzzles, building blocks, marching with musical instruments are some of the activities the toddlers enjoy. Television time is limited and used only in conjunction with the theme of the day.
			</p>

			<h3>Two Year Old Rooms</h3>
			<p>
				The two year old classrooms encourage experiences that encourage learning through guided play and active discovery.  Children explore activity centers that include dramatic play, manipulative area, music, science, art, blocks, language, sand and water.  Children learn about Jesus through prayer, song and Bible stories. They enjoy gross motor activities on the playground and the gym.
			</p>
			<h3>PreK 3, PreK3-4, PreK4-5 Year Old Rooms</h3>
			<p>
				The prekindergarten classrooms' learning goals continue to build on language development through listening and understanding, speaking and communicating; literacy through phonological awareness, book knowledge and appreciation, print awareness and concepts, early writing and alphabet knowledge, math through number and operations, geometry and spatial sense, patterns and measurement, science, creative arts, music , along with development of self- concept, self-control, cooperation, social relationships, knowledge of families and communities, and opportunities to develop different approaches to learning and physical health.
			</p>
			<p>
				The prekindergarten classes participate in the “Catechesis of the Good Shepherd” religion program. This program focuses on the values of contemplation and enjoyment of God.
			</p>
			<p>
				Children usually stay in the same classroom from August through July but sometimes it is necessary to move to the next class during the school year.  Parents will be notified and the child will transition to the next class the week before they move up.
			</p>

    </div>  
@stop
