// get elements
const player = document.querySelector('.player');
const video = player.querySelector('.viewer');
const progress = player.querySelector('.progress');
const progressBar = player.querySelector('.progress__filled');
const toggle = player.querySelector('.toggle');
const skipButtons =player.querySelectorAll('[data-skip]');
const ranges = player.querySelectorAll('.player__slider');
const audio = document.querySelector("audio");
// build function 
function togglePlay(){
	// cach 1
	// if(video.paused){
	// 	video.play();
	// }
	// else video.pause();
	let method= video.paused ? 'play' :'pause';
	video[method]();
	audio[method]();
}
function updateButton(){
	let state = video.paused ? '>' : '||';
	toggle.textContent= state;
}
function handleRange(){
	video[this.name]=this.value;
}
function handleSkip(){
	video.currentTime += parseFloat(this.getAttribute('data-skip'));
}
video.addEventListener('click',togglePlay);
video.addEventListener('play',updateButton);
video.addEventListener('pause',updateButton);
toggle.addEventListener('click',togglePlay);
for(let i=0;i<ranges.length;i++)
	ranges[i].addEventListener('change',handleRange);
skipButtons.forEach(skip => skip.addEventListener('click',handleSkip) );