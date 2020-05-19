	new WOW().init();

		$('.myCalendar').calendar({
		  date: new Date(),
		  autoSelect: false, // false by default
		  select: function(date) {
			console.log('SELECT', date)
		  },
		  toggle: function(y, m) {
			console.log('TOGGLE', y, m)
		  }
		})


	var mybutton = document.getElementById("myBtn");
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
	  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
		mybutton.style.display = "block";
	  } else {
		mybutton.style.display = "none";
	  }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}
