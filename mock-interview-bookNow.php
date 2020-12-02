<?php
    require "header.php"
?>
	
<!-- ******************************************************************************************************************* -->

	<!-- Page Body ***********************Start Here -->

	<div class="titleContainer it">
	<!-- <div class="index-title"> -->
		<div class="outer">	
			<h1>I am expert in, &nbsp; 
                <div class="inner">
                    <span>
                        <a href="#">Software Development</a><br>
                        <a href="#">Web Development</a><br>
                        <a href="#">Databases</a><br>
                        <a href="#">Not sure!!!</a><br>
                    </span>        
                </div>
                
            </h1>
        </div>

        <div class="titleItems">	
			<p class="titleP">Interviews are taken by professional interviewers from industry. Interviews will be taken to accommodate the job you are applying for. A detailed feedback will be given with chances of your hiring and suggestion for further improvement.</p>
			<button class="titleBtn"><a href="#lets_start">Get Started</a></button>
		</div>
      
    </div>


	<!-- <div class="titleContainer it">
		<div class="titleItems">	
			<h1 class="titleH1">Mock Interview</h1>
			<p class="titleP">Interviews are taken by professional interviewers from industry. Interviews will be taken to accommodate the job you are applying for. A detailed feedback will be given with chances of your hiring and suggestion for further improvement.</p>
			<button class="titleBtn"><a href="#lets_start">Get Started</a></button>
		</div>
	</div> -->
	<div class="section1">
		<div class="section1Item">
			<!-- <h2>&nbsp;</h2> -->
			<!-- <a href="#" class="links">What's included</a>
			<li>A 30 minute chat over Skype/Team or phone</li>
			<li>A follow-up plan of attack from your montor</li>
			<a href="#" class="links">details</a> -->
			<br>
			<img src="images\computer-jobs.jpg" alt="IT Jobs">
			<!-- <embed src="images/video/computer-main1.mp4" autostart="true" height="400px" width="210px" /> -->

			<br>
		</div>
		<a id="lets_start"></a>
		<!-- <div class="section1Item">
			<h2>Who we are not?</h2>
			 <a href="#" class="links">What's included</a> 
			<li>We are not employer</li>
			<li>We are not recruiter</li>
			<li>We do not give job gaurenty</li>
			<br><br>
			<h2>Who we are</h2>
			<li>Interviewers are from industry who hire people</li>
			<li>Interviewers are expert in your specific area</li>
			<li>We give complete interview result which is helpfull to give assurity to recuriter what you are who you say you are</li>
			<li>We give clear direction of shortfall if it may</li>
		
			<a href="#" class="links">details</a> 
			
			<br>
			

		</div> -->
		<div class="section3Item">
			<h2>Moke Interview</h2>
			<form action="#">
			<!-- <label>Pathway:</label> -->
			<select  name="SelectTopic" onchange="pathway()" id="selPathway">
				<option  value="0" class="topics">Select your pathway</option>
				<option value="1">App Developer</option>
				<option value="2">App Integration</option>
				<option value="3">Broadcast</option>
				<option value="4">Cloud Services</option>
				<option value="5">Data</option>
				<option value="6">eCommerce</option>
				<option value="7">IT Support</option>
				<option value="8">Javascript Dev</option>
				<option value="9">Networking & Engineering</option>
				<option value="10">Project Team</option>
				<option value="11">Secuirty</option>
				<option value="12">SEO</option>
				<option value="13">Software Development</option>
				<option value="14">Software Testing and QA</option>
				<option value="15">Web Development</option>
			  </select>

			  <div id="AppDev">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" class="AppDevelopment" id="AppDevSelect">
					<option value="0" class="topics">Your specialization</option>
					<option value="1">Android Developer</option>
					<option value="2">Android Software Developer</option>
					<option value="3">Graduate App Developer</option>
					<option value="4">Senior iOS & Android Developers</option>
					
				  </select>
			  </div>
			  <div id="AppInt">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="AppIntSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Application Integration Development</option>
				  </select>
			  </div>
			  <div id="Broadcast">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="BroadcastSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Broadcast Technican</option>
				  </select>
			  </div>
			  <div id="CloudServices">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="CloudServicesSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">34kV SAP / Control Engineer</option>
					<option value="2">Azure Data Analyst Developer</option>
					<option value="3">Cloud Analyst Developer Microsoft Azure</option>
					<option value="4">DevOps Engineer</option>
					<option value="5">Google Cloud Architect </option>
					<option value="6">Graduate Cloud Engineer </option>
					<option value="7">SFDC Platform Developer</option>
				  </select>
			  </div>
			  <div id="Data">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="DataSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">BI Developer</option>
					<option value="2">Chief Data Officer</option>
					<option value="3">Data Architect</option>
					<option value="4">Data Architect - Salesforce</option>
					<option value="5">Data Engineer (ETL, Big Data)</option>
					<option value="6">Data Engineer Senior Associate - AI</option>
					<option value="7">Data Platform Integration, Senior Manager</option>
					<option value="8">Data Protection Officer</option>
					<option value="9">Data Scientist</option>
					<option value="10">Database Administrator</option>
					<option value="11">eCommerce Data Analyst</option>
					<option value="12">ERP Business Analyst/Consultant</option>
					<option value="13">Oracle EBS Technical Developer</option>
					<option value="14">Oracle System Analyst</option>
					<option value="15">Salesforce Solutions Architect</option>
					<option value="16">Salesforce Technical Architect</option>
					<option value="17">SAP Analytics Consultant - Senior Associate</option>
					<option value="18">SAP Business Change Manager</option>
					<option value="19">SAP S4 HANA Order To Cash OTC</option>
				  </select>
			  </div>
			  <div id="eCommerce">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="eCommerceSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Magento Developer</option>
					<option value="2">Shopify Developer</option>
				</select>
			  </div>
			  <div id="ITSupport">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="ITSupportSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">ICT Senior Infrastructure Engineer</option>
					<option value="2">ICT Specialist</option>
					<option value="3">Junior Operations and Support Analyst</option>
					<option value="4">Senior Desktop Solution Architect</option>
					<option value="5">Systems and Support Manager</option>
				  </select>
			  </div>
			  <div id="JavascriptDev">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="JavascriptDevSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Angular/JS Developer</option>
					<option value="2">JavaScript Developer</option>
					<option value="3">Javascript Developer (Node.js, Angular.js, React)</option>
					<option value="4">Junior Web App Developer</option>
					<option value="5">React.js Developer</option>
					<option value="6">Senior Javascript Developer</option>
					<option value="7">Senior React Developer</option>
				  </select>
			  </div>
			  <div id="NetworkEng">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="NetworkEngSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Access Management Engineer, Network Information Security</option>
					<option value="2">Cluster IT Technician</option>
					<option value="3">Directory Services Operations Engineer</option>
					<option value="4">Engineering Manager</option>
					<option value="5">Identity Management Engineer, Network Information Security</option>
					<option value="6">Information Security Architect – CISSP CISM PCI-DSS</option>
					<option value="7">IT Infrastructure & Cloud Manager</option>
					<option value="8">Network Engineer</option>
					<option value="9">Network Manager</option>
					<option value="10">Network Archetact</option>
				  </select>
			  </div>
			  <div id="ProjectTeam">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="ProjectTeamSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Analyst</option>
					<option value="2">Application Business Analyst, NIS</option>
					<option value="3">Business Analyst (BA)</option>
					<option value="4">Chief Technology Officer</option>
					<option value="5">Cyber Defense Analyst</option>
					<option value="6">Infrastructure Engineer</option>
					<option value="7">IT Project Coordinator</option>
					<option value="8">Junior Analyst</option>
					<option value="9">Product Owner</option>
					<option value="10">Product Specialist</option>
					<option value="11">Project Manager (Technology)</option>
					<option value="12">Secure Development Architect, Manager, NIS</option>
					<option value="13">Senior IT Business Analyst</option>
					<option value="14">Senior Service Manager</option>
					<option value="15">System Architect Manager, QA Platform, Global Technology</option>
				  </select>
			  </div>
			  <div id="Secuirty">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="SecuirtySelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Graduate Technology Forensic Data Analytics</option>
					<option value="2">IAM Developer, Network Information Security</option>
					<option value="3">Information Security Engineer</option>
					<option value="4">Microsoft Security Engineer</option>
					
				  </select>
			  </div>
			  <div id="SEO">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="SEOSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">SEO Analyst</option>	
				  </select>
			  </div>
			  <div id="SoftwareDev">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="SoftwareDevSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">C# C++ Developer</option>
					<option value="2">C# Developer</option>
					<option value="3">CAD Project Engineer</option>
					<option value="4">Full Stack C# .NET Lead</option>
					<option value="5">Fullstack Developer</option>
					<option value="6">Graduate Software Developer</option>
					<option value="7">Java Developer (Mid/ Senior)</option>
					<option value="8">Junior Software Developer- Python</option>
					<option value="9">Middleware Developer</option>
					<option value="10">NET.C# Software Developer</option>
					<option value="11">Perl Software Developer</option>
					<option value="12">Ruby Software Engineer</option>
					<option value="13">Senior .Net Developer</option>
					<option value="14">Senior Animation Programmer</option>
					<option value="15">Senior Java Developer</option>
					<option value="16">Software Developer</option>
					<option value="17">Software Integration Engineer </option>
					<option value="18">Technical Lead (Java)</option>
					<option value="19">Unity Developer</option>
				  </select>
			  </div>
			  <div id="Testing">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="TestingSelect">
					<option value="0" class="topics">Your specialization</option>
					<option value="1">Automation Tester</option>
					<option value="2">Lead Test Analyst</option>
					<option value="3">Manual Tester</option>
					<option value="4">Performance Tester</option>
					<option value="5">QA Platform Testing & Automation Lead</option>
					<option value="6">QA Test Automation Engineer - C# .Net SpecFlow</option>
					<option value="7">QA Tester for Mobie App</option>
					<option value="8">SDET/Automation Engineer</option>
					<option value="9">Senior Automation Tester</option>
					<option value="10">Software Developer in Test (Automation)</option>
					<option value="11">Test Analyst</option>
					<option value="12">Test Analyst, QA, SaaS</option>
					
				  </select>
			  </div>
			  <div id="WebDev">
				<!-- <label>Specialisation: </label> -->
				<select  name="SelectTopic" onchange="itMainFORM()" id="WebDevSelect">
					<option  value="0" class="topics">Your specialization</option>
					<option value="1">Backend Engineer</option>
					<option value="2">Frontend Web Developer</option>
					<option value="3">Full Stack PHP Laravel Developer</option>
					<option value="4">Fullstack Developer</option>
					<option value="5">Junior-Mid Front End Developer</option>
					<option value="6">PHP Developer (Full-Stack)</option>
					<option value="7">Senior UI/UX Developer</option>
					<option value="8">UI / UX Designer</option>
					<option value="9">Web Designer</option>
					<option value="10">Web Developer</option>
					<option value="11">Web Development Team Manager</option>
					<option value="12">Web Software Developer</option>

					
				  </select>
			  </div>
			  <div id="ITform">
				  <label for="fullname">Enter your full name:</label><br>
				  <input type="text" name="fullname" id="fname"><br>
				  <label for="emailAdd">Enter your email:</label><br>
				  <input type="email" name="emailAdd" id="email"><br>
				  <label for="jobSpec">Upload your job speccifications</label><br>
				  <input type="file" id="jobSpec" name="jobSpec"><br>
				  <label for="cv">Upload your cv</label><br>
				  <input type="file" id="cv" name="cv"><br>
				  <input type="submit" value="Submit">
			  </div>
			</form>
			<br>
		</div>
	</div>


<!-- Page Body ***********************END Here -->

<!-- ******************************************************************************************************************* -->


<!--********************************** F O O T E R ************************************-->

<?php
    require "footer.php"
?>