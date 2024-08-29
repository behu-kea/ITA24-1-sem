# Finish your portfolio 🎉

That's it. Finish it! 



## Recap

- HTML
- CSS
- Selector, property, value
- 5 selectors
  - Id
  - Class
  - Tag
  - Descendant
- Også snakke om responsive. Først efter pausen



<!--

## After class consideration



-->



## Responsive design

Responsive webdesign handler om at designe websites der passer til de forskellige skærmstørrelser der findes. Primært mobil



### Device width

I `head` tagget til føj det her tag:

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

Det gør at bredden af hjemmesiden passer til bredden af det device man ser hjemmesiden på



### Media queries

Media queries handler om at aktivere noget css når vi har en bestemt skærm størrelse



```css
@media screen and (max-width: 500px) {
  .container {
    background-color: red;
  }
}
```

Her siger vi at farven på html elementet med klassen `container` bliver rødt **kun når** skærmen er **max** `500px`. Altså typisk en mobil skærm. 

Det vi ændrer er typisk layout når vi laver media queries



### Mobile first webdevelopment

Når i udvikler jeres site altid udvikel til en mobil! Det skal være jeres default størrelse. Det er fordi der (typisk) er flest der ser jeres site på en mobiltelefon!



