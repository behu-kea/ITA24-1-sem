# Storytelling



## After class considerations

Super nice with the slides. Though the last slides about how to make a narrative out of data viz were not as good. Maybe could have taken some examples and how to turn them into a storytelling datavis.

The story telling part aws super good.

The class was a bit short. Finished about 11:15. 

ITA23

They did not really get it this time. Maybe create a storytelling exercise that is clearer what i want. Maybe a smaller one where the data is very limited. 



## Movies feedback

- Generelt rigtig fint.
- Gode variabelnavne! `listOfMovies`, `newerMoviesButton`
- Iterate an array har i godt styr på
- Ternary `console.log(imdbMovies[0].title + " is a movie from " + imdbMovies[0].year + " It has a rating of " + imdbMovies[0].rating + " has " + imdbMovies[0].votes + " votes "+ "is " + imdbMovies[0].running_times + " seconds long");`
- Indentation er skide god
- Fin html. I husker alt attributter og har ikke for mange fyld elementer som fx div'er alle steder
- Funktioner kan i blive bedre til at udnytte mere. 
  - Tænk over ansvar, parameter og return

- `NewerMoviesButton` -> `newerMovieButton`
- I har rigtig godt styr på DOM funktioner





```
const title = imdbMovies[0].title;
console.log(`${title} is a movie from ${imdbMovies[0].year} It has a rating of`);
```



```javascript
fetch('https://gist.githubusercontent.com/pankaj28843/08f397fcea7c760a99206bcb0ae8d0a4/raw/02d8bc9ec9a73e463b13c44df77a87255def5ab9/movies.json')
    .then(response => response.json())
    .then(movieData => {
        console.log(movieData);
        exerciseTwo(movieData);
        exerciseThree(movieData);
        exerciseFour(movieData);
        exerciseFive(movieData);

    });
```



```javascript
fetch('https://gist.githubusercontent.com/pankaj28843/08f397fcea7c760a99206bcb0ae8d0a4/raw/02d8bc9ec9a73e463b13c44df77a87255def5ab9/movies.json')
    .then(response => response.json())
    .then(antesCanvas => {
        console.log(antesCanvas);
        antesCanvasGlobal = antesCanvas
        const movieCount = document.querySelector('#movieCount')
        const totalMovies = antesCanvas.length
        movieCount.innerHTML = (`${totalMovies} movies fetched`)
        movieInfo(antesCanvas[0])
        allMovies(antesCanvas)
        newerMovies(antesCanvas[0])
        search(antesCanvas[0])
    });
```



```javascript
// Event-listeners
allMoviesBtn.addEventListener("click", getAllMovies)
getNewerMoviesBtn.addEventListener("click", getNewMovies)
bestRatedMoviesBtn.addEventListener("click",getTop10BestRatedMovies)
```





## Evaluering på mandag!



