//Кнопка exit
let statusPopupExit = false;
function changePopupExit() {
	let popupExit = document.getElementsByClassName('window-exit')[0];
	if (statusPopupExit == false) 
		popupExit.style.display = 'block';
	else
		popupExit.style.display = 'none';
	statusPopupExit = !statusPopupExit;
}
//Для FOLDER
//activeBrowserPage - переключение между вкладками 
//delTab - скрытие + activeBroserPage(index);
//add + появление + фсешмуИкщгыукЗфпу
function activeBrowserPage(id) {
	let disabledPage = document.getElementsByClassName('browser-workspace-enable')[0].classList;
	let enabledPage = document.getElementsByClassName('browser-' + id)[0].classList;
	let disabledTab = document.getElementsByClassName('browser-page-title-active')[0].classList;

	disabledPage.remove('browser-workspace-enable');disabledPage.add('browser-workspace-disable');
	enabledPage.add('browser-workspace-enable');enabledPage.remove('browser-workspace-disable');
	
	disabledTab.remove('browser-page-title-active');

};
function addBrowserTab(id) {
	let headerDiv = document.getElementsByClassName('browser-header')[0];
	if(headerDiv.querySelectorAll('[data-id="'+id+'"]').length == 0){
		activeBrowserPage(id);
		headerDiv.innerHTML += '<div class="browser-page-title browser-page-title-active" data-id="'+id+'"><span>'+id.toUpperCase()+'</span><i class="fa fa-times" aria-hidden="true"></i></div>';
	}
}

