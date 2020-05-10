$(function() {
	/* load the portfolio modals */ 
	$('#caskaid').on('click', function(e){
		var image = $('#caskaid').attr('src');
		e.preventDefault();
		$('#image').attr('src',image);
		$('#image').attr('alt', 'Caskaid');
		$('#title').html('CASKAID');
		$('#content').html('The Caskaid CRM was built to help with the process of invoicing and processing orders for Moorhouses brewery. A sole project to re-develop the system and move to a Laravel framework; implementation of new features such as CRUD user functionality, product management, stock control and dashboard reporting. Several case studies were analysed in order to remove any outstanding and persistent issues within the current system to make the new CRM more efficient.');
		$('#portfolio_modal').modal('show');
	});

	$('#creditknight').on('click', function(e){
		var image = $('#creditknight').attr('src');
		e.preventDefault();
		$('#image').attr('src',image);
		$('#image').attr('alt', 'Creditknight');
		$('#title').html('CREDITKNIGHT');
		$('#content').html('Creditknight is a debt collection system for tracking and resolving overdue or outstanding invoices. The original system was built with CodeIgniter 2.0 with several issues arising throughout. Another sole project to re-develop, update and move to the Laravel framework. Workflows were added to automate services throughout the system in a bid to make tasks more efficient for the end user.');
		$('#portfolio_modal').modal('show');
	});

	$('#ge').on('click', function(e){
		var image = $('#ge').attr('src');
		e.preventDefault();
		$('#image').attr('src',image);
		$('#image').attr('alt', 'General Electric');
		$('#title').html('GENERAL ELECTRIC');
		$('#content').html('The GE Aviation Invoicing Gateway allows for airlines such as British Airways, Delta and Virgin Atlantic to order parts, book servicing and view invoices for their plane engines via GE Aviation. The site was built using the BigCommerce CRM with a custom GE boilerplate template being applied for styling and continuity of the GE brand. The GE template was built to allow sites to be designed, developed and pushed to live within a few days.');
		$('#portfolio_modal').modal('show');
	});

	/* scrolling */
	$(document).on('click', '#scroll', function(){
		var offset = 20;
	    $('html, body').animate({
	        scrollTop: $("#about").offset().top + offset
	    }, 1000);
	});

	/* mobile modal */
	$('#mobile').on('click', function(e){
		e.preventDefault();
		$('#mobile_modal').modal('show');
	});
});