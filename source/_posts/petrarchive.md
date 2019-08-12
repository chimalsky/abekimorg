---
extends: _layouts.post
section: content
title: Modernizing Petrarch
date: 2019-08-11
description: Modernizing Petrarch's RVF
---


#### Allowing seamless exploration of Petrarch's poetry and material texts.

I joined the project when it had an MVP that was difficult to explore.

* Navigation was possible only to previous and next pages.
* Facsimile exploration was detached from the reading experience.
* Textindex was detached from the main poem viewing UI.
* Disorientating reading process on pages that had many poems.

### Modernizing Navigation and Control

The MVP approached the poetry collection like an early 2000s webpage. Navigation and other 
common tasks relied on standard HTML links scattered across the page 
rather than stylized buttons in a contained location.

The solution I came up with was a simple toolbar that remained fixed to the top.

![Petrarchive toolbar header](/assets/img/toolbar-header.png)

A fixed header was a straightforward feature with big rewards. It afforded a reliable
place to find any control functionality that was accessible at all times; no more having 
to scroll around looking for the necessary link.

Navigating to the previous and next pages became more intuitive with arrow buttons, but we didn't 
want to limit readers to navigating only one page ahead or back. The MVP already had a good textindex, 
but it was housed in a separate webpage inaccessible from the poem reading experience. I thought this was 
a shame, so I made the textindex invokable from the reading screen. All you need ot do is press the button 
right next to the arrows and you get this:

##### Allowing Readers to Jump Around
![Petrarchive integrated textindex](/assets/img/textindex.png)

This was achieved by leveraging the existing textindex webpage. All we do is call that webpage 
through an AJAX call and simply place the ```table``` into this Bootstrap Modal element. We even 
get the search and column sorting functionality so that a reader can look for a particular 
poem structure or even search by text.

##### Achieving that slick native-app-like navigation
All encodings live within XML files. Not only that, the XML files are used in conjunction 
with XSLT to be rendered straight in the reader's browser. Because of the XML and the 
intra-browser rendering nature of this project, I wasn't able to use Turbolinks to get 
that usual slick native-app-like navigation, which is no my preferred choice. 

However, I was transitining out of building full blown Single Page Apps (SPA), so I really 
really wanted to build something of my own that was inspired by Turbolinks. 

Here's what I came up with
* AJAX call to the .xml file of the view that the reader is navigating to.
* In-browser XML/XSLT rendering using Javascript APIs
* Taking that rendered result and slipping it inside the view container.
* Updating the fixed toolbar required the refreshing of:
  * Fascimile Thumbnails
  * Fascimile Viewer if viewer was active
  * Chartae meta-information displayed in toolbar


### Unifying the Virtual and Material Experience

The materiality of text is keystone to my partners. The previous MVP's presentation of 
the encoded text and the fascimile image was detached from each other.

I set out to achieve two experiences with fascimiles.
* allow simultaneous viewing of the encoded text and fascimiles 
* seamless visual exploration of the high definition images

![Petrarchive facsimile viewer](/assets/img/facsimile.png)

Because these images are high definition, you can zoom in without losing detail.
In fact there's details to gain. I wanted to give readers full control. This meant being 
able to rezise the viewport and also zooming in and out as much as they pleased.


Initially we present the fascimile zoomed and positioned 
so that the entire document is in view. After this initial presentation, it's up 
to the reader to decide how wide or zoomed in or out they want the viewer to be.

##### We achieved this functionality through:
* Viewport resizing through jQueryUI's resizable plugin.
* GoogleMaps-like navigation through jQueryUI's draggable plugin.
* A lot of resolution/zoom/position calculations with vanilla Javascript.

An icing on the cake that I'm really proud of is the ability to retain zoom/position settings 
across pages. We were able to achieve this thanks to retaining the resolution/zoom/position 
attributes via Javascript.

### Improving Reading Orientation
Some views feature many chartae (pages). And in the old MVP, you could get lost in the huge scroll list of text.
Now that we have a fixed ```header``` we had a place from where we could signal where exactly 
a reader was. 

![Petrarchive many facs, good orientation](/assets/img/many-facs.png)

There are four chartae in this view. But it's clear to the reader that they are on the third one because 
we highlight the fascimile thumbnail in the right corner for them.

##### We achieved this functionality through:
* jQuery scroll event listener.
* Well placed ```<a href="#">``` so that we could calculate where along the scroll each chartae was.

I love simple yet effective solutions like this where some simple math can really change the experience
qualitatively.

### And now the thing I was initially hired for...

The team initially needed a UI for displaying commentary.

![Petrarchive commentary](/assets/img/commentary.png)

We achieved this commentary UI through simple HTML/CSS. Nothing special here. 
I was inspired by many of the examples of popular websites that had multi-screen 
scrolling systems. But in the end, we didn't need to use any special framework or library 
to specifically implement this UI.

We did however use the same scroll-event + math solution from above to help orient 
readers within the commentary.

#### So that's how we modernized this collection of Petrarch poems. This project is still in progress as my partners finish up encoding the poems and commentary.
#### I'm very excited to see how it looks once all the of the content is finished.
