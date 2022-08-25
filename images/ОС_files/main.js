window.onload = function() {
	//Нажатие на кнопку вклчюения
	let buttonSetupFire = document.getElementsByClassName('button-on-off')[0];
	let terminalWindow = document.getElementsByClassName('terminal-cover')[0];
	let buttonSetupStatus = false;
	const soundOnTerminal = new Audio('/sounds/onTerminal.mp3');
	const soundSetupTerminal = new Audio('/sounds/setupTerminal.mp3');

	document.getElementsByClassName('display-bottom-box')[0].addEventListener('click', function() {
		if (buttonSetupStatus) {
			buttonSetupFire.style.backgroundColor = "#1e1e1e";
			buttonSetupFire.style.boxShadow = "";
			terminalWindow.classList.remove("terminal-cover-on");
			terminalWindow.classList.add("terminal-cover-off");
		} else {
			buttonSetupFire.style.backgroundColor = "#2eff2e";
			buttonSetupFire.style.boxShadow = "0px 0px 15px #1ccc19";
			terminalWindow.classList.remove("terminal-cover-off");
			terminalWindow.classList.add("terminal-cover-on");
			soundOnTerminal.play();
			soundSetupTerminal.play();
		}
		buttonSetupStatus = !buttonSetupStatus;
	});

	//Кнопки в task-panel
	let taskButtons = document.getElementsByClassName('task');
	for (var i = 0; i < taskButtons.length; i++)
		taskButtons[i].addEventListener('click', function(){
			if (!this.classList.contains('task-active')){
				document.getElementsByClassName('task-active')[0].classList.remove('task-active');
				this.classList.add('task-active');
			}
			

    	}, false);

	//Время в меню задач
	let date = new Date();
	let timeIcon = document.getElementById('icon-time');
    timeIcon.innerText = date.getHours()+':'+date.getMinutes();
    setInterval(function() {
    	date = new Date();
       timeIcon.innerText = date.getHours()+':'+date.getMinutes();
    }, 1000*60);

    //Погода
	let urlWeather = `http://api.openweathermap.org/data/2.5/weather?q=Saint Petersburg&lang=ru&units=metric&appid=a1758b5b9ea7074f19f4aa04672625ab`;
	fetch(urlWeather)
		.then(response => response.json())
  		.then(data => {
  			document.getElementById('icon-temp').innerText = data.main.temp+'°';
  		});
};
