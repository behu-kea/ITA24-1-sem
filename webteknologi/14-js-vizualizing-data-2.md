# Visualising data 2

There are multiple ways of visualising data. Here are some different ways that will hopefully open your mind a bit. Check the the code for the examples out here: [https://github.com/behu-kea/data-viz-examples/tree/main/sound](https://github.com/behu-kea/data-viz-examples/tree/main/sound)

- [HTML](https://behu-kea.github.io/data-viz-examples/html/index.html)
- [Map](https://behu-kea.github.io/data-viz-examples/map/map.html)
- [Sound](https://behu-kea.github.io/data-viz-examples/sound/sound.html)



## Learning objectives

- Working with alternative ways to present data



<!--

## After class consideration

Idag var **alt** for svært. Det tog fuldstændigt pusten af dem alle sammen

Stilladseringen var alt høj. 



-->

## Teacher instruction

- Portefølje 1 feedback
  - Nogle projekter ligner at de er kopieret via en tutorial fra youtube eller online. Det er vi lidt ærgelige over
    - Når det er eksamensprojekt skal i altså være obs på plagiat! Det bliver problematisk når i ikke nævner at i har taget noget online. For så ser det ud som om det er jeres og så er vi ovre i plagiat sag
    - Det man afleverer skal der man vide hvad gør. Det indgår jo i en mundtlig eksamen
    - [https://mit.kea.dk/eksamensregler](https://mit.kea.dk/eksamensregler)
    
  - I skal til at have styr på git! Det første i gør med sådan et projekt er et github repo og deployer det! Commit dagligt
  
  - Virkelig fede projekter i har lavet!
  
  - Sindsygt gode variabelnavne!
  
  - I må gerne til at bruge funktioner til at opdele jeres kode
  
    - Der er mange af jer der er ret god her
  
    - ``````javascript
      function greyOutText(element) {
          element.style.color = '#00000050';
      }
      ``````
  
    - ```javascript
      // Function that buys a multiplier and makes the counter go up at a faster rate
          function buyMultiplier() {
              if (clicks >= multiplierPrice) {
                  clicks -= multiplierPrice;
                  multiplier += 1;
                  multiplierPrice = Math.ceil(multiplierPrice * 50);
                  multiplierCountElement.innerHTML = `Multipliers: ${multiplier}`;
                  document.getElementById('buyMultiplier').innerText = `Buy Multiplier (${multiplierPrice} cookies)`;
                  counterElement.innerHTML = clicks;
              }
          }
      ```
  
    - 
  
  - Fedt med alt det querySelector!
  
    - Ikke `document.getElementById`
    
  - Brug DOM så lidt som muligt. `QuerySelector` fx
  
  - Vær konsistente i jeres navngivning `computerScore_span`
  
  - I gør ikke meget brug af kommentarer
  
  - Josef må jeg gennemgå din aflevering? https://github.com/Josef-TL/lethal-dose/blob/master/main.js




## Flipped classroom videos

- [Tone.js & CodePen Part 01 - Making Music with a Web Browser](https://www.youtube.com/watch?v=0uXDdTyYBYQ)
- [Leaflet Tutorial #1: Create a map with a marker using JavaScript](https://www.youtube.com/watch?v=wVnimcQsuwk)
- [1.5 Mapping Geolocation with Leaflet.js - Working with Data and APIs in JavaScript](https://www.youtube.com/watch?v=nZaZ2dB6pow)



## Maps - Leaflet.js

[https://leafletjs.com/](https://leafletjs.com/) is a open source javascript library for creating maps. It is quite powerful and versatile. 

You can fx 

- Create routes
- Put circles or points on a map
- Color different sections of a map after some data



### Adding a circle to Leaflet.js

Add a circle to a map on the point: latitude: 56.8033777 and longitude: 9.5168986

```javascript
const map = L.map("map").setView([56, 11.6], 6);

const tiles = L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 19,
  attribution:
    '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>',
}).addTo(map);
L.circle([56.8033777, 9.5168986]).addTo(map);
```

See the code for it here: [simple-map.js](https://github.com/nicklasdean/ITA22F/blob/master/webteknologi/visualisation-2/map/simple-map.js), [simple-map.html](https://github.com/nicklasdean/ITA22F/blob/master/webteknologi/visualisation-2/map/simple-map.html)



### Displaying municipality data

Check an example here where i add some kommune data to leaflet:

See the code for it here: [map.js](https://github.com/nicklasdean/ITA22F/blob/master/webteknologi/visualisation-2/map/map.js), [map.html](https://github.com/nicklasdean/ITA22F/blob/master/webteknologi/visualisation-2/map/map.html)





## Sound - Tone.js

[Tone.js is a library](https://tonejs.github.io/) to generate tones. 



To import the library put the following in your `head` tag:

**index.html**

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tone/14.8.42/Tone.js" integrity="sha512-jP8QvBXowc1rZhRvIR8Byb1ozO1xd41D3qwCCqgLObgPd4XXXh6Bws0gthw94jq0F8PWyGwIe+PaP0WJVihHZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Guess My Number!</title>
</head>
<body>

<main>
    <button>Play audio</button>
</main>
<script src="main.js"></script>
</body>
</html>

```

To play any music we need the user to click something on our page. Therefore there is a button in the html

**main.js**

```javascript
document.querySelector('button').addEventListener('click', () => {
    //create a synth and connect it to the main output (your speakers)
    const synth = new Tone.Synth().toDestination();
    //play a tone with 200 hz for an 8th notes time
    synth.triggerAttackRelease(200, "8n");
  	// after 3 seconds play 400 hz
    synth.triggerAttackRelease(400, "8n", 3000);
});
```

The following will play a tone for an 8th note



Let's try and audialise some data!

```javascript
const data = [10,11,12,15];
document.querySelector('button').addEventListener('click', () => {
    let delay = 300;
    data.forEach((dataPoint, index) => {
        const synth = new Tone.Synth().toDestination();
        const now = Tone.now();
        // play a tone based on data for the duration of a 12th note every second
        const timeBetweenNotesInSeconds = 0.2;
        synth.triggerAttackRelease(dataPoint * 100, "12n", now + (index * timeBetweenNotesInSeconds));
    });
});
```

See the code [here](https://github.com/nicklasdean/ITA22F/tree/master/webteknologi/visualisation-2/sound)



## HTML

You can just straight up create a visualisation using js and html. Fx in [this project](https://benna100.github.io/53-milliarder/) i visualised how much Danske bank money laundered for by just adding images of houses, boats and so on. 

Here is an example of a site that just renders 10.000 spandauers [https://github.com/behu-kea/data-viz-examples/tree/main/html](https://github.com/behu-kea/data-viz-examples/tree/main/html)



## Canvas - P5.js

Using [P5.js](https://p5js.org/) we can draw circles, squares, points etc. 



## 📝 Exercises

Todays exercises will also be about data conversion!



### 📝 Exercise 1 - level 2

Visualiser top 10 eksportede kategorier fra danmark kun med brug af html!

1. Pharmaceuticals: US$19.4 billion (15.6% of total exports)
2. Machinery including computers: $16.6 billion (13.3%)
3. Electrical machinery, equipment: $9.6 billion (7.6%)
4. Mineral fuels including oil: $6.1 billion (4.9%)
5. Optical, technical, medical apparatus: $4.7 billion (3.8%)
6. Meat: $4.3 billion (3.4%)
7. Furniture, bedding, lighting , signs, prefab buildings: $3.9 billion (3.1%)
8. Vehicles: $3.8 billion (3%)
9. Fish: $3.6 billion (2.8%)
10. Plastics, plastic articles: $3.1 billion (2.5%)



### 📝 Exercise 2 - level 2

Audialise the inflation in Denmark using [the following code](https://github.com/nicklasdean/ITA22F/tree/master/webteknologi/visualisation-2/danish-inflation)



### 📝 Exercise 3 - level 3

Using leaflet.js visualise all the ufo sightings in Denmark in 2021 using [the following code](https://github.com/nicklasdean/ITA22F/tree/master/webteknologi/visualisation-2/ufo-sightings)

In the `main.js` file the ufo sightings have been logged. 



### 📝 Exercise 4 - optional - level 3

I have found data about spotify plays

Using [the following boilerplate](https://github.com/nicklasdean/ITA22F/tree/master/webteknologi/visualisation-2/spotify-data) we want to create a data visualisation that tells the following story:

- For old people in the age of 60 - 80
- We want to say that Eminem is one of the most popular Spotify artists ever

You have to create a suitable online visualisation that tell the story above. It is up to you what tool to use and how to visualise the point
