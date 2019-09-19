$(document).ready(function(){
	
	function showdropdown()

	{
		document.getElementById("menu").classList.toggle("show");
	}

	window.onclick = function(event)
	{
		if (!event.target.matches(".dropdown-btn")) 
		{
			var dropdwn = document.getElementsByClassName("dropdown-content");
			var i;
			for(i=0; i<dropdwn.length; i++)
			{
				var openDrpdwn = dropdwn[i];
				if (openDrpdwn.classList.contain('show')) 
				{
					openDrpdwn.classList.remove('show');
				}
			}
		}
	}
		

	$(".tabs").each(function() 
	{
		$(this).find('li:first').addClass("active");
		$(this).next('.tab-container').find('.tab-content').hide();
		$(this).next('.tab-container').find('.tab-content:first').show();
	});

	$(".tabs li a").click(function() {
		$(".tab-content").hide();
		var cTab = $(this).closest('li');
		cTab.siblings('li').removeClass("active");
		cTab.addClass("active");
		cTab.closest('.tabs').nextAll('.tab-container:first').find('.tab-content').hide(); 

		var activeTab = $(this).attr("href");
		$(activeTab).fadeIn();
		return false;
	});

});

$(document).ready(function()
{
	"use strict";

	/* 

	1. Vars and Inits

	*/

	var header = $('.header_top');
	var menuActive = false;
	var menu = $('.menu');
	var burger = $('.hamburger');

	setHeader();

	$(window).on('resize', function()
	{
		setHeader();
	});

	$(document).on('scroll', function()
	{
		setHeader();
	});

	initMenu();
	initHeaderSearch();


	/* 

	2. Set Header

	*/

	function setHeader()
	{
		if($(window).scrollTop() > 200)
		{
			header.addClass('scrolled');
		}
		else
		{
			header.removeClass('scrolled');
		}
	}

	/* 

	3. Init Menu

	*/

	function initMenu()
	{
		if($('.menu').length)
		{
			var menu = $('.menu');
			if($('.hamburger').length)
			{
				burger.on('click', function()
				{
					if(menuActive)
					{
						closeMenu();
					}
					else
					{
						openMenu();

						$(document).one('click', function cls(e)
						{
							if($(e.target).hasClass('menu_mm'))
							{
								$(document).one('click', cls);
							}
							else
							{
								closeMenu();
							}
						});
					}
				});
			}
		}
	}

	function openMenu()
	{
		menu.addClass('active');
		menuActive = true;
	}

	function closeMenu()
	{
		menu.removeClass('active');
		menuActive = false;
	}

	/* 

	4. Init Header Search

	*/

	function initHeaderSearch()
	{
		if($('.search_button').length)
		{
			$('.search_button').on('click', function()
			{
				if($('.header_search_container').length)
				{
					$('.header_search_container').toggleClass('active');
				}
			});
		}
	}
});

