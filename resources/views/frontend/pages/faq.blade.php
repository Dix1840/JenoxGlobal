@extends('frontend.layouts.app')

@section('title', 'FAQ - JenoxGlobal')

@section('content')
<!-- FAQ Banner -->
<section class="page-banner animate-on-scroll">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <p>Find answers to common questions about our products and services</p>
    </div>
</section>

<!-- FAQ Section -->
<section class="section animate-on-scroll">
    <div class="container">
        <!-- Category Tabs -->
        <div class="row mb-4">
            <div class="col-12">
                <ul class="nav nav-pills" id="faqTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" id="general-tab" data-bs-toggle="pill" data-bs-target="#general" type="button">
                            General
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="products-tab" data-bs-toggle="pill" data-bs-target="#products" type="button">
                            Products
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="shipping-tab" data-bs-toggle="pill" data-bs-target="#shipping" type="button">
                            Shipping
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="payments-tab" data-bs-toggle="pill" data-bs-target="#payments" type="button">
                            Payments
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" id="documentation-tab" data-bs-toggle="pill" data-bs-target="#documentation" type="button">
                            Documentation
                        </button>
                    </li>
                </ul>
            </div>
        </div>

        <!-- FAQ Content -->
        <div class="tab-content" id="faqTabsContent">
            <!-- General FAQs -->
            <div class="tab-pane fade show active" id="general">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="generalAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#gen1">
                                        What products do you export?
                                    </button>
                                </h2>
                                <div id="gen1" class="accordion-collapse collapse show" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        We specialize in exporting premium quality rice (Basmati and Non-Basmati varieties) and lead products (lead ore, lead ingots, and lead alloys) to international markets. Our rice products include 1121 Basmati, Pusa Basmati, Long Grain, Parboiled, and Brown Rice. Our lead products include Lead Ingots (99.97% pure), Lead Ore (Galena), Lead Alloys, and Lead Scrap.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen2">
                                        Which countries do you export to?
                                    </button>
                                </h2>
                                <div id="gen2" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        We export to over 50 countries across Asia, Europe, Middle East, Africa, and America. Key markets include UAE, Saudi Arabia, India, USA, UK, Germany, Canada, Australia, Nigeria, Egypt, Indonesia, and Brazil. We have established strong logistics networks to ensure timely delivery to all destinations.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen3">
                                        How long have you been in business?
                                    </button>
                                </h2>
                                <div id="gen3" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        JenoxGlobal has been in the export business for over 15 years. Since our establishment in 2008, we have grown from a small trading company to a leading international exporter serving clients across the globe. Our experience and expertise in international trade ensure reliable and professional service.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gen4">
                                        Are you a certified exporter?
                                    </button>
                                </h2>
                                <div id="gen4" class="accordion-collapse collapse" data-bs-parent="#generalAccordion">
                                    <div class="accordion-body">
                                        Yes, we hold multiple international certifications including ISO 9001:2015 (Quality Management), ISO 22000:2018 (Food Safety), FSSAI License, APEDA Registration, Export License, and SGS/Intertek certifications. These certifications ensure our products meet international quality and safety standards.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Products FAQs -->
            <div class="tab-pane fade" id="products">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="productsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#prod1">
                                        What is your Minimum Order Quantity (MOQ)?
                                    </button>
                                </h2>
                                <div id="prod1" class="accordion-collapse collapse show" data-bs-parent="#productsAccordion">
                                    <div class="accordion-body">
                                        Our MOQ varies by product. For rice products, the minimum order is typically 20 metric tons. For lead products, minimum order starts from 10 metric tons. However, we can accommodate smaller orders for first-time buyers or sample orders. Contact us for specific requirements and flexible options.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod2">
                                        Can I request product samples?
                                    </button>
                                </h2>
                                <div id="prod2" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                    <div class="accordion-body">
                                        Yes, we provide product samples for qualified buyers. Sample costs are typically refundable upon placing a bulk order. Samples are shipped via courier at the buyer's expense. Please contact our sales team with your sample requirements, and we'll arrange sample delivery to your location.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod3">
                                        What rice varieties do you offer?
                                    </button>
                                </h2>
                                <div id="prod3" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                    <div class="accordion-body">
                                        We offer a wide range of rice varieties including 1121 Basmati (extra long grain), Pusa Basmati, Long Grain Non-Basmati, Parboiled Rice, Brown Rice, and Sella Rice. Each variety is available in different grades and can be customized according to your specifications including grain length, broken percentage, and aging period.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod4">
                                        What lead products do you export?
                                    </button>
                                </h2>
                                <div id="prod4" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                    <div class="accordion-body">
                                        Our lead product portfolio includes Lead Ingots (99.97% purity), Lead Ore (Galena with high lead content), Lead Alloys (custom compositions for specific applications), and Lead Scrap (recycled lead). All products meet international quality standards and come with proper certification.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#prod5">
                                        Do you offer private labeling?
                                    </button>
                                </h2>
                                <div id="prod5" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                    <div class="accordion-body">
                                        Yes, we offer private labeling and custom branding options for bulk orders. We can package products with your brand name, logo, and specifications. Minimum order quantities apply for private labeling. Contact us for more details about customization options.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shipping FAQs -->
            <div class="tab-pane fade" id="shipping">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="shippingAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ship1">
                                        What shipping options do you offer?
                                    </button>
                                </h2>
                                <div id="ship1" class="accordion-collapse collapse show" data-bs-parent="#shippingAccordion">
                                    <div class="accordion-body">
                                        We offer flexible shipping options including sea freight (FCL and LCL), air freight for urgent orders, and multimodal transport. We work with reputable shipping lines and logistics partners to ensure safe and timely delivery. Shipping method depends on your requirements, budget, and urgency.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ship2">
                                        What are your delivery times?
                                    </button>
                                </h2>
                                <div id="ship2" class="accordion-collapse collapse" data-bs-parent="#shippingAccordion">
                                    <div class="accordion-body">
                                        Delivery times vary based on destination and shipping method. Sea freight typically takes 15-30 days depending on the port of destination. Air freight takes 3-7 days. We provide estimated delivery times at the time of quotation and keep you updated throughout the shipping process.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ship3">
                                        Do you ship to my country?
                                    </button>
                                </h2>
                                <div id="ship3" class="accordion-collapse collapse" data-bs-parent="#shippingAccordion">
                                    <div class="accordion-body">
                                        We ship to most countries worldwide. Our primary markets include Middle East, Asia, Europe, Africa, and the Americas. If you're unsure about shipping to your specific country, please contact us with your location, and we'll confirm availability and provide shipping options.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ship4">
                                        How is cargo insured during transit?
                                    </button>
                                </h2>
                                <div id="ship4" class="accordion-collapse collapse" data-bs-parent="#shippingAccordion">
                                    <div class="accordion-body">
                                        We offer cargo insurance options to protect your shipment during transit. Insurance can be arranged based on your requirements and the value of the goods. We work with leading insurance providers to ensure comprehensive coverage for your cargo.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Payments FAQs -->
            <div class="tab-pane fade" id="payments">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="paymentsAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#pay1">
                                        What are your payment terms?
                                    </button>
                                </h2>
                                <div id="pay1" class="accordion-collapse collapse show" data-bs-parent="#paymentsAccordion">
                                    <div class="accordion-body">
                                        We offer flexible payment terms including Letter of Credit (LC) - both irrevocable and confirmed, Telegraphic Transfer (TT) - advance payment or against documents, Documentary Collection (DC), and for established clients, we may offer credit terms. Payment terms are finalized based on order value, client relationship, and mutual agreement.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pay2">
                                        What currencies do you accept?
                                    </button>
                                </h2>
                                <div id="pay2" class="accordion-collapse collapse" data-bs-parent="#paymentsAccordion">
                                    <div class="accordion-body">
                                        We accept payments in major international currencies including USD, EUR, GBP, AED, and INR. Currency selection depends on your preference and banking arrangements. Exchange rates are applied at the prevailing market rate on the date of transaction.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pay3">
                                        Is advance payment required?
                                    </button>
                                </h2>
                                <div id="pay3" class="accordion-collapse collapse" data-bs-parent="#paymentsAccordion">
                                    <div class="accordion-body">
                                        For new clients, we typically require an advance payment (usually 30-50%) with the balance payable against shipping documents. For established clients with good payment history, we may offer more favorable terms. The exact payment structure is discussed and agreed upon during the quotation process.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#pay4">
                                        What Incoterms do you offer?
                                    </button>
                                </h2>
                                <div id="pay4" class="accordion-collapse collapse" data-bs-parent="#paymentsAccordion">
                                    <div class="accordion-body">
                                        We offer various Incoterms including FOB (Free on Board), CIF (Cost, Insurance & Freight), CFR (Cost & Freight), EXW (Ex Works), DAP (Delivered at Place), and DDP (Delivered Duty Paid). The choice of Incoterm affects pricing and responsibilities, which we discuss during quotation to ensure it meets your requirements.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Documentation FAQs -->
            <div class="tab-pane fade" id="documentation">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="accordion" id="documentationAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#doc1">
                                        What export documents do you provide?
                                    </button>
                                </h2>
                                <div id="doc1" class="accordion-collapse collapse show" data-bs-parent="#documentationAccordion">
                                    <div class="accordion-body">
                                        We provide complete export documentation including Certificate of Origin, Commercial Invoice, Packing List, Bill of Lading/Air Waybill, Phytosanitary Certificate (for agricultural products), Quality Certificate (SGS/Intertek), Fumigation Certificate, and any other documents required by the destination country.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doc2">
                                        How can I request a quotation?
                                    </button>
                                </h2>
                                <div id="doc2" class="accordion-collapse collapse" data-bs-parent="#documentationAccordion">
                                    <div class="accordion-body">
                                        You can request a quotation by filling out our contact form on the website, sending an email to sales@jenoxglobal.com, or calling us directly. Please provide product details, quantity, quality specifications, destination port, preferred Incoterm, and any other relevant information for accurate pricing.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doc3">
                                        Do you provide HS codes?
                                    </button>
                                </h2>
                                <div id="doc3" class="accordion-collapse collapse" data-bs-parent="#documentationAccordion">
                                    <div class="accordion-body">
                                        Yes, we provide HS (Harmonized System) codes for all our products. For rice products, HS codes are typically 1006.30 (Basmati) and 1006.20 (Non-Basmati). For lead products, HS codes include 7801.10 (Lead Ingots) and 7801.91 (Lead Ore). These codes are provided on commercial invoices for customs purposes.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#doc4">
                                        Can you provide certificates of origin?
                                    </button>
                                </h2>
                                <div id="doc4" class="accordion-collapse collapse" data-bs-parent="#documentationAccordion">
                                    <div class="accordion-body">
                                        Yes, we provide Certificates of Origin issued by the Chamber of Commerce. These certificates are essential for customs clearance and may qualify for preferential duty rates under trade agreements. We ensure all certificates are properly authenticated and comply with destination country requirements.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Still Have Questions -->
