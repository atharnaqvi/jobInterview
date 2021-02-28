<?php
    require "header.php"
?>

	<!-- Page Body ***********************Start Here -->
<div class="container_2">
    <div >
        <h1>Just ask.</h1>
        <h1>Get answers.</h1>
        <p>
            Your questions and comments are important to us. Select a topic below, or reach us by phone, email or online form. We've got everthing covered for your needs. 
        </p>
        <select id="SelectTopic" name="SelectTopic">
            <option class="topics">Select a topic</option>
            <option>CV Service</option>
            <option>Mentor</option>
            <option>Mock Interview</option>
            <!-- <option>Pricing and payments</option> -->
            <option>Complaints</option>
            <!-- <option>Suggestions</option>
            <option>How to become a partner</option> -->
            <option>Why us?</option>
        </select>
        <input type="submit" name="GetAnswers" id="GetAnswers" value="Get Answers" onclick="GetAnswers()">
    </div>
    <div class="helpTopics" >

        <div id= "MockI"  class="hide">
            <h1>Mock Interview</h1>
            <details>
                <summary>How does it work?</summary>
                <p>Fill-in the application form. 
                    Try to provide as much information as you can so that we can provide best service. 
                    Upload your cv in word/pdf format. 
                    Upload job specification (as stated in the job adverts)
                    Give us sufficient timeframe to find most suitable interviewer for you. We also accommodate late evening or weekends interviews.
                    A detailed feedback and action plan will be provided after interview. 
                </p>
            </details>
            <details>
                <summary>What is included in the Feedback?</summary>
                <p>Feedback contains the following: 
                    Interview result (over qualified, qualified, under qualified)
                    Action Plan (if needed)
                    Areas to improve
                </p>
            </details>
            <details>
                <summary>How much do I need to pay?</summary>
                <p>Suspendisse ligula ante, euismod vitae felis a, gravida suscipit nulla. 
                    Fusce nunc mauris, gravida vitae purus non, posuere vulputate lacus. 
                    Nullam dapibus consequat sapien.  </p>
            </details>
            <details>
                <summary>What to expect in the Interview?</summary>
                <p>Interviews are conducted on Skype/MS Team or Zoom 
                    All interviews are conducted by at-least one interviewer and one moderator. 
                    According to the job need, 
                    Face to face interview 
                    or 
                    Practical + face to face interview. 
                </p>
            </details>
            <details>
                <summary>Who are the interviewers?</summary>
                <p>Interviewers are specialized in your chosen pathways, experienced in taking interviews.  
                </p>
            </details>
            <details>
                <summary>Why shall I take your service?</summary>
                <p>We provide near to real life experience of job interview with detailed feedback. 
                    That helps you to apply for job with <br>
                    Action plan indicate the shortfalls you may have, before opening yourself to the job market. <br>
                    As a new starter or career change candidates, you will get use to the industry specific questioning and 
                    interview environment. 
                </p>
            </details>
            <details>
                <summary>If I’m successful, will that certify a job?</summary>
                <p>Every interviewers is different and have different approach. 
                    We attempt to give near to real experience by employing expert interviewers but there is no surety for job as we are not recruiter. 
                </p>
            </details>
            
        </div>
        <div id="CV" class="hide">
            <h1>CV Review</h1>
                <details>
                    <summary>I submit quite many cv’s without a response, why?</summary>
                    <p>You may be over or under qualified for the job but most likely your cv is not ATS (candidate selection AI tool) compliant. <br>
                        As for each job recruiters get hundreds of cv and ATS AI tool helps them to pick the candidates fulfil the criteria set in the job adverts.   </p>
                </details>
                <details>
                    <summary>How does it work?</summary>
                    <p>Select your pathway and specialization with target position in mind. <br>
                        Upload job specification if you know by any job advert. 
                        Submit your existing CV even in rough form. <br>
                        Provide us details of your education, work experience if any, 
                        certification and personal statement if you have one. <br>
                        Once submit your application, we’ll assess pathway and amend your cv accordingly. 
                        Job specs help us to shape it to be best suitable. <br>
                        We’ll also provide you the score your cv may achieve with your given details matching with the job specs (if provided). 
