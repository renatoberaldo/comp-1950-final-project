<?php 
    $page = "lessons";

    require_once ('header.php');
?>
<main>
		<div class="banner">
			<img src="images/banner-lessons.jpg" alt="">
			<div class="info-box">
				<h1 class="hero-heading">
					<span class="course_name">LESSONS</span>
				</h1>
			</div>
		</div>
		
		<div class="lessons">

			<!-- Edita a partir daqui -->
			<div id="accordion" class="accordion">
				<h3>Lesson 1</h3>
				<div class="accordion-child">

					<p>Agenda</p>
					<ul>
						<li><strong>Introductions</strong></li>
						<li><strong>Orientation</strong></li>
						<li><strong>Web development tools</strong></li>
						<li><strong>Standards based development</strong></li>
						<li><strong>To Do</strong></li>
					</ul>
					
					<p>Introductions</p>
					<ul>
						<li><strong>instructors:</strong> Jeff Parker (<a href="mailto:jeffrey_parker@bcit.ca">jeffrey_parker@bcit.ca</a>), Michael Whyte (<a href="mailto:jeffrey_parker@bcit.ca">michael_whyte@bcit.ca</a>)</li>
						<li><strong>web site: this is it</strong></li>
						<li><strong>all about you...</strong></li>
						<li><ul>
							<li>your name</li>
							<li>your background</li>
							<li>what do you hope to achieve in this course? Be specific!</li>
						</ul>
