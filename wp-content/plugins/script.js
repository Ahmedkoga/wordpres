var lieu = value.city;

window.fetch('http://api.openweathermap.org/data/2.5/weather?q=' + lieu + '&appid=e430228a406600659b5002e2bf0df307&units=metric')
    .then(res => res.json())
    .then(resJson => console.log(resJson))