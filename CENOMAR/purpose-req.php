<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="birth-cert.css">
   <link rel="icon" href="android-chrome-192x192.png">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
   <title>eSertipiko Marikina: Online Registration for Civil Documents</title>
</head>
<body>
   <!-- Header -->
   <div class="sticky-header">
      <section class="header">
         <div class="logo">
            <h1><a href="index.php">eSertipiko Marikina</a></h1>
         </div>
         <div class="navigator">
            <nav>
               <ul>
                  <li><a href="check-status.php" class="select">Check Status</a></li>
                  <li><a href="payment-method.php" class="select">Payment Method</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle select">Civil Registry Documents</a>
                     <div class="dropdown-box">
                        <a href="#">Birth Certificate</a>
                        <a href="#">Marriage Certificate</a>
                        <a href="#">CENOMAR</a>
                        <a href="#">Death Certificate</a>
                     </div>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle select">Resources</a>
                     <div class="dropdown-box">
                        <a href="#">News & Announcement</a>
                        <a href="#">Delivery Reminder</a>
                        <a href="#">Contacts</a>
                     </div>
                  </li>
               </ul>
            </nav>
         </div>
      </section>
   </div>

   <!-- Main Form Section -->
   <div class="birth-container">
      <div class="form-title">
         <h3>Please provide the following information below</h3>
      </div>
      <form action="delivery-details.php" method="post">
         <div class="form-p">
            <p>Purpose of Request</p>
         </div>
         <div class="form-group-purpose">
            <label class="input-label">Your purpose for this request</label>
            <select class="input-value-purpose" id="selectPurpose" name="selectPurpose">
               <option disabled selected>-Select Option-</option>
               <option>Marriage Requirement</option>
               <option>Marriage Abroad</option>
               <option>Fiancé/Fiancée Visa Application</option>
               <option>Spousal Visa Application</option>
               <option>Immigration Requirement</option>
               <option>Legal/Court Proceeding</option>
               <option>Annulment or Nullity of Marriage</option>
               <option>Employment Requirement</option>
               <option>Adoption or Child Custody</option>
               <option>Personal Records/Verification</option>
            </select>
         </div>

         <div class="submit-btn-birth">
            <button id="birth-back-btn" type="button" onclick="window.location.href='birth-place.php'">Back</button>
            <button id="purpose-btn" type="submit">Continue</button>
         </div>
      </form>
   </div>

   <script src="purpose.js"></script>
</body>
</html>
