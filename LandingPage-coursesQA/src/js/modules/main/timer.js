// Однозначні числа перетворює в двозначні - додає "0"
export const getPadTime = (time) => time.toString().padStart(2, "0");

// Таймер
document.addEventListener('DOMContentLoaded', () => {
	const newYear = new Date('Jan 17 2023 00:00:00');
	
	const daysVal = document.querySelector('.time-count__days .time-count__val');
	const hoursVal = document.querySelector('.time-count__hours .time-count__val');
	const minutesVal = document.querySelector('.time-count__minutes .time-count__val');
	const secondsVal = document.querySelector('.time-count__seconds .time-count__val');

	const daysText = document.querySelector('.time-count__days .time-count__text');
	const hoursText = document.querySelector('.time-count__hours .time-count__text');
	const minutesText = document.querySelector('.time-count__minutes .time-count__text');
	const secondsText = document.querySelector('.time-count__seconds .time-count__text');

	function declOfNum(number, titles) {  
		let cases = [2, 0, 1, 1, 1, 2];  
		return titles[ (number%100>4 && number%100<20)? 2 : cases[(number%10<5)?number%10:5] ];  
	}

	const timeCount = () => {
		let now = new Date();
		let leftUntil = newYear - now;
		
		let days = getPadTime(Math.floor(leftUntil / 1000 / 60 / 60 / 24));
		let hours = getPadTime(Math.floor(leftUntil / 1000 / 60 / 60) % 24);
		let minutes = getPadTime(Math.floor(leftUntil / 1000 / 60) % 60);
		let seconds = getPadTime(Math.floor(leftUntil / 1000) % 60);

		daysVal.textContent = days;
		hoursVal.textContent =	hours;
		minutesVal.textContent = minutes;
		secondsVal.textContent = seconds;

		daysText.textContent = declOfNum(days, ['День', 'Дні', 'Днів']);
		hoursText.textContent = declOfNum(hours, ['Година', 'Години', 'Годин']);
		minutesText.textContent = declOfNum(minutes, ['Хвилина', 'Хвилини', 'Хвилин']);
		secondsText.textContent = declOfNum(seconds, ['Секунда', 'Секунди', 'Секунд']);
	};

	timeCount();
	setInterval(timeCount, 1000);
});