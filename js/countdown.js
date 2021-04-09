//Set date we're counting down to

const countDownDate = new Date("Sep 17, 2021 00:00:00").getTime();

//Update the count down every 1 second

if (document.querySelector(".timer__number--days")) {
  let start = setInterval(() => {
    const now = new Date().getTime();

    //Find difference between now and the count down date
    const difference = countDownDate - now;

    //Time calculation for days, hours minutes and seconds
    const days = Math.floor(difference / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((difference % (1000 * 60)) / 1000);

    document.querySelector(".timer__number--days").innerText = days;
    document.querySelector(".timer__number--hours").innerText = hours;
    document.querySelector(".timer__number--minutes").innerText = minutes;
    document.querySelector(".timer__number--seconds").innerText = seconds;

    if (difference < 0) {
      clearInterval(start);
      document.querySelector(".timer__number--days").innerText = 0;
      document.querySelector(".timer__number--hours").innerText = 0;
      document.querySelector(".timer__number--minutes").innerText = 0;
      document.querySelector(".timer__number--seconds").innerText = 0;
    }
  }, 1000);
}
