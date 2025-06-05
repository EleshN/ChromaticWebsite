# Project 3: Design Journey

**For each milestone, complete only the sections that are labeled with that milestone.** Refine all sections before the final submission.

You are graded on your design process. If you later need to update your plan, **do not delete the original plan, leave it in place and append your new plan _below_ the original.** Then explain why you are changing your plan. Any time you update your plan, you're documenting your design process!

**Replace ALL _TODOs_ with your work.** (There should be no TODOs in the final submission.)

Be clear and concise in your writing. Bullets points are encouraged.

Place all design journey images inside the "design-plan" folder and then link them in Markdown so that they are visible in Markdown Preview.

**Everything, including images, must be visible in _Markdown: Open Preview_.** If it's not visible in the Markdown preview, then we can't grade it. We also can't give you partial credit either. **Please make sure your design journey should is easy to read for the grader;** in Markdown preview the question _and_ answer should have a blank line between them.


## Existing Project (Milestone 1)

**Tell us about the project you'll be using for Project 3.**

### Project (Milestone 1)
> Which project will you add interactivity to enhance the site's functionality?

Project 1


### Audience (Milestone 1)
> Briefly explain your site's audience. (1-2 sentences)
> Be specific and justify why this audience is a **cohesive** group.

My audience is video game players who are potentially interested in my game. Since my game is virtually unknown, they will likely be people who have prior experience with video games. For the same reason, site visitors are skeptical of my game and wish to decide whether or not to play it.


### Audience's Goals (Milestone 1)
> List the audience's goals that you identified in Project 1 or 2.
> Simply list each goal. No need to include the "Design Ideas and Choices", etc.
> You may adjust the goals if necessary.

- Learn about the game in a very visceral, quick way, get the "general vibe" of the game.
- Find out if it is worth it to download the game, and download it if they would like.
- Seek more detailed information about the game if they prefer to take a more careful approach.


## Interactivity Design (Milestone 1)

### Modal Interactivity Brainstorm (Milestone 1)
> Using the audience goals you identified, brainstorm possible options for **modal** interactivity to enhance the functionality of the site while also assisting the audience with their goals.
> Briefly explain each idea and provide a brief rationale for how the interactivity enhances the site's functionality for the audience. (1 sentence)
> Note: You may find it easier to sketch for brainstorming. That's fine too. Do whatever you need to do to explore your ideas.

- For the first goal, it would be good if you could click on the images present on the site to enlarge them. This would allow site visitors to enhance their initial impression of the site and focus more on the content that immediately grabbed their attention
- For the second goal, the download link could be its own modal, which would of course include the download link, but also supported platforms, file size information, the number of total downloads, and other information the user would want to see before they download. It would also help mentally separate the step of going to another website to download the game from browsing the website as usual.
- For the third goal, it would make sense to have a "socials" modal, as is typical to have on websites these days. This would link users to the game's twitter, its itch.io page, my developer email, and my discord, so as to give users who want to find detailed information about the game ways to keep up with it or contact me to ask questions.


### Interactivity Design Ideation (Milestone 1)
> Explore the possible design solutions for the interactivity.
> Sketch at least two iterations of the modal and at least two iterations of the hamburger menu interactivity.
> Annotate each sketch explaining what happens when a user takes an action. (e.g. When user clicks this, something else appears.)

