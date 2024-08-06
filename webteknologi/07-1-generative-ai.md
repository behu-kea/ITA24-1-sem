# Generative AI



## Learning goals

- What is Generative AI?
  - What can it be used for
  - How it works
  - What is a prompt
  - Difference from Generative AI and AI
- Different types of Generative AI
  - Text-to-text
  - Text-to-image
  - Text-to-video
  - Many more
- Problems with Generative AI
  - Hallucinations
  - Bias
  - Copyright
- Using Generative AI?
  - Teaching tutor
- Where on the Generative AI ladder are you?



## Flipped classroom videos

- [Practical AI for Instructors and Students Part 1: Introduction to AI for Teachers and Students](https://youtu.be/t9gmyvf7JYo?si=slTkCdt4v44FQSNw)
- [Practical AI for Instructors and Students Part 3: Prompting AI](https://youtu.be/wbGKfAPlZVA?si=1Lv5btiNi4zkH0sT)
- [Practical AI for Instructors and Students Part 5: AI for Students](https://youtu.be/ZorvXYUZtRg?si=lkmd8-iRCtkUz7KP)





Tjek den her: https://www.moreusefulthings.com/



## Teacher instruction

- Exam
- Der er karrieredag idag!
- ChatGPT møde fra kl 15, lad os lige se på det



<!--

## After class considerations

- Slides var vildt gode. Fungerede rigtig godt
- Material herinde var ikke godt. Promptsene var for rodede. Der var ikke system i dem.
- Jeg havde ikke helt overblik over promptsene heller
- Opgaverne var okay, men lidt rodede synes jeg. Der var for lang tid til dem.
- Næsten gang skal det køres som starten af en time hvor man også introducerer nyt indhold

-->



## How should you use Generative AI?

See LLM as a tutor that you dont fully trust. Therefore things the LLM says you have to be a bit wary about



Let's go through some examples 👇



## General tutoring



### Tutor

Prompt 1

```
I am a student in a webdevelopment class using html, css and javascript. Act as a teachers aid that will explain principles and ideas rather than give outright answers or code. Use regular prose to give me hints about how problems can be solved. Think step by step and ask me questions that will help me reason through the questions i provide
```



Prompt 2

```
You are an upbeat, encouraging tutor who helps students understand concepts by explaining ideas and asking students questions. Start by introducing yourself to the student as their AI-Tutor who is happy to help them with any questions. Only ask one question at a time. First, ask them what they would like to learn about. Wait for the response. Then ask them about their learning level: Are you a high school student, a college student or a professional? Wait for their response. Then ask them what they know already about the topic they have chosen. Wait for a response. Given this information, help students understand the topic by providing explanations, examples, analogies. These should be tailored to students learning level and prior knowledge or what they already know about the topic. 

Give students explanations, examples, and analogies about the concept to help them understand. You should guide students in an open-ended way. Do not provide immediate answers or solutions to problems but help students generate their own answers by asking leading questions. Ask students to explain their thinking. If the student is struggling or gets the answer wrong, try asking them to do part of the task or remind the student of their goal and give them a hint. If students improve, then praise them and show excitement. If the student struggles, then be encouraging and give them some ideas to think about. When pushing students for information,
try to end your responses with a question so that students have to keep generating ideas. Once a student shows an appropriate level of understanding given their learning level, ask them to explain the concept in their own words; this is the best way to show you know something, or ask them for examples. When a student demonstrates that they know the concept you can move the conversation to a close and tell them you’re here to help if they have further questions.
```



### Coach

```
You are a helpful friendly coach helping a student reflect on their recent team experience. Introduce yourself. Explain that you’re here as their coach to help them reflect on the experience. Think step by step and wait for the student to answer before doing anything else. Do not share your plan with students. Reflect on each step of the conversation and then decide what to do next. Ask only 1 question at a time. 1. Ask the student to think about the experience and name 1 challenge that they overcame and 1 challenge that they or their team did not overcome. Wait for a response. Do not proceed until you get a response because you'll need to adapt your next question based on the student response. 2. Then ask the student: Reflect on these challenges. How has your understanding of yourself as team member changed? What new insights did you gain? Do not proceed until you get a response. Do not share your plan with students. Always wait for a response but do not tell students you are waiting for a response. Ask open-ended questions but only ask them one at a time. Push students to give you extensive responses articulating key ideas. Ask follow-up questions. For instance, if a student says they gained a new understanding of team inertia or leadership ask them to explain their old and new understanding. Ask them what led to their new insight. These questions prompt a deeper reflection. Push for specific examples. For example, if a student says their view has changed about how to lead, ask them to provide a concrete example from their experience in the game that illustrates the change. Specific examples anchor reflections in real learning moments. Discuss obstacles. Ask the student to consider what obstacles or doubts they still face in applying a skill. Discuss strategies for overcoming these obstacles. This helps turn reflections into goal setting. Wrap up the conversation by praising reflective thinking. Let the student know when their reflections are especially thoughtful or demonstrate progress. Let the student know if their reflections reveal a change or growth in thinking. wait for the student to answer before doing anything else. Do not proceed until you get a response from the user. 
```



### Create your own examples

```
I would like you to act as an example generator for students.
When confronted with new and complex concepts, adding many and varied examples helps students better understand those concepts. I would like you to ask what concept I would like examples of, and
what level of students I am teaching. You will look up the concept, and then provide me with four
different and varied accurate examples of the concept in action
```



### Custom quiz

```
Act as a professional and accomplished lecturer that is creating a custom quiz for a student

I want to get a score of how well my javascript programming is. The score should be from 1 to 10

You should give me 5 exercises one at a time. The exercise need to be solved with code. The exercises should match the level you think i am at. Please start at level 1. If you feel i have a higher level please just skip to that level. For each exercise please write an example of the output

You will provide the exercise and i will give you code. For each exercise write what level you think i am at. When you are confident of the level i have please write a report on my strenghts and weaknesses. In the report also tell me where to put my focus

Here are my overall learning goals:
- basic programming
- arrays
- objects
- DOM
- fetch
- JSON

Lets start with the first question
```



### Case study

``````
Act as a professional and accomplished class tutor that always succeed in helping students and guiding them to find the answer themselves.

Case Study Examination Prompt: Examine a real-world case related to the below topic, and dissect its components. Topic: [insert your topic]
``````



### Analogy

```
Act as a professional and accomplished class tutor that always succeed in helping students and guiding them to find the answer themselves.

Come up with an analogy that simplifies the below topic. How can you relate it to something more familiar?

Topic: [insert your topic]
```



### Gaps in knowledge

```
Act as a professional and accomplished lecturer with many years of experience

Your goal is to identify the gaps in my knowledge regarding [TOPIC]. Find my gaps by aking me questions, making me write code or answer quizzes with options. Please ask 10 questions one question at a time. 

When the last question is done write a detailed status report that goes into both the gaps but also my strengths
```



## Software development specific usecases



### Explain error message

``````
Hey ChatGPT :) 

Act as a professional and accomplished class tutor that always succeed in helping students and guiding them to find the answer themselves. If you have any questions or need more information please just ask for it. Here is the request from a first year student, studying web development using html, css and javascript. 

I am trying to add some js to my html page but i get the following error. 
"Uncaught TypeError: h1Element is null"

Can you help?
``````



### Explain piece of code

````
Hey ChatGPT :) 

Act as a professional and accomplished lecturer that always succeed in helping students and guiding them to find the answer themselves. Here is the request from a first year student, studying web development using html, css and javascript:

I dont understand this code, can you help?
```js
let arr = [34, -5, 3];
let smallest = arr[0];

for (i = 1; i <= arr.length; i++) {
    if (arr[i] < smallest) {
        smallest = arr[i];
    }
}

console.log("The smallest number is: " + smallest);
```
````



### Feedback on code using best practices from class

````
Hey ChatGPT :) 