<section class="section" style="background-color: var(--light-gray);">
    <div class="container">
        <div class="section-title">
            <h2>Still Have Questions?</h2>
            <p>Can't find the answer you're looking for? Contact us directly</p>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="contact-info-icon mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-envelope" style="font-size: 2rem;"></i>
                    </div>
                    <h4>Email Us</h4>
                    <p class="text-muted">info@jenoxglobal.com</p>
                    <p class="text-muted">sales@jenoxglobal.com</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="contact-info-icon mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-telephone" style="font-size: 2rem;"></i>
                    </div>
                    <h4>Call Us</h4>
                    <p class="text-muted">+971 4 555 5555</p>
                    <p class="text-muted">+1 (234) 567-890</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="contact-info-icon mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="bi bi-whatsapp" style="font-size: 2rem;"></i>
                    </div>
                    <h4>WhatsApp</h4>
                    <p class="text-muted">+971 4 555 5555</p>
                    <p class="text-muted">Available 9 AM - 6 PM</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="{{ url('contact') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-file-earmark-text"></i> Contact Us
            </a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="contact-cta">
    <div class="container">
        <h2 class="cta-title">Need More Information?</h2>
        <p class="lead">Our team is ready to answer all your questions</p>
        <div class="cta-buttons">
            <a href="{{ url('contact') }}" class="btn btn-cta-white">
                <i class="bi bi-file-earmark-text"></i> Request Quote
            </a>
            <a href="{{ url('products') }}" class="btn btn-cta-outline">
                <i class="bi bi-box-seam"></i> Browse Products
            </a>
        </div>
    </div>
</section>
@endsection