![Menu Ideation Sketches](/design-plan/md-content/initial-sketch-menu.png)
These are my two ideas for the menu. The first one is a more traditional menu, with the classic vertical layout (which still uses rounded corners to meet my site's themes). The second one shows a circular-themed menu, which is more thematic, but a bit less traditional / acceptable. In both designs, when you click the top left button, the menu appears, and when you navigate or click the button again, the menu is hidden.

![Modal Design Sketches](/design-plan/md-content/initial-sketch-modal.png)
These are my two ideas for the modal design. The first one is a "magnifier," where, when you click on image content, the content will appear in an enlarged window, which can be navigated away from by clicking the x in the top right. The second is a "socials" modal, where a user can click on a "get connected" button and see an array of links to my contacts and social medias to get more info about the game. When you click the "close" button, the modal will disappear.

### Final Interactivity Design Sketches (Milestone 1)
> Create _polished_ sketch(es) (it's still a sketch, but with a little more care taken to communicate ideas clearly to the graders) to plan your interactivity.
> **Sketch out the entire page where your interactivity will go.**
> Include your interactivity to the sketch(es).
> Add annotations to explain what happens when the user takes an action.
> Include as many sketches as necessary to communicate your design (ask yourself, could another 1300 take these sketches an implement my design?)

**Modal design sketches:**

![Modal Design Sketch is on the bottom](/design-plan/md-content/refined-sketches.png)
The modal I chose is the social modal. When you click the "get connected" button, the modal will appear. The modal can be closed by clicking the "close" button, and clicking any of the social icons will take the user to a different site.

**Hamburger drop-down navigation menu design sketches:**

![Hamburger Design Sketch is on the top](/design-plan/md-content/refined-sketches.png)
The menu is a traditional hamburger menu. When you click the top left button, the navigation appears. If you navigate to a different menu or click the button again, the navigation will disappear.

### Interactivity Rationale (Milestone 1)
> Describe the purpose of your proposed interactivity.
> Provide a brief rationale explaining how your proposed interactivity addresses the goals of your site's audience.
> This should be about a paragraph. (2-4 sentences)

The hamburger menu doesn't quite meet an audience goal that's specific to this website, as would be indicated by the way that it's assigned to every student, regardless of their website's audience. Any user of a site, however, does have the subtle goal of being able to see the content as clearly as possible so that they can efficiently interact with the page. Making a page cleaner and easier to navigate benefits all types of audiences.
One of my audience's goals is to seek detailed information about the game. Because of this, I have decided on a modal that displays all external ways to find information about the game, including its promotional twitter, its itch.io page where you can see a development log, and ways of contacting me, the developer, if their requested information still cannot be found in those places. This gives the audience extra ways to accomplish this goal that are layed out in a compact and clear way, while also adhering to audience's expectations by following established web design patterns.

## Interactivity Implementation Plan (Milestone 1)

### Interactivity Planning Sketches (Milestone 1)
> Produce planning sketches that include all the details another 1300 student would need to implement your interactivity design.
> Your planning sketches should include _all_ HTML elements needed for the interactivity; _annotations_ for the element types, their unique IDs, and CSS classes; and lastly the initial CSS classes.

**Modal planning sketches:**

![Modal Design Tagged Sketch](/design-plan/md-content/modal-tagged.png)

**Hamburger drop-down navigation menu planning sketches:**

![Hamburger Menu Tagged Sketch](/design-plan/md-content/burger-tagged.png)

### Interactivity Pseudocode Plan (Milestone 1)
> Write your interactivity pseudocode plan here.
> Pseudocode is not JavaScript. Do not put JavaScript code here.

**Modal pseudocode:**

Open the modal:

```
Onclick event for button element with class "social-button":
remove the .hidden property from div with class "socials"
```

Close the modal:

```
Onclick event for button element with class "close-button":
add the .hidden property to div with class "socials"
```

**Hamburger menu pseudocode:**

Pseudocode to show/hide (toggle) the navigation menu (narrow screens):

```
Onclick event for button element with class "burger-button":
add "clicked" class to button element
remove "unclicked" class from button element
remove the .hidden property from nav-ul element
```

Pseudocode to hide the hamburger button and show the navigation bar when the window is resized too wide:

```
On resize screen:
if screen is small enough to be considered narrow, and the hamburger menu button is hidden:
    remove the hidden element from the hamburger menu
    add the hidden element to the navigation menu
    add "unclicked" class from button element
    remove "clicked" class to button element
if screen is wide enough to not be considered narrow and the hamburger menu button is not hidden:
    add the hidden element to the hamburger menu
    remove the hidden element from the navigation menu
    add "clicked" class to button element
    remove "unclicked" class from button element
```

Pseudocode to show the hamburger button and hide the navigation menu when the window is resized too narrow:

```
Onclick event for button element with class "burger-button":
add "unclicked" class from button element
remove "clicked" class to button element
add the .hidden property from nav-ul element
```


## Grading (Final Submission)

### Interactivity Usability Justification (Final Submission)
> Explain how your design effectively uses affordances, visibility, feedback, and familiarity.
> Write a paragraph (3-5 sentences)

For the hamburger menu, my design uses affordances by not adding any additional button, meaning the user will naturally assume the same button opens and closes the menu. The button's outline also indicates that it is interactable. The button is also large and located at the top of the page, enhancing its utility through visibility. It uses feedback by shifting the outline when clicked, and by toggling the menu's visibility when clicked. It uses familiarity because the button is located in the top corner of the screen and is represented by 3 vertically stacked lines, both of which are common design patterns for hamburger menus.

For my modal, my design uses affordances by outlining the button and labelling it with an affirmative command so that users will know to interact with it. The close button is also clearly labeled. The button stands out against a black background, and the close button is located front and center at the top of the active modal, making the design clearly visible. Both buttons use feedback by shifting the outline when clicked, and by toggling the modals's visibility when clicked. Finally, it uses familiarity because social media or contact info is often located at the bottom of the page, indicating to the user that this button will take them to socials even though the button doesnt literally say it.


### Tell Us What to Grade (Final Submission)
> We aren't re-grading your Project 1 or 2.
> We are only grading the interactivity you added.
> Tell us where (what pages) we can find your interactivity and how to use it.
> **We will only grade what you list here;** if it's not listed, we won't grade it.

You can find my interactivity on any page, at the top and the bottom. It is the same on every page. I know that having 4 different CSS files is technically incorrect, but that was a deduction I got for project 1 and I figured I didn't need to change it since we aren't being graded on project 1 again, so the code is copy and pasted across all 4 css / html files.
To asses my hamburger menu interactivity, click the button with 3 lines at the top left of the page, then click it again to make the menu disappear. You can also resize the window to wide to make it disappear. The button will only appear on a narrow screen.
To assess my modal interactivity, you can scroll to the bottom of the page and click the "get connected" button. Once the modal is active, you can click the social links to visit the social sites. Send me an email if you want! The modal can be closed by clicking the "close" button at the top of the modal.

### Collaborators (Final Submission)
> List any persons you collaborated with on this project.

None

### Reference Resources (Final Submission)
> Please cite any external resources you referenced in the creation of your project.
> (i.e. W3Schools, StackOverflow, Mozilla, etc.)

Several W3schools and stackoverflow pages, references to specific pages can be found near where the relevant content is.

### Self-Reflection (Final Submission)
> This was the first project in this class where you coded some JavaScript. What did you learn from this experience?

To be honest I had never written javascript from scratch before, and only looked at code others had written, so it was interesting to examine what was a assumption to me and what base knowledge I was missing that is necessary to create code from scratch.

> Take some time here to reflect on how much you've learned since you started this class. It's often easy to ignore our own progress. Take a moment and think about your accomplishments in this class. Hopefully you'll recognize that you've accomplished a lot and that you should be very proud of those accomplishments!

I have written javascript from scratch when I hadn't before. Unfortunately for this answers, I knew most of the other things this class has gone over.