</p>
                </details>
                <details>
                    <summary>How do recruiters pick right resume?</summary>
                    <p>Companies often receive hundreds of resumes for every job posting they put out. 
                        They and their hiring managers don't have the time to go through each resume individually, 
                        so they use software, often called Applicant Tracking Systems (ATS), to filter through all the resumes they receive. </p>
                </details>
                <details>
                    <summary>Why resume score is important?</summary>
                    <p>You need to make sure your resume is read correctly by these ATS and resume screening software. 
                        If it is not, your resume could get instantly rejected by these systems and never make its way to a recruiter or hiring manager. 
                        Its why most candidates do not get a call even if they are over qualified. <br>
                        Resume score determines whether your resume is read correctly by these ATS.  </p>
                </details>
                <details>
                    <summary>Why do I take your service?</summary>
                    <p>Resume is your first step towards attaining dream job. Every industry have their untold standards for resume writing.<br> 
                        We have gathered experts from various industries to help you gather together your skills sets in most presentable and ATS friendly. <br> 
                        We not only, format your resume but guide you to alter it accordingly to the job’s adverts in the future.   </p>
                </details>
        </div>
        <div id="Men" class="hide">
            <h1>Mentor</h1>
                <details>
                    <summary>What should I expect in career advice?</summary>
                    <p>You will receive personalized attention from a career expert who will use impactful questions to best understand your career 
                        objectives and work toward meeting them. 
                        Expect a mix guiding questions, thought partnership, and action steps to help you with what comes next.<br>
                        Provide as much information in the application form as you can to help the mentor to prepare a head of the meeting. </p>
                </details>
                <details>
                    <summary>How long does it take to start working with the coach?</summary>
                    <p>After you book a session, your mentor will confirm the booking and be connected to you via email by the next business day (keep an eye on spam). 
                        Most mentors reply within just a few hours. <br>
                        If you haven’t heard from your mentor by then, just contact 
                        <a href="mailto:career.advice@job-interview.co.uk">Career Advice</a> </p>
                </details>
                <details>
                    <summary>What if I’m not satisfied with my mentor?</summary>
                    <p>If you are not satisfied with your initial session, contact us at <a href="mailto:career.advice@job-interview.co.uk">Career Advice</a> immediately. <br> 
                        We will assess your grounds and will rectify in either by replacing the mentor or issuing you 75% refund (your choice)   </p>
                </details>
                <details>
                    <summary>Why do I take your service?</summary>
                    <p>This service is very helpful specially if you are starting your career or at the verge of changing your career. 
                        Our industry experts can give you next 5-10 year blue print, explain what’s involve in the career path you are about to adopt.<br> 
                        They’ll answer your questions such as blockers, salary expectations, increments, skill set etc.   </p>
                </details>
        </div>
        <!-- <div id="pp" class="hide">
            <h1>Pricing and payments</h1>
                <details>
                    <summary>How does it work?</summary>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque congue a felis in faucibus. Sed ultricies eu libero non vehicula. 
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </details>
                <details>
                    <summary>Who takes the interview?</summary>
                    <p>Quisque blandit, nulla non hendrerit vestibulum, lorem lectus mattis lorem. </p>
                </details>
                <details>
                    <summary>How much do I need to pay?</summary>
                    <p>Suspendisse ligula ante, euismod vitae felis a, gravida suscipit nulla. 
                    Fusce nunc mauris, gravida vitae purus non, posuere vulputate lacus. 
                    Nullam dapibus consequat sapien.  </p>
                </details>
                <details>
                    <summary>Why do i take your service?</summary>
                    <p>In et vehicula erat. Vivamus dapibus eu tortor sed viverra. 
                    Morbi mi velit, porta at tortor ut, vulputate sodales justo. 
                    Mauris sollicitudin dignissim metus, eget condimentum ante venenatis et.  </p>
                </details>
        </div> -->
        <div id="comp" class="hide">
            <h1>Complaints</h1>
                <details>
                    <summary>What are grounds for a refund?</summary>
                    <p>Final drafts of written materials containing spelling errors, inconsistent tense or inconsistent formatting. <br>
                    NOTE: Working drafts that contain errors do not constitute a refund.<br>
                    If the session is ended and you are not happy with it, please contact us immediately at mock-interview@job-interview.co.uk to express your concerns. 
                    Our team will assess and discuss with you to resolve the issue. If necessary, full or partial refund will be made. It varies case to case.<br> 
                    Any missed deliverables listed on the service pages (pre-coaching assessment, follow-up email, calls, etc.).<br>
                    If not delivered within the time frame (as mentioned on the service pages).
                    </p>
                </details>
                <details>
                    <summary>What if I am not satisfied with my Resume Review, Mock Interview or Mentoring sessions?</summary>
                    <p>Once a final draft is delivered, or session ended, we cannot issue a refund unless there are grounds for one (see above). <br>
                    However, we strongly recommend you express any questions, concerns or comments to your coach. <br>
                    In nearly all cases, your coach will be able to help you find a resolution, as long as you communicate with them. </p>
                </details>
                <!-- <details>
                    <summary>How much do I need to pay?</summary>
                    <p>Suspendisse ligula ante, euismod vitae felis a, gravida suscipit nulla. 
                        Fusce nunc mauris, gravida vitae purus non, posuere vulputate lacus. 
                        Nullam dapibus consequat sapien.  </p>
                </details>
                <details>
                    <summary>Why do i take your service?</summary>
                    <p>In et vehicula erat. Vivamus dapibus eu tortor sed viverra. 
                        Morbi mi velit, porta at tortor ut, vulputate sodales justo. 
                        Mauris sollicitudin dignissim metus, eget condimentum ante venenatis et.  </p>
                </details> -->
        </div>
        <!-- <div id="sug" class="hide">
            <h1>Suggestions</h1>
                <details>
                    <summary>How does it work?</summary>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque congue a felis in faucibus. Sed ultricies eu libero non vehicula. 
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </details>
                <details>
                    <summary>Who takes the interview?</summary>
                    <p>Quisque blandit, nulla non hendrerit vestibulum, lorem lectus mattis lorem. </p>
                </details>
                <details>
                    <summary>How much do I need to pay?</summary>
                    <p>Suspendisse ligula ante, euismod vitae felis a, gravida suscipit nulla. 
                        Fusce nunc mauris, gravida vitae purus non, posuere vulputate lacus. 
                        Nullam dapibus consequat sapien.  </p>
                </details>
                <details>
                    <summary>Why do i take your service?</summary>
                    <p>In et vehicula erat. Vivamus dapibus eu tortor sed viverra. 
                        Morbi mi velit, porta at tortor ut, vulputate sodales justo. 
                        Mauris sollicitudin dignissim metus, eget condimentum ante venenatis et.  </p>
                </details>
        </div>
        <div id="partner" class="hide">
            <h1>How to become a partner</h1>
                <details>
                    <summary>How does it work?</summary>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Quisque congue a felis in faucibus. Sed ultricies eu libero non vehicula. 
                        Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </details>
                <details>
                    <summary>Who takes the interview?</summary>
                    <p>Quisque blandit, nulla non hendrerit vestibulum, lorem lectus mattis lorem. </p>
                </details>
                <details>
                    <summary>How much do I need to pay?</summary>
                    <p>Suspendisse ligula ante, euismod vitae felis a, gravida suscipit nulla. 
                        Fusce nunc mauris, gravida vitae purus non, posuere vulputate lacus. 
                        Nullam dapibus consequat sapien.  </p>
                </details>
                <details>
                    <summary>Why do i take your service?</summary>
                    <p>In et vehicula erat. Vivamus dapibus eu tortor sed viverra. 
                        Morbi mi velit, porta at tortor ut, vulputate sodales justo. 
                        Mauris sollicitudin dignissim metus, eget condimentum ante venenatis et.  </p>
                </details>
        </div> -->
        <div id="yUs" class="hide">
            <h1>Why us?</h1>
                <details>
                    <summary>I applied for many jobs but never get a call back from recruiters, how can you help me?</summary>
                    <p>To achieve a job, first step is to submit a cv and get a call back from recruiters. 
                    For each job, recruiters get hundreds of CVs. They use an AI system called Applicant Tracking System “ATS” to sort out best suited CVs. 
                    If your CV is not ATS compliant than it wont be picked up. <br>
                    This service not only help you to get your CV an ATS compliant but also train you how to alter your cv by yourself in the future to get the recruiters call back on every application. 
                    </p>
                </details>
                <details>
                    <summary>I’m confused what career path should I chose, how can you help?</summary>
                    <p>This is usually a case with someone who is freshly graduate or someone who is frustrated with their current job, 
                    or got a new baby and world has changed for them. 
                    There is nothing wrong and very common with most people. <br>
                    Our career advisors, help you to recognize your strengths, things you care about, understand the work environment you feel comfortable, 
                    opportunities out in the market, future prospects and action plan to achieve the goal. 
                    If this is not all, please suggest what else would you expect our career advisors to add on the list.  </p>
                </details>
                <details>
                    <summary>Why shall I trust interviewers asking real interview alike questions?</summary>
                    <p>We engage industry experts who have vast experience in interviewing and hiring staff. 
                    For each pathway we have specialized interviewers along with moderators who’d imitate HR or admin related questions.   </p>
                </details>
                <details>
                    <summary>How can I get best out of my Mock Interview?</summary>
                    <p>To achieve best result from Mock Interviews, please submit job adverts you are aiming to apply for, 
                    so that interviewers are directed to ask questions according to the specific job. 
                    Practice the interview as if you are going for the real interview because we are trying to take it as serious as a real interview.  <br>
                    Submit your most resent resume. 
                    If you need help in that regards, please contact and book our Resume Review service before attempting an interview. <br>
                    Understand the job requirements stated in the job advert. Do some research about company and their services and feed us the background.
                     </p>
                </details>
        </div>

    </div>
    

