<?php   include_once('./includes/headerNav.php'); ?>
<div class="overlay" data-overlay></div>
<!--
    - HEADER
  -->
<header>
  <!-- top head action, search etc in php -->
  <!-- inc/topheadactions.php -->
  <?php require_once './includes/topheadactions.php'; ?>
  <!-- mobile nav in php -->
  <!-- inc/mobilenav.php -->
  <?php require_once './includes/mobilenav.php'; ?>

    <style>
        * {
    font-family: Arial, Helvetica, sans-serif;
    box-sizing: border-box;

}
:root{
    --main-maroon: #CE5959;
    --deep-maroon: #89375F;
}

.appointments-section {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 20px;
}

input {
    border: none;
    outline: none;
}

.appointment-heading {
    text-align: center;
}

.appointment-head {
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 0;
    color: var( --main-maroon);
}

.appointment-line {
    width: 160px;
    height: 3px;
    border-radius: 10px;
    background-color: var( --main-maroon);
    display: inline-block;
}

.edit-detail-field .child-detail-inner {
    width: 100%;
    display: flex;
    margin-top: 10px;
    justify-content: space-between;
    margin-left: auto;
    margin-right: auto;
}

.Add-child-section {
    margin-top: 40px;
}

.Add-child-section .child-heading-t {
    font-size: 25px;
    font-weight: 700;
    color: var( --main-maroon);
}