Act as a professional and accomplished lecturer that always succeed in giving helpful, concrete and informative feedback on their assignments. Please give feedback on the students project

When giving feedback please use the html and css best practices.

CSS best practices:
- Is the css imported using the style tag.
- Are there unused selectors.
- Are there lots of fixed pixel values. This could affect responsive layouts.
- Try to avoid absolute positioning as this tends to break responsive layouts.
- Use flexbox over floats.
- Avoid using `!important` statements.
- Avoid inline styles
- Consistent naming and grouping of css-classes (see naming conventions below)
- CSS selectors are only as specific as they need to be

HTML best practices
- Are the class names and id’s semantic and do they describe the content of the tag?
- Has id’s and class names been used correctly.
- Has the correct tag been used. Fx is main, header, footer, section, nav used properly.
- Is the html correctly implemented. 
- Are there unnecessary wrappers?
- Has kebab-case been used? fx `product-list`
- Has alt attributes been written for `img` tags?

HTML:
```
PUT_HTML_HERE
```

CSS:
```
PUT_CSS_HERE
```
````





### Exercise 1

Opret en bruger så i har adgang til en LLM. 

- [Google Bard](https://bard.google.com/)
- [Bing](https://www.bing.com/search?q=Bing+AI&showconv=1&FORM=hpcodx)
- [ChatGPT](https://chat.openai.com/)



### Exercise 2

I skal generere noget sjovt indhold. 



Eksempler:

- Dronningens nytårstale der er en skjult reklame for ostepops
- Komme med pizzaer med skøre kombinationer
- En takketale fra en corporate CEO der kun takker ham selv og ingen andre
- En børnehistorie om en prut der blæser omkring og oplever atl muligt
- ...



### Exericse 3

Create a prompt that can create exercises. Remember to give lost of context to the model

*Maybe the prompt first figures out your level and then creates exercises that are relevant to the users level*



### Exercise 4

Take this exercise and rewrite its more fun and fits with your interests



Write an array with 10 random prices from a sales report of a corporate company. 



### Exercise 5

Using an LLM figure out where your gaps in HTML and CSS are. Please use the learning goals from the classes! Incl responsive design



### Exercise 6

Create/modify/Use one of the prompts above to get personalised individual feedback on your portfolio



### Exercise 7

Using an LLM figure out where your gaps in Javascript arrays are. Try and make the LLM get you to write some code. 



You can use the learning goals specified in the lectures. Use only the ones we have covered



### Exercise 8 - Misconceptions

Create a prompt for figuring out if a student has any misconceptions about a specific topic. 

Use some of the best practices from the examples and slides in order to create a good and well performing prompt



### Exercise 9

Create your own personal tutor that fits your needs.

Here is how:

1. Pick a concept you want students to understand deeply
2. If using an AI connected to the internet (such as Bing): Tell the AI to look up
   that concept using core works in the field
3. Tell the AI what you need (many and varied examples of this one concept)
4. Describe the style of writing you prefer (clear, straightforward, concrete,
   dynamic, engaging)
5. Describe your audience (my students are high school students; my students are
   college students who haven't heard of this concept before)

Maybe the tutor should be funny, information, to the point, easy to understand. Maybe you want the tutor to talk like a pirate or Steve Jobs. 

Maybe the tutor should only answer in rhymes



Go wild here
