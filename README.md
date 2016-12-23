
Jsinput component GIFT Quiz 
==============

This Jsinput component currently contains two pieces of related functionality:

* It can author and deliver Jsinput GIFT-authored quizzes using LTI (index.php)
* It can convert to QTI 1.2 (convert.php)

These two pieces are related because they share a bunch of library code.

Quiz format convertor from Jsinput Quiz tool
==========================================

This is a simple converter that lets you paste in GIFT formatted quiz questions like:


    // multiple choice with specified feedback for right and wrong answers
    ::Q2:: What's between orange and green in the spectrum? 
    { =yellow # right; good! ~red # wrong, it's yellow ~blue # wrong, it's yellow }

And get them downloaded as QTI 1.2 for import into lots of systems like Sakai and 
Canvas.

GIFT seems to be a micro-format invented by the Moodle community - and a pretty cool 
idea if I do say so myself.  I like it because I can put quizzes in GitHub :)

   

You can play with my demo server at:

  