.Add-child-section .child-fields1 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields1 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields1::before {
    position: absolute;
    content: "First Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields1 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields3 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields3 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields3::before {
    position: absolute;
    content: "Last Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields4 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields4::before {
    position: absolute;
    content: "House Number or Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields4 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields5 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields5::before {
    position: absolute;
    content: "Street or Road";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields5 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields6 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields6::before {
    position: absolute;
    content: "Town or City";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields6 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields7 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields7::before {
    position: absolute;
    content: "Post Code";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields7 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields8 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields8::before {
    position: absolute;
    content: "Contact Number";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields8 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .child-fields9 {
    width: 49%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .child-fields9::before {
    position: absolute;
    content: "Email Address";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-fields9 input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    background-color: transparent;
}

.Add-child-section .Address-field {
    width: 100%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
}

.Add-child-section .Address-field input {
    color: #000000;
    font-weight: 700;
    width: 100%;
    height: 100%;
}

.Add-child-section .Address-field::before {
    position: absolute;
    content: "Country Name";
    top: -10px;
    background-image: linear-gradient(#FFFCF6, #FFFFFF);
    padding-left: 4px;
    padding-right: 4px;
    color: var( --main-maroon);
    font-weight: 600;
    font-size: 13px;
}

.Add-child-section .child-dob p {
    font-size: 25px;
    font-weight: 700;
    color: var( --main-maroon);
}

.Add-child-section .dob-fields {
    margin-top: 20px;
    width: 60%;
    height: 55px;
    border: 1px solid var( --main-maroon);
    border-radius: 5px;
    margin-bottom: 30px;
    padding: 15px;
    background-color: #FFFFFF;
    padding-right: 30px;
    position: relative;
    box-shadow: 2px 2px 2px rgb(185, 184, 184);
    display: flex;
    justify-content: space-between;
}

.Add-child-section .dob-fields span svg {
    width: 25px;
    height: 25px;
    margin-left: auto;
}

.Add-child-section .dob-fields input {
    color: #000000;
    font-weight: 700;
    width: 80%;
    background-color: transparent;
}

.child-register-btn {
    padding-top: 5px;
}

.child-register-btn p {
    width: 550px;
    height: 60px;
    background-color: var( --main-maroon);
    box-shadow: 0px 0px 4px #615f5f;
    line-height: 60px;
    color: #FFFFFF;
    margin-left: auto;
    border-radius: 8px;
    text-align: center;
    cursor: pointer;
    font-size: 19px;
    font-weight: 600;
}

.Add-child-section .Address-field textarea {
    display: none;
}

@media screen and (max-width: 794px) {


    .child-register-btn p {
        width: 100%;
    }

    .edit-detail-field .child-heading-t {
        margin-bottom: 25px;
    }

    .edit-detail-field .child-detail-inner {
        width: 100%;
        display: flex;
        flex-direction: column;
        margin-top: 0px;
        justify-content: unset;
    }

    .child-fields,
    .child-fields1,
    .child-fields3 {
        width: 100% !important;
    }

    .dob-fields {
        width: 100% !important;
    }
}

@media screen and (max-width: 629px) {
    .Add-child-section {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }
}
@media screen and (max-width: 409px) {
    .Add-child-section {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }
}

@media screen and (max-width:628px) {
    .appointments-section {
        width: 100% !important;

    }

}

.error-ms {
    color: var( --main-maroon);
    margin-bottom: 10px;
}
.popup {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      justify-content: center;
      align-items: center;
    }

    .popup-content {
      background-color: white;
      padding: 40px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
      max-width: 400px;
    }

    .popup-content h2 {
      color: #28a745;
      margin-bottom: 10px;
    }

    .popup-content button {
      padding: 10px 20px;
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 20px;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .popup-content button:hover {
      background-color: #218838;
    }
    </style>
</header>

<body>
    <div class="appointments-section">
        <div class="appointment-heading">
            <p class="appointment-head">CheckOut</p>
            <span class="appointment-line"></span>
        </div>
                   
        <div class="inner-appointment">
            <section class="edit-detail-field">
                <div class="Add-child-section">
                    <div class="child-detail-inner">
                        <div class="child-fields1">
                            <input type="text" style="color: #676767;" placeholder="First Name">
                        </div>
                        <div class="child-fields3">
                            <input type="text" style="color: #676767;" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="child-detail-inner">
                        <div class="child-fields child-fields4">
                            <input type="text" placeholder="P-134">
                        </div>
                        <div class="child-fields child-fields5">
                            <input type="text" placeholder="A5">
                        </div>
                    </div>
                    <div class="child-detail-inner">
                        <div class="child-fields child-fields6">
                            <input type="text" placeholder="Manchester">
                        </div>
                        <div class="child-fields child-fields7">
                            <input type="text" placeholder="38000">
                        </div>
                    </div>
                    <div class="child-detail-inner">
                        <div class="child-fields Address-field">
                            <input type="text" style="color: #676767;" placeholder="United Kingdom">
                        </div>
                    </div>
                    <div class="child-detail-inner">
                        <div class="child-fields child-fields8">
                            <input type="text" placeholder="+1 0000-0000-0000">
                        </div>
                        <div class="child-fields child-fields9">
                            <input type="text" placeholder="example@email.com">
                        </div>
                    </div>
                    
                    <!-- Updated the form to handle button click without submission -->
                    <button type="button" class="submit-btn" id="payment-button">Proceed to Payment</button>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal Popup (Initially Hidden) -->
    <!-- Modal Popup (Initially Hidden) -->
<div id="payment-modal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 1000;">
    <div style="background-color: white; padding: 40px; border-radius: 8px; text-align: center; width: 400px; height: 220px;">
        <h2>Payment Successful and order placed..<br> THANK YOU FOR ORDERING!</h2>
      <center>  <button id="close-modal" style="background-color:rgb(172, 76, 175); color: white; padding: 12px 25px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">Close</button></center>
    </div>
</div>

    <script>
        // Selecting the button element
        const paymentButton = document.getElementById('payment-button');
        const modal = document.getElementById('payment-modal');
        const closeModal = document.getElementById('close-modal');

        // Event listener for button click
        paymentButton.addEventListener('click', function() {
            let fields = document.querySelectorAll('.child-fields input');
            let allFilled = true;

            // Loop through fields to check if any are empty
            for (let i = 0; i < fields.length; i++) {
                if (fields[i].value === '') {
                    allFilled = false;
                    break;
                }
            }

            // If all fields are filled, show the payment success popup
            if (allFilled) {
                modal.style.display = 'flex';
            } else {
                alert('Please fill all fields.');
            }
        });

        // Close the modal when the close button is clicked
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    </script>
</body>









<?php require_once './includes/footer.php'; ?>