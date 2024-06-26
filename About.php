<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input3.css">
    <script src="https://cdn.tailwindcss.com"></script>


    <title>Document</title>
</head>
<body>
  <!-- component -->
<!-- This is an example component -->
<div class="contain" >


<nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-white font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-36 pt-4 flex space-x-10  justify-end ">
      
             
         <a href="index.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>
          <!-- <a href="About.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">About</li></a> -->
          <a href="Notification1.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a>
          <!-- <a href="Registration.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Registration</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
</nav>
</div>


	<h1 class="text-center text-4xl mt-8 italic underline decoration-double text-blue-600">About</h1>
<div class=" mx-auto  p-16 mt-14 rounded">

	<div id="accordion-collapse"  data-accordion="collapse">
		<h2 id="accordion-collapse-heading-1">
			<button type="button" class="flex items-center focus:ring-4 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border-2 border-pink-500  dark:border-black border-b-0 text-black dark:text-black bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-black rounded-t-xl" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
      <span>Who We Are?</span>
      <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
		</h2>
		<div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
			<div class="p-5 border border-pink-500 dark:border-pink-500 dark:bg-gray-900 border-b-0">
				<p class="mb-2 text-white dark:bg-white">We are the students who built this website to provide free to access the Question-paper and the Study-Materials for who are preparing for the the PGCET Exam.</p>
				<p class="mb-2 text-white dark:text-white">We are providing safe Environment to examine into our web pages which contain colourfull desingn and other neccesary things that is reqired for the prepration.</p>
				<p class="text-white dark:text-white"> <a href="Registration.html" target="_blank"
						class="text-blue-600 dark:text-blue-500 hover:underline">get-started</a> to acess all the content of our beatiful website. </p>
			</div>
		</div>
		<h2 id="accordion-collapse-heading-2">
			<button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium border border-pink-500 dark:border-black border-b-0 text-left text-white dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-black" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
      <span>Services We Provide
	  </span>
      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
		</h2>
		<div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
			<div class="p-5 border border-pink-500 dark:border-black border-b-0">
				<p class="mb-2">
					<h1 class="text-white">Main Services are:</h1>
					<ul class="pl-5 text-white ">
						<li>* Exam Details </li>
						<li>* Exam Notification</li>
						<li>* View and Free to Download Question Papers</li>
						<li>* Free Acess to Study-Materials</li>
					</ul>
				</p>
				<p class="text-gray-500 dark:text-gray-400"> <a href="https://flowbite.com/figma/"
						target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline"></a>
					<!-- based on the utility classes from Tailwind CSS and components from Flowbite.</p> -->
			</div>
		</div>
		<h2 id="accordion-collapse-heading-3">
			<button type="button" class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-pink-500 dark:border-black justify-between p-5 w-full font-medium text-left text-white dark:text-white hover:bg-gray-100 dark:hover:bg-gray-800 hover:text-black" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
      <span>Contact Us</span>
      <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
		</h2>
		<div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
			<div class="p-5 border border-pink-500 dark:border-black border-t-0">
				
				<p class="mb-2 text-white dark:text-gray-800">You can ContanctUs through this Mail:</p>
				<ul class="list-disc pl-5 dark:text-gray-400">
					<li><a href="skhegde@gmail.com" target="_blank"
							class="text-blue-600 dark:text-blue-500 hover:underline">skhegde@gmail.com</a></li>
					<li><a href="pavanhegde@gmail.com" rel="nofollow" target="_blank"
							class="text-blue-600 dark:text-blue-500 hover:underline">pavanhegde@gmail.com</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- <p class="mt-5">This accordion component is part of a larger, open-source library of Tailwind CSS components. Learn
		more
		by going to the official <a class="text-blue-600 hover:underline"
			href="https://flowbite.com/docs/getting-started/introduction/" target="_blank">Flowbite Documentation</a>.
	</p> -->

	<script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>
</div>
  </div>
</body>
</html>