<html>

<head>
    <title>Micah Detamore &raquo; Coder</title>
    <link rel='stylesheet' type='text/css' href='./css/style.css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
    <script src='js/main.js' type='text/javascript'></script>
    <script src="js/riveted.min.js"></script>
    <script>riveted.init();</script>
</head>

<body>
    <div id="header-div">
        <div id="header-holder-div">
            <div id="myname">
                <h1 style="color:grey">Micah</h1>
                <br>
                <h1 style="color:#EEEEEE">Detamore</h1>
                <h3>{DEVELOPER}</h3>
            </div>
            <!--div id="nav-holder"-->
                <div id="hidebtn"><div id="hidebtnsprite"></div></div>
                <div id="buttons-div">
                    <ul id="buttons-list">
                        <li><a href="#skills" class="navbtn">skills</a>
                        </li>
                        <li><a href="#education" class="navbtn">education</a>
                        </li>
                        <li><a href="#employment" class="navbtn">employment</a>
                        </li>
                        <li><a href="#projects" class="navbtn">projects</a>
                        </li>
                        <li><a href="#contact" class="navbtn">contact</a>
                        </li>
                    </ul>
                    <span id="navtop"></span>
                </div>
            </div>
    </div>

    <div id="content">
        <br>
        <div class="">
            <div id="profile" class="box">
                <!-- div id="profileheading" class="heading">
                <p>Profile</p>
            </div -->
                <div id="profilebasicslabel" class="label">SUMMARY</div>
                <div id="profilebasics" class="gradientdiv">
                    <p class="indenttext">Junior-level software developer with a BS degree in computer science. I have just over a year of documented, relevant work experience, but I've been coding since my early high school years. I'm currently looking for full-time and freelance opportunities.</p>
                </div>
            </div>
            <br>
        </div>
        
        <?php
            include("skills.html");
        ?>
        <div class="odd">
            <div id="education" class="box">
                <div id="educationheading" class="label">
                    EDUCATION
                </div>
                <div id="educationcontent" class="gradientdiv indentmargin">
                    <div id="kentcontent">
                        <table class="edutable">
                            <tr>
                                <td>
                                    <p class="boldheader">Kent State University</p>
                                </td>

                                <tr>
                                    <td>Kent, OH. May 2013</td>
                                </tr>
                                <tr>
                                    <td>B.S., Computer Science</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="courses">
                                            Relevant Courses<span class="down"></span>
                                            <div class="coursetablediv">
                                                <table>
                                                    <tr>
                                                        <td>Web Programming I&nbsp;&nbsp;&&nbsp;&nbsp;II</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Database Systems Design</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Programming Language Concepts</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Data Structures and Abstraction</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Operating System Concepts</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Systems Programming</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Secure Programming</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Software Engineering I</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Computer Architecture</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Computer Networks</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tr>
                        </table>
                    </div>
                    <div id="orilleycontent">
                        <table class="edutable">
                            <tr>
                                <td>
                                    <p class="boldheader">O'Reilly School of Technology</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Online. July 2013</td>
                            </tr>
                            <tr>
                                <td>Certificate Program</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="courses">
                                        Relevant Courses<span class="down"></span>
                                        <div class="coursetablediv">
                                            <table>
                                                <tr>
                                                    <td>Perl I</td>
                                                </tr>
                                                <tr>
                                                    <td>Perl II</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="even">
            <div id="employment" class="box">
                <div id="employmentheading" class="label">
                    EMPLOYMENT HISTORY
                </div>

                <div id="ecsheader" class="gradientdiv indentmargin">
                    <table>
                        <thead>
                            <tr>
                                <th style="border-bottom:1px solid black;" colspan=2>ECS Tuning</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>Job Title:</b> Programmer</td>
                            </tr><tr>
                                <td><b>Employed:</b> May 2012 - June 2013</td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="odd">
            <div id="projects" class="box">

                <div id="projectsheading" class="label">
                    PROJECTS
                </div>
                    <p class="indenttext indentmargin">Here are several of my favorite programs I've written, including brief descriptions of them and the technologies I used. All of the works below were designed and coded by me as personal projects and/or as part of a school project.  </p>
                <div class="">

                    <div class="projectholder even">
                        <div class="label">DrumScool (Under Development)</div>
                        <table class="projectdetails">
                                
                            <tr>
                                <td class="tdlabel">DESCRIPTION</td>
                                <td class="spacercolumn" rowspan=6></td>
                                <td rowspan=6 class="screenscol">
                                    <div class="screenshot">
                                        <img src="/img/drumscool.png" id="dsss" class="projectscreenshot">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><p class="indenttext">A tool to help drummers improve their rhythmic accuracy by playing a selected rudiment or exercise along with a selected tempo. Users can drum by either tapping on-screen or by connecting an external midi device to their Android phone/tablet via a USB OTG cable. The app currently measures accuracy by changing the color of the music note that is closest to the play-progress bar when a hit is detected.</p>
                                    
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Java + Android SDK</li>
                                        <li class="nomargintopbottom indenttext">SurfaceView</li>
                                        <li class="nomargintopbottom indenttext">AudioTrack</li>
                                            <li class="nomargintopbottom indentmargin">PWM Audio is read from a .raw file filling a byte buffer whose length is determined by the tempo and sampling rate. </li>
                                        <li class="nomargintopbottom indenttext">SQLite</li>
                                        <li class="nomargintopbottom indenttext">MusicXML</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="tdlabel">MOTIVATION</td>
                            </tr>
                            <tr>
                                <td>Personal project</td>
                            </tr>


                        
                            
                        </table>
                    </div>

                    <div class="projectholder odd">
                        <div class="label">Violin Scales</div>
                        <!-- div id="pfdesc" class="projectdesc" -->
                            
                            <table class="projectdetails">
                                <tr>
                                    <td class="tdlabel">DESCRIPTION</td>
                                    <td class="spacercolumn" rowspan=6></td>
                                    <td rowspan=6 class="screenscol">
                                        <div class="screenshot">
                                            <img src="/img/vsss.png" id="vsss" class="projectscreenshot">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p class="indenttext">A tool to help beginner violin players learn the note positions on the fingerboard. A key signature and it's major or minor scale is selected and all possible notes in the scale are displayed as buttons on the violin neck. The buttons on the neck can be pressed to play a short sound of the particular note on a violin. </p></td>
                                </tr>
                                
                                <tr>
                                    <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Java + Android SDK</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr >
                                    <td class="tdlabel">MOTIVATION</td>
                                </tr>
                                <tr>
                                    <td>
                                        Personal project to discover the process of getting an app listed in the Google Play Store.
                                    </td>
                                </tr>
                                    
                            </table>
                        <!-- /div -->
                    </div>
                    
                    <div class="projectholder odd">
                        <div class="label">PartFitter</div>
                        <!-- div id="pfdesc" class="projectdesc" -->
                            
                            <table class="projectdetails">
                                <tr>
                                    <td class="tdlabel">DESCRIPTION</td>
                                    <td class="spacercolumn" rowspan=6></td>
                                    <td rowspan=6 class="screenscol">
                                        <div class="screenshot">
                                            <img src="/img/partfitter700.png" id="pfss" class="projectscreenshot">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p class="indenttext">A web-based automotive part cross-compatibility reference system where data is provided by users.</p></td>
                                </tr>
                                
                                <tr>
                                    <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>PHP</li>
                                            <li>MySQL</li>
                                            <li>Apache</li>
                                            <li>JavaScript</li>
                                            <li class="nomargintopbottom indenttext">JQuery</li>
                                            <li  class="nomargintopbottom indenttext">AJAX</li>
                                        <li>HTML + CSS</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr >
                                    <td class="tdlabel">MOTIVATION</td>
                                </tr>
                                <tr>
                                    <td>
                                        Self-proposed school project
                                    </td>
                                </tr>
                                
                            </table>
                        </div>


                    <div class="projectholder even">
                        <div class="label">VisualBPM</div>
                            <table class="projectdetails">
                                <tr>
                                    <td class="tdlabel">DESCRIPTION</td>
                                    <td class="spacercolumn" rowspan=6></td>
                                    <td rowspan=6 class="screenscol">
                                        <div class="screenshot">
                                            <img src="/img/visualbpm260.png" id="vbpmss" class="projectscreenshot">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><p class="indenttext">A metronome app for iOS that gives users both a visual and an auditory reference to a selected tempo in a 3/4 or 4/4 time signature. Each beat is indicated by "blinking" the "bulb" on the loop as the red "orb" passes over it. The tempo can be set via a "tap tempo" feature which averages the time intervals between a user's (8 most recent) taps.</p>
                                        
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                                </tr>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Objective-C + XCode</li>
                                            <li>AVFoundation + AudioToolbox</li>
                                            <li>UITabBarController</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tdlabel">MOTIVATION</td>
                                </tr>
                                <tr>
                                    <td>
                                        Self-proposed school project
                                    </td>
                                </tr>

                                
                            </table>
                            
                    </div>



                    <div class="projectholder odd">
                        <div class="label">Shirt Designer</div>
                        <!-- div id="vbpmdesc" class="projectdesc" -->
                            <table class="projectdetails">
                                
                            <tr>
                                <td class="tdlabel">DESCRIPTION</td>
                                <td class="spacercolumn" rowspan=6></td>
                                <td rowspan=6 class="screenscol">
                                    <div class="screenshot">
                                        <img src="/img/shirt700.png" id="tsss" class="projectscreenshot">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="indenttext">A utility for clothing retailers to allow users to design their own shirt. Users can upload image files which are automatically displayed over the shirt template and can drag the green circles in each corner to resize them. They can also add custom text to the canvas with a selected font and color, and can resize the text the same was as with images. Once finished designing their shirt, users are prompted with a review page overlay containing a picture of the shirt they created and a form for contact info. On form submission, all images and contact info are emailed to a specified recipient for shirt production.</p>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>JavaScript</li>
                                        <li class="nomargintopbottom indenttext">JQuery</li>
                                        <li class="nomargintopbottom indenttext">KineticJS</li>
                                        <li class="nomargintopbottom indenttext">AJAX</li>
                                        <li>PHP</li>
                                        <li>HTML + CSS</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="tdlabel">MOTIVATION</td>
                            </tr>
                            <tr>
                                <td>The shirt designer was one of my contributions to a larger team project for a web programming class.</td>
                            </tr>


                        </table>
                        
                    </div>
                    <div class="projectholder odd">
                        <div class="label">Battle Grid</div>
                        <table class="projectdetails">
                                
                            <tr>
                                <td class="tdlabel">DESCRIPTION</td>
                                <td class="spacercolumn" rowspan=6></td>
                                <td rowspan=6 class="screenscol">
                                    <div class="screenshot">
                                        <img src="/img/battlegrid500.png" id="bgss" class="projectscreenshot">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><p class="indenttext">Battle Grid is a single player implementation of the classic board game. One of the first programs I ever wrote, this entry level CS class project consisted of random number generation in order to place the "ships" (blue and red squares) and calculate the computer opponent's moves (black and white squares on the left panel). Both players have 5 "ships": two 3-square ships, one 2-, one 4-, and one 5-. Each time the human player clicks on a square of the opponent's panel, a hit or miss is revealed, and the opponent automatically selects one of the player's squares. The game is finished when all of a player's ships have been hit.  </p>
                                    
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="tdlabel">LANGUAGES AND TECHNOLOGIES</td>
                            </tr>
                            <tr>
                                <td>
                                    <ul>
                                        <li>Java</li>
                                        <li class="nomargintopbottom indenttext">Swing GUI toolkit</li>
                                        <li class="nomargintopbottom indenttext">G graphics library</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="tdlabel">MOTIVATION</td>
                            </tr>
                            <tr>
                                <td>School project</td>
                            </tr>

                        </table>
                        
                    </div>


                </div>
            </div>
        </div>


        <div class="even">
            <div id="contact" class="box">
                <div id="contactheading" class="label">
                    CONTACT ME
                </div>
                <div id="contactcontent">
                    <div id="contactleft">
                        <form id="contactform" action="" onsubmit="return validateForm();" method="post">
                            <table id="contacttable">
                                <tr>
                                    <td>
                                        <input type="text" name="contactname" id="contactname" placeholder="Name">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="replyto" id="replyto" placeholder="Reply-To:">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="resumerequest">Request Resume?</label>
                                        <input type="checkbox" name="resumerequest" id="resumerequest">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea name="message" id="contactmessage" rows="5" cols="40" placeholder="Friendly message..."></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=2>
                                        <input type="submit" value="Send">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <div id="messagesent"></div>
                    </div>

                    <div id="contactright">
                        <p class="bold">World? You there?</p>
                        Want to hire me, collaborate on a project, or just say hello? I'd love to hear from you! Feel free to comment on my website or offer suggestions for improvement.<br>
                        -Micah Detamore
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="footer">
        Everything here was &copy;oded by me, Micah Detamore 2014.
    </div>
</body>

</html>

<?php 
?>
