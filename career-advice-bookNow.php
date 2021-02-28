<?php
    require "header.php"
?>
	
<!-- ******************************************************************************************************************* -->

	<!-- Page Body ***********************Start Here -->

	<div class="titleContainer career-advice">
		<!-- <div class="outer">	
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
		</div> -->
      
    </div>

    <div class="page-heading">
        <h1>
            Career Advice
        </h1>
    </div>

	<div class="section1">
		<div class="section1Item">
			<br> 
			<img src="images\Computer-jobs.jpg" alt="IT Jobs">
			<br>
		</div>

		<div class="section3Item">
			<h2>Book Appointment</h2>
		<form action="#">
			
			<select  name="SelectTopic" onchange="pathway(this)" id="selPathway">
				<option value="0">Select your pathway</option>
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
			
				<select  name="SelectTopic" onchange="itMainFORM(this)" class="AppDevelopment" id="AppDevSelect">
					<option value="0">Your specialization</option>
					<option value="1">Android Developer</option>
					<option value="2">Android Software Developer</option>
					<option value="3">Graduate App Developer</option>
					<option value="4">Senior iOS & Android Developers</option>
					
				  </select>
			  </div>
			  <div id="AppInt">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="AppIntSelect">
					<option value="0">Your specialization</option>
					<option value="1">Application Integration Development</option>
				  </select>
			  </div>
			  <div id="Broadcast">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="BroadcastSelect">
					<option value="0">Your specialization</option>
					<option value="1">Broadcast Technican</option>
				  </select>
			  </div>
			  <div id="CloudServices">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="CloudServicesSelect">
					<option value="0">Your specialization</option>
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
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="DataSelect">
					<option value="0">Your specialization</option>
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
			
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="eCommerceSelect">
					<option value="0">Your specialization</option>
					<option value="1">Magento Developer</option>
					<option value="2">Shopify Developer</option>
				</select>
			  </div>
			  <div id="ITSupport">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="ITSupportSelect">
					<option value="0">Your specialization</option>
					<option value="1">ICT Senior Infrastructure Engineer</option>
					<option value="2">ICT Specialist</option>
					<option value="3">Junior Operations and Support Analyst</option>
					<option value="4">Senior Desktop Solution Architect</option>
					<option value="5">Systems and Support Manager</option>
				  </select>
			  </div>
			  <div id="JavascriptDev">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="JavascriptDevSelect">
					<option value="0">Your specialization</option>
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
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="NetworkEngSelect">
					<option value="0">Your specialization</option>
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
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="ProjectTeamSelect">
					<option value="0">Your specialization</option>
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
			
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="SecuirtySelect">
					<option value="0">Your specialization</option>
					<option value="1">Graduate Technology Forensic Data Analytics</option>
					<option value="2">IAM Developer, Network Information Security</option>
					<option value="3">Information Security Engineer</option>
					<option value="4">Microsoft Security Engineer</option>
					
				  </select>
			  </div>
			  <div id="SEO">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="SEOSelect">
					<option  value="0">Your specialization</option>
					<option value="1">SEO Analyst</option>	
				  </select>
			  </div>
			  <div id="SoftwareDev">
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="SoftwareDevSelect">
					<option value="0">Your specialization</option>
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
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="TestingSelect">
					<option value="0">Your specialization</option>
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
				
				<select  name="SelectTopic" onchange="itMainFORM(this)" id="WebDevSelect">
					<option value="0">Your specialization</option>
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

                <div id="position"> 
                  <select  name="targetPosition" id="targetPosition" onchange="itMainFORM(this)">
					<option value="0">Target position</option>
					<option value="1">Starting career</option>
					<option value="2">Career change</option>
					<option value="3">Junior-Mid Career</option>
					<option value="4">Senior position</option>
				  </select>
			  </div>
			  <div id="package"> 
                  <select  name="Package" id="Package" onchange="itMainFORM(this)">
					<option value="0">Select your package</option>
					<option value="1">Bronze</option>
					<option value="2">Silver</option>
					<option value="3">Gold</option>
				  </select>
			  </div>
			  <div id="ITform">
                  <input type="text" name="currentJobTitle" id="jobTitle" class="inputText" placeholder="Your current job title *" required>
                
				  <input type="text" name="fullname" id="fname" class="inputText"placeholder="Your full name *" required>
				  
                  <input type="email" name="emailAdd" id="email" placeholder="Your email address *" required>
                  
                  


                  <div class="uploadFile">
                    <label for="jobSpec">Upload your job specifications</label><br>
                    <input type="file" id="jobSpec" name="jobSpec">
                  </div>
                  <div class="uploadFile">
                    <label for="cv">Upload your cv</label><br>
                    <input type="file" id="cv" name="cv">
                  </div>
                  <div class="uploadFile">
                      <label for="dateFrom">Preferred dates</label><br>
                    
                      <label for="dateFrom">From:</label>
                      <input type="date" name="dateFrom" id="dateFrom" class="dateTime">
                      <br>
                      <label for="deadLineDate">To:</label>
                      <input type="date" name="deadLineDate" id="dateTill" class="dateTime">
                      
                  </div>
                  <div class="uploadFile">
                      <label for="dateFrom">Preferred time</label><br>
                      <label for="timeFrom">Between</label>
                      <input type="time" name="timeFrom" id="timeFrom" class="dateTime">

                      <label for="timeTill">and</label>
                      <input type="time" name="deadLineTime" id="timeTill" class="dateTime">
                  </div>
                  <input type="submit" value="Next" class="submitBtn">
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