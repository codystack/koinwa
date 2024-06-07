<?php
$page = "FAQ";
include "./components/header.php";
include "./components/navbar.php";
?>

    <main id="content" role="main">
        <div class="bg-primary-dark overflow-hidden">
            <div class="container position-relative content-space-1">
                <div class="w-lg-65 text-center mx-lg-auto">
                    <h1 class="h2 text-white mb-3">Frequently Asked Questions</h1>
                </div>

                <div class="position-absolute" style="top: -6rem; left: -6rem;">
                    <img src="assets/svg/components/shape-1-soft-light.svg" alt="SVG" width="500" style="width: 12rem;">
                </div>
                <div class="position-absolute" style="bottom: -6rem; right: -7rem;">
                    <img src="assets/svg/components/shape-7-soft-light.svg" alt="SVG" width="250">
                </div>
            </div>
        </div>

        <div class="container content-space-1 content-space-md-3">

            <div class="w-lg-85 mx-lg-auto mb-7">
                <div class="accordion accordion-flush" id="accordionFAQ">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <a class="accordion-button" role="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            What types of cross-border payment services do you offer?
                            </a>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            We specialize in facilitating secure and efficient B2B (Business to Business) payments and settlements across international borders.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How long does it take to process a cross-border payment?
                            </a>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            Our typical processing time for cross-border payments ranges from 12 to 24 hours, depending on various factors such as the destination country and the specific transaction details.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            What currencies do you support for cross-border transactions?
                            </a>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            We support a wide range of currencies to accommodate diverse business needs. Please contact us for specific currency inquiries.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            How can I initiate a cross-border payment with your company?
                            </a>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            You can initiate a payment through our secure online platform or by contacting our dedicated customer service team.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            How do you ensure the security of cross-border transactions?
                            </a>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            Yes, we charge competitive fees for our services. Fees may vary based on transaction amounts and specific requirements.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingSix">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Do you charge fees for cross-border payments?
                            </a>
                        </div>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            We adhere to rigorous AML and KYB principles to verify all parties involved in transactions, ensuring the utmost security and compliance.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <div class="accordion-header" id="headingSeven">
                            <a class="accordion-button collapsed" role="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Can I track the status of my cross-border payment?
                            </a>
                        </div>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                            Yes, you can track your payment status through our online platform or by contacting our customer support team.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <p class="mb-0">Still have questions?</p>
                <a class="link" href="contact">Contact our friendly support team <i class="bi-chevron-right small ms-1"></i></a>
            </div>
        </div>
    </main>

<?php include "./components/footer.php"; ?>