window.onload = function() {
	//Нажатие на кнопку вклчюения
	let buttonSetupFire = document.getElementsByClassName('button-on-off')[0];
	let terminalWindow = document.getElementsByClassName('terminal-cover')[0];
	let buttonSetupStatus = false;
	const soundOnTerminal = new Audio('/sounds/onTerminal.mp3');
	const soundSetupTerminal = new Audio('/sounds/setupTerminal.mp3');
	const soundStopTerminal = new Audio('/sounds/stopTerminal.mp3');
	const soundOpenFolder = new Audio('/sounds/clickItem.mp3');

	//Отключение/включение экрана
	function onOffDispaly(){
		if (buttonSetupStatus) {
			buttonSetupFire.style.backgroundColor = "#1e1e1e";
			buttonSetupFire.style.boxShadow = "";
			terminalWindow.classList.remove("terminal-cover-on");
			terminalWindow.classList.add("terminal-cover-off");
			soundOnTerminal.play();
			soundStopTerminal.play();
			delWindows();
		} else { //on
			buttonSetupFire.style.backgroundColor = "#2eff2e";
			buttonSetupFire.style.boxShadow = "0px 0px 15px #1ccc19";
			terminalWindow.classList.remove("terminal-cover-off");
			terminalWindow.classList.add("terminal-cover-on");
			soundOnTerminal.play();
			soundSetupTerminal.play();
		}
		buttonSetupStatus = !buttonSetupStatus;
	}

	//фокус на tasks
	function changeActivTask(dataId) {
		//выделение в панеле задач
		let tasksInPanel = document.getElementsByClassName('task');
		for (let i = 0; i < tasksInPanel.length; i++) {
			if (tasksInPanel[i].classList.contains('task-'+dataId)) {
				if (!tasksInPanel[i].classList.contains('task-active'))
					tasksInPanel[i].classList.add('task-active');
			} else {
				tasksInPanel[i].classList.remove('task-active');
			}				
		}
		//index-z выше остальных окон
		let pcWindows = document.getElementsByClassName('window');
		for (let i = 0; i < pcWindows.length; i++)
			if (pcWindows[i].dataset.id == dataId)
				pcWindows[i].style.zIndex = 10;
			else 
				pcWindows[i].style.zIndex = 1;
	}

	//добавление tasks
	function addTasks(id) {
		let task = document.getElementsByClassName('task-'+id)[0]
		let activeTask = document.getElementsByClassName('task-active')[0];
		if (activeTask !== undefined) 
			activeTask.classList.remove('task-active');

		if (task !== undefined) {
			task.classList.add('task-active');
		} else {
			let div = document.createElement("div");
				div.classList.add("task");
				div.classList.add("task-active");
				div.classList.add("task-"+id);
				let span = document.createElement("span");

				switch(id) {
			  case 'console':
			    span.innerHTML = '<i class="fa fa-terminal" aria-hidden="true"></i>';
			    break;
			  case 'folder': 
			    span.innerHTML = '<i class="fa fa-globe" aria-hidden="true"></i>'
			    break;
			}

				div.append(span);
				div.dataset.id = id;

				document.getElementsByClassName('oc-taskpanel-left')[0].append(div);
		}
	}

	//удаление tasks
	function delTasks(id) {
		if(id == 'all'){
			let tasks = document.getElementsByClassName('task');
			while(tasks[0] !== undefined)
				tasks[0].outerHTML = '';
		} else {
			if (document.getElementsByClassName('task-'+id)[0] !== undefined) {
				document.getElementsByClassName('task-'+id)[0].outerHTML = '';
			}
		}
	}
	//удаление windows
	function delWindows(id = 'all') {
		if (id == 'all') {
			let windows = document.getElementsByClassName('window');
			let count = windows.length;
			for (var i = 0; i < count; i++){
			windows[i].classList.remove('window-opened');
			windows[i].classList.add('window-closed');
			}
		} else {
			document.getElementsByClassName('window-'+id)[0].classList.remove('window-opened');
			document.getElementsByClassName('window-'+id)[0].classList.add('window-closed');
		}
		delTasks(id);
	}
	//Отладка каждого клика
	//document.addEventListener('click',e => console.log(e.target))

	document.getElementsByClassName('display-bottom-box')[0].addEventListener('click', function() {
		onOffDispaly();
	});
	document.getElementsByClassName('exit-btn-yes')[0].addEventListener('click', function() {
		onOffDispaly();
	});

	//Кнопки в task-panel переключение на актвынй/неактивынй
	document.getElementsByClassName('oc-taskpanel-left')[0].addEventListener('click', event => {
		changeActivTask(event.target.closest('.task').dataset.id);
	});

	//Время в меню задач
	let date = new Date();
	let timeIcon = document.getElementById('icon-time');
    timeIcon.innerText = date.getHours()+':'+date.getMinutes();
    setInterval(function() {
    	date = new Date();
       	timeIcon.innerText = date.getHours()+':'+date.getMinutes();
    }, 1000*60);

    //Погода
	let urlWeather = `https://api.openweathermap.org/data/2.5/weather?q=Saint Petersburg&lang=ru&units=metric&appid=a1758b5b9ea7074f19f4aa04672625ab`;
	fetch(urlWeather)
		.then(response => response.json())
  		.then(data => {
  			document.getElementById('icon-temp').innerText = data.main.temp+'°С';
  		});

  	//Клик по ярлыкам
  	let itemsWorkspace = document.getElementsByClassName('oc-row-item');
	for (var i = 0; i < itemsWorkspace.length; i++)
		itemsWorkspace[i].addEventListener('mousedown', function(){
			if (buttonSetupStatus)
				this.classList.add('oc-row-item-click');
		}, false);
	for (var i = 0; i < itemsWorkspace.length; i++)
		itemsWorkspace[i].addEventListener('mouseup', function(){
			if (buttonSetupStatus){
				let id = this.dataset.id;

				this.classList.remove('oc-row-item-click');
				soundOpenFolder.play();
				//можно просто через стиль display
				document.getElementsByClassName('window-'+id)[0].classList.add('window-opened');
				document.getElementsByClassName('window-'+id)[0].classList.remove('window-closed');
				//фокус на этом таске
				changeActivTask(id);
				//добавление в task
				addTasks(id);
			}
		}, false);

	//Отключение окон
	let closeWindowItems = document.getElementsByClassName('window-header-buttons');
	for (let i = 0; i < closeWindowItems.length; i++)
		closeWindowItems[i].addEventListener('click', function(){
			delWindows(this.dataset.id);
		}, false);

	//drag n drop
	//отслеживание клика по хедеру окна
	document.getElementsByClassName('oc-workspace')[0].addEventListener('click', event => {
		if (event.target.closest('.widow-header') !== null) {
			var pcWindow = event.target.closest('.window');

			pcWindow.getElementsByClassName('widow-header')[0].onmousedown = function(e) {

				//изменение в task-panel
				changeActivTask(pcWindow.dataset.id);

				var coords = getCoords(pcWindow);
				var shiftX = e.pageX - coords.left+40;
				var shiftY = e.pageY - coords.top+50;

				function moveAt(e) {
					pcWindow.style.left = e.pageX - shiftX + 'px';
					pcWindow.style.top = e.pageY - shiftY + 'px';
				}

				document.onmousemove = function(e) {
					moveAt(e);
				};

				pcWindow.onmouseup = function() {
					document.onmousemove = null;
					pcWindow.onmouseup = null;
				};

			}

			pcWindow.ondragstart = function() {
				return false;
			};

			function getCoords(elem) {   // кроме IE8-
				var box = elem.getBoundingClientRect();
				return {
					top: box.top + pageYOffset,
					left: box.left + pageXOffset
				};
			}
		}
		
		
	});
	//FoLDER

	//active/disactive AND del
	document.getElementsByClassName('browser-header')[0].addEventListener('click', event => {
		let elem = event.target.closest('.browser-page-title');
		if (event.target.closest('.fa') != null) {
			activeBrowserPage('index');
			elem.remove();
			document.getElementsByClassName('browser-page-title')[0].classList.add('browser-page-title-active');
		} else {
			activeBrowserPage(elem.dataset.id);
			elem.classList.add('browser-page-title-active');
		}
	});

	//add


};
