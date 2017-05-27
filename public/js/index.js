var linkss = [
    "https://www.youtube.com/embed/a7d54_pJiTI",
    "https://www.youtube.com/embed/G8KpPw303PY",
    "https://www.youtube.com/embed/doAZt2wBHI4",
    "https://www.youtube.com/embed/R9NCI-naXbU",
    "https://www.youtube.com/embed/95ImXirddgU",
    "https://www.youtube.com/embed/S4IHB3qK1KU",
    "https://www.youtube.com/embed/njSyHmcEdkw",
    "https://www.youtube.com/embed/HQrY1muqaXs",
    "https://www.youtube.com/embed/4IP_E7efGWE",
    "https://www.youtube.com/embed/HAXshy_uC5A"
];

function changeVids() {


	var link1 = links[Math.floor(Math.random()*links.length)];
	var link2 = links[Math.floor(Math.random()*links.length)];

	while(link1 == link2) {
		link1 = links[Math.floor(Math.random()*links.length)];
		link2 = links[Math.floor(Math.random()*links.length)];
	}


	$("#vid1").attr("src", link1);
	$("#vid2").attr("src", link2);

	hideVotes();+
}


function showVotes() {
    var x = document.getElementById('show-votes1');
    var y = document.getElementById('show-votes2');
    if (x.style.display === 'none') 
        x.style.display = 'block';
    
    if (y.style.display === 'none')         
    	y.style.display = 'block';
    
}

function hideVotes() {
    var x = document.getElementById('show-votes1');
    var y = document.getElementById('show-votes2');
    if (x.style.display === 'block') 
        x.style.display = 'none';
    
    if (y.style.display === 'block')         
    	y.style.display = 'none';
    
}

function videoGrid(){
	var vot=1;
	for(var i=0;i<links.length;i++){
		 vot = Math.floor((Math.random() * 10000) + 100); 
		$("#video-grid ul").append('<li class="vid-li"><div class="vid"><iframe src="'+links[i]+'" frameborder="0" allowfullscreen></iframe><div class="vid-name">Votes: '+vot+'</div></div></li>');
	}
}