</li>
					</ul>
					
					<p><strong>Course Overview</strong></p>
					<p>Learn more <strong>about the course</strong> to help you determine if this is the right class for you.</p>
				
					<h3>Orientation: Sharefile</h3>
					<p>BCIT lab computers are re-imaged each day. Files you save on the local C: drive of a lab computer will be erased after the computer power is cycled.</p>
					
					<h3>Options For Saving Files:</h3>
					<ul>
						<li>Use <a href="http://kb.bcit.ca/sr/sharefile/2052.shtml">BCIT Sharefile</a> to save your work</li>
						<li>Save your work to your personal USB or cloud storage account</li>
						<li>Use your own laptop in class, and dont use the BCIT lab computers</li>
					</ul>
				
					<h3>Orientation: Course Materials</h3>			
					<p>COMP 1950 homework assignments, quizzes, in class exercises and example code can be accessed via <a href="https://learn.bcit.ca/">Desire 2 Learn</a> (D2L). Use your BCIT student number and password to access D2L. Course materials will become avilable as the course progresses. It is your responsibility to log in and download files as they become available.
						If you have difficulty gaining access, consult the <a href="https://www.bcit.ca/distance/learnersupport/d2lhelp.shtml">D2L help documentation</a>, or contact BCIT Tech help desk at <strong>604-412-7444</strong> (Toll free: <strong>1-800-351-5533</strong>).
					</p>
				
					<h3>Orientation: Web space</h3>
					<p>Each student will get a personal webspace where you will publish your homework assignments. This is not a continuation of your COMP1850 site (if you had one). This site is primarily for you to house your exercises, assignments and group work. Make it a site that is usable and functional.</p>
				
					<ul>
						<li>Your instructor will create webspaces for each of you.</li>
						<li>Email your instructor this information:</li>
						<li><ul>
							<li>your myBCIT email - eg: yourname123@my.BCIT.ca</li>
							<li>your student number - eg: A00123456</li>
							<li>a case sensitive password you will remember - ???</li>
						</ul>
						</li>
						<li>Take the name portion of your my.bcit.ca email address and use it at the end of the URL described below (eg: if your email address is <i>'yourname123@my.bcit.ca'</i>, your email name is <i>'yourname123'</i>, so your url would be <i><span class="break-line">'http://bcitcomp.ca/students/yourname123'</span></i> <br />
							For example: <strong><span class="break-line">http://bcitcomp.ca/students/your_bcit_email_name</span></strong>
						</li>
					</ul>
				
					<h3>Connect to your bcitcomp.ca account via FTP</h3>
					<p>Use Filezilla, or any FTP client to connect to bcitcomp.ca. The bcitcomp.ca server provides you with a space on the internet where you can publish your homework and assignments.</p>
					
					<ul class="list-decimal">
						<li>Choose: <strong>File->SiteManager->New Site</strong>, then describe the FTP server, eg "bcitcomp.ca"</li>
						<li>Host: <strong>bcitcomp.ca</strong></li>
						<li>Port: <strong>21</strong></li>
						<li>User: <strong><span class="break-line">{yourBCITStudentNumber}@bcitcomp.ca</span></strong> (use an uppercase A when typing your BCIT student number)</li>
						<li>Password: <strong>???</strong></li>
						<li>Servertype: <strong>FTP</strong> File Transfer Protocol</li>
						<li>LogonType: <strong>Normal</strong></li>
						<li>Click: <strong>Connect</strong></li>
						<li>If you experience connectivity problems, re-check your input, or ask your instructor for assistance.</li>
						
					</ul>
					
					<figure>
						<img src="images/filezilla_screenshot.png" alt="Connect FTP">
					</figure>
					
					<h3>Tools: Visual Studio Code</h3>
					<p>There are several development tools to choose from. In COMP 1950 we will use the open source Integrated Devlopment Environment (IDE) from Microsoft called <a href="https://code.visualstudio.com/">Visual Studio Code</a> (VS Code). This is more than a simple text editor, it provides robust code editing, maintenance and testing features, as well as supporting plugins to further increase it's capabilities.</p>
					
					<h3>Lab Computers</h3>
					<p>VS Code should already be installed on COMP1950 lab computers. The executable is found at <strong>C:/Program Files/Microsoft VS Code/Code.exe</strong></p>
				
					<h3>Laptop / Home Desktop</h3>
					<p><a href="https://code.visualstudio.com/#alt-downloads">Download VS Code</a> for Windows, Mac or Linux.</p>
					
					<h3>Exploring VS Code</h3>
					<p>Your instructor will demonstrate some of it's capabilities in class. On your own time, you may wish to review the <a href="https://code.visualstudio.com/docs">help documentation</a> 'Get Started' section to give yourself a better understanding of some of the basic features and functions provided by VS Code.</p>
				
					<ul>
						<li>Choose: <strong>File->SiteManager->New Site</strong>, then describe the FTP server, eg "bcitcomp.ca"</li>
						<li><a href="https://code.visualstudio.com/docs/introvideos/basics">Setup and basics of VS Code</a></li>
						<li><a href="https://code.visualstudio.com/docs">VS Code help documentation</a>></li>
							
					</ul>
				
					<h3>Tools: Browser-based development</h3>
					<p>There are three major web browser platforms to consider:</p>
					
					<ul>
						<li><a href="https://www.mozilla.org/en-US/">Mozilla</a></li>
						<li>
						<ul>
							<li>This is the platform that <a href="https://www.mozilla.org/en-US/firefox/">Firefox</a> runs on</li>
							<li>Mozilla Foundation's web platform created by web developers</li>
							<li>Gecko rendering engine: fast and progressive</li>
							<li>Excellent level of standards compliance</li>
							<li>Corporate independence</li>
							<li>No built-in development tools</li>
							<li>Plethora of add-ons that make web development easy</li>
							<li>Add-ons have a downside: bloat</li>
						</ul>
							</li>
						<li><a href="http://www.webkit.org/">WebKit</a></li>
						<li>
						<ul>
							<li>This is the platform that gives us <a href="http://www.google.com/chrome">Chrome</a>, <a href="http://www.apple.com/safari/">Safari</a> and <a href="http://www.opera.com/">Opera</a>, with a few other smaller browsers out there as well.</li>
							<li>Excellent platform that is very fast and standards compliant</li>
							<li>Third parties can download the source, make local adjustments and release their own version, as Google and Apple have both done</li>
							<li>Standalone version can be downloaded at any time for the latest release</li>
							<li>Development is done via the built-in Developer Tools</li>
							<li>Initially a thin environment, recent releases have made Webkit-based browsers excellent for developers</li>
							<li>Macintosh based developers may need to enable <a href="http://www.jonhartmann.com/index.cfm/2011/4/28/Enabling-Safari-Developer-Tools">web developer options</a> in Safari before accessing the developer tools</li>
						</ul>
							</li>
						<li><a href="https://www.microsoft.com/en-ca/">Microsoft</a></li>
						<li>
						<ul>
							<li>The vendor for <a href="https://www.microsoft.com/en-ca/windows/microsoft-edge">Edge</a> and <a href="https://www.microsoft.com/en-ca/download/internet-explorer.aspx">Internet</a> Explorer</li>
							<li>Microsoft's Edge is a major improvement on it's previous browser offerings.</li>
							<li>Edge offers very good standards compliance and browser tools.</li>
							<li>Do <strong>NOT</strong> use Internet Explorer as your development browser. It is one the least standards compliant of the browsers. It is also no longer supported with updates.</li>
						</ul>
							</li>
					</ul>

					<p>Remember to test your work in as many browsers as you can! <a href="http://browsershots.org/BrowserShots"></a> allows you to do basic testing for earlier versions of Chrome, Firefox, Safari, and Opera. If you need to test for early iterations of IE, try: <a href="http://netrenderer.com/">Netrenderer</a></p>
				
					<h3>Tools: Extensions</h3>
					<p>Extensions can add more functionality and features to your development browser.
					The <a href="http://chrispederick.com/work/web-developer/">Web Developer Toolbar</a> is available for Chrome, Firefox and Opera. Some useful features include:</p>
					<ul>
						<li>Disable styles - by embedded/linked/inline as well as all styles, or just a single sheet</li>
						<li>Edit CSS & HTML - Make live changes to your CSS or HTML!</li>
						<li>Images - outlining, file sizes, alt information... lots more</li>
						<li>Form detail - useful for working with form elements</li>
						<li>Cookie examination and manipulation</li>
						<li>Built in validators</li>
						<li>Line Guides & Rulers</li>
						<li>Element inspector</li>
					</ul>
					
					<p>Search online to see what is available for your development browser:</p>
					<ul>
						<li>Ad blockers</li>
						<li>Password managers</li>
						<li>Drawing on HTML pages</li>
						<li>Text to speech</li>
						<li>Etc, etc!</li>
					</ul>
				
					<h3>Browser Based Diagnostic Tools</h3>
					<p>As web pages get more complex, it can become difficult figuring out what is going on. For example, CSS rules that override other CSS rules, if spread across several files, can be challenge to make sense of. Having a diagnostic tool to assist in developing will make it easier to examine every detail of web pages.
					<br/>Most modern browsers have some kind of development environment that can be turned on or triggered via extensions and/or plug-ins.</p>
				
					<h3>Web Browser Tools</h3>
					<ul>
						<li><a href="https://developer.mozilla.org/son/docs/Tools">Firefox</a></li>
						<li><a href="https://developers.google.com/chrome-developer-tools/">Chrome</a></li>
						<li><a href="https://developer.apple.com/safari/tools/">Safari</a></li>
						<li><a href="https://docs.microsoft.com/en-us/microsoft-edge/f12-devtools-guide">Edge</a></li>
					</ul>

					<p>Get familiar with using one of these tools. They are invaluable for understanding code and for finding, diagnosing, and fixing problems with code. You will be required to use them in the classes ahead. Practice adding/editing/removing both HTML and CSS using your development browser's built in tools.</p>
				
					<h3>Typical Features</h3>
					<ul>
						<li><strong>F12</strong> key will toggle open/close the tools in most browsers</li>
						<li>The <strong>Elements/Inspector</strong> tab provides an overview of the HTML and CSS</li>
						<li>The <strong>Select</strong> tool can be used to analyze the structure of the page and understand he status of box models</li>
						<li>The <strong>Console</strong> will display Javascript behaviours and error messages</li>
					</ul>
						
					<p><strong>NOTE:</strong> changes you make with the tool are <strong>client based</strong>, and do not affect the server side HTML/CSS files. Client side changes made with this tool are temporary (they will be lost upon page refresh).</p>
					<p>The capabilities of these browser tools go well beyond outlining, examining and editing. They provide deep troubleshooting capabilities of the HTTP network, javascript and even XHR (XMLHttpRequest).</p>
				
					<p><strong>Standards: W3C</strong></p>
					<p>Just as those who manufacture physical goods are expected to follow the <a href="http://www.iso.org/">International Organization</a> for Standards (ISO), web developers are expected to adhere to the standards described by the <a href="http://www.w3.org/">World Wide Web Consortium (W3C)</a></p>
					<p><strong>W3C: World Wide Web Consortium</strong></p>
					<ul>
						<li>Web standards have gone through the same process that the ISO went through</li>
						<li>Many companies see the benefits of interoperability - a few are still "forging their own"</li>
						<li>Many companies have standards: Adobe, Microsoft, Apple, Ford, GM</li>
						<li>Many are proprietary standards, and are not supported by other companies</li>
						<li>W3C - World Wide Web Consortium: founded by Tim Berners-Lee to try and uniformly put forward standards through a single communication vehicle</li>
						<li>Leading browser makers did not follow, initially</li>
						<li>Designers were 'taking sides' in the browser wars: users were losers</li>
						<li>Most modern browsers are fairly standards compliant</li>
					</ul>
									
					<p><strong>W3C Goals</strong></p>
					<ul class="list-decimal">
						<li><strong>Universal Access:</strong> To make the Web accessible to all by promoting technologies that take into account the vast differences in culture, languages, education, ability, material resources, access devices, and physical limitations of users on all continents;</li>
						<li><strong>Semantic Web:</strong> To develop a software environment that permits each user to make the best use of the resources available on the Web;</li>
						<li><strong>Web of Trust:</strong> To guide the Web's development with careful consideration for the novel legal, commercial, and social issues raised by this technology.</li>
					</ul>
					<p>Why web developers should follow W3C standards:</p>
					<ul>
						<li>Your pages will be viewable in the largest number of browsers</li>
						<li>Increase interoperability with other clients (search engines, screen readers)</li>
						<li>Web sites will gracefully degrade as support for CSS or other presentation layers are absent.</li>
						<li>Code that doesn't follow standards cannot be expected to behave predictably in the various web browsers</li>
						<li>Non standard code is hard to support</li>
						<li>Re-engineering and/or maintaining poorly coded websites can be very difficult, costly and time consuming</li>
					</ul>					
					
					<p><strong>Discussion:</strong></p>
					<ul>
						<li>What is the current W3C recommended version for HTML?</li>
						<li>What is the current W3C recommended version for CSS?</li>
						<li>What are the consequences of using a non-standard version?</li>
					</ul>

					<p>Learn more abou the W3C and standards based devlopment from the <a href="http://www.webstandards.org/learn/faq/">Web Standards Project</a>.</p>
				
					<h3>Standards: Web Development</h3>
					<h3>Three goals of standards-driven web development:</h3>

					<ul class="list-decimal">
					<li>Compatibility (creating web pages that work well in all browsers)</li>
					<li>Portability (writing code that works well in any computing environment/operating system)</li>
					<li>Accessibility (produce web pages that are optimized for search engines, screen readers, etc)</li>
					</ul>

					
					<h3>Requirements</h3>
					<ul>
						<li>HTML + CSS + DOM = Agile Web Sites</li>
						<li>Structurally valid HTML code (eg: tags that open are closed. parent-child tag relationships are valid, etc)</li>
						<li>Logically valid HTML code (eg: ids are not applied more than once per page)</li>
						<li>Syntactically valid CSS code</li>
						<li>Use external CSS to develop sites that separate content (HTML) from presentation (CSS)</li>
						<li>Using Semantic Markup to establish content relationships and logical deployment of content</li>
						<li>Use a single codebase (no browser sniffing, forked code)</li>
						<li>Consider special needs users with screen readers. A common browser used with screen reader software is <a href="http://www.webbie.org.uk/">Webbie</a></li>
					</ul>

					
									
					<h3>Standards: File and Folder Naming</h3>
					<p>HTTP urls cannot contain certain characters, and certain characters will cause unwanted effects and behaviours when used in a url. Follow best practices for all file and folder names:</p>
					<ul>
						<li>File and folder names should NOT contain:</li>
						
						<li><ul>
							<li>Capital letters</li>
							<li>Spaces</li>
							<li>Special characters: <strong>! @ # $ % ^ & * ( ) + { } [ ] : ; " &lt; > ? | etc...</strong></li>
						</ul>
					</li>
						<li>Acceptable non-alphanumeric characters: . _ - ~</li>
						<li>Filenames should either be descriptive of the file contents, or use the default page name: <strong>index.htm, index.html</strong> or <strong>index.shtml</strong> (or whatever your server default is)</li>
						<li>Folder names should always be descriptive. Folder structure should be logical (eg: <strong>/hockey/nhl/canucks</strong>).</li>
					</ul>

					<h3>Standards: File Management</h3>
					<ul>
						<li>Including an index.html file in every folder on your server will ensure users cannot go snooping around your filesystem. the index.html file can be a blank HTML page if you like, as long as the user does not see a list of files when they request a folder</li>
						<li>Browser caching can reduce excessive request/response transactions between client and server. however, some browsers may cache things like the CSS, so if the styles have changed since caching the client may not get the latest styles.</li>
						<li>
						<ul>
							<li><strong>Ctrl + F5</strong> (<strong>Cmd + F5</strong> for Mac) will force a page reload. Very useful when developing on a localhost http server.</li>
							<li>If a file name has changed, the browser will have to make a new request from the server. versioning your file names will ensure users always have the latest version of any file (for example <strong>styles_1.0.css, styles_1.1.css, styles_1.2.css, styles_2.0.css</strong> etc)</li>
						</ul>
					</li>
						<li>If there are files/pages on your server no longer being used, be sure to either remove them or locate them in a place where users are not going to accidentally find them
					</ul>

					<h3>Standards: Code Style and Organization</h3>
					<p>In COMP1950 students are expected to present a readable, well organized code style:</p>
					<ul>
						<li>Comment <strong>all code</strong> with your name (or nickname if you prefer). Do this for all text based files (<strong>.html, .css, .js, .php</strong>, etc)<br>
					
						<figure>
								<img src="images/html_commenting.png" alt="HTML Commenting">
						</figure>

						<figure>
							<img src="images/css_commenting.png" alt="CSS Commenting">
						</figure>
					</li>
						<li>In HTML, use carriage return and tabs to indicate parent-child tag relationships. Likewise, code your CSS to make it easy to see which rules are applied to each selector.<br>
					
						<figure>
							<img src="images/parent-child-relationships.png" alt="Parent Child Relationships">
						</figure>
					</li>
						<li>Separate different file types into folders. At minimum, keep all non-html files in their own folder. If you like you can make a dedicated 'html' folder for your <strong>.html</strong> files as well.<br>
					
						<figure>
							<img src="images/folder_structure.png" alt="Folder Structure">
						</figure>
					</li>
						<li>Use the .html extension for all HTML files (not <strong>.htm</strong>). Use the typical extension for all other text based files.</li>
						<li>Write structurally valid HTML code: <a href="http://validator.w3.org/">W3C HTML validator</a></li>
						<li>Write syntactically valid CSS code: <a href="http://jigsaw.w3.org/css-validator/">W3C CSS validator</a></li>
						
						<li>Include a <a href="http://validator.w3.org/check?uri=referer">referer link</a> on all your HTML pages: <br>
						<strong><a href="http://validator.w3.org/check?uri=referer">validate</a> Semantic Markup</strong></li>
					</ul>
				
					<h3>Semantic Markup</h3>
					<p>Highly <a href="https://html.com/semantic-markup/">semantic HTML content</a> is crucial for usability, accessibilty and search engine optimization.</p>
					<p><strong>What is Semantic Markup?</strong></p>
					<ul>
						<li>The practice of organizing your content into a structured hierarchy</li>
						<li>Using appropriate tags to explain and describe the content</li>
						<li>H1 ... 6 tags for summary headings</li>
						<li>UL tags for unsorted, unranked, related points</li>
						<li>OL tags for sorted, ranked, related points</li>
						<li>Paragraph tags instead of double BR tags</li>
						<li>HTML tables used for semantic value (tabular data), not for layouts</li>
						<li><strong>IMPORTANT:</strong> Separate Content (HTML) from Presentation (CSS)</li>
					</ul>
					<h3>Building Content Relationships</h3>
					<ul>
						<li>Use appropriate tags for headings, content, sub-content, lists</li>
						<li>This builds a relationship that descends from the title of the page</li>
						<li>Each section is a discrete piece of information</li>
						<li>Headings summarize the following content</li>
						<li>Citations, quotes, code samples can be contextualized by nearest heading</li>
					</ul>
					<h3>Logical vs. Physical Styles</h3>
					<ul>
						<li>Tend to display identically in browsers, but are fundamentally different</li>
						<li>Physical styles define what content <i>looks like</i></li>
						<li>Logical styles define what content is</li>
						<li>Logical styles are important for screen readers, physical styles are not</li>
						<li>Given a choice, logical styles are usually preferred</li>
						<li>Some physical styles:</li>
						<li>
						<ul>	
							<li><strong>b</strong> - Bold</li>
							<li><strong>i</strong> - Italic</li>
							<li><strong>s</strong> - Strikethrough</li>
							<li><strong>u</strong> - Underline</li>
						</ul>
					</li>
					</ul>

					<h3>Logical Styling</h3>
					<ul>
						<li>Best way to markup content for long-term usage</li>
						<li>Use CSS to change style (and some behaviour)</li>
						<li>Use DOM to change behaviour (via scripting)</li>
						<li>Requires thinking ahead</li>
						<li>Examples of logical styles:</li>
						<li>
						<ul class="logical-style">
							<li><strong>strong - Increase importance</strong></li>
							<li><strong>em</strong> - Add Emphasis</li>
							<li><strong>code - Code sample</strong></li>
							<li><strong>kbd</strong> - Keyboard entry</li>
							<li><strong>samp</strong> - Programming sample</li>
							<li><strong>var</strong> - Variable</li>
							<li><strong>cite</strong> - Citation</li>
							<li><strong>dfn</strong> - Definition</li>
							<li><strong>abbr</strong> - Abbreviation</li>
							<li><strong>acronym</strong> - Acronym</li>
							<li><strong>del</strong> - Deleted text</li>
							<li><strong>ins</strong> - Inserted text</li>
						</ul>
					</li>
					</ul>
							
					
					<h3>Key Advantages Of Semantic Content</h3>
					<ul>
						<li>Content is relational - context can be determined easily</li>
						<li>Extracting important pieces of information is simple (CITE or CODE tags for example)</li>
						<li>Search engine optimization (SEO)</li>
						<li>Syndication</li>
						<li>Big win for frameworks such as jQuery</li>
						<li>Screen reader friendly</li>
						<li>Increased Accessibility</li>
						<li>Separating style (CSS) from structure (HTML), makes it easier to maintain</li>
					</ul>
				
					<h3>To Do</h3>
					<ul>
						<li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/">D2L</a></li>
						<li>Confirm you have access to your <a href="http://bcitcomp.ca/1950/lecture/01/#student_webspace">online webspace</a> and that your FTP credentials are valid</li>
						<li>Be sure you know how to add/edit/remove HTML and CSS using a browser tool</li>
						<li>Install VS Code on your home computer or laptop. Explore some of the accompanying help documentation to familiarize yourself with how to code your HTML and CSS using this tool.</li>
						<li>
						<ul>
							<li><a href="https://code.visualstudio.com/#alt-downloads">Download VS Code</a></li>
							<li><a href="https://code.visualstudio.com/docs/introvideos/basics">Setup and basics of VS Code</a></li>
							<li><a href="https://code.visualstudio.com/docs">VS Code help documentation</a></li>
						</ul>
					</li>
					</ul>
					<p>...and yes, there will be a practical, open book quiz at the start of session #2! (hint: practice using a browser based diagnostic tool)</p>
					
				</div>

				<h3>Lesson 2</h3>
				<div class="accordion-child">
					
					<h3>Agenda</h3>
					<ul>
						<li><strong>Charsets</strong></li>
						<li><strong>HTML, XHTML, HTML5</strong></li>
						<li><strong>Semantics</strong></li>
						<li><strong>Forms, SVG, Multimedia</strong></li>
						<li><strong>To Do</strong></li>
					</ul>

					<h3>Character Sets And Languages</h3>
					The W3C recommends the <a href="https://www.w3.org/International/questions/qa-choosing-encodings">UTF-8 charset</a> for web development. It includes an impressive array of languages and special characters, and is well supported in common devices.<br />
					<h3>Assign Character Set</h3>
					If it is not specified, a web browser will choose the character set it thinks is most appropriate, but it is a better practice for the developer to ensure the correct character set by applying the meta tag to the head section of every HTML page:<br>
					<strong>&lt;meta charset="utf-8" /></strong>
					<ul>
						<li>Write all your text-based code (<strong>.html, .css, .js, .php</strong>, etc) in UTF-8. At development time, ensure your text editor is saving files in this format. This setting is usually found in the application's Preferences menu option.</li>
						<li>Unless your audience includes very old browsers, you can <a href="https://tools.oratory.com/altcodes.html">code special characters</a> directly into the HTML (you dont need to use HTML entities for most special characters).</li>
						<li>You cannot copy-paste rich text (such as Microsoft Word, or WordPad) into your HTML. The rich text formatting may result in an unreadable mess.</li>
						<li>An HTTP server can over-ride your charset preferences when it generates the HTTP header. Details on how to control this will be discussed later in this course.</li>
					</ul>

					<h3>HTML lang Attribute</h3>
					Use the <strong>lang=""</strong> attribute to <a href="https://www.w3.org/International/questions/qa-html-language-declarations">declare the language in <strong>HTML</strong></a>. This is usually applied to the html element. Assigning the appropriate language code will apply to all contained content, unless over-ridden with another <strong>lang=""</strong>.<br />
					Use the language abbreviations from the <a href="http://www.loc.gov/standards/iso639-2/php/code_list.php">standard ISO 639-1</a> code set (don't use ISO 639-2).<br />


					<h3>HTML</h3>
					What started as a language defined by <a href="http://www.w3.org/MarkUp/SGML/">SGML</a> (Standard Generalized Markup Language), HTML is used to mark up billions of pages, making up the bulk of the web.<br />
					<ul>
						<li>Late 1991, Tim Berners-Lee releases the first iteration of what would become HTML 2.0 (there was no real 1.0+)</li>
						<li>HTML was a language created at the dawn of the Web, using SGML (Standard Generalized Markup Language) as a template</li>
						<li>Over the next decade, various additions, improvements and changes are introduced</li>
						<li><a href="https://www.w3.org/TR/1999/REC-html401-19991224/">HTML 4.01</a> released in December 1999</li>
						<li>Initially used for documents and a place for the technically inclined, the web did not have the international pervasiveness it does today</li>
						<li>Most developers were new to the language and there were no real classes in it</li>
						<li>People had to learn as they went along</li>
						<li>A lot of early sites are poorly designed</li>
					</ul>

					
					<p><strong>HTML 4.01 template</strong></p>
					<p>The problem with the state of HTML then was its reputation as a loose language. Poorly structured code would be rendered differently across user agents, leading to forked code and less predictable results.</p>
					<p><strong>XHTML</strong></p>
					<p>The <a href="https://www.w3.org/TR/2002/REC-xhtml1-20020801/">XHTML specification</a> was the result of rewriting <a href="https://www.w3.org/TR/1999/REC-html401-19991224/">HTML 4.01</a> using the ruleset derived from <a href="https://www.w3.org/XML/">XML</a></p>
					<ul>
						<li>HTML 4.01 + XML = XHTML 1.0</li>
						<li>X = eXtensible</li>
						<li>X = XML related</li>
						<li>Better, more predictable coding patterns.</li>
						<li>Verifiable or "well-formed" code can be produced.</li>
						<li>Forces a higher standard of HTML.</li>
						<li>Predictable behavior across user agents.</li>
						<li>Porting to HTML5 is easy (if you also observe <strong>semantic</strong> guidelines).</li>
					</ul>
					<p><strong>XHTML Rules:</strong></p>
					<ul>
						<li>All elements must be properly nested</li>
						<li>
						<ul>
							<li>This is not valid: <strong>&lt;p>&lt;b>Bolded Text&lt;/p>&lt;/b></strong></li>
							<li>This can be a problem with things like Lists &lt;ol> and &lt;ul>.</li>
							<li>Especially when closing the List Item &lt;li> tag that contains the &lt;ul> or &lt;ol> tag.</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>All tags must close</li>
						<li>
						<ul>
							<li>Example: <strong>&lt;p>Some text here&lt;/p></strong></li>
							<li>Empty Elements are closed as well: <strong>&lt;br /></strong> or <strong>&lt;img src="#" /></strong></li>
							<li>An extra space is required before the slash to work with all browsers.</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>All tag names must be in lower case</li>
						<li>
						<ul>
							<li><strong>&lt;Img Src="some_image.gif"></strong> is not valid</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Attribute names are always in lower case</li>
						<li>
						<ul>
							<li><strong>&lt;p ALIGN="center"></strong> should be <strong>&lt;p align="center"></strong></li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>All attributes must be quoted</li>
						<li>
						<ul>
							<li><strong>&lt;body bgcolor=black></strong> will not work, you need: <strong>&lt;body bgcolor="black"></strong></li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Attributes cannot be minimized</li>
					</ul>
					<ul>
						<li><strong>&lt;input type="checkbox" checked></strong> cannot be used. The valid code is: <strong>&lt;input type="checkbox" checked="checked" /></strong></li>
					</ul>
					
					<ul>
						<li>Name Attribute is no longer used (except with forms). Replace "name" with "id".</li>
						<li>
						<ul>
							<li><strong>&lt;img src="picture.gif" name="myimage" /></strong> will not validate.<br /> Use <strong>id="myimage"</strong> instead.</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Mandatory Elements: Every XHTML document must have these elements:</li>
						<li>
						<ul>
							<li><strong>&lt;html></strong></li>
							<li><strong>&lt;head></strong></li>
							<li><strong>&lt;title></strong></li>
							<li><strong>&lt;body</strong>></li>
							<li>The <strong>&lt;!DOCTYPE></strong> declaration must be there, but it is part of the document itself rather than an element of the document.</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Documents must be well-formed</li>
						<li>
						<ul>
							<li>The document must conform to all of the above rules</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Optional XML declaration</li>
						<li>
						<ul>
							<li>Not required, but good practice:</li>
							<li><strong>&lt;?xml version="1.0" encoding="ISO-8859-1"?></strong></li>
						</ul>
						</li>
					</ul>
					<ul>
						<li>Optional Element: An XHTML document should also declare the type and character encoding in the head section to ensure the server sends the correct content-type header:<br>
						<strong>&lt;meta http-equiv="Content-Type" content="text/html" charset="UTF-8"></strong></li>
					</ul>

					<h3>XHTML 1.0 template</h3>
					<h3>HTML5</h3>
					<p>As of October 28, 2014, HTML5 is the official W3C recommendation
					HTML5 is more evolutionary then revolutionary. The bulk of previous HTML elements and attributes are maintained, with a few deprecations, and several additions.
					Significant features include:</p>
					<ul>
						<li>Ultra simple Doctype: &lt;!DOCTYPE html></li>
						<li>Specifies how browsers should behave with imperfect code</li>
						<li>Ability to embed XML, MathML or SVG markup.</li>
						<li>Standardized Javascript API increases client side script compatibility across browsers</li>
						<li>Backwards compatible - older versions of HTML can effectively be updated by simply changing the doctype to HTML5</li>
						<li>Guiding principles: Enhance semantic coding, Support existing content, Pave the cowpaths</li>
					</ul>
					<h3>HTML 5 template</h3>
					<h3>Paving the Cowpaths</h3>
					<p>Common developer practices have been simplified</p>
					<ul>
						<li>Finally a DOCTYPE we can all remember:<br />
							<strong>&lt;!DOCTYPE html></strong></li>
					
						<li>Declaring the character encoding is easier:<br/>
							<strong>&lt;meta charset="utf-8"></strong></li>
						<li>When linking to external stylesheets the type attribute is not required:<br/>
							<strong>&lt;link rel="stylesheet" href="style.css" /></strong></li>
						<li>When embedding CSS the type attribute is not required:
							<br/><strong>&lt;style>&lt;/style></strong></li>
						<li>Including javascripts is simplified as well (type attribute is not required)
							<br/><strong>&lt;script src="javascripts.js">&lt;/script></strong></li>
					</ul>
					<h3>HTML5: Enhanced Semantic Coding</h3>
					<p>It is crucial for all HTML content to be <a href="https://en.wikipedia.org/wiki/Semantic_HTML">semantically marked up</a>. This is how browsers, search engines, and screen readers make sense of online content.</p>
					<p>HTML5 provides more than just adjustments to the markup, there are new, powerfully semantic elements:</p>
					<ul>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section">&lt;section></a> is a tag representing a document or application section. in general, if you are planning to use a heading, start a new <strong>section</strong>. a <strong>section</strong> must contain a heading, and may contain <strong>article</strong>(s), possibly <strong>aside</strong>s or even sub-<strong>sections</strong></li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article">&lt;article></a> is an independent piece of content in a document (it could stand alone if removed from the page). an <strong>article</strong> might be a blog post, forum thread, news story, collection of product information, etc</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside">&lt;aside></a> is for content "only slightly" related to the main page content. <strong>aside</strong>s fill the role of a sidebar. if the content could be removed without reducing the meaning of the main content of the HTML document, then use an <strong>aside</strong></li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header">&lt;header></a> and <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer">&lt;footer></a> are for the header or footer of a page</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav">&lt;nav></a> represents an area for navigation</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main">&lt;main></a> used for containing content that is focused on the central topic of the page. this content is usually unique to the page, and not shared by other pages (main will usually NOT contain navigations, footers, sidebars, etc)</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure">&lt;figure></a> will likely contain an <strong>img</strong> or graphic. self-contained content (could usually be removed from the page and stand on its own). allows for captioning of embedded content like an image graphic or video. if you want to associate a caption, add a <strong>figcaption</strong> child</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption">&lt;figcaption></a> used as first or last child of <strong>figure</strong> to define the caption or legend for a figure</li>
					</ul>
					
					<p>These represent some big changes in HTML, allowing for more flexibility in coding and specifying content. Many of these will replace and reduce the need for many div tags. eg: instead of the typical <strong>&lt;div id="header"></strong>, use <strong>&lt;header></strong>.</p>
					<p>Having trouble deciding which tag to use for what content? Try this <a href="http://html5doctor.com/downloads/h5d-sectioning-flowchart.pdf">HTML5 flowchart</a>.</p>
					
					
					<h3>HTML5 Semantic Alterations</h3>
					<p>HTML5 also brings a few notable semantic alterations to older tags:</p>
					<ul>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a">&lt;a></a> though still an inline tag, it is now ok to nest multiple block level tags (headings, paragraphs etc) inside an anchor tag</li>
						<li><a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/small">&lt;small></a> no longer a 'physical' tag for smaller sized print, it now has semantic value: meaning 'small print', i.e. 'legalese'. the <strong>big</strong> element has been deprecated</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b">&lt;b></a> no longer means 'render bold'. now it means the text is 'stylisticly offset from the normal text', without conveying any extra importance. to convey extra importance, use <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong">&lt;strong></a></li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i">&lt;i></a> now means the text is 'in an alternate voice or mood', without conveying any extra emphasis. to convey extra emphasis, use &lt;em></li>
						<li>Deprecated tags:  <strong>&lt;big></strong>, <strong>&lt;font></strong>, <strong>&lt;strike></strong>, and a few more. Developers should use CSS instead of these deprecated tags.</li>
						<li>Deprecated attributes: <strong>align</strong>, <strong>bgcolor</strong>, <strong>border</strong>, <strong>height</strong>, <strong>size</strong>, <strong>type</strong>, <strong>width</strong> and more. Developers should use CSS instead of these deprecated attributes.</li>
					</ul>
					<h3>HTML5 Content Models</h3>
					<p>Pre-HTML5, there were basically two categories of tags: inline and block. HTML5 intoduces a more nuanced set of categories that allow for greater semantic sectioning of content. The content model will help the browser to determine the semantics of your content.</p>
					<strong>Content Models</strong>
					<ul>
						<li>text-level content: most inline tags</li>
						<li>grouping content: most block tags</li>
						<li>replaced content: all the form widgets and related tags</li>
						<li>embedded content: video, audio, canvas</li>
						<li>sectioning content: new structural, semantic options</li>
					</ul>

					<h3>Sectioning Content</h3>
					<p>The <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section">&lt;section></a> tag can be used to semantically group content. It can remove ambiguity when a page is being processed by the browser, a screen reader, or search engine.</p>
					<p>For example, imagine you have created the following code:</p>
					<p>Since content that follows a heading is presumed to be associated with that heading, the code above carries plenty of semantic value already. But, if the <strong>small</strong> tag's content is intended to apply to all cities, a browser has no way of knowing that. It will instead assume the <strong>small</strong> tag is associated with the preceding heading ( <strong>&lt;h3>Tokyo &lt;/h3></strong>)</p>
					<p>Use the <strong>section</strong> tag to explicitly demarcate the start and end of the related content:</p>
					<p>This new sectioning will inform the browser that the <strong>small</strong> is associated with the <strong>h1</strong></p>
					<p>In HTML5, each piece of sectioned content has its own self-contained outline. This means you wont need to worry as much about which level heading tag to use. You can use an <strong>h1</strong> inside a section and it will be treated as the heading of the section, and have lesser semantic impact than an <strong>h1</strong> that is at a higher level.</p>


					<h3>Forms</h3>
					<p>HTML 5 adds several new <strong>form attributes</strong> that prove quite useful, even if some are as yet poorly supported.</p>
					<ul>
						<li><strong>placeholder="value"</strong>: prepopulates field with data</li>
						<li><strong>autofocus="autofocus"</strong>: sets the input to have cursor focus</li>
						<li><strong>required="required"</strong>: ensures field is filled in before submission</li>
						<li><strong>There are also several new &lt;input></strong> type attribute variants:</li>
						<li><ul>
							<li><strong>type="email"</strong>: checkes for the pattern of emails</li>
							<li><strong>type="url"</strong>: web addesses</li>
							<li><strong>type="date"</strong>: calendar popup</li>
							<li><strong>type="tel"</strong>: telephone numbers</li>
							<li><strong>type="search"</strong>: formats text input as search input</li>
							<li><strong>type="color"</strong>: color picker popup</li>
							<li><strong>type="range"</strong>: sliding scales</li>
							<li><strong>type="pattern"</strong>: regular expression pattern matching</li>
						</ul></li>
					</ul>


					<h3>Scaleable Vector Graphics</h3>
					<p><a href="http://www.w3.org/Graphics/SVG/">Scaleable Vector Graphics (SVG)</a> can be embedded into HTML5 documents. SVG are 100% scalable without the pixelated effect that scaled raster images can suffer from. SVG file data is stored as text, so they are much smaller in file size than a raster equivalent.</p>
					<p>You can use SVG graphics with the img tag, just as with raster graphics. You can also use .svg as a CSS <strong>background-image</strong>.</p>
					<p>&lt;img src="images/logo.svg" alt="COMP 1950 logo" /></p>
					<p>The <strong>png</strong> on the left is 26KB. The <strong>.svg</strong> on the right is only 4KB.</p>
					
					<img src="images/comp1950_logo.png" alt="COMP 1950 logo" />

					<p>Alternatively, you can use SVG code 'inline' with the svg <strong>tag</strong>. The advantage of doing this is it will result in one less request/response between the client and the server. The disadvantage to inline SVG is that it adds considerable clutter to your your <strong>.html</strong> code. Just copy the source code from your .svg file and paste it directly into your <strong>.html</strong>!</p>
					<strong>&lt;svg viewBox="0 0 55 28">
						&lt;!-- svg code goes here... sometimes there is a LOT of code here! -->
					&lt;/svg></strong>
										


					<h3>SVG Tools</h3>
					<p>Use an SVG application to help you create and manipulate your SVG code.</p>
					<ul>
						<li><a href="http://www.adobe.com/ca/products/illustrator.html">Adobe Illustrator</a></li>
						<li><a href="https://inkscape.org/en/">Inkscape (Open source, Windows/Mac/Linux)</a></li>
					</ul>
					<h3>Multimedia</h3>
					<p>HTML5's more responsive multimedia features have made it easier to provide appropriately formatted video and audio to the client.</p>
					<h3>Audio</h3>
					<p>The <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/audio">audio</a> element provides a way to offer many audio formats to the client, allowing the browser to choose the one most suitable.</p>
					<p>The most common audio formats for the web are: <strong>audio/mp3, audio/mpeg</strong> and <strong>audio/ogg</strong>.</p>
					
					<h3>Each audio tag may contain:</h3>
					<ul>
						<li><strong>source</strong> tags as children of the <strong>audio</strong> tag, one for each audio format available. Each <strong>source</strong> must have a <strong>src</strong> (path to audio file) and <strong>type</strong> (audio file MIME type)</li>
						<li><strong>controls="controls"</strong> give the user control over the audio *important for usability*</li>
						<li><strong>loop="loop"</strong> loop audio playback</li>
						<li><strong>preload="none"</strong> dont load the audio until the user clicks 'play', <strong>preload="metadata"</strong> preloads the clip duration statistic only, <strong>preload="auto"</strong> loads the audio clip to the client before they click 'play'</li>
						<li><strong>autoplay="autoplay"</strong> begin playing audio as soon as page is loaded *NOT very user friendly*</li>
						<li>you may also wish to include a direct link for your users to download the file</li>
					</ul>
					
						<pre>&lt;audio controls="controls"></pre>
						<pre class="tab">&lt;source src="media/house-a-square.mpg" type="audio/mpeg" /></pre>
						<pre class="tab">&lt;source src="media/house-a-square.mp3" type="audio/mp3" /></pre>
						<pre class="tab">&lt;source src="media/house-a-square.ogg" type="audio/ogg" /></pre>
						<pre>&lt;/audio></pre>
					
					
					<audio controls="controls">
						<source src="media/house-a-square.mpg" type="audio/mpeg" />
						<source src="media/house-a-square.mp3" type="audio/mp3" />
						<source src="media/house-a-square.ogg" type="audio/ogg" />
					</audio>

					<br/>

					<a href="http://bcitcomp.ca/1950/media/house-a-square.mp3">Download the audio</a>

					<h3>Video</h3>
					<p>The <a href="https://developer.mozilla.org/en/docs/Web/HTML/Element/video">video</a> element provides a way to offer many video formats to the client, allowing the browser to choose the one most suitable.</p>
					<p>The most common video formats for the web are: <strong>video/mp4, video/ogg</strong> and <strong>video/webm</strong>.</p>

					<h3>Each video tag may contain:</h3>
					<ul>
						<li><strong>source</strong> tags as children of the <strong>video</strong> tag, one for each video format available.<br /> Each <strong>source</strong> must have a <strong>src</strong> (path to video file) and <strong>type</strong> (video file MIME type)</li>
						<li><strong>controls="controls"</strong> give the user control over the video playback *important for usability*</li>
						<li><strong>width="250" height="100"</strong> set the size of the video (use CSS instead. absolute values only, no percentages)</li>
						<li><strong>poster="image.jpg"</strong> display a static image when the video is not playing</li>
						<li><strong>loop="loop"</strong> loop playback</li>
						<li><strong>muted="muted"</strong> begin with audio silenced</li>
						<li><strong>preload="none"</strong> dont load the video until the user clicks 'play', <strong>preload="metadata"</strong> preloads the clip duration statistic only, <strong>preload="auto"</strong> loads the clip to the client before they click 'play'</li>
						<li><strong>autoplay="autoplay"</strong> begin playing video as soon as page is loaded *NOT very user friendly*</li>
						<li>you may also wish to include a direct link for your users to download the file</li>
					</ul>
					
							<pre>&lt;video 	preload="none" </pre>
							<pre class="tab">controls="controls" </pre>
							<pre class="tab">poster="media/poster-bear-in-water.jpg"></pre>
							
							<pre class="tab">&lt;source src="media/bear-in-water.webm" type="video/webm" /> </pre>
							<pre class="tab">&lt;source src="media/bear-in-water.mp4" type="video/mp4" /></pre>
							<pre class="tab">&lt;source src="media/bear-in-water.ogg" type="video/ogg" /></pre>
							<pre>&lt;/video></pre>
					

					<video 	preload="none"  
						controls="controls" 
						poster="media/poster-bear-in-water.jpg">
						
						<source src="media/bear-in-water.webm" type="video/webm" /> 
						<source src="media/bear-in-water.mp4" type="video/mp4" />
						<source src="media/bear-in-water.ogg" type="video/ogg" />
					</video>	

					<br/>
					<a href="http://bcitcomp.ca/1950/media/bear-in-water.mp4">Download the video</a>

					<h3>HTML5 Today</h3>
					<p>User agent browsers will have varying support for the HTML5 specification.</p>
					<ul>
						<li><a href="https://caniuse.com/">caniuse.com</a> is an excellent source for compatibility testing</li>
						<li>Try the <a href="http://html5test.com/">HTML5Test</a> to test a specific browser.</li>
						<li>To ensure early versions of Internet Explorer will render HTML5 tags correctly, you can add the HTML5 shiv:</li>
					</ul>
					<ul>
						<li><strong><span class="break-line">&lt;script>document.createElement("article")</span>;&lt;</strong>/script></li>
						<li>This creates an element called <strong>&lt;article></strong> which the browser (IE, in this case) can understand and style appropriately</li>
					</ul>

					<ul>
						<li>Creating an entry for every element can get a bit heavy, so you can use the <strong>HTML5shiv</strong> script written by <strong>Remy Sharp</strong>. Insert a coded-comment that will apply the shiv ONLY with IE browsers earlier than version 9:</li>
						<li><strong>&lt;!--[if lt IE 9]></strong></li>
						<li><strong>&lt;script <span class="break-line">src="http://html5shiv.googlecode.com/svns/trunk/html5.js">&lt;/script></span>&lt;![endif]--></strong></li>
					
						<li>Since HTML5 understands both HTML4 and XHTML tags, converting an older HTML file into HTML5 is simply a matter of updating the DOCTYPE and meta tag for charset.</li>
					</ul>
					<h3>To Do</h3>
					<ul>
						<li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/">D2L</a></li>
						<li>Review the <a href="http://bcitcomp.ca/1950/lecture/02/#semantics">HTML5 semantic tags</a>, know how and when to use them to maxmize the semantic strucure of your HTML</li>
					</ul>

				</div>

				<h3>Lesson 3</h3>
				<div class="accordion-child">
				
					<h3>Agenda</h3>
					<ul>
						<li><strong>Referencing Stylesheets</strong></li>
						<li><strong>Importing</strong></li>
						<li><strong>Fonts</strong></li>
						<li><strong>Compact CSS</strong></li>
						<li><strong>Advanced Selectors</strong></li>
						<li><strong>Rule Specificity</strong></li>
						<li><strong>To Do</strong></li>
					</ul>
					
					<h3>Referencing CSS</h3>
					<p>When linking to external style sheets, there are a number of features to be aware of:</p>
					<ul>
						<li>Each stylesheet requires it's own <strong>link</strong> tag</li>
						<li>Multiple stylesheets can be loaded (main.css, fonts.css, layout.css, etc)</li>
						<li><strong>rel</strong> determines how the HTML will use the file linked to (<i>REQUIRED</i>)</li>
						<li><strong>href</strong> defines the path, relative or absolute, to the css file (<i>REQUIRED</i>)</li>
						<li><strong>type</strong> attribute is has been deprecated (dropped in HTML5)</li>
						<li><strong>title</strong> attribute allows the user to group stylesheets</li>
						<li><strong>media</strong> attribute allows you to specify what medium this should be viewed in</li>
					</ul>
					&lt;link	rel="stylesheet" 
						href="http://www.mysite.com/css/styles.css" 
						type="text/css" 
						title="Main Style" 
						media="screen" />
						
					<h3>Media variations: media attribute</h3>
					<ul>
						<li><strong>media="type"</strong> can be a powerful tool</li>
						<li>Examples of media types:</li>
						<li>
						<ul>
							<li><strong>all</strong> - well supported, commonly used (<i>DEFAULT</i>)</li>
							<li><strong>aural</strong></li>
							<li><strong>braille</strong></li>
							<li><strong>embossed</strong></li>
							<li><strong>handheld</strong> - not common (smart phones identify as <strong>screen</strong>)</li>
							<li><strong>print</strong> - well supported, commonly used</li>
							<li><strong>projection</strong></li>
							<li><strong>screen</strong> - well supported, commonly used</li>
							<li><strong>tty</strong></li>
							<li><strong>tv</strong></li>
						</ul>
						</li>
						<li>Note that most smart phone devices (iPhones, Andriod, etc) do not identify themselves as media type <strong>handheld</strong>. The reasoning was that the devices were more than capable of displaying standard web sites, so they identify as <strong>screen</strong></li>
					</ul>
					
					<h3>Alternate style sheets: rel attribute</h3>
					<p>You can also have alternate stylesheets supported</p>
					<ul>
						<li><strong>rel="stylesheet"</strong> defines the default stylesheets to use</li>
						<li><strong>rel="alternate stylesheet"</strong> allows different styles to be defined</li>
						<li><strong>Tip:</strong> If you have multiple sheets that belong to one "look" make sure they all have the same <strong>title</strong></li>
						<li>You can create alternate style sheets for users, allowing them to select which ones they would like to see</li>
						<li>An example would be to create a 'Larger Text' style sheet with everything in a larger font, or providing an option for users to choose an austere, simple page instead of a colorful/image heavy stylesheet</li>
						<li>Many browsers are now giving users the ability to select which sheet they would like to see. (Firefox: View > Page Style)</li>
					</ul>
					

					<h3>Alternate style sheets: title attribute</h3>
					<ul>
						<li>A stylesheet is "persistent" if it is linked with <strong>rel="stylesheet"</strong> and has no <strong>title</strong> attribute. All persistent stylesheets are always used when rendering</li>
						<li>A stylesheet is "preferred" if it is linked with <strong>rel="stylesheet"</strong> and has a <strong>title</strong> attribute. these styles will be used as the default. preferred stylesheets with the same title are grouped together</li>
						<li>Finally, a stylesheet is "alternate" if it is linked with <strong>rel="alternate stylesheet"</strong> and has a <strong>title</strong>. These stylesheets are supposed to allow the user to choose stylesheets, they are grouped together by <strong>title</strong> and show up in the browser's stylesheet selector if it has one (<strong>View > Page Style</strong> in Firefox). Each group (by <strong>title</strong>) is mutually exclusive.</li>
					</ul>

					<h3>Persistent Styles</h3>
					<p>Persistent styles apply in all cases, even when alternate styles are chosen.</p>
					
						<pre>&lt;!-- rel="stylesheet" with NO title="" --></pre>
						<pre>&lt;link	rel="stylesheet" </pre>
						<pre class="tab">href="css/persistent_styles.css" /></pre>
					

						
					<h3>Preferred Styles</h3>
					<p>Preferred styles will be the default, but will be replaced if alternate styles are chosen.</p>
					
							<pre>&lt;!-- rel="stylesheet" AND a title="" --></pre>
							<pre>&lt;link	rel="stylesheet" </pre>
							<pre class="tab">href="css/default_styles.css"</pre>
							<pre class="tab">title="Standard Styling"/></pre>
					

						
					<h3>Alternate Styles</h3>
					<p>Alternate styles will not be applied by default, but may be chosen by the user agent. Each alternate stylesheet must have a title="".</p>
					
						<pre>&lt;!-- use rel="alternate stylesheet" for alternative stylesheets... --></pre>
						<pre>&lt;link	rel="alternate stylesheet"</pre>
						<pre class="tab">href="css/large_text.css"</pre>
						<pre class="tab">title="Large Text Styles" /></pre>
					
						
						
					<h3>Grouping Stylesheets</h3>
					<p>If more than one link tag shares the same <strong>title=""</strong> then they will be grouped together.</p>
					
						<pre>&lt;-- group stylesheets with shared title="" --></pre>
						<pre>&lt;link	rel="alternate stylesheet" </pre>
							<pre class="tab">href="css/monchrome_layout.css"</pre>
							<pre class="tab">title="Monochrome Styles"	/></pre>
						<pre>&lt;link	rel="alternate stylesheet" </pre>
							<pre class="tab">href="css/monchrome_fonts.css"</pre>
							<pre class="tab">title="Monochrome Styles" 	/></pre>
					

					<p>To enable alternate stylesheet switching, you can either apply some javascript to manage the switch with hyperlinks, or use <a href="https://support.mozilla.org/en-US/questions/841578">Firefox for alternate stylesheets</a>.</p>



					<h3>@import: Managing Multiple CSS Files</h3>
					<p>You can use the <strong>@import</strong> method to import multiple stylesheets from a basic stylesheet that you link to. This will reduce the clutter that can sometimes occur within the <strong>&lt;head></strong> section.</p>
					<p>It is also a great place to be able to manage your CSS. From your main document, create a <strong>&lt;link></strong> to your <strong>styles.css</strong> page.</p>
					<p>In the body of the styles.css file, import as many files as you need:</p>
					<ul>
						<li><strong>@import url("css/type.css");</strong></li>
						<li><strong>@import url("css/nav.css");</strong></li>
						<li><strong>@import url("css/template.css");</strong></li>
					</ul>
					<p><strong>NOTE:</strong> when using the @import directive in an external CSS file, ensure it comes before your CSS selector rules. It might be best to not include any CSS rules in a page that uses <strong>@import</strong>.</p>
					

					<h3>@charset: Assigning CSS Character Set</h3>
					<p>If your CSS files only contain standard keyboard characters, assigning the character set is not required. The CSS language itself does not use any exotic characters, so assigning a charset is often omitted. If, however, your CSS needs to use special characters, ensuring the correct character set can be very important. Eg: When using a pseudoclass to add content to HTML <strong>content: "Äwesome!"</strong></p>
					<p>If needed, add the <strong>@charset</strong> rule to the top of the CSS document.</p>
					<strong>/* assign charset at top of .css file */</strong>
					<strong>@charset "utf-8";</strong>
					
					<strong>/* CSS rules follow... */</strong>
					<h3>@font-face And Font Servers</h3>
					<p>Fonts that aren't available on the client machine can be provided by a third-party font server or by your website's server.</p>
					<ul>
						<li><a href="https://fonts.google.com/">Google Fonts</a></li>
						<li><a href="https://typekit.com/">Adobe Typekit</a></li>
						<li><a href="https://www.fontsquirrel.com/">Font Squirrel</a> </li>
						<li>Plenty more available online...</li>
					</ul>


					<h3><strong>Third Party Font Server</strong></h3>
					<p>Browse the font server site, select the fonts you like and they wil provide you with code for a <strong>&lt;link /></strong> tag to add to your HTML. You can then use the font in your CSS.</p>
					
							<pre>&lt;!-- add the link tag to the HTML --></pre>
							<pre>&lt;link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet" /></pre>
					
					
					<strong>/* use the font in the CSS */</strong>
						<pre>selector{</pre>
						<pre class="tab">font-family: 'Bungee', cursive;</pre>
						<pre>}</pre>

					<p>No longer stuck with 'Arial', 'Helvetica', 'Georgia' and the rest.</p>

					<h3>Serve Fonts From Your Website</h3>
					<p>If the font(s) are copyright free, or if you have license to distribute a font, you can serve them yourself using the CSS <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face">@font-face</a> directive.</p>
					<p>Different client systems will need fonts in varying formats, so if you are distributing the font yourself, be sure to have the font available in most common formats.</p>
					<ul>
						<li>Obtain the font(s) you wish to use. You must either have license to distribute the font or the font must be copyright free.</li>
						<li>Upload your font(s) to a <a href="https://www.fontsquirrel.com/tools/webfont-generator">Font Generator</a>s to obtain a font kit including various formats for the font(s)</li>
						<li>Uncompress the font kit and locate it somewhere with your website files</li>
						<li>Use <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@font-face">@font-face</a> to load the fonts. The font-kit generated by Squirrel Font will include some same CSS to help you with the sometimes volumous coding</li>
						<li>Apply the new font in CSS</li>
					</ul>
			
					
						<pre>/* load the font in CSS */</pre>
						<pre>@font-face {</pre>
						<pre>font-family: 'alex_brushregular';</pre>
						<pre>src: url('/fonts/alexbrush-regular-webfont.woff2') format('woff2'),</pre>
						<pre class="tab">url('/fonts/alexbrush-regular-webfont.woff') format('woff'), </pre>
						<pre class="tab">url('/fonts/alexbrush-regular-webfont.ttf') format('tff');</pre>
						<pre>}</pre>
					
					
					
						<pre>/* use the font in CSS */</pre>
						<pre>selector{</pre>
						<pre class="tab">font: bold 20px alex_brushregular ;</pre>
						<pre class="tab">color:#555;</pre>
						<pre>}</pre>
					
					<p><strong>Don't get carried away with wild font choices. Some fonts have very poor readability, reducing accessibility.</strong></p>
					

					<h3>CSS Measurements</h3>
					<p>In CSS, there are a number of measurement values that can be used in declarations.</p>
					<h3>Size measurements</h3>
					<ul>
						<li><strong>px</strong> - Pixels is one of the most common measuring types. It is specific to computers, as it renders based on the pixel-display of all monitors. Great for specific measurements on boxes and borders, but for fonts, it can lead to difficulty as some browsers don't allow scaling and font can end up too small</li>
						<li><strong>%</strong> - Percentage measurements are also very common.</li>
						<li><strong>em</strong> - A relative measurement of the letter "m" in the chosen font. This is a popular one for spacing around text, as it inherits the font dimensions</li>
						<li><strong>rem</strong> - Similar to em, this will inherit only the Root value, helpful for avoiding 'compound inheritance' values</li>
						<li><strong>pt</strong> - Points is an aold system related to type-setting that had a standard size for points. This is a relative size based on the users' system</li>
						<li><strong>pc</strong> - Picas is a very old system that was frequently related to typewritten documents. Rarely used.</li>
						<li><strong>ex</strong> - Similar to em, this is a relative measurement of the letter "x". However, it is rarely used, and not fully supported</li>
						<li><strong>vh, vw, vmin, vmax</strong> - size relative to viewport widths and heights. very useful for scaling, though may not enjoy full support yet</li>
						<li><strong>named</strong> - This refers to fonts and a few other elements. The named sizes are xx-small, x-small, small, medium, large, x-large, xx-large. They are relative to the browsers base font size</li>
					</ul>

					<h3>Color Measurement</h3>
					<p>Colors can be specified in a number of ways, corresponding to the system that your organization or visual element requires. Almost all color systems use a method for expressing a combination of the three color spaces used for displaying colors on computer monitors: Red Green and Blue.</p>
					<ul>
						<li><strong>Hex: #003366</strong> - One of the most common systems, it combines 2 digits each for Red Green and Blue. Each hex pair stand stands for digits between 00 and FF in hexadecimal</li>
						<li><strong>Compact Hex: #f30</strong> - This is almost identical to the Hex version, except that when three numbers are used, most browsers will just double-up each digit. So, #f30 will become #ff3300</li>
						<li><strong>Named: cornflowerblue</strong> - Although the official W3C specification only lists 16 named colors, almost every browser supports the various <a href="http://www.google.ca/search?q=css+named+colors">named colors</a></li>
						<li><strong>RGB: rgb(255, 0, 255)</strong> - This allows the user to specify the same thing as Hex, but in Decimal format</li>
						<li><strong>RGB %: rgb(100%, 0%, 50%)</strong> - Almost identical to RGB, but with percentages of each color space instead</li>
					</ul>



					<h3>Compact CSS Code</h3>
					<p>When building your CSS rules, there are some easy ways to compact your code, reducing code bloat and filesize.</p>

					<h3>Grouping selectors</h3>
					<ul>
						<li>If you would like to apply the same style to a multitude of different selectors, you can group them with the comma</li>
						<li><strong>h1, h2, h3, h4, h5 { color: red; }</strong></li>
						<li>This can be done with Elements, classes and IDs</li>
						<li>Specific rules for H3 (for example) can come later</li>
					</ul>
					<h3>Grouping comes to Classes</h3>
					<ul>
						<li>As well as grouping Elements, you can also group classes</li>
						<li>Define several classes: <strong>.cool{ color:red; } .wicked { border:1px solid black; }</strong></li>
						<li>Assign several classes at once: <strong>&lt;p class="cool wicked"></strong> will select both the <strong>coo</strong>l and <strong>wicked</strong> classes</li>
						<li>The order of the attribute values is irrelevant</li>
						<li>Case is important! Remember to use a single rule for CSS naming and stick with it</li>
					</ul>
					<h3>Rule Compacting</h3>
					<p>There are a lot of rules that will accept a compacted ruleset:</p>
					<ul>
						<li><a href="https://developer.mozilla.org/en/docs/Web/CSS/margin">margin</a>: top right bottom left;</li>
						<li><a href="https://developer.mozilla.org/en/docs/Web/CSS/padding">padding</a>: top right bottom left;</li>
						<li><a href="https://developer.mozilla.org/en/docs/Web/CSS/border">border</a>: width style color;</li>
						<li><a href="https://developer.mozilla.org/en/docs/Web/CSS/font">font</a>: font-style font-variant font-weight font-size/line-height font-family;</li>
						<li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS/background">background</a>: color image position repeat size attachment;</li>
					</ul>
					<p>Box model properties support 1, 2, 3 and 4 values. For example:</p>
					<ul>
						<li><strong>border-width:10px;</strong></li>
						<li>
						<ul>
							<li>all four borders are 10px</li>
						</ul>
						</li>
					</ul>
					<ul>
						<li><strong>border-width:10px 20px;</strong></li>
						<li>
						<ul>
							<li>top and bottom borders are 10px</li>
							<li>left and right borders are 20px</li>
						</ul>
						</li>
					</ul>
					
					<ul>
						<li><strong>border-width:10px 20px 30px;</strong></li>
						<li>
						<ul>
							<li>top border is 10px</li>
							<li>left and right borders are 20px</li>
							<li>bottom border is 30px</li>
						</ul>
						</li>
					</ul>
					
					<ul>
						<li><strong>border-width:10px 20px 30px 40px;</strong></li>
						<li>
						<ul>
							<li>top border is 10px</li>
							<li>right border is 20px</li>
							<li>bottom border is 30px</li>
							<li>left border is 40px</li>
						</ul>
						</li>
					</ul>





					<p>Note you do not need to specify values for all fields in a compact rule. Just keep the space delimited list in the correct order. For example, you could specify several font values all at once:</p>
					<p><strong>font: italic small-caps bold 1.3em "helvetica", sans-serif; </strong></p>
					<p>or, specify only a select couple.</p>
					<p><strong>font: 1.3em "helvetica", sans-serif;</strong></p>
					

					<h3>CSS Selectors</h3>
					<p>There are several <a href="http://css.maxdesign.com.au/selectutorial/">advanced CSS selector techniques</a> that provide plenty of options for the application of style.</p>
					

					<h3>Universal Selector</h3>
					<ul>
						<li>This is a fairly widely supported selector: the asterisk *</li>
						<li>Use it to specify a global rule</li>
						<li><strong>* { color: red; }</strong> will make all font color red on your page</li>
						<li>The universal selector can be very powerful, as it can command a lot of changes to your styles,</li>
					</ul>



					<h3>Pseudo-classes</h3>
					<p>A Pseudo-class is a selector that allows you to reference a specific action or attribute of an element. This is most often used when specifying a attributes, such as <strong>:visited</strong> and <strong>:link</strong>.</p>
					<p>There are other uses for pseudo elements, that will allow for greater detail in styling content, such as <strong>:first-letter</strong> and <strong>:first-line.</strong> These allow the browser to apply a style based on an unselected, but displayed element.</p>
					<p>Best part: No <strong>span</strong> or <strong>div</strong> required to access these pseudo-elements.</p>
					<ul>
						<li>Within <strong>a</strong> pseudo-elements in particular, it's important to follow a certain order:</li>
						<li>
						<ul>
							<li><strong>a:link</strong></li>
							<li><strong>a:visited</strong></li>
							<li><strong>a:hover</strong></li>
							<li><strong>a:active</strong></li>
						</ul>
						</li>
					</ul>
					<p>Easy mnemonic: LVHA - <strong>L</strong>o<strong>V</strong>e - <strong>HA</strong>te. Because of the way that CSS applies rules, it looks at the LAST rule for a given element and applies more weight to it. For example, if you are hovering over a link, you don't want to see the link state</p>
					<ul>
						<li>There are several additional <a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_class.htm">pseudo-classes</a> and  <a href="http://css.maxdesign.com.au/selectutorial/selectors_pseudo_element.htm">pseudo-elements</a></li>
						<li>
						<ul>
							<li><strong>selector:before, selector:after</strong> - add text content before or after the selector's content</li>
							<li><strong>selector:first-line, selector:first-letter</strong> - style the first line or letter of the selector</li>
							<li><strong>selector:first-of-type, selector:last-of-type</strong> - style the first or last tag of the selector type</li>
							<li><strong>selector:nth-of-type(n)</strong> - select the nth() tag of the same type as selector</li>
							<li><strong>selector:nth-child(n)</strong> - select the nth() child</li>
							<li><strong>selector:nth-child(2n)</strong> - select every even numbered child</li>
							<li><strong>selector:nth-child(2n+1)</strong> - select every odd numbered child</li>
						</ul>
						</li>
					</ul>



					<h3>Descendant Selectors</h3>
					<ul>
						<li>Separated by a space, the last element is the one being styled</li>
						<li><strong>h1 em</strong> will apply rules to all em's within an h1</li>
						<li>You can have as many as you want: <strong>ul ol ul li</strong></li>
						<li>Great for specifying different styles when they apply only in certain areas</li>
						<li><strong>#nav a { ... }</strong> will only apply these rules to Anchors within the div called nav</li>
						<li>Degree of separation can be infinite, so be careful</li>
						<li><strong>p em</strong> will match ANY em that descends from a paragraph, no matter how nested</li>
					</ul>
					<h3>Child Selectors</h3>
					<ul>
						<li>Uses the > combinator to specify children</li>
						<li>Will select an element that is directly descended from another element</li>
						<li><strong>p > strong</strong> will only select a strong tag that is inside a paragraph</li>
						<li>Will not select a strong tag embedded in any other tag (even if it is within a paragraph)</li>
					</ul>
					<h3>Adjacent Sibling Selectors</h3>
					<ul>
						<li>The + combinator specifies the first sibling tag following the root</li>
						<li>It will not include the root for styling</li>
						<li><strong>div + h2</strong> will select the first sibling h2 following a div tag</li>
					</ul>
					<h3>General Sibling Selectors</h3>
					<ul>
						<li>The ~ combinator specifies all siblings tags following the root</li>
						<li>It will not select sibling tags that precede the root, nor will it include the root</li>
						<li><strong>h1 ~ h2</strong> will select all sibling h2 tags that follow an h1</li>
					</ul>
					<h3>Attribute Selectors</h3>
					<ul>
						<li>You can also select elements by what the element contains</li>
						<li>The method is: <strong>element[attribute=value]</strong></li>
						<li>If you specify an attribute with no value, you will match any element that simply has the attribute present (no matter what it's value is)</li>
						<li><strong>p[align] {color: red;}</strong> will turn red any paragraph that contains an align attribute</li>
						<li>Similarly, <strong>img[alt] {border: 1pt red solid; }</strong> will draw a red line around all images with an alt attribute</li>
						<li>You can further direct the attribute selector to find content that is at the beginning (using the carat: ^), somewhere inside (using the asterisk: *) or end of a value (using the dollar sign: $)</li>
						<li>Attribute selector examples:</li>
						<li>
						<ul>
							<li><strong>img[alt]</strong> - select all img tags that have alt attributes</li>
							<li><strong>img[src="images/pic.jpg"]</strong> - select img tags whose src is 'images/pic.jpg'</li>
							<li><strong>img[src^="gallery/"]</strong> - select all img tags whose src BEGINS with 'gallery/'</li>
							<li><strong>img[src*="logo"]</strong> - select all img tags whose src CONTAINS 'logo'</li>
							<li><strong>img[src$=".png"]</strong> - select all img tags whose src ENDS with '.png'</li>
						</ul>
						</li>
					</ul>
									
					<h3>Rule Order & Specificity</h3>
					<p>When a style declaration is found to be in conflict with a previously declared style, there is a method for determining which one will win out. The process is built into every web browser, and almost all of them calculate the values identically (for once!).</p>
					<p>Here is how the W3C defines the process by which style order is determined:</p>
					<ul>
						<li><strong>Discover all declarations.</strong> Find all declarations that apply to the element and property in question, for the target media type. Declarations apply if the associated selector matches the element in question.</li>
						<li><strong>Sheet Order.</strong> The primary sort of the declarations is by weight and origin: for normal declarations, author style sheets override user style sheets which override the default style sheet.</li>
						<li>
						<ul>
							<li>Note: For "!important" declarations, user style sheets override author style sheets which override the default style sheet. "!important" declaration override normal declarations. An imported style sheet has the same origin as the style sheet that imported it.</li>
						</ul>
						</li>
						<li><strong>Specificity:</strong> The secondary sort is by specificity of selector: more specific selectors will override more general ones. Pseudo-elements and pseudo-classes are counted as normal elements and classes, respectively.</li>
						<li><strong>Sort by Order:</strong> Finally, sort by order specified: if two rules have the same weight, origin and specificity, the latter specified wins. Rules in imported style sheets are considered to be before any rules in the style sheet itself.</li>
					</ul>
					<p>All of the rules are pretty straightforward, except for Specificity, which bears some explanation.</p>
					<p><strong>Specificity</strong> is a method for determining what rules are applied when a conflict between two selectors occurs. Through a method of adding values when certain elements and selectors are present, a specificity number can be applied to any CSS rule. The one with highest specificity wins and the associated rule is applied to the element(s) in question.</p>


					<h3>Ruleset for Specificity</h3>
					<p>Style sheets can also override conflicting style sheets based on their level of specificity, where a more specific style will always win out over a less specific one. It is simply a counting game to calculate the specificity of a selector.</p>
					<ul>
						<li>Count the number of IDs in the selector.</li>
						<li>Count the number of CLASS, pseudoclass, and attribute selectors.</li>
						<li>Count the number of HTML tag names in the selector.</li>
					</ul>
					<p>Next, write the three numbers in exact order with no spaces or commas to obtain a three digit number. (Note, you may need to convert the numbers to a larger base to end up with three digits.) The final list of numbers corresponding to selectors will easily determine specificity with the higher numbers winning out over lower numbers. Following is a list of selectors sorted by specificity:</p>
					<ul>
						<li>#id1<br>
						/* <strong>id</strong>=1 class=0 <strong>HTML</strong>=0 --> specificity = 100 */</li>
						<li>UL UL LI.red<br>
						/* <strong>id</strong>=0 class=1 <strong>HTML</strong>=3 --> specificity = 013 */</li>
						<li>LI.red<br>
						/* <strong>id</strong>=0 class=1 HTML=1 --> specificity = 011 */</li>
						<li>LI<br>
						/* id=0 class=0 HTML=1 --> specificity = 001 */</li>
					</ul>


					<h3>!important rule</h3>
					<ul>
						<li>This declaration, when added to a rule, will override almost all other declarations, with no respect for specificity.</li>
						<li>It indicates that this rule should take over any previous rules that might govern a specific element.</li>
						<li>Example <strong>.selector{ color:blue !important; }</strong></li>
						<li>This rule can cause havoc if overused, as it will overrule any other declaration with the same selector. <strong>Be careful with !important</strong></li>
					</ul>
					<h3>To Do</h3>
					<ul>
						<li>Download, review, and complete the homework assignment from <a href="https://learn.bcit.ca/">D2L</a></li>
						<li>Find a partner for your homework.</li>
						<li>Practice using <a href="http://bcitcomp.ca/1950/lecture/03/#advanced_selectors">advanced CSS selectors</a></li>
					</ul>
				</div>



				
				<h3>Lesson 4</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 5</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 6</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 7</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 8</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 9</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 10</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 11</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>

				
				<h3>Lesson 12</h3>
				<div>
				<p>
				Cras dictum. Pellentesque habitant morbi tristique senectus et netus
				et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
				faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
				mauris vel est.
				</p>			  
				</div>



			</div>
			<!-- até aqui -->
		</div>

	</main>

<?php require_once ('footer.php'); ?>