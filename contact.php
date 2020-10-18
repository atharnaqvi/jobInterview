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
        <select id="SelectTopic" name="SelectTopic")">
            <option class="topics">Select a topic</option>
            <option>Mock Interview</option>
            <option>CV Service</option>
            <option>Mentor</option>
            <option>Pricing and payments</option>
            <option>Complaints</option>
            <option>Suggestions</option>
            <option>How to become a partner</option>
            <option>Why us?</option>
          </select>
          <input type="submit" name="GetAnswers" id="GetAnswers" value="Get Answers" onclick="GetAnswers()">
    </div>
    <div class="helpTopics" >

        <div id= "MockI"  class="hide">
            <h1>Mock Interview</h1>
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
        <div id="CV" class="hide">
            <h1>CV Review</h1>
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
        <div id="Men" class="hide">
            <h1>Mentor</h1>
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
        <div id="pp" class="hide">
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
        </div>
        <div id="comp" class="hide">
            <h1>Complaints</h1>
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
        <div id="sug" class="hide">
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
        </div>
        <div id="yUs" class="hide">
            <h1>Why us?</h1>
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
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="   Your name.." required>
        </div>
        <div>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="   Your last name.." required>
        </div>
        <div>
            <label for="lname">email</label>
            <input type="email" id="email" name="mail" placeholder="Your email.." required>
        </div>
        <div>
            <label for="phone">Phone/mobile</label>
            <input type="text" name="phone" name="phone" placeholder="   Your phone/mobile.." >
        </div>
        <div class="form-service-feild">
        <label for="service">Service</label>
            <select id="subject" name="subject">
                <option class="topics">Select topic</option>
                <option value="MockInterview">Mock Interview</option>
                <option value="cv">CV Review</option>
                <option value="mentor">Mentor</option>
                <option value="partner">Partner with us</option>
                <option value="work">Work with us</option>
                <option value="billing">Billing and Payments</option>
                <option value="complaint">Complaints</option>
            </select>
        </div>
        <div class="message-form">
        <label for="Message">Message</label>
        <textarea id="Message" name="message" placeholder="Write something.." style="height:200px" required></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="submit">
    
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
        <img src="images/logo/call.png">
        <h1>Talk to us</h1>
        
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