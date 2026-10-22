<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Registration - Flexi Educational Consult</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary-royal: #1e40af;
      --primary-royal-dark: #1e3a8a;
      --accent-lemon: #84cc16;
      --accent-lemon-hover: #65a30d;
      --dark-blue: #0f172a;
      --light-bg: #f8fafc;
      --card-bg: #ffffff;
      --text: #334155;
      --text-muted: #64748b;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Inter', sans-serif;
    }

    body {
      background-color: var(--light-bg);
      color: var(--text);
      line-height: 1.6;
      overflow-x: hidden;
    }

    /* NAVBAR */
    .navbar {
      background: var(--card-bg);
      border-bottom: 2px solid var(--primary-royal);
      padding: 16px 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 100;
    }

    .brand {
      font-weight: 800;
      font-size: 1.2rem;
      color: var(--primary-royal);
    }

    /* REGISTRATION FORM */
    .registration-container {
      max-width: 800px;
      width: 100%;
      margin: 20px auto;
      padding: 0 12px;
    }

    .form-card {
      background: var(--card-bg);
      padding: 24px 16px;
      border-radius: 16px;
      border-top: 6px solid var(--primary-royal);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08);
      width: 100%;
      overflow: hidden;
    }

    .form-header {
      text-align: center;
      margin-bottom: 25px;
    }

    .form-header h1 {
      color: var(--primary-royal);
      font-size: 1.6rem;
      font-weight: 800;
    }

    .form-header p {
      color: var(--text-muted);
      font-size: 0.9rem;
    }

    .section-heading {
      font-size: 1.05rem;
      color: var(--primary-royal);
      font-weight: 700;
      margin: 25px 0 15px;
      padding-bottom: 8px;
      border-bottom: 2px solid #e2e8f0;
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .form-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 16px;
      width: 100%;
    }

    .form-group {
      display: flex;
      flex-direction: column;
      width: 100%;
      min-width: 0;
    }

    .form-group.full-width {
      grid-column: 1 / -1;
    }

    label {
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--dark-blue);
      margin-bottom: 6px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    select {
      width: 100%;
      max-width: 100%;
      min-width: 0;
      padding: 12px;
      border: 1px solid #cbd5e0;
      border-radius: 8px;
      font-size: 0.95rem;
      outline: none;
      background-color: #ffffff;
      color: var(--text);
      transition: border-color 0.2s, box-shadow 0.2s;
    }

    input:focus,
    select:focus {
      border-color: var(--primary-royal);
      box-shadow: 0 0 0 3px rgba(30, 64, 175, 0.15);
    }

    input[readonly] {
      background-color: #f1f5f9;
      color: #64748b;
      cursor: not-allowed;
    }

    select:invalid {
      color: #64748b;
    }

    /* CHECKBOX GROUP */
    .checkbox-group {
      display: flex;
      gap: 15px;
      flex-wrap: wrap;
      margin-top: 5px;
    }

    .checkbox-label {
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.95rem;
      font-weight: 600;
      cursor: pointer;
    }

    .checkbox-label input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: var(--primary-royal);
      cursor: pointer;
    }

    /* SUBJECT BOXES */
    .subject-box {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      padding: 16px 12px;
      border-radius: 10px;
      margin-top: 15px;
      width: 100%;
      display: none;
    }

    .subject-box h4 {
      color: var(--primary-royal);
      font-size: 0.95rem;
      margin-bottom: 12px;
      word-break: break-word;
    }

    .selection-note {
      background: #eff6ff;
      border-left: 4px solid var(--primary-royal);
      padding: 12px;
      border-radius: 6px;
      margin-top: 12px;
      font-size: 0.85rem;
      color: #1e3a8a;
    }

    /* SUBMIT BUTTON */
    .btn-submit {
      width: 100%;
      background: var(--accent-lemon);
      color: var(--dark-blue);
      padding: 16px;
      border: none;
      border-radius: 8px;
      font-size: 1.05rem;
      font-weight: 800;
      cursor: pointer;
      margin-top: 30px;
      box-shadow: 0 8px 20px rgba(132, 204, 22, 0.3);
      transition: background 0.2s, transform 0.2s;
    }

    .btn-submit:hover {
      background: var(--accent-lemon-hover);
      transform: translateY(-2px);
    }

    .btn-submit:disabled {
      opacity: 0.65;
      cursor: not-allowed;
      transform: none;
    }

    /* FOOTER */
    footer {
      background-color: var(--dark-blue);
      color: #94a3b8;
      padding: 50px 5% 30px;
      font-size: 0.9rem;
      border-top: 1px solid #1e293b;
      margin-top: 60px;
    }

    .footer-container {
      max-width: 1100px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
      padding-bottom: 30px;
      border-bottom: 1px solid #1e293b;
    }

    .footer-col h4 {
      color: #ffffff;
      font-size: 0.95rem;
      font-weight: 700;
      margin-bottom: 16px;
      letter-spacing: 0.5px;
    }

    .footer-col ul {
      list-style: none;
    }

    .footer-col ul li {
      margin-bottom: 10px;
      word-break: break-word;
    }

    .footer-col a {
      color: #94a3b8;
      text-decoration: none;
      transition: color 0.2s;
    }

    .footer-col a:hover {
      color: var(--accent-lemon);
    }

    .social-vertical {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .social-link {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 500;
    }

    .social-link i {
      font-size: 1.2rem;
      width: 20px;
      color: var(--accent-lemon);
    }

    .payment-badges-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-top: 10px;
    }

    .payment-card {
      background: #ffffff;
      padding: 6px 10px;
      border-radius: 6px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      height: 36px;
      min-width: 60px;
    }

    .payment-card img {
      max-height: 20px;
      max-width: 55px;
      object-fit: contain;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 25px;
      font-size: 0.85rem;
      color: #64748b;
    }

    /* FLOATING WHATSAPP */
    .floating-whatsapp {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #25d366;
      color: white;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 28px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.3);
      z-index: 1000;
      text-decoration: none;
      transition: transform 0.2s;
    }

    .floating-whatsapp:hover {
      transform: scale(1.1);
    }

    @media (max-width: 480px) {
      .brand {
        font-size: 1rem;
      }

      .form-header h1 {
        font-size: 1.35rem;
      }

      .form-card {
        padding: 20px 12px;
      }

      .section-heading {
        font-size: 0.98rem;
      }
    }
  </style>
