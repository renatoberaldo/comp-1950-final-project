<?php 
    $page = "home";

    require_once ('header.php');
?>
<main>
    <div class="banner">
        <img src="images/banner-<?php echo $page; ?>.jpg" alt="Classroom">
        <div class="info-box">
            <h1 class="hero-heading">
                <span class="course_number">COMP 1950</span>
                <br>
                <span class="course_name">WEB DEVELOPMENT AND DESIGN 2</span>
            </h1>
        </div>
    </div>
    <div class="<?php echo $page; ?>">
        <div class="first">
            <h2>Course Details</h2>
            <p>This hands-on course follows on from COMP 1850 Applied Web Development Level 1. Students who already understand HTML and CSS will explore web development in more depth with new topics and techniques. Participants will gain a deeper understanding of the latest technologies including HTML5 and CSS3 for developing web sites and applications. There is a focus on responsive design and mobile presentation through the use of Media Queries. Adding behavior to web sites using JavaScript frameworks such as jQuery is introduced. Labs and exercises focus on industry standard web development methodology. Students gain experience creating templates for content management systems and presentation. Additional topics will include: leveraging Server Side Includes (SSI) for re-usable code, source control for managing your code, and web-based fonts for professional typography. COMP 1950 is a required course for the BCIT Computing Advanced Web Technologies associate certificates in Applied Web Development, AWD and Web and Mobile Application Development, WMA, as well as an elective in the CST Diploma. COMP 1950 and COMP 2015 are also the prerequisites for COMP 2052 Android and Mobile Application Development Tools. By the end of this course successful students will be able to build dynamic and semantically marked-up content providing Search Engine Optimized (SEO) pages.</p>
        </div>
        <div>
            <h2>Prerequisite(s)</h2>
            <p>COMP 1850 or equivalent HTML5 and CSS3 knowledge.</p>
        </div>
        <div>
            <h2>Credits</h2>
            <p>3.0</p>
        </div>
        <div class="last">
            <h2>Cost</h2>
            <p>$448.00 - $457.00</p>
        </div>
    </div>
</main>

<?php require_once ('footer.php'); ?>