[The Pudding](https://pudding.cool/)



Artistotle: story has setup, conflict and resolution

- Setup: introduce main character, relationships, the world. Then incident. Attempt to deal with incident leads to more dramatic situation
- Character tries to resolve problem. Lacks skills, increasingly wores situations. Learn new skills
- Resolves stories. Includes climax.



Conflict and tension is an integral part of a story. 



Robert McKee says two ways to persuade people

1. Conventional rhetoric. Facts, powerpoint. Only intellectual. Not enough
2. Through story. Unite idea with emotion arousing audiences attention and energy



We can use stories to engage audiences emotionally that goes beyond facts. 



## The beginning

1. The setting: When and where does the story take place?
2. The main character: Who is driving the action? (This should be framed in terms of your audience!)
3. The imbalance: Why is it necessary, what has changed?
4. The balance: What do you want to see happen?
5. The solution: How will you bring about the changes?



## The middle

1. Further  develop  the  situation  or  problem  by  covering  relevant  background.
2. Incorporate external context or comparison points.
3. Give examples that illustrate the issue
4. Include data that demonstrates the problem
5. Articulate what will happen if no action is taken or no change is made.
6. Discuss potential options for addressing the problem
7. Illustrate the benefits of your recommended solution.
8. Make it clear to your audience why they are in a unique position to make a decision or drive action





Think about what will resonate with them and motivate your users. For example, will your audience be motivated to act by making money, beating the competition, gaining market share, saving a resource, eliminating excess, innovating, learning a skill, or something else? 



## The end

Finally, the story must have an end. End with a call to action: make it totally clear to your audience what you want them to do with the new  understanding  or  knowledge  that  you’ve  imparted  to  them. 



Nirvana in communicating with data is reached when the effective visuals are combined with a powerful narrative.



## Written vs spoken nattarive

This is important to consider. 



Repetition: The more the information is repeated or used, the more likely it is to eventually end up in long‐term memory, or to be retained.





https://www.gokantaloupe.com/blog/best-techniques-for-data-driven-storytelling





Fra en her artikel

https://powerbi.microsoft.com/en-us/data-visualization-vs-storytelling/

1. Define your objectives- Understand the purpose of your data story, audience, and priorities.
2. Present a compelling narrative -Know what your audience wants to hear.
3. Incorporate key elements of analysis storytelling - 

These elements include: 

- Plot:  The types of questions presented, how you’ll answer them, and how you’ll help your audience arrive at the conclusion. 
- Context: How your audience interprets the data you present.
- Characters: The tone and insights into how you’ll tell the story.
- The end: The conclusion and subsequent actions resulting from your story—what the  audience learned, how to achieve the results they want, or what they’ll  need to do differently to improve for the future. 

4. Make an insightful and human story - Make an insightful and human story.

If your story is relatable, engaging, and offers high-value content in bite-sized pieces, you’ll keep your audience’s attention.











## Inkluderet i præsentation



![CleanShot-2022-10-20-at-12.39.15](assets/CleanShot-2022-10-20-at-12.39.15.png)



[Neuroscientists](https://bigthink.com/experts-corner/decisions-are-emotional-not-logical-the-neuroscience-behind-decision-making) confirm that decisions are based on emotions, not logic. Yes,**we make decisions with our emotional side, and what’s more, we defend them with logic !**



The first exercise should be to in groups one person tells a story. The other notices which parts/elements are in the story

- What was the overall flow of the story (story arc)
- Which stylistic elements were used (e.g., humor, surprise, dialogue, etc.)





*Dataviz scenario:* I picked 8 apples in my basket and made 2 pies to sell.

*Data Storytelling scenario:* In my basket, I have 8 apples picked from my grandfather's garden,  who grew them using all-natural methods. This apple harvest was  transported with our hybrid car to the laboratory, where I invited the  best cook in the country to make these 2 apple pies, which were already  reserved by the mayor of the village on our website for Mother's Day!



Talking to emotions not 



## Examples

- https://guns.periscopic.com/?year=2013
- https://www.chris-williams.me/fry-universe
- https://www.nationalgeographic.com/science/graphics/what-500000-united-states-covid-deaths-look-like







Alexander Jens Peter Mavrina Sørensen , Carsten Gamst Jensen , Julius Panduro Rydstrøm , Mads Kristian Kolbye , Mads Møller <alex030t@stud.kea.dkcars7802@stud.kea.dkjuli05d6@stud.kea.dkmads79i7@stud.kea.dkmads79i9@stud.kea.dk>











1. The fetch request should be made inside a function, so that it can be reused if necessary. 
2. The heading and paragraph elements should be created inside the success callback function of the fetch request, so that they only exist if the request is successful. 
3. The button element should be created inside the success callback function of the fetch request, so that it only exists if the request is successful.
4. The for loop that adds the list items should be inside the success callback function of the fetch request, so that the list items only exist if the request is successful. 
5. The conditional statement inside the for loop can be simplified by using the Array.prototype.filter() method. 
6. The code would be easier to read if the success callback
