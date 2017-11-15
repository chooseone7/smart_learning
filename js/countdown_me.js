;const getRemainingTime = deadline => {
  let now = new Date(),
      remainTime = (new Date(deadline) - now + 1000) / 1000,
      remainSeconds = ('0' + Math.floor(remainTime % 60)).slice(-2),
      remainMinutes = ('0' + Math.floor(remainTime / 60 % 60)).slice(-2);

  return {
    remainSeconds,

    remainTime
  }
};

const countdown = (deadline,elem,finalMessage) => {
  const el = document.getElementById(elem);

  const timerUpdate = setInterval( () => {
    let t = getRemainingTime(deadline);
    el.innerHTML = `${t.remainSeconds}s`;

    if(t.remainTime <= 1) {
      clearInterval(timerUpdate);
      el.innerHTML = finalMessage;
    }

  }, 1000)
};

countdown('189505', 'clock', '¡Ya empezo!');