</head>

<body>

  
  <nav class="navbar">
    <div class="brand">Flexi Educational Consult</div>
  </nav>

  
  <main class="registration-container">
    <div class="form-card">

      <div class="form-header">
        <h1>Student Registration Form</h1>
        <p>Please fill in all required academic and personal details accurately.</p>
      </div>

      <form id="studentRegistrationForm">

        
        <div class="section-heading">
          <i class="fa-solid fa-user"></i>
          Student Personal Details
        </div>

        <div class="form-grid">

          <div class="form-group">
            <label for="firstName">First Name *</label>
            <input type="text" id="firstName" name="firstName"
                   placeholder="e.g. Samuel" autocomplete="given-name" required>
          </div>

          <div class="form-group">
            <label for="surname">Surname *</label>
            <input type="text" id="surname" name="surname"
                   placeholder="e.g. Adebayo" autocomplete="family-name" required>
          </div>

          <div class="form-group">
            <label for="dob">Date Of Birth *</label>
            <input type="date" id="dob" name="dob" autocomplete="bday" required>
          </div>

          <div class="form-group">
            <label for="studentPhone">Student Phone Number *</label>
            <input type="tel" id="studentPhone" name="studentPhone"
                   placeholder="08012345678" autocomplete="tel" required>
          </div>

          <div class="form-group full-width">
            <label for="studentEmail">Student Email Address *</label>
            <input type="email" id="studentEmail" name="studentEmail"
                   placeholder="student@example.com" autocomplete="email" required>
          </div>

        </div>

        
        <div class="section-heading">
          <i class="fa-solid fa-users"></i>
          Parent / Guardian Contact Info
        </div>

        <div class="form-grid">

          <div class="form-group">
            <label for="parentPhone1">Parent Phone Number 1 *</label>
            <input type="tel" id="parentPhone1" name="parentPhone1"
                   placeholder="08099887766" required>
          </div>

          <div class="form-group">
            <label for="parentPhone2">Parent Phone Number 2 *</label>
            <input type="tel" id="parentPhone2" name="parentPhone2"
                   placeholder="07011223344" required>
          </div>

          <div class="form-group">
            <label for="parentEmail1">Parent Email Address 1 *</label>
            <input type="email" id="parentEmail1" name="parentEmail1"
                   placeholder="parent1@example.com" required>
          </div>

          <div class="form-group">
            <label for="parentEmail2">Parent Email Address 2 *</label>
            <input type="email" id="parentEmail2" name="parentEmail2"
                   placeholder="parent2@example.com" required>
          </div>

        </div>

        
        <div class="section-heading">
          <i class="fa-solid fa-graduation-cap"></i>
          Department and Subscription Selection
        </div>

        <div class="form-grid">

          <div class="form-group">
            <label for="department">Select Your Department *</label>

            <select id="department" name="department" required>
              <option value="" selected disabled>Choose your department</option>
              <option value="Science">Science</option>
              <option value="Art">Art</option>
              <option value="Commercial">Commercial</option>
            </select>
          </div>

          <div class="form-group">
            <label for="subscriptionPlan">Select Subscription Package *</label>

            <select id="subscriptionPlan" name="subscriptionPlan" required>
              <option value="" selected disabled>Choose your package</option>
              <option value="monthly">1 Month — ₦4,000</option>
              <option value="twoMonths">2 Months — ₦7,500</option>
              <option value="threeMonths">3 Months — ₦10,000</option>
            </select>
          </div>

        </div>

        <div class="selection-note">
          <i class="fa-solid fa-circle-info"></i>
          Select the department that matches your academic programme.
          Your department will determine the applicable payment split during registration.
        </div>

        
        <div class="section-heading">
          <i class="fa-solid fa-book-open"></i>
          Exam Type Selection
        </div>

        <div class="form-group full-width">
          <label>Select Exam Type (Select one or more): *</label>

          <div class="checkbox-group">

            <label class="checkbox-label">
              <input type="checkbox" name="examType" value="JAMB" id="chkJamb">
              JAMB
            </label>

            <label class="checkbox-label">
              <input type="checkbox" name="examType" value="SSCE" id="chkSsce">
              SSCE (WAEC/NECO)
            </label>

            <label class="checkbox-label">
              <input type="checkbox" name="examType" value="JUPEB" id="chkJupeb">
              JUPEB
            </label>

          </div>
        </div>

        
        <div id="jambSubjectsBox" class="subject-box">
          <h4>
            <i class="fa-solid fa-book"></i>
            JAMB Subjects Configuration
          </h4>

          <div class="form-grid">

            <div class="form-group">
              <label for="jambEnglish">Compulsory Subject</label>
              <input type="text" id="jambEnglish"
                     value="English Language" readonly>
            </div>

            <div class="form-group">
              <label for="jambSubject2">Subject 2 *</label>
              <input type="text" id="jambSubject2" class="jamb-sub"
                     placeholder="e.g. Mathematics">
            </div>

            <div class="form-group">
              <label for="jambSubject3">Subject 3 *</label>
              <input type="text" id="jambSubject3" class="jamb-sub"
                     placeholder="e.g. Physics">
            </div>

            <div class="form-group">
              <label for="jambSubject4">Subject 4 *</label>
              <input type="text" id="jambSubject4" class="jamb-sub"
                     placeholder="e.g. Chemistry">
            </div>

          </div>
        </div>

        
        <div id="ssceSubjectsBox" class="subject-box">
          <h4>
            <i class="fa-solid fa-book-open"></i>
            SSCE (WAEC/NECO) Subjects Configuration
          </h4>

          <div class="form-grid">

            <div class="form-group">
              <label for="ssceEnglish">Compulsory Subject 1</label>
              <input type="text" id="ssceEnglish"
                     value="English Language" readonly>
            </div>

            <div class="form-group">
              <label for="ssceMaths">Compulsory Subject 2</label>
              <input type="text" id="ssceMaths"
                     value="Mathematics" readonly>
            </div>

            <div class="form-group">
              <label for="ssceSubject3">Subject 3 *</label>
              <input type="text" id="ssceSubject3" class="ssce-sub-req"
                     placeholder="e.g. Physics">
            </div>

            <div class="form-group">
              <label for="ssceSubject4">Subject 4 *</label>
              <input type="text" id="ssceSubject4" class="ssce-sub-req"
                     placeholder="e.g. Chemistry">
            </div>

            <div class="form-group">
              <label for="ssceSubject5">Subject 5 *</label>
              <input type="text" id="ssceSubject5" class="ssce-sub-req"
                     placeholder="e.g. Biology">
            </div>

            <div class="form-group">
              <label for="ssceSubject6">Subject 6 *</label>
              <input type="text" id="ssceSubject6" class="ssce-sub-req"
                     placeholder="e.g. Civic Education">
            </div>

            <div class="form-group">
              <label for="ssceSubject7">Subject 7 *</label>
              <input type="text" id="ssceSubject7" class="ssce-sub-req"
                     placeholder="e.g. Economics">
            </div>

            <div class="form-group">
              <label for="ssceSubject8">Subject 8 *</label>
              <input type="text" id="ssceSubject8" class="ssce-sub-req"
                     placeholder="e.g. Geography">
            </div>

            <div class="form-group">
              <label for="ssceSubject9">Subject 9 (Optional)</label>
              <input type="text" id="ssceSubject9" class="ssce-sub-opt"
                     placeholder="e.g. Agricultural Science">
            </div>

          </div>
        </div>

        
        <div id="jupebSubjectsBox" class="subject-box">
          <h4>
            <i class="fa-solid fa-award"></i>
            JUPEB Subjects Configuration
          </h4>

          <div class="form-grid">

            <div class="form-group">
              <label for="jupebSubject1">JUPEB Subject 1 *</label>
              <input type="text" id="jupebSubject1" class="jupeb-sub"
                     placeholder="e.g. Physics">
            </div>

            <div class="form-group">
              <label for="jupebSubject2">JUPEB Subject 2 *</label>
              <input type="text" id="jupebSubject2" class="jupeb-sub"
                     placeholder="e.g. Chemistry">
            </div>

            <div class="form-group">
              <label for="jupebSubject3">JUPEB Subject 3 *</label>
              <input type="text" id="jupebSubject3" class="jupeb-sub"
                     placeholder="e.g. Mathematics">
            </div>

          </div>
        </div>

        
        <button type="submit" class="btn-submit" id="submitButton">
          Proceed to Instructions (Page 3) &rarr;
        </button>

      </form>
    </div>
  </main>

  
  <footer>
    <div class="footer-container">

      
      <div class="footer-col">
        <h4>CONTACT US</h4>

        <ul>
          <li>
            <i class="fa-solid fa-phone" style="color: var(--accent-lemon); margin-right: 8px;"></i>
            09034159839
          </li>

          <li>
            <i class="fa-solid fa-phone" style="color: var(--accent-lemon); margin-right: 8px;"></i>
            07033855206
          </li>

          <li>
            <i class="fa-solid fa-envelope" style="color: var(--accent-lemon); margin-right: 8px;"></i>
            <a href="mailto:info@flexieduconsult.com.ng">info@flexieduconsult.com.ng</a>
          </li>

          <li style="margin-top: 10px; font-size: 0.85rem; color: #cbd5e1;">
            <strong>For complaints:</strong><br>
            <i class="fa-solid fa-circle-exclamation" style="color: var(--accent-lemon); margin-right: 8px;"></i>
            <a href="mailto:support@flexieduconsult.com.ng">support@flexieduconsult.com.ng</a>
          </li>
        </ul>
      </div>

      
      <div class="footer-col">
        <h4>FOLLOW US</h4>

        <div class="social-vertical">
          <a href="https://www.facebook.com/profile.php?id=61589793118693"
             class="social-link" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-facebook"></i> Facebook
          </a>

          <a href="https://www.instagram.com/flexieduconsult2000?igsh=MWxqZG9reGRlb3Z0ZQ=="
             class="social-link" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-instagram"></i> Instagram
          </a>

          <a href="https://vm.tiktok.com/ZS9r7GfdDvykU-X6alu/"
             class="social-link" target="_blank" rel="noopener noreferrer">
            <i class="fa-brands fa-tiktok"></i> TikTok
          </a>
        </div>
      </div>

      
      <div class="footer-col">
        <h4>SECURED BY</h4>

        <div class="payment-badges-grid">

          <div class="payment-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Paystack_Logo.png"
                 alt="Paystack">
          </div>

          <div class="payment-card">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/2a/Mastercard-logo.svg"
                 alt="MasterCard">
          </div>

          <div class="payment-card">
            <img src="https://i.postimg.cc/0Qm3PLw5/1771700279759-2.jpg"
                 alt="Visa">
          </div>

          <div class="payment-card">
            <img src="https://i.postimg.cc/W3ZKrzXt/images-(27).jpg"
                 alt="Verve">
          </div>

        </div>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; <span id="year"></span> flexieduconsult. All rights reserved.
    </div>
  </footer>

  
  <a href="https://wa.me/2349034159839?text=Hello%20Flexi%20Educational%20Consult,%20I%20have%20a%20question%20about%20registration"
     class="floating-whatsapp"
     target="_blank"
     rel="noopener noreferrer"
     title="Chat with Flexi Educational Consult"
     aria-label="Chat with Flexi Educational Consult on WhatsApp">

    <i class="fa-brands fa-whatsapp"></i>
  </a>

  
  <script>
    'use strict';

    // Footer year
    document.getElementById('year').textContent =
      new Date().getFullYear();

    // Exam checkboxes
    const chkJamb = document.getElementById('chkJamb');
    const chkSsce = document.getElementById('chkSsce');
    const chkJupeb = document.getElementById('chkJupeb');

    // Subject boxes
    const jambBox = document.getElementById('jambSubjectsBox');
    const ssceBox = document.getElementById('ssceSubjectsBox');
    const jupebBox = document.getElementById('jupebSubjectsBox');

    const form = document.getElementById('studentRegistrationForm');
    const submitButton = document.getElementById('submitButton');

    // Department and package fields
    const departmentField = document.getElementById('department');
    const subscriptionField = document.getElementById('subscriptionPlan');

    // Approved subscription packages
    const SUBSCRIPTION_PLANS = {
      monthly: {
        label: '1 Month',
        months: 1,
        amount: 4000
      },

      twoMonths: {
        label: '2 Months',
        months: 2,
        amount: 7500
      },

      threeMonths: {
        label: '3 Months',
        months: 3,
        amount: 10000
      }
    };

    // Toggle subject boxes and update required fields
    function toggleSubjects() {
      jambBox.style.display = chkJamb.checked ? 'block' : 'none';
      ssceBox.style.display = chkSsce.checked ? 'block' : 'none';
      jupebBox.style.display = chkJupeb.checked ? 'block' : 'none';

      document.querySelectorAll('.jamb-sub').forEach(input => {
        input.required = chkJamb.checked;
      });

      document.querySelectorAll('.ssce-sub-req').forEach(input => {
        input.required = chkSsce.checked;
      });

      document.querySelectorAll('.ssce-sub-opt').forEach(input => {
        input.required = false;
      });

      document.querySelectorAll('.jupeb-sub').forEach(input => {
        input.required = chkJupeb.checked;
      });
    }

    chkJamb.addEventListener('change', toggleSubjects);
    chkSsce.addEventListener('change', toggleSubjects);
    chkJupeb.addEventListener('change', toggleSubjects);

    // Initialize subject configuration
    toggleSubjects();

    // Read non-empty subject inputs
    function collectSubjects(selector) {
      return Array.from(document.querySelectorAll(selector))
        .map(input => input.value.trim())
        .filter(Boolean);
    }

    // Form submission
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      // Ensure at least one exam is selected
      if (
        !chkJamb.checked &&
        !chkSsce.checked &&
        !chkJupeb.checked
      ) {
        alert('Please select at least one examination type.');
        return;
      }

      // Validate department
      const department = departmentField.value;

      if (!['Science', 'Art', 'Commercial'].includes(department)) {
        alert('Please select Science, Art, or Commercial.');
        departmentField.focus();
        return;
      }

      // Validate subscription
      const subscriptionPlan = subscriptionField.value;

      if (!Object.prototype.hasOwnProperty.call(
        SUBSCRIPTION_PLANS,
        subscriptionPlan
      )) {
        alert('Please select a valid subscription package.');
        subscriptionField.focus();
        return;
      }

      // Collect examination subjects
      const jambSubjects = collectSubjects('.jamb-sub');
      const ssceRequiredSubjects = collectSubjects('.ssce-sub-req');
      const ssceOptionalSubjects = collectSubjects('.ssce-sub-opt');
      const jupebSubjects = collectSubjects('.jupeb-sub');

      // Validate JAMB subjects
      if (chkJamb.checked && jambSubjects.length !== 3) {
        alert('Please fill in all three additional JAMB subjects.');
        return;
      }

      // Validate SSCE subjects
      if (
        chkSsce.checked &&
        ssceRequiredSubjects.length !== 6
      ) {
        alert('Please fill in all six required additional SSCE subjects.');
        return;
      }

      // Validate JUPEB subjects
      if (chkJupeb.checked && jupebSubjects.length !== 3) {
        alert('Please fill in all three JUPEB subjects.');
        return;
      }

      const selectedPlan = SUBSCRIPTION_PLANS[subscriptionPlan];

      // Build registration object
      const studentData = {
        firstName: document.getElementById('firstName').value.trim(),
        surname: document.getElementById('surname').value.trim(),
        dob: document.getElementById('dob').value,

        studentPhone:
          document.getElementById('studentPhone').value.trim(),

        studentEmail:
          document.getElementById('studentEmail').value.trim(),

        parentPhone1:
          document.getElementById('parentPhone1').value.trim(),

        parentPhone2:
          document.getElementById('parentPhone2').value.trim(),

        parentEmail1:
          document.getElementById('parentEmail1').value.trim(),

        parentEmail2:
          document.getElementById('parentEmail2').value.trim(),

        // Department
        department: department,

        // Subscription
        subscriptionPlan: subscriptionPlan,
        subscriptionLabel: selectedPlan.label,
        subscriptionMonths: selectedPlan.months,
        subscriptionAmount: selectedPlan.amount,

        // Selected examinations
        examTypes: [
          ...(chkJamb.checked ? ['JAMB'] : []),
          ...(chkSsce.checked ? ['SSCE'] : []),
          ...(chkJupeb.checked ? ['JUPEB'] : [])
        ],

        // Subjects for each examination
        subjects: {
          JAMB: chkJamb.checked
            ? ['English Language', ...jambSubjects]
            : [],

          SSCE: chkSsce.checked
            ? [
                'English Language',
                'Mathematics',
                ...ssceRequiredSubjects,
                ...ssceOptionalSubjects
              ]
            : [],

          JUPEB: chkJupeb.checked
            ? jupebSubjects
            : []
        },

        registrationDate: new Date().toISOString()
      };

      // Save data for Page 3
      try {
        localStorage.setItem(
          'flexiStudentRegistration',
          JSON.stringify(studentData)
        );
      } catch (error) {
        console.error('Registration storage error:', error);

        alert(
          'Your registration could not be saved in this browser. ' +
          'Please check your browser storage and try again.'
        );

        return;
      }

      // Prevent duplicate clicks while navigating
      submitButton.disabled = true;
      submitButton.textContent = 'Proceeding to Page 3...';

      // Open Page 3
      window.location.href = 'page3.php';
    });
  </script>

</body>
</html>
