const header = document.querySelector("header");
const selectionOne = document.querySelector("home-intro");

const header = document.querySelectorAll(".fade-in");


const sectionOneOptions = {
	rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(entries,sectionOneObserver)
	{
		entries.foreach(entry =>{
			if(!entry.isInstersecting){
				header.classlist.add("nav-scrolled");
			}else{
				header.classlist.remove("nav-scrolled");
			}
		});
	},sectionOneOptions);

sectionOneObserver.observe(selectionOne);

const apperOptions = {};

const appearOnScroll = new IntersectionObserver
(function(entries,appearOnScroll){},
	apperOptions)