</div>
<div class="container_3" >
    <!-- <div id="webForm-btn"> -->
        <!-- <img src="images/logo/computer.png">
        <h1>Contact us via web</h1>
        <p>
            Fill in online form to reach us. One of our representative will contact you as soon as possible.
        </p> -->
    <div class="webFormNew">
        <h2 class="formH2">SEND US AN EMAIL</h2><br>
        <form action="contactForm.php" method="post">   
         <div>
            <!-- <label for="fname">First Name</label> -->
            <input type="text" id="fname" name="firstname" placeholder="First name  *" required>
        </div>
        <div>
            <!-- <label for="lname">Last Name</label> -->
            <input type="text" id="lname" name="lastname" placeholder="Last name  *" required>
        </div>
        <div>
            <!-- <label for="lname">Email</label> -->
            <input type="email" id="email" name="mail" placeholder="Email  *" required>
        </div>
        <div>
            <!-- <label for="phone">Phone/mobile</label> -->
            <input type="text" name="phone" name="phone" placeholder="Phone/mobile" >
        </div>
        <div class="form-service-feild">
            <select id="subject" name="subject" onchange="changeSelCol(this)">
                <option value="0">Select topic</option>
                <option value="1">Mock Interview</option>
                <option value="2">CV Review</option>
                <option value="3">Mentor</option>
                <option value="4">Partner with us</option>
                <option value="5">Work with us</option>
                <option value="6">Billing and Payments</option>
                <option value="7">Complaints</option>
            </select>
        </div>
        <div class="message-form">
        <!-- <label for="Message">Message</label> -->
        <textarea id="Message" name="message" placeholder="Message *" style="height:200px" required></textarea>
        </div>
        <input type="submit" name="submit" value="SEND" class="submit">
    
      </form>
    </div>
    <!-- <div id="email-btn">
        <a href="mailto:contactme@job-interview.co.uk?Subject=Replace%20this%20text%20with%20appropriate%20subject:" target="_blank">
            <img src="images/logo/email.png">
            <h1>Write us an email</h1>
            <p>
                Send email and a Job-Interview.co.uk representative will reply as soon as possible.</a>
            </p>
    </a>
    </div> -->
    <div id="phone-btn">
        <img src="images/logo/call.png"><BR>
        <h1>TALK TO US</h1>
        
        <div class="phone-text">
            <img src="images/logo/phone-icon.png" alt="Call">
            <span> Call us: 01908 000 000</span>
        </div>
        <div class="phone-text">
            <img src="images/logo/whatsapp.png" alt="Call">
            <span>WhatsApp: 0700 00 00 00</span>
        </div>
        
        <div class="phone-text">
            <img src="images/logo/skype.png" alt="Call">
            <span>Skype: job-interview</span>
        </div>
        
</div>
        
</div>
<div id="webForm1" class="webForm showhideWeb">
    <!-- old placement for webform -->
 </div> <!--webform div end -->
<!-- <div id="phone1" class="phone showhidePhone">
    <div>
        <h1>Applicants</h1>
        <label for="mockInterview">Mock Interview:</label>
        <span>01908 123 456 222</span><br/>
        <label for="cvReview">CV Review:</label>
        <span>01908 321 654 987</span><br/>
        <label for="customerService">Operator</label>
        <span>01908 222 333 555</span><br/>
    </div>
    <div>
        <h1>Partner</h1>
        <label for="Recruiters">Recruiters:</label>
        <span>01908 123 456 222</span><br/>
        <label for="Company">Direct Company:</label>
        <span>01908 321 654 987</span><br/>
        <label for="customerService">Operator</label>
        <span>01908 222 333 555</span><br/>
    </div>


</div> -->

<!-- Page Body ***********************END Here -->

<!-- ******************************************************************************************************************* -->

<!--********************************** F O O T E R ************************************-->
<?php
    require "footer.php"
?>