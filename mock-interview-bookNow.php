<?php
    require "header.php"
?>
	
<!-- ******************************************************************************************************************* -->

	<!-- Page Body ***********************Start Here -->

	<div class="titleContainer mock-interview">
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
            Mock Interview
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
		<form action="includes/app.mock_interview.inc.php" method="post" enctype="multipart/form-data">
			
			<select  name="SelectTopic" onchange="pathway(this)" id="selPathway">
				<option value="0" disabled selected>Select your pathway</option>
				<option value="App Developer">App Developer</option>
				<option value="App Integration">App Integration</option>
				<option value="Broadcast">Broadcast</option>
				<option value="Cloud Services">Cloud Services</option>
				<option value="Data">Data</option>
				<option value="eCommerce">eCommerce</option>
				<option value="IT Support">IT Support</option>
				<option value="Javascript Dev">Javascript Dev</option>
				<option value="Networking & Engineering">Networking & Engineering</option>
				<option value="Project Team">Project Team</option>
				<option value="Secuirty">Secuirty</option>
				<option value="SEO">SEO</option>
				<option value="Software Development">Software Development</option>
				<option value="Software Testing and QA">Software Testing and QA</option>
				<option value="Web Development">Web Development</option>
			  </select>

			  <div id="AppDev">
			
				<select  name="AppDev" onchange="itMainFORM(this)" class="AppDevelopment" id="AppDevSelect">
					<option value="0">Your expertise</option>
					<option value="Android Developer">Android Developer</option>
					<option value="Android Software Developer">Android Software Developer</option>
					<option value="Graduate App Developer">Graduate App Developer</option>
					<option value="Senior iOS & Android Developers">Senior iOS & Android Developers</option>
					
				  </select>
			  </div>
			  <div id="AppInt">
				
				<select  name="AppInt" onchange="itMainFORM(this)" id="AppIntSelect">
					<option value="0">Your expertise</option>
					<option value="Application Integration Development">Application Integration Development</option>
				  </select>
			  </div>
			  <div id="Broadcast">
				
				<select  name="Broadcast" onchange="itMainFORM(this)" id="BroadcastSelect">
					<option value="0">Your expertise</option>
					<option value="Broadcast Technican">Broadcast Technican</option>
				  </select>
			  </div>
			  <div id="CloudServices">
				
				<select  name="CloudServices" onchange="itMainFORM(this)" id="CloudServicesSelect">
					<option value="0">Your expertise</option>
					<option value="34kV SAP / Control Engineer">34kV SAP / Control Engineer</option>
					<option value="Azure Data Analyst Developer">Azure Data Analyst Developer</option>
					<option value="Cloud Analyst Developer Microsoft Azure">Cloud Analyst Developer Microsoft Azure</option>
					<option value="DevOps Engineer">DevOps Engineer</option>
					<option value="Google Cloud Architect">Google Cloud Architect </option>
					<option value="Graduate Cloud Engineer">Graduate Cloud Engineer </option>
					<option value="SFDC Platform Developer">SFDC Platform Developer</option>
				  </select>
			  </div>
			  <div id="Data">
				
				<select  name="Data" onchange="itMainFORM(this)" id="DataSelect">
					<option value="0">Your expertise</option>
					<option value="BI Developer">BI Developer</option>
					<option value="Chief Data Officer">Chief Data Officer</option>
					<option value="Data Architect">Data Architect</option>
					<option value="Data Architect - Salesforce">Data Architect - Salesforce</option>
					<option value="Data Engineer (ETL, Big Data)">Data Engineer (ETL, Big Data)</option>
					<option value="Data Engineer Senior Associate - AI">Data Engineer Senior Associate - AI</option>
					<option value="Data Platform Integration, Senior Manager">Data Platform Integration, Senior Manager</option>
					<option value="Data Protection Officer">Data Protection Officer</option>
					<option value="Data Scientist">Data Scientist</option>
					<option value="Database Administrator">Database Administrator</option>
					<option value="eCommerce Data Analyst">eCommerce Data Analyst</option>
					<option value="ERP Business Analyst/Consultant">ERP Business Analyst/Consultant</option>
					<option value="Oracle EBS Technical Developer">Oracle EBS Technical Developer</option>
					<option value="Oracle System Analyst">Oracle System Analyst</option>
					<option value="Salesforce Solutions Architect">Salesforce Solutions Architect</option>
					<option value="Salesforce Technical Architect">Salesforce Technical Architect</option>
					<option value="SAP Analytics Consultant - Senior Associate">SAP Analytics Consultant - Senior Associate</option>
					<option value="SAP Business Change Manager">SAP Business Change Manager</option>
					<option value="SAP S4 HANA Order To Cash OTC">SAP S4 HANA Order To Cash OTC</option>
				  </select>
			  </div>
			  <div id="eCommerce">
			
				<select  name="eCommerce" onchange="itMainFORM(this)" id="eCommerceSelect">
					<option value="0">Your expertise</option>
					<option value="Magento Developer">Magento Developer</option>
					<option value="Shopify Developer">Shopify Developer</option>
				</select>
			  </div>
			  <div id="ITSupport">
				
				<select  name="ITSupport" onchange="itMainFORM(this)" id="ITSupportSelect">
					<option value="0">Your expertise</option>
					<option value="ICT Senior Infrastructure Engineer">ICT Senior Infrastructure Engineer</option>
					<option value="ICT Specialist">ICT Specialist</option>
					<option value="Junior Operations and Support Analyst">Junior Operations and Support Analyst</option>
					<option value="Senior Desktop Solution Architect">Senior Desktop Solution Architect</option>
					<option value="Systems and Support Manager">Systems and Support Manager</option>
				  </select>
			  </div>
			  <div id="JavascriptDev">
				
				<select  name="JavascriptDev" onchange="itMainFORM(this)" id="JavascriptDevSelect">
					<option value="0">Your expertise</option>
					<option value="Angular/JS Developer">Angular/JS Developer</option>
					<option value="JavaScript Developer">JavaScript Developer</option>
					<option value="Javascript Developer (Node.js, Angular.js, React)">Javascript Developer (Node.js, Angular.js, React)</option>
					<option value="Junior Web App Developer">Junior Web App Developer</option>
					<option value="React.js Developer">React.js Developer</option>
					<option value="Senior Javascript Developer">Senior Javascript Developer</option>
					<option value="Senior React Developer">Senior React Developer</option>
				  </select>
			  </div>
			  <div id="NetworkEng">
				
				<select  name="NetworkEng" onchange="itMainFORM(this)" id="NetworkEngSelect">
					<option value="0">Your expertise</option>
					<option value="Access Management Engineer, Network Information Security">Access Management Engineer, Network Information Security</option>
					<option value="Cluster IT Technician">Cluster IT Technician</option>
					<option value="Directory Services Operations Engineer">Directory Services Operations Engineer</option>
					<option value="Engineering Manager">Engineering Manager</option>
					<option value="Identity Management Engineer, Network Information Security">Identity Management Engineer, Network Information Security</option>
					<option value="Information Security Architect – CISSP CISM PCI-DSS">Information Security Architect – CISSP CISM PCI-DSS</option>
					<option value="IT Infrastructure & Cloud Manager">IT Infrastructure & Cloud Manager</option>
					<option value="Network Engineer">Network Engineer</option>
					<option value="Network Manager">Network Manager</option>
					<option value="Network Archetact">Network Archetact</option>
				  </select>
			  </div>
			  <div id="ProjectTeam">
				
				<select  name="ProjectTeam" onchange="itMainFORM(this)" id="ProjectTeamSelect">
					<option value="0">Your expertise</option>
					<option value="Analyst">Analyst</option>
					<option value="Application Business Analyst, NIS">Application Business Analyst, NIS</option>
					<option value="Business Analyst (BA)">Business Analyst (BA)</option>
					<option value="Chief Technology Officer">Chief Technology Officer</option>
					<option value="Cyber Defense Analyst">Cyber Defense Analyst</option>
					<option value="Infrastructure Engineer">Infrastructure Engineer</option>
					<option value="IT Project Coordinator">IT Project Coordinator</option>
					<option value="Junior Analyst">Junior Analyst</option>
					<option value="Product Owner">Product Owner</option>
					<option value="Product Specialist">Product Specialist</option>
					<option value="Project Manager (Technology)">Project Manager (Technology)</option>
					<option value="Secure Development Architect, Manager, NIS">Secure Development Architect, Manager, NIS</option>
					<option value="Senior IT Business Analyst">Senior IT Business Analyst</option>
					<option value="Senior Service Manager">Senior Service Manager</option>
					<option value="System Architect Manager, QA Platform, Global Technology">System Architect Manager, QA Platform, Global Technology</option>
				  </select>
			  </div>
			  <div id="Secuirty">
			
				<select  name="Secuirty" onchange="itMainFORM(this)" id="SecuirtySelect">
					<option value="0">Your expertise</option>
					<option value="Graduate Technology Forensic Data Analytics">Graduate Technology Forensic Data Analytics</option>
					<option value="IAM Developer, Network Information Security">IAM Developer, Network Information Security</option>
					<option value="Information Security Engineer">Information Security Engineer</option>
					<option value="Microsoft Security Engineer4">Microsoft Security Engineer</option>
					
				  </select>
			  </div>
			  <div id="SEO">
				
				<select  name="SEO" onchange="itMainFORM(this)" id="SEOSelect">
					<option  value="0">Your expertise</option>
					<option value="SEO Analyst">SEO Analyst</option>	
				  </select>
			  </div>
			  <div id="SoftwareDev">
				
				<select  name="SoftwareDev" onchange="itMainFORM(this)" id="SoftwareDevSelect">
					<option value="0">Your expertise</option>
					<option value="C# C++ Developer">C# C++ Developer</option>
					<option value="C# Developer<">C# Developer</option>
					<option value="CAD Project Engineer">CAD Project Engineer</option>
					<option value="Full Stack C# .NET Lead">Full Stack C# .NET Lead</option>
					<option value="Fullstack Developer">Fullstack Developer</option>
					<option value="Graduate Software Developer">Graduate Software Developer</option>
					<option value="Java Developer (Mid/ Senior)">Java Developer (Mid/ Senior)</option>
					<option value="Junior Software Developer- Python">Junior Software Developer- Python</option>
					<option value="Middleware Developer">Middleware Developer</option>
					<option value="NET.C# Software Developer">NET.C# Software Developer</option>
					<option value="Perl Software Developer">Perl Software Developer</option>
					<option value="Ruby Software Engineer">Ruby Software Engineer</option>
					<option value="Senior .Net Developer">Senior .Net Developer</option>
					<option value="Senior Animation Programmer">Senior Animation Programmer</option>
					<option value="Senior Java Developer">Senior Java Developer</option>
					<option value="Software Developer">Software Developer</option>
					<option value="Software Integration Engineer ">Software Integration Engineer </option>
					<option value="Technical Lead (Java)">Technical Lead (Java)</option>
					<option value="Unity Developer">Unity Developer</option>
				  </select>
			  </div>
			  <div id="Testing">
				
				<select  name="Testing" onchange="itMainFORM(this)" id="TestingSelect">
					<option value="0">Your expertise</option>
					<option value="Automation Tester">Automation Tester</option>
					<option value="Lead Test Analyst">Lead Test Analyst</option>
					<option value="Manual Tester">Manual Tester</option>
					<option value="Performance Tester">Performance Tester</option>
					<option value="QA Platform Testing & Automation Lead">QA Platform Testing & Automation Lead</option>
					<option value="QA Test Automation Engineer - C# .Net SpecFlow">QA Test Automation Engineer - C# .Net SpecFlow</option>
					<option value="QA Tester for Mobie App">QA Tester for Mobie App</option>
					<option value="SDET/Automation Engineer">SDET/Automation Engineer</option>
					<option value="Senior Automation Tester">Senior Automation Tester</option>
					<option value="Software Developer in Test (Automation)">Software Developer in Test (Automation)</option>
					<option value="Test Analyst">Test Analyst</option>
					<option value="Test Analyst, QA, SaaS">Test Analyst, QA, SaaS</option>
					
				  </select>
			  </div>
			  <div id="WebDev">
				
				<select  name="WebDev" onchange="itMainFORM(this)" id="WebDevSelect">
					<option value="0">Your expertise</option>
					<option value="Backend Engineer">Backend Engineer</option>
					<option value="Frontend Web Developer">Frontend Web Developer</option>
					<option value="Full Stack PHP Laravel Developer">Full Stack PHP Laravel Developer</option>
					<option value="Fullstack Developer">Fullstack Developer</option>
					<option value="Junior-Mid Front End Developer">Junior-Mid Front End Developer</option>
					<option value="PHP Developer (Full-Stack)">PHP Developer (Full-Stack)</option>
					<option value="Senior UI/UX Developer">Senior UI/UX Developer</option>
					<option value="UI / UX Designer">UI / UX Designer</option>
					<option value="Web Designer">Web Designer</option>
					<option value="Web Developer">Web Developer</option>
					<option value="Web Development Team Manager">Web Development Team Manager</option>
					<option value="Web Software Developer">Web Software Developer</option>
                  </select>
                </div>

                <div id="position"> 
                  <select  name="targetPosition" id="targetPosition" onchange="itMainFORM(this)">
					<option value="0">Target position</option>
					<option value="Starting career">Starting career</option>
					<option value="Career change">Career change</option>
					<option value="Junior-Mid Career">Junior-Mid Career</option>
					<option value="Senior position">Senior position</option>
				  </select>
			  </div>
			  <div id="package"> 
                  <select  name="Package" id="Package" onchange="itMainFORM(this)">
					<option value="0">Select your package</option>
					<option value="Bronze">Bronze</option>
					<option value="Silver">Silver</option>
					<option value="Gold">Gold</option>
					
				  </select>
			  </div>
			  <div id="ITform">
                  <input type="text" name="currentJobTitle" id="jobTitle" class="inputText" placeholder="Your current job title *" required>
                
				  <!--<input type="text" name="fullname" id="fname" class="inputText"placeholder="Your full name *" required>
				  
                  <input type="email" name="emailAdd" id="email" placeholder="Your email address *" required>-->
                  
                  


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
                  <button type="submit" value="Submit" class="submitBtn" name="submit